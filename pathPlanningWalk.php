<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

    <link rel = "stylesheet" href = "css/style_footer.css?v=<?=time()?>">
    <link rel = "stylesheet" href = "css/style_header.css?v=<?=time()?>">
    <link rel = "stylesheet" href = "css/style_pathPlanning.css?v=<?=time()?>">

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

    <script type="module" src="./js/pathPlanningWalk.js"></script>
    
    <title>Document</title>
    <link rel = "icon" href = "img/icon.png" type = "image/png">
</head>
<body>
    <?php include_once 'template/header.php';?>
    
    <div class="content">
        <div id="map"></div>
        <div id="sidebar">
            <div id="panel"></div>
        </div>    
    </div>

    <a id="button" href="https://www.google.com/maps/dir/+811高雄市楠梓區/統一夢時代購物中心+806高雄市前鎮區中華五路789號>設定>">開始導航</a>    
    
    <?php include_once 'template/footer.php';?>
</body> 

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAVm79LtnXKtc1PsdSLVQWPIkK6GXpgNIg&callback=initMap&v=weekly" defer></script>
</html>