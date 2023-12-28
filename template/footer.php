<?php 
    $link = @mysqli_connect('localhost','root','','draft');
    mysqli_set_charset($link, "utf8");
    $sql = "SELECT counts FROM `visitors`";
    $result = mysqli_query($link, $sql);
    $row = mysqli_fetch_assoc($result);
    $visitor_count = $row["counts"];
    
    $sql_add = "UPDATE `visitors` SET `counts`=" . $visitor_count + 1;
    $result = mysqli_query($link, $sql_add);
?>

<div class="footer">
    <div class="footer_container">
        <div class="footer-col">
            <h4>用戶協助</h4>
            <ul>
                <li><a href="https://www.facebook.com/profile.php?id=100090699375511">幫助中心</a></li>
                <li><a href="https://www.facebook.com/profile.php?id=100090699375511">Q&A</a></li>
                <li><a href="https://www.facebook.com/profile.php?id=100090699375511">隱私權宣告</a></li>
                <li><a href="https://www.facebook.com/profile.php?id=100090699375511">網站安全政策</a></li>
            </ul>
        </div>
        <div class="footer-col">
            <h4>用戶須知</h4>
            <ul>
                <li><a href="https://www.facebook.com/profile.php?id=100090699375511">防詐騙宣導</a></li>
                <li><a href="https://www.facebook.com/profile.php?id=100090699375511">法律聲明</a></li>
                <li><a href="https://www.facebook.com/profile.php?id=100090699375511">隱私權政策</a></li>
                <li><a href="https://www.facebook.com/profile.php?id=100090699375511">Cookie</a></li>
            </ul>
        </div>
        <div class="footer-col">
            <h4>關於我們</h4>
            <ul>
                <li><a href="https://www.facebook.com/profile.php?id=100090699375511">FaceBook</a></li>
                <li><a href="https://www.facebook.com/profile.php?id=100090699375511">Twitter</a></li>
                <li><a href="https://www.facebook.com/profile.php?id=100090699375511">Instagram</a></li>
                <li><a href="https://www.facebook.com/profile.php?id=100090699375511">Line</a></li>
            </ul>
        </div>

        <div class="footer-col">
            <h4>我們的理念</h4>
                123
        </div>
    </div>

    <div class = "footer-description">
        <ul>
            <li>建議瀏覽器：Chrome，Firefox，IE10.0以上版本 (螢幕最佳顯示效果為1920*1080)</li>
            <li>瀏覽人數: <?php echo $visitor_count;?></li>
            <li>更新日期 2023-12-27</li>
        </ul>
    </div>
</div>    