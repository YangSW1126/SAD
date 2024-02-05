var imgs = ["img/star.svg","img/star-fill.svg"];

function appliClick(num,userid){
    txt = "a_" + num;
    star = document.getElementById(num);
    star_query = star.src;
    if(star_query.includes("img/star-fill.svg")){
        fetch("functions/removeFromFavorite.php?category=application&id=" + num + "&userid=" + userid);
        star.src = imgs[0];
    }
    if(star_query.includes("img/star.svg")){
        fetch("functions/addToFavorite.php?category=application&id=" + num + "&userid=" + userid);
        star.src = imgs[1];
    }
}

$(document).ready(function(){
    displayApplication();
}); 

$(document).ready(function(){
    displayCondition();
}); 

function displayApplication(){
    $.ajax({
        url : "display/displayApplication.php",
        type: 'post',
        data:{
        },
        success:function(data,status){
            $('#displayApplication').html(data);

        }
    });
}

function displayCondition(){
    $.ajax({
        url : "display/displayCondition.php",
        type: 'post',
        data:{
        },
        success:function(data,status){
            $('#displayCondition').html(data);

        }
    });
}

function editCondition(userId){
    $('#hiddenData').val(userId);

    $.post("functions/editCondition.php",{
        userId:userId,    
    }, 
    function(data,status){
        var conditionData = JSON.parse(data);

        var over65 = conditionData["over65"];
        var test1 = conditionData["test1"];
        var test2 = conditionData["test2"];
        var test3 = conditionData["test3"];

        if(over65 == 1){
            $('#over65').prop("checked", true);
        }else{
            $('#over65').prop("checked", false);
        }

        if(test1 == 1){
            $('#test1').prop("checked", true);
        }else{
            $('#test1').prop("checked", false);
        }

        if(test2 == 1){
            $('#test2').prop("checked", true);
        }else{
            $('#test2').prop("checked", false);
        }

        if(test3 == 1){
            $('#test3').prop("checked", true);
        }else{
            $('#test3').prop("checked", false);
        }
    });

    $('#addConditionModal').modal("show");

}

function saveCondition(userId){
    let over65 = ($("#over65").prop("checked")) ? 1 : 0;
    let test1 = ($("#test1").prop("checked")) ? 1 : 0;
    let test2 = ($("#test2").prop("checked")) ? 1 : 0;
    let test3 = ($("#test3").prop("checked")) ? 1 : 0;

    $.post("functions/saveCondition.php",{
        userId:userId,
        over65:over65,
        test1:test1,
        test2:test2,
        test3:test3
    }, 
    function(data,status){
        $('#addConditionModal').modal('hide');
    });
    displayCondition();
}

function removeCondition(condition, userId){
    $.ajax({
        url: "functions/removeCondition.php",
        type: 'post',
        data:{
            userId:userId,    
            removeCondition:condition
        },
        success:function(data,status){
            displayCondition();

        }
    });
}


function relink(){
    window.location.href = "login.php";
}