var imgs = ["img/star.svg","img/star-fill.svg"];

function favClick(num){
    star = document.getElementById(num);
    query = star.src;
    if(query.includes("img/star-fill.svg")){
        star.src = imgs[0];
    }
    if(query.includes("img/star.svg")){
        star.src = imgs[1];
    }
}


