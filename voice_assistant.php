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
          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
          Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.
          Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quo porro fugit tempore sed quod ut expedita, molestias sapiente voluptate sunt?
          lorem40
        </div>
        <div class="button">
          <span><img src="img/microphone_icon.png" alt="search" class = "mic">語音搜尋</span>
        </div>
      </div>
      <div class = "line"></div> <!-- horizontal line -->
      <div class="section">
          <div class="label">語音朗讀功能</div>
          <div class="content">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.
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

