var imgs = ["img/star.svg","img/star-fill.svg"];
var categorys = ["application","activity","school","elder","hospital"];

function favClick(num, userid, category){
    star = document.getElementById(categorys[category] + num);
    query = star.src;
    if(query.includes("img/star-fill.svg")){
        fetch("functions/removeFromFavorite.php?category=" + categorys[category] + "&id=" + num + "&userid=" + userid); 
        star.src = imgs[0];
    }
    if(query.includes("img/star.svg")){
        fetch("functions/addToFavorite.php?category=" + categorys[category] + "&id=" + num + "&userid=" + userid);  
        star.src = imgs[1];
    }
}


