<div class = "header-bg">
    <div class = "header-container">
        <div><a href = "index.php" target="_blank" class = "icon-link"><img class = "icon" src = "img/icon.png"><a></div>
        <div class = "logo-name"><a href = "https://www.facebook.com/profile.php?id=100090699375511" target="_blank" class = "icon-link"></a></div>
        <div class = "header-row">
            <ul>
                <li class = "link"><a href = "index.php">首頁</a></li>
                <li class = "link"><a href = "https://www.facebook.com/profile.php?id=100090699375511" target="_blank">語音AI</a></li>
                <li class = "link"><a href = "https://www.facebook.com/profile.php?id=100090699375511">個人資料</a></li>
                <li class = "link"><a href = "https://www.facebook.com/profile.php?id=100090699375511">設定</a></li>
                <?php 
                    session_start();

                    if(isset($_SESSION["userId"])){
                        $li =  "<div class='header-dropdown'>
                                    <button class='dropbtn'>" .$_SESSION['userEmail']. "</button>
                                    <div class='dropdown-menu'>
                                        <a href='functions/logout.php'>登出</a>
                                        <a href='functions/logout.php'>登出</a>
                                    </div>
                                </div>";
                    
                        echo $li;
                    }
                    else{
                        $li = "<li class = 'link'><a href = 'login.php'>登入</a></li>";
                        echo $li;
                    }
                    
                ?>
            </ul>
        </div>
    </div>
</div>

        