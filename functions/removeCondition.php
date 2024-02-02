<?php

    if(isset($_POST["userId"]) && isset($_POST["removeCondition"])){

        $link=@mysqli_connect('localhost','root','','draft');
        mysqli_set_charset($link, "utf8");

        $userId = $_POST['userId'];
        $removeCondition = $_POST["removeCondition"];

        $sql = "UPDATE `user` SET `". $removeCondition ."`= 0 WHERE `user_id`=".$userId;
        $result = mysqli_query($link, $sql);
    }

    
?>
