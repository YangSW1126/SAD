<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

    <link rel = "stylesheet" href = "css/style_footer.css?v=<?=time()?>">
    <link rel = "stylesheet" href = "css/style_header.css?v=<?=time()?>">
    <link rel = "stylesheet" href = "css/style_application.css?v=<?=time()?>">

    <script src = "js/application_script.js" defer></script>
    
    <title>Document</title>
    <link rel = "icon" href = "img/icon.png" type = "image/png">
</head>
<body>
    <?php include_once 'template/header.php';?>
    <div class = wrap>
        <div class = "condition-container">
            <div class = "condition-title">根據您輸入的條件:</div>
            <div class = "selected-condition">
                <div class = "displayCondition" id = "displayCondition"></div>
                <hr class = "condition-hr">
                <?php 
                    if(isset($_SESSION["userId"])){
                        $button = "<button type = 'button' class = 'btn btn-outline-dark' onclick = 'editCondition(".$_SESSION['userId'].")'>新增條件</button>";
                    }else{
                        $button = "<button type = 'button' class = 'btn btn-outline-dark' onclick = 'relink()' id = 'relink'>登入</button>";
                    }
                    echo $button;
                ?>
            </div>
            <div class = "displayApplication" id = "displayApplication"></div>
        </div>
    </div>

    <div class="modal fade" id="addConditionModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLongTitle">新增/移除條件</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <ul>
                    <li><input type="checkbox" id="over65"><label for="over65">年滿65歲</label></li>
                    <li><input type="checkbox" id="test1"><label for="test1">test1</label></li>
                    <li><input type="checkbox" id="test2"><label for="test2">test2</label></li>
                    <li><input type="checkbox" id="test3"><label for="test3">test3</label></li>
                </ul>
            </div>
            <div class="modal-footer">
                <button type = 'button' class = 'btn btn-secondary' data-dismiss = 'modal'>取消</button>
                <button type = 'button' class = 'btn btn-primary' onclick = "saveCondition(<?php echo $_SESSION['userId']?>)">更新</button>
                <input type = "hidden" id = "hiddenData">
            </div>
          </div>
        </div>
    </div>

    <?php include_once 'template/footer.php';?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>  
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <script crossorigin="anonymous">
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

        function removeCondition(condition){
            var userId = '<?php echo $_SESSION['userId'];?>';
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
    </script>
</body> 
</html>