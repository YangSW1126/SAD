var imgs = ["img/star.svg","img/star-fill.svg"];

function actClick(num){
    star = document.getElementById(num);
    query = star.src;
    if(query.includes("img/star-fill.svg")){
        star.src = imgs[0];
    }
    if(query.includes("img/star.svg")){
        star.src = imgs[1];
    }
}


function sort(type){
    console.log(type)
}