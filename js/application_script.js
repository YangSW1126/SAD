var conditions = ["年滿65歲", "設籍並實際居住本市", "123", "456"];
var query = [1,1,0,0];

$(document).ready(function(){
    //displayCondition()
}); 

function displayCondition(){
    for(i = 0; i < 4; i++){
        if(query[i] == 1){
            const button = document.createElement("button");
            button.classList.add("condition-bt");
            button.addEventListener('click', function removeCondition(event){
                element.remove();
                query[i] = 0;
              });
            const node = document.createTextNode("─");
            button.appendChild(node);

            const element = document.getElementById("condition-ul");
            element.appendChild(button);

            const li = document.createElement("li");
            li.classList.add("condition");
/*
            const para = document.createElement("li");
            const node = document.createTextNode(conditions[i]);
            para.appendChild(node);
            const element = document.getElementById("condition-ul");
            element.appendChild(para);
            */
        }
    }

}


function removeCondition(condition){
    const element = document.getElementById(condition);
    element.remove();
    query[condition] = 0;
}

function editCondition(){
    $('#addConditionModal').modal('hide');
}

var imgs = ["img/star.svg","img/star-fill.svg"];

function appliClick(num){
    txt = "a_" + num;
    star = document.getElementById(txt);
    star_query = star.src;
    if(star_query.includes("img/star-fill.svg")){
        star.src = imgs[0];
    }
    if(star_query.includes("img/star.svg")){
        star.src = imgs[1];
    }
}




//<li class = "condition" id = "0"><button class = "condition-bt" onclick = "removeCondition('0')">─</button>年滿65歲</li>
//<li class = "condition" id = "1"><button class = "condition-bt" onclick = "removeCondition('1')">─</button>設籍並實際居住本市</li>