<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

    <link rel = "stylesheet" href = "css/style_footer.css?v=<?=time()?>">
    <link rel = "stylesheet" href = "css/style_header.css?v=<?=time()?>">
    <link rel = "stylesheet" href = "css/style_hospital.css?v=<?=time()?>">

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

    <script src = "js/hospital_script.js" defer></script>
    
    <title>Document</title>
    <link rel = "icon" href = "img/icon.png" type = "image/png">
</head>
<body>
    <?php include_once 'template/header.php';?>

    <div class = wrap>
        <div class = "hospital-container">

            <table class="content-table">
                <thead>
                <tr>
                    <th class = "table-row">醫療資訊</th>
                    <th class = "table-row" width = 12%>交通</th>
                    <th class = "table-row" width = 15%>加入收藏</th>
                </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><a href="hospital_detail.php">112年10月2日起高雄市流感疫苗開打了囉-林園區建佑醫院</a></td>
                        <td><button><a href = "traffic.php"><img src = "img/traffic.png"></a></button></td>
                        <td><button class = "star-bt" onclick = "hospitalClick(1)"><img class = "star" id = "1" src = "img/star.svg"></button></td>
                    </tr>
                    <tr>
                        <td>112年12月楠梓區衛生所社區癌症篩檢服務預定表</td>
                        <td><button><a href = "traffic.php"><img src = "img/traffic.png"></a></button></td>
                        <td><button class = "star-bt" onclick = "hospitalClick(2)"><img class = "star" id = "2" src = "img/star.svg"></button></td>
                    </tr>
                    <tr>
                        <td>「公費肺癌篩檢」開辦囉！</td>
                        <td><button><a href = "traffic.php"><img src = "img/traffic.png"></a></button></td>
                        <td><button class = "star-bt" onclick = "hospitalClick(3)"><img class = "star" id = "3" src = "img/star.svg"></button></td>
                    </tr>
                    <tr>
                        <td>COVID-19合約醫療院所隨到隨打名單</td>
                        <td><button><a href = "traffic.php"><img src = "img/traffic.png"></a></button></td>
                        <td><button class = "star-bt" onclick = "hospitalClick(4)"><img class = "star" id = "4" src = "img/star.svg"></button></td>
                    </tr>
                    <tr>
                        <td>國健署提供免費低劑量胸部電腦斷層(112/10/16起指定院所提供服務)</td>
                        <td><button><a href = "traffic.php"><img src = "img/traffic.png"></a></button></td>
                        <td><button class = "star-bt" onclick = "hospitalClick(5)"><img class = "star" id = "5" src = "img/star.svg"></button></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>


    <?php include_once 'template/footer.php';?>
</body> 
</html>