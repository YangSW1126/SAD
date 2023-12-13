<?php

    $userEmail = $_POST["userEmail"];
    $userPassword = $_POST["userPassword"];

    $link=@mysqli_connect('localhost','root','','draft');
    mysqli_set_charset($link, "utf8");

    /*
    if($link){
        $SQL = "select * from user";
        echo "正確連接資料庫";
        $result = mysqli_query($link, $SQL);
            while($row = mysqli_fetch_assoc($result)){
                $productId = $row["user_name"];
                echo $productId;

            }
    }
    else {
        echo "不正確連接資料庫</br>" . mysqli_connect_error();
    }
    */

    
/*
    if(rootTaken($link, $userEmail) === false){
        loginUser($link, $userEmail, $userPassword);
    }else{
        loginRoot($link, $userEmail, $userPassword);
    }
*/
    loginUser($link, $userEmail, $userPassword);
    function loginUser($link, $userEmail, $userPassword){
        $emailExist = emailTaken($link, $userEmail);

        if($emailExist === false){
            header("location:Login.php?error=loginFailed");
            exit();
        }

        $passwordDB = $emailExist["user_pwd"];
        //$checkPassword = password_verify($passwordDB,$userPassword);

        if($passwordDB !== $userPassword){
            header("location:Login.php?error=loginFailed23");
            exit();

        }else if($passwordDB === $userPassword){
            session_start();
            $_SESSION["userId"] = $emailExist["user_id"];
            
            $email = explode("@", $emailExist["user_email"]);
            $_SESSION["userEmail"] = $email[0];
            header("location:../index.php");
            exit();
        }
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