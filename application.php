<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

    <link rel = "stylesheet" href = "css/style_footer.css?v=<?=time()?>">
    <link rel = "stylesheet" href = "css/style_header.css?v=<?=time()?>">
    <link rel = "stylesheet" href = "css/style_application.css?v=<?=time()?>">

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

    <script src = "js/application_script.js" defer></script>
    
    <title>Document</title>
    <link rel = "icon" href = "img/icon.png" type = "image/png">
</head>
<body>
    <?php include_once 'template/header.php';?>
    <div class = wrap>
        <div class = "condition-container">
            <div class = "condition-title">根據您輸入的條件:</div>
            <div class = "selected-condition">
                <ul id = "condition-ul">
                    <li class = "condition" id = "0"><button class = "condition-bt" onclick = "removeCondition('0')">─</button>年滿65歲</li>
                    <li class = "condition" id = "1"><button class = "condition-bt" onclick = "removeCondition('1')">─</button>設籍並實際居住本市</li>
                </ul>
                <hr class = "condition-hr">
                <button class = "btn btn-outline-dark" data-toggle="modal" data-target="#addConditionModal"> 新增條件 </button>
            </div>

            <table class="content-table">
                <thead>
                <tr>
                    <th class = "table-row" width = 35%>補助項目</th>
                    <th class = "table-row" width = 35%>補助項目條件</th>
                    <th class = "table-row" width = 15%>查看教學</th>
                    <th class = "table-row" width = 15%>加入收藏</th>
                </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>老人居家生活補助</a></td>
                        <td></td>
                        <td><button class = "tutorial-bt"><img class = "tutorial-img" src = "img/teacher.png"></button></td>
                        <td><button class = "star-bt" onclick = "appliClick(1)"><img class = "star" id = "a_1" src = "img/star.svg"></button></td>
                    </tr>
                    <tr>
                        <td>中低收入入戶申請</td>
                        <td></td>
                        <td><button class = "tutorial-bt"><img class = "tutorial-img" src = "img/teacher.png"></button></td>
                        <td><button class = "star-bt" onclick = "appliClick(2)"><img class = "star" id = "a_2" src = "img/star.svg"></button></td>
                    </tr>
                    <tr>
                        <td><a href="application_detail.php">高雄市身心障礙者醫療復健費用及醫療輔具補助</a></td>
                        <td></td>
                        <td><a href="application_desc.php"><button class = "tutorial-bt"><img class = "tutorial-img" src = "img/teacher.png"></button></a></td>
                        <td><button class = "star-bt" onclick = "appliClick(3)"><img class = "star" id = "a_3" src = "img/star.svg"></button></td>
                    </tr>
                    <tr>
                        <td>敬老津貼</td>
                        <td></td>
                        <td><button class = "tutorial-bt"><img class = "tutorial-img" src = "img/teacher.png"></button></td>
                        <td><button class = "star-bt" onclick = "appliClick(4)"><img class = "star" id = "a_4" src = "img/star.svg"></button></td>
                    </tr>
                    <tr>
                        <td>榮民就養給付</td>
                        <td></td>
                        <td><button class = "tutorial-bt"><img class = "tutorial-img" src = "img/teacher.png"></button></td>
                        <td><button class = "star-bt" onclick = "appliClick(5)"><img class = "star" id = "a_5" src = "img/star.svg"></button></td>
                    </tr>
                </tbody>
            </table>
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
                    <li><input type="checkbox" id="over65" name="over65" checked><label for="over65">年滿65歲</label></li>
                    <li><input type="checkbox" id="inCity" name="inCity" checked><label for="inCity">設籍並實際居住本市</label></li>
                    <li><input type="checkbox" id="123" name="123" checked><label for="123">123</label></li>
                    <li><input type="checkbox" id="456" name="456" checked><label for="456">456</label></li>
                </ul>
            </div>
            <div class="modal-footer">
                <button type = 'button' class = 'btn btn-secondary' data-dismiss = 'modal'>取消</button>
                <button type = 'button' class = 'btn btn-primary' onclick = "editCondition()">更新</button>
            </div>
          </div>
        </div>
    </div>



    <?php
        include_once 'template/footer.php';
    ?>
</body> 
</html>