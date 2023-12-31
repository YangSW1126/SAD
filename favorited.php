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
    <link rel = "icon" href = "img/icon.png" type = "image/png">
    
</head>
<body>
    <?php 
        include_once 'template/header.php';
        if(!isset($_SESSION["userId"])){
            header("Location:login.php");
        }
    ?>

    <div class = wrap>
        <div class = "favorite-container">
            <div class = "displayFavorite" id = "displayFavorite"></div>
        </div>
    </div>

    <?php include_once 'template/footer.php'; ?>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>  
    <script>
        $(document).ready(function(){
            displayFavorite();
        }); 

        function displayFavorite(){
            $.ajax({
                url : "display/displayFavorite.php",
                type: 'post',
                data:{
                },
                success:function(data,status){
                    $('#displayFavorite').html(data);

                }
            });
        }
        
    </script>
        
</body> 
</html>