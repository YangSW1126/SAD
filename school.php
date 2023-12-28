<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

    <link rel = "stylesheet" href = "css/style_footer.css?v=<?=time()?>">
    <link rel = "stylesheet" href = "css/style_header.css?v=<?=time()?>">
    <link rel = "stylesheet" href = "css/style_school.css?v=<?=time()?>">

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

    <script src = "js/school_script.js" defer></script>
    
    <title>Document</title>
    <link rel = "icon" href = "img/icon.png" type = "image/png">
</head>
<body>
    <?php include_once 'template/header.php';?>

    <div class = wrap>
        <div class = "school-container">

            <table class="content-table">
                <thead>
                <tr>
                    <th class = "table-row">補校資訊</th>
                    <th class = "table-row" width = 12%>交通</th>
                    <th class = "table-row" width = 15%>加入收藏</th>
                </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><a href="school_detail.php">桃園市-112學年度各國中小補校熱烈招生中</a></td>
                        <td><button><a href = "traffic.php"><img src = "img/traffic.png"></a></button></td>
                        <td><button class = "star-bt" onclick = "schoolClick(1)"><img class = "star" id = "1" src = "img/star.svg"></button></td>
                    </tr>
                    <tr>
                        <td>112學年度東門國小附設補校招生公告</td>
                        <td><button><a href = "traffic.php"><img src = "img/traffic.png"></a></button></td>
                        <td><button class = "star-bt" onclick = "schoolClick(2)"><img class = "star" id = "2" src = "img/star.svg"></button></td>
                    </tr>
                    <tr>
                        <td>112學年度西門國小附設補校招生</td>
                        <td><button><a href = "traffic.php"><img src = "img/traffic.png"></a></button></td>
                        <td><button class = "star-bt" onclick = "schoolClick(3)"><img class = "star" id = "3" src = "img/star.svg"></button></td>
                    </tr>
                    <tr>
                        <td>桃園市立大園國民中學附設補校</td>
                        <td><button><a href = "traffic.php"><img src = "img/traffic.png"></a></button></td>
                        <td><button class = "star-bt" onclick = "schoolClick(4)"><img class = "star" id = "4" src = "img/star.svg"></button></td>
                    </tr>
                    <tr>
                        <td>南崁國中補校招生簡章</td>
                        <td><button><a href = "traffic.php"><img src = "img/traffic.png"></a></button></td>
                        <td><button class = "star-bt" onclick = "schoolClick(5)"><img class = "star" id = "5" src = "img/star.svg"></button></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>


    <?php
        include_once 'template/footer.php';
    ?>
</body> 
</html>