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