<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <style>@import url('https://fonts.googleapis.com/css2?family=Kanit:wght@200&family=Righteous&family=Roboto+Condensed:ital@1&display=swap');</style>

    <link rel = "stylesheet" href = "css/style_footer.css?v=<?=time()?>">
    <link rel = "stylesheet" href = "css/style_header.css?v=<?=time()?>">
    <link rel="stylesheet" type="text/css" href="css/generalTransportation.css?v=<?=time()?>">
    
    <title>專題名稱</title>
    
</head>
<body>
    <?php include_once 'template/header.php';?>
    <div class = "wrap">
        <div class="content"> 
            <!-- TODO  a 可能要改成submit button，然後輸入交通工具資料-->
            <a href="pathPlanningCar.html" class="choice"><img src="./img/Car.png" alt="car">開車</a>
            <a href="pathPlanningScooter.html" class="choice"><img src="./img//Scooter.png" alt="scooter">騎機車</a>
            <a href="pathPlanningBus.html" class="choice"><img src="./img/Bus.png" alt="bus">大眾運輸工具</a>
            <a href="pathPlanningWalk.html" class="choice"><img src="./img/Walking.png" alt="walking">走路</a>
        </div>
    </div>

    <?php include_once 'template/footer.php';?>
</body>
</html>