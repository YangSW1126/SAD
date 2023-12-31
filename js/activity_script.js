var imgs = ["img/star.svg","img/star-fill.svg"];

function actClick(num,userid){
    star = document.getElementById(num);
    query = star.src;
    if(query.includes("img/star-fill.svg")){
        fetch("functions/removeFromFavorite.php?category=activity&id=" + num + "&userid=" + userid);
        console.log("functions/removeFromFavorite.php?category=activity&id=" + num + "&userid=" + userid);
        star.src = imgs[0];
        
    }
    if(query.includes("img/star.svg")){
        fetch("functions/addToFavorite.php?category=activity&id=" + num + "&userid=" + userid);
        star.src = imgs[1];
    }
}


function sort(type){
    console.log(type)
}