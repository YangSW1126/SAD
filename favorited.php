<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel = "stylesheet" href = "css/style_footer.css?v=<?=time()?>">
    <link rel = "stylesheet" href = "css/style_header.css?v=<?=time()?>">
    <link rel = "stylesheet" href = "css/style_favorited.css?v=<?=time()?>">

    <script src = "js/favorites_script.js" defer></script>




    <title>Document</title>
    
</head>
<body>
    <?php
        include_once 'template/header.php';
    ?>

    <table class="content-table">
        <thead>
          <tr>
            <th class = "table-row" width = 8%></th>
            <th class = "table-row">收藏項目</th>
            <th class = "table-row" width = 15%>編輯收藏</th>
          </tr>
        </thead>
        <tbody>
            <tr>
                <td><img class = "img-type" src = "img\doc.svg"></td>
                <td>老人居家生活補助</td>
                <td><button class = "star-bt" onclick = "favClick(1)"><img class = "star" id = "1" src = "img/star-fill.svg"></button></td>
            </tr>
            <tr>
                <td><img class = "img-type" src = "img\activity.svg"></td>
                <td>「你的，我的，17歳--112年高雄市長青學苑聯合成果展」</td>
                <td><button class = "star-bt" onclick = "favClick(2)"><img class = "star" id = "2" src = "img/star-fill.svg"></button></td>
            </tr>
            <tr>
                <td><img class = "img-type" src = "img\activity.svg"></td>
                <td>尚和歌仔戲劇團 《佈局者。韓信的棋盤》</td>
                <td><button class = "star-bt" onclick = "favClick(3)"><img class = "star" id = "3" src = "img/star-fill.svg"></button></td>
            </tr>
            <tr>
                <td><img class = "img-type" src = "img\hospital.svg"></td>
                <td>112年公費流感疫苗接種-林園區建佑路院</td>
                <td><button class = "star-bt" onclick = "favClick(4)"><img class = "star" id = "4" src = "img/star-fill.svg"></button></td>
            </tr>
            <tr>
                <td><img class = "img-type" src = "img\book.svg"></td>
                <td>林中補校林中補校招生中</td>
                <td><button class = "star-bt" onclick = "favClick(5)"><img class = "star" id = "5" src = "img/star-fill.svg"></button></td>
            </tr>
        </tbody>
    </table>

    <?php
        include_once 'template/footer.php';
    ?>
</body> 
</html>