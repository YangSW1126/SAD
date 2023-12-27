<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <link rel = "stylesheet" href = "css/style_footer.css?v=<?=time()?>">
    <link rel = "stylesheet" href = "css/style_header.css?v=<?=time()?>">
    <link rel = "stylesheet" href="css/searchDestination.css?v=<?=time()?>">

    <title>專題名稱</title>
</head>
<body>
    <?php include_once 'template/header.php';?>
    <div class = "wrap">
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
    </div>
    <?php include_once 'template/footer.php';?>
</body>
</html>