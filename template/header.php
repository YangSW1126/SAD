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
                        //$li =  "<li class = 'link'><a href = 'functions/logout.php'>".$_SESSION['userEmail']."</a></li>";
                    
                        $li = "<span class='main-menu' onmouseover='switchMenu()' onmouseout='hideMenu()'>".$_SESSION["userEmail"]."<span style='font-size:12px;'> &#9660;</span>
                                    <ul id='SubMenu1' class='sub-menu' style='display:none;'>
                                        <li><a href='functions/logout.php'>登出</a></li>
                                        <li><a href='functions/logout.php'>登出</a></li>
                                        <li><a href='functions/logout.php'>登出</a></li>
                                    </ul>
                                </span>";


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

        