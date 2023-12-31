var imgs = ["img/star.svg","img/star-fill.svg"];

function hospitalClick(num, userid){
    star = document.getElementById(num);
    query = star.src;
    if(query.includes("img/star-fill.svg")){
        fetch("functions/removeFromFavorite.php?category=hospital&id=" + num + "&userid=" + userid);
        star.src = imgs[0];
    }
    if(query.includes("img/star.svg")){
        fetch("functions/addToFavorite.php?category=hospital&id=" + num + "&userid=" + userid);
        star.src = imgs[1];
    }
}

