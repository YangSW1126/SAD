<?php

    $userEmail = $_POST['userEmail'];
    $userPassword = $_POST['userPassword'];

    $link=@mysqli_connect('localhost','root','','draft');
    mysqli_set_charset($link, "utf8");

    $SQL = "INSERT INTO `user`(user_email, user_pwd) 
            VALUES('$userEmail', '$userPassword')";

    if(emailTaken($link,$userEmail) !== false){
        header("location:RegistrationPage.php?error=emailTaken");
    }else if(mysqli_query($link,$SQL)){
        echo "<script>alert('註冊成功!返回登入頁面');location.href='../login.php';</script>";
    }

    function emailTaken($link, $userEmail){
        $sql = "SELECT * FROM user WHERE user_email = ?;";
        $stmt = mysqli_stmt_init($link);
        if(!mysqli_stmt_prepare($stmt,$sql)){
            header("location:RegistrationPage.php?error=stmtFailed");
            exit();
        }

        mysqli_stmt_bind_param($stmt, "s", $userEmail);
        mysqli_stmt_execute($stmt);

        $resultData = mysqli_stmt_get_result($stmt);

        if($row = mysqli_fetch_assoc($resultData)){
            mysqli_stmt_close($stmt);
            return $row;
        }else{
            $result = false;
            mysqli_stmt_close($stmt);
            return $result;
        }
    }
?>