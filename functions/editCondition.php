<?php

    $link=@mysqli_connect('localhost','root','','draft');
    mysqli_set_charset($link, "utf8");

    if(isset($_POST['userId'])){
        $userId = $_POST['userId'];
        
        $SQL = "SELECT `over65`, `test1`, `test2`, `test3` FROM `user` WHERE `user_id` = $userId";
        $result = mysqli_query($link, $SQL);
        $response = array(); 
        while($row = mysqli_fetch_assoc($result)){
            $getover65 = $row["over65"];
            $gettest1 = $row["test1"];
            $gettest2 = $row["test2"];
            $gettest3 = $row["test3"];
            $response = $row;
        }
        echo json_encode($response);
    }else{
        $response['status'] = 200;
        $response['message'] = "Not Found";
    } 
?>