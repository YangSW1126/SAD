<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

    <link rel = "stylesheet" href = "css/style_footer.css?v=<?=time()?>">
    <link rel = "stylesheet" href = "css/style_header.css?v=<?=time()?>">
    <link rel = "stylesheet" href = "css/style_index.css?v=<?=time()?>">


    <title>Document</title>
    <link rel = "icon" href = "img/icon.png" type = "image/png">
</head>
<body>
    <?php include_once 'template/header.php';?>
    
    <div class = "wrap">
        <div class = "content">
            <div class = "content-container">
                <div class = "content-col">

                        <div class = "content-row">
                            <ul class = "content-ul">
                                <li class = "box"><a href = "application.php"><span class = "box-img-bg"><img class = "box-img" src = "img/doc.svg"><p3 class = "content-lable">補助專區</p3></a></span></li>
                                <li class = "box"><a href = "activity.php"><span class = "box-img-bg"><img class = "box-img" src = "img/activity.svg"><p3 class = "content-lable">活動推薦</p3></a></span></li>
                                <li class = "box"><a href = "school.php"><span class = "box-img-bg"><img class = "box-img" src = "img/book.svg"><p3 class = "content-lable">樂齡學習</p3></a></span></li>
                                <li class = "box"><a href = "elder.php"><span class = "box-img-bg"><img class = "box-img" src = "img/archive.svg"><p3 class = "content-lable">長者資訊</p3></a></span></li>
                            </ul>
                        </div>
                        <div class = "content-row">
                            <ul>
                                <li class = "box"><a href = "hospital.php"><span class = "box-img-bg"><img class = "box-img" src = "img/hospital.svg"><p3 class = "content-lable">醫療資源</p3></a></span></li>
                                <li class = "box"><a href = "searchDestination.php"><span class = "box-img-bg"><img class = "box-img" src = "img/car.svg"><p3 class = "content-lable">交通</p3></a></span></li>
                                <li class = "box"><a href = "favorited.php"><span class = "box-img-bg"><img class = "box-img" src = "img/heart.svg"><p3 class = "content-lable">我的最愛</p3></a></span></li>
                            </ul>
                        </div>
                </div>
            </div>
        </div>
    </div>

    <div class = color></div>
    <div class = color2></div>
    <div class = color3></div>
    <div class = color4></div>
    <div class = color5></div>


    <?php include_once 'template/footer.php';?>
</body> 
</html>