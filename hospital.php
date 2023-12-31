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
            <div class = "displayHospital" id = "displayHospital"></div>
        </div>
    </div>


    <?php include_once 'template/footer.php';?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>  
    <script>
        $(document).ready(function(){
            displayHospital();
        }); 

        function displayHospital(){
            $.ajax({
                url : "display/displayHospital.php",
                type: 'post',
                data:{
                },
                success:function(data,status){
                    $('#displayHospital').html(data);

                }
            });
        }
    </script>
</body> 
</html>