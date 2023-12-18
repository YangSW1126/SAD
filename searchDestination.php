<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <title>專題名稱</title>
        <link rel="stylesheet" type="text/css" href="css/searchDestination.css?v=<?=time()?>">

    </head>
<body>
    <div class="header">
        <div class="left-part">
            <a href="index.php" class="back"><img src="img/Left.png" alt="back"></a>
            <div class="logo">
                <div class="car"></div>
                <h2>交通搜尋</h2>
            </div>
        </div>
        <div class="menu">
            <a href="default.asp">首頁</a>
            <a href="default.asp">語音AI</a>
            <a href="default.asp">個人資料</a>
            <a href="default.asp">設定</a>
        </div>
    </div>
    <div class="content">
        <form action="generalTransportation.php" method="GET">
            <label for="mySearch">請輸入想到達的地點</label>
            <input
                type="search"
                id="mySearch"
                name="search-destination"
                placeholder="例如:夢時代"
                required
            />
            <button type="submit">搜尋</button>
        </form>
    </div>    
</body>
</html>