<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

    <link rel = "stylesheet" href = "css/style_footer.css?v=<?=time()?>">
    <link rel = "stylesheet" href = "css/style_header.css?v=<?=time()?>">
    <link rel = "stylesheet" href = "css/style_application.css?v=<?=time()?>">

    
    <title>Document</title>
    <link rel = "icon" href = "img/icon.png" type = "image/png">
</head>
<body>
    <?php include_once 'template/header.php';?>
    <div class = wrap>
        <div class = "condition-container">
            <div class = "condition-title">根據您輸入的條件:</div>
            <div class = "selected-condition">
                <div class = "displayCondition" id = "displayCondition"></div>
                <hr class = "condition-hr">
                <?php 
                    if(isset($_SESSION["userId"])){
                        $button = "<button type = 'button' class = 'btn btn-outline-dark' onclick = 'editCondition(".$_SESSION['userId'].")'>新增條件</button>";
                    }else{
                        $button = "<button type = 'button' class = 'btn btn-outline-dark' onclick = 'relink()' id = 'relink'>登入</button>";
                    }
                    echo $button;
                ?>
            </div>
            <div class = "displayApplication" id = "displayApplication"></div>
        </div>
    </div>

    <div class="modal fade" id="addConditionModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLongTitle">新增/移除條件</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <ul>
                    <li><input type="checkbox" id="over65"><label for="over65">年滿65歲</label></li>
                    <li><input type="checkbox" id="test1"><label for="test1">test1</label></li>
                    <li><input type="checkbox" id="test2"><label for="test2">test2</label></li>
                    <li><input type="checkbox" id="test3"><label for="test3">test3</label></li>
                </ul>
            </div>
            <div class="modal-footer">
                <button type = 'button' class = 'btn btn-secondary' data-dismiss = 'modal'>取消</button>
                <button type = 'button' class = 'btn btn-primary' onclick = "saveCondition(<?php echo $_SESSION['userId']?>)">更新</button>
                <input type = "hidden" id = "hiddenData">
            </div>
          </div>
        </div>
    </div>

    <?php include_once 'template/footer.php';?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>  
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <script src = "js/application_script.js"></script>
</body> 
</html>