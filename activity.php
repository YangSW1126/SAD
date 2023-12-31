<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel = "stylesheet" href = "css/style_footer.css?v=<?=time()?>">
    <link rel = "stylesheet" href = "css/style_header.css?v=<?=time()?>">
    <link rel = "stylesheet" href = "css/style_activity.css?v=<?=time()?>">

    <script src = "js/activity_script.js" defer></script>
 
    <title>Document</title>
    <link rel = "icon" href = "img/icon.png" type = "image/png">
    
</head>
<body>
    <?php include_once 'template/header.php';?>

    <div class = "wrap">

        <div class = "activity-container">
            <div class = "displayActivity" id = "displayActivity"></div>
        </div>

        <div class="type-col">
            <ul>
                <li><button class = "actSortType" onclick = "displayActivity()"><span class = dec_circle></span>追蹤標籤</button></li>
                <li><button class = "actSortType" onclick = "sortLableByDate()"><span class = dec_circle></span>日期排序</button></li>
                <li><button class = "actSortType" onclick = "sortLableByDistant()"><span class = dec_circle></span>距離排序</button></li>
            </ul>
        </div>
    </div>
    
    <?php include_once 'template/footer.php';?>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>  
    <script>
        $(document).ready(function(){
            displayActivity();
        }); 

        function displayActivity(){
            $.ajax({
                url : "display/displayActivity.php",
                type: 'post',
                data:{
                },
                success:function(data,status){
                    $('#displayActivity').html(data);

                }
            });
        }

        function sortLableByDistant(){
            $.ajax({
                url : "display/displayActivity_sortByDistant.php",
                type: 'post',
                data:{
                },
                success:function(data,status){
                    $('#displayActivity').html(data);

                }
            });
        }

        function sortLableByDate(){
            $.ajax({
                url : "display/displayActivity_sortByDate.php",
                type: 'post',
                data:{
                },
                success:function(data,status){
                    $('#displayActivity').html(data);

                }
            });
        }
    </script>
</body> 
</html>