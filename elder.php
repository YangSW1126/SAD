<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

    <link rel = "stylesheet" href = "css/style_footer.css?v=<?=time()?>">
    <link rel = "stylesheet" href = "css/style_header.css?v=<?=time()?>">
    <link rel = "stylesheet" href = "css/style_elder.css?v=<?=time()?>">

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

    <script src = "js/elder_script.js" defer></script>
    
    <title>Document</title>
    <link rel = "icon" href = "img/icon.png" type = "image/png">
</head>
<body>
    <?php include_once 'template/header.php';?>

    <div class = wrap>
        <div class = "elder-container">

            <table class="content-table">
                <thead>
                <tr>
                    <th class = "table-row">長者資訊</th>
                    <th class = "table-row" width = 15%>加入收藏</th>
                </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><a href="elder_detail.php">聘僱外看家庭可使用長照服務</a></td>
                        <td><button class = "star-bt" onclick = "elderClick(1)"><img class = "star" id = "1" src = "img/star.svg"></button></td>
                    </tr>
                    <tr>
                        <td>長照十年計畫2.0</td>
                        <td><button class = "star-bt" onclick = "elderClick(2)"><img class = "star" id = "2" src = "img/star.svg"></button></td>
                    </tr>
                    <tr>
                        <td>你不只是累了-認識老年衰弱</td>
                        <td><button class = "star-bt" onclick = "elderClick(3)"><img class = "star" id = "3" src = "img/star.svg"></button></td>
                    </tr>
                    <tr>
                        <td>失智照顧服務計畫</td>
                        <td><button class = "star-bt" onclick = "elderClick(4)"><img class = "star" id = "4" src = "img/star.svg"></button></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>


    <?php include_once 'template/footer.php';?>
</body> 
</html>