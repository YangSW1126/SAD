<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

    <link rel = "stylesheet" href = "css/style_footer.css?v=<?=time()?>">
    <link rel = "stylesheet" href = "css/style_header.css?v=<?=time()?>">
    <link rel = "stylesheet" href = "css/style_login.css?v=<?=time()?>">

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <script src="js/script.js"></script>

    <title>Document</title>
    <link rel = "icon" href = "img/icon.png" type = "image/png">
    
</head>
<body>
    <?php
        include_once 'template/header.php';
    ?>
    
    <div class = "wrap">
        <div class = "center">
            <h1>登入</h1>
            <form action = "functions/loginCheck.php" method = "post">
                <div class = "txt_field">
                    <input type = "text" name = "userEmail" required>
                    <span></span>
                    <label>Username</label>
                </div>
                <div class = "txt_field">
                    <input type = "password" name = "userPassword" required>
                    <span></span>
                    <label>Password</label>
                </div>
                <div class="forgot">忘記密碼</div>
                <input type="submit" name = "submit" value = "登入">
                <div class="sign_up">
                    <a href="registration.php">註冊</a> 
                </div>
            </form>
        </div>
    </div>


    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLongTitle">Update Log</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <img src = "img/wang.jpg" width = 300px height = 400px><br>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-primary" data-dismiss="modal">OK</button>
            </div>
          </div>
        </div>
    </div>

    <?php
        include_once 'template/footer.php';
    ?>

    <script>
    $(document).ready(function(){
        $("#exampleModalCenter").modal('show');
    });
    </script>

</body> 
</html>