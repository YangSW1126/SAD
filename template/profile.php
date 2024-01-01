<html>
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="style_footer.css?v=<?=time()?>">
  <link rel="stylesheet" type="text/css" href="style_header.css?v=<?=time()?>">
  <link rel="stylesheet" type="text/css" href="profile.css?v=<?=time()?>">
</head>
<body>
  <?php
    include_once 'header.php';
  ?>
  <div class = "wrap">
    <div class="container">
      <div class="input-field">
        <div class="label">姓名</div>
        <input type="text" class="input" value="王曉明">
      </div>
      <div class="input-field">
        <div class="label">年齡</div>
        <input type="number" class="input" value="65">
      </div>
      <div class="input-field">
        <div class="label">性別</div>
        <select class="select">
          <option value="男">男</option>
          <option value="女">女</option>
        </select>
      </div>
      <div class="input-field">
        <div class="label">習慣</div>
          <div class="check">
            <label><input type="checkbox"  value="抽菸" checked>抽菸&nbsp&nbsp&nbsp&nbsp</label>
            <label><input type="checkbox"  value="喝酒" checked>喝酒&nbsp&nbsp&nbsp&nbsp</label>
            <label><input type="checkbox"  value="嚼檳榔">嚼檳榔&nbsp&nbsp&nbsp&nbsp</label>
          </div>
      </div>
      <div class="input-field">
        <div class="label">慢性病</div>
          <div class="check">
            <label><input type="checkbox"  value="氣喘" checked>氣喘&nbsp&nbsp&nbsp&nbsp</label>
            <label><input type="checkbox"  value="心臟病" checked>心臟病&nbsp&nbsp&nbsp&nbsp</label>
            <label><input type="checkbox"  value="高血壓">高血壓&nbsp&nbsp&nbsp&nbsp</label>
          </div>
      </div>
      <div class="input-field">
        <div class="label">有興趣的活動</div>
          <div class="tag">#藝術</div>
          <div class="tag">#音樂</div>
          <div class="tag">#鄉土</div>
      </div>
      <div class="input-field">
        <div class="label">帳號、密碼</div>
        <input type="text" class="input" value="帳號: abc123">
        <input type="text" class="pwd1" value="密碼:">
        <input type="password" class="pwd2" value="密碼:def456">
      </div>

      <div class="sector">
        <div class="button">
            <span>儲存</span>
        </div>
        <div class="button1">
            <span>取消</span>
        </div>
      </div>  


    </div>
  </div>

  <?php
    include_once 'footer.php';
  ?>
</body>
</html>