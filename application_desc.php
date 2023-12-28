<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

    <link rel = "stylesheet" href = "css/style_footer.css?v=<?=time()?>">
    <link rel = "stylesheet" href = "css/style_header.css?v=<?=time()?>">
    <link rel = "stylesheet" href = "css/style_application_desc.css?v=<?=time()?>">

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>

<body>
    <?php include_once 'template/header.php';?>

    <div class = "wrap">
        <div class = "application-desc-container">
        <div class = "container-name">高雄市身心障礙者醫療復健費用及醫療輔具補助/查看教學</div>
        <div class = "container-step">步驟:</div>
        <div class = "application-desc-content">
            <ul>
                <li>申請書</li>
                <li>委託書（非本人親洽申辦者，需填寫）</li>
                <li>戶口名簿影本或戶籍謄本或身分證影本（三者擇一檢附即可）(正本查驗後發還)</li>
                <li>身心障礙手冊、影本(正本查驗後發還)</li>
                <li>代辦人身分證影本（代辦人與申請者同一戶籍者(檢附戶口名簿影本)免附）</li>
                <li>中(低)收入證明正本、影本(正本查驗後發還，非低收入戶者免附)</li>
                <li>診斷證明書(身心障礙鑑定醫療機構或公立醫療機構所出具三個月內相關專科醫師診斷證明書),內容需註明申請項目</li>
                <li>醫療輔具評估報告(身心障礙鑑定醫療機構或公立醫療機構所出具三個月內相關專科醫師或專業人員醫療輔具評估報告書)〈咳痰(嗽)機、單(雙)相陽壓呼吸輔助器、氧氣製造機、壓力衣、矽膠片 申請須檢附〉</li>
            </ul>
        </div>

        <button class = "btn btn-outline-dark" data-toggle="modal" data-target="#desc-flow">流程圖</button>

        </div>
    </div>

    <div class="modal fade bd-example-modal-lg" id="desc-flow" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLongTitle">流程圖</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <img src = "application_flow/application_flow.png"><br>
            </div>
            <div class="modal-footer">
                <button type = 'button' class = 'btn btn-secondary' data-dismiss = 'modal'>關閉</button>
            </div>
          </div>
        </div>
    </div>

    <?php include_once 'template/footer.php';?>
</body>
</html>