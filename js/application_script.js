var conditions = ["年滿65歲", "設籍並實際居住本市", "123", "456"];
var query = [1,1,0,0];

$(document).ready(function(){
}); 

function displayCondition(){
    for(i = 0; i < 4; i++){
        if(query[i] == 1){
            const para = document.createElement("li");
            const node = document.createTextNode(conditions[i]);
            para.appendChild(node);
            const element = document.getElementById("condition-ul");
            element.appendChild(para);
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

//<li class = "condition" id = "0"><button class = "condition-bt" onclick = "removeCondition('0')">─</button>年滿65歲</li>
//<li class = "condition" id = "1"><button class = "condition-bt" onclick = "removeCondition('1')">─</button>設籍並實際居住本市</li>