<?php
    $category = $_GET["category"];
    $id = $_GET["id"];
    $userid = $_GET["userid"];

    $link = @mysqli_connect('localhost','root','','draft');
    mysqli_set_charset($link, "utf8");
    $sql = "INSERT INTO `favorited_".$category."`(`user_id`, `category_id`) VALUES (".$userid.",".$id.")";
    $result = mysqli_query($link, $sql);
?>