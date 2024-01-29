<?php

    $link=@mysqli_connect('localhost','root','','draft');
    mysqli_set_charset($link, "utf8");

    $userId = $_POST['userId'];
    $over65 = $_POST['over65'];
    $test1 = $_POST['test1'];
    $test2 = $_POST['test2'];
    $test3 = $_POST['test3'];

    $sql = "UPDATE `user` SET `over65`='".$over65."',`test1`='".$test1."',`test2`='".$test2."',`test3`='".$test3."' WHERE `user_id`=".$userId;
    $result = mysqli_query($link, $sql);
?>
