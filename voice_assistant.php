<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" type="text/css" href="css/style_footer.css?v=<?=time()?>">
  <link rel="stylesheet" type="text/css" href="css/style_header.css?v=<?=time()?>">
  <link rel="stylesheet" type="text/css" href="css/style_voice_assistant.css?v=<?=time()?>">

  <title>Document</title>
</head>
<body>
  <?php include_once 'template/header.php';?>
  <div class = wrap>
    <div class="container">
      <div class="section">
        <div class="label">語音搜尋功能</div>
        <div class="content">
          想要找「補助」，請說「幫我查...補助」
          想要找「活動」，請說「幫我查...活動」
          想要找「樂齡學習」，請說「幫我查...樂齡學習」
          想要找「長者資訊」，請說「幫我查...長者資訊」
          想要找「醫療資源」，請說「幫我查...醫療資源」
          想要找「交通」，請說「我想去...」
          想要看「我的最愛」，請說「我想看我的最愛」
        </div>
        <div class="button">
          <span><img src="img/microphone_icon.png" alt="search" class = "mic">語音搜尋</span>
        </div>
      </div>
      <div class = "line"></div> <!-- horizontal line -->
      <div class="section">
          <div class="label">語音朗讀功能</div>
          <div class="content">
            點擊下面的按鈕之後，AI就會自動念出網頁上的字喔~
          </div>
          
          <div class="center">
            <div class="switch_demo">
              <input type="checkbox" name="switch_demo" class="switch_demo-checkbox" id="switch_demo" checked>
              <label class="switch_demo-label" for="switch_demo">
                <span class="switch_demo-inner"></span>
                <span class="switch_demo-switch"></span>
              </label>
            </div>
          </div>
      </div>
    </div>
  </div>
  
  <?php include_once 'template/footer.php';?>
</body>
</html>

