<?php
    $category = $_GET["category"];
    $id = $_GET["id"];
    $userid = $_GET["userid"];

    $link = @mysqli_connect('localhost','root','','draft');
    mysqli_set_charset($link, "utf8");
    $sql = "DELETE FROM `favorited_".$category."` WHERE `user_id` =".$userid."&& `category_id` =".$id;
    $result = mysqli_query($link, $sql);
?>
