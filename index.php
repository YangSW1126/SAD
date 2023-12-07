<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "stylesheet" href = "css/style_index.css?v=<?=time()?>">
    <script async src = "https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src = "js/script.js"></script>
    
    
    <title>Document</title>
    
</head>
<body>
    <?php include "header.html" ?>
    <div class = "container">
    sad test123
    </div>
    <p>css test</p>
    <div id="includeFooter"></div>
    <script>
        $(function() {
            $("#includeHeader").load("header.html");
        });
    
        $(function() {
            $("#includeFooter").load("footer.html");
        });
        </script>
</body>
</html>

