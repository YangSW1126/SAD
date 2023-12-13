<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel = "stylesheet" href = "css/style_footer.css?v=<?=time()?>">
    <link rel = "stylesheet" href = "css/style_header.css?v=<?=time()?>">
    <link rel = "stylesheet" href = "css/style_activity.css?v=<?=time()?>">

    <script src = "js/activity_script.js" defer></script>

    
    <title>Document</title>
    
</head>
<body>
    <?php
        include_once 'template/header.php';
    ?>

    <div class = activity-container>
        <table class="content-table">
            <thead>
            <tr>
                <th class = "table-row">活動項目</th>
                <th class = "table-row" width = 12%>交通</th>
                <th class = "table-row" width = 15%>加入收藏</th>
            </tr>
            </thead>
            <tbody>
                <tr>
                    <td>尚和歌仔戲劇團 《佈局者。韓信的棋盤》<br>
                        <div class = "activity_lable_container">
                            <ul>
                                <li class = activity_lable>#戲劇</li>
                                <li class = activity_lable>#藝術</li>
                                <li class = activity_lable>#鄉土</li>
                                <li class = activity_lable>#音樂</li>
                            </ul>
                        </div>
                    </td>
                    <th class = "table-row" width = 12%><button><a href = "traffic.php"><img src = "img/traffic.png"></a></button></th>
                    <td><button class = "star-bt" onclick = "actClick(1)"><img class = "star" id = "1" src = "img/star.svg"></button></td>
                </tr>
                <tr>
                    <td>躍演《勸世三姊妹》中文音樂劇<br>
                        <div class = "activity_lable_container">
                            <ul>
                                <li class = activity_lable>#戲劇</li>
                                <li class = activity_lable>#藝術</li>
                                <li class = activity_lable>#音樂</li>
                            </ul>
                        </div>
                    </td>
                    <th class = "table-row" width = 12%><button><a href = "traffic.php"><img src = "img/traffic.png"></a></button></th>
                    <td><button class = "star-bt" onclick = "actClick(2)"><img class = "star" id = "2" src = "img/star.svg"></button></td>
                </tr>
                <tr>
                    <td>大玩樂家2-《洪一峰x簡文彬x許富凱 跨越衛武營音樂會》<br>
                        <div class = "activity_lable_container">
                            <ul>
                                <li class = activity_lable>#戲劇</li>
                                <li class = activity_lable>#藝術</li>
                                <li class = activity_lable>#鄉土</li>
                            </ul>
                        </div>
                    </td>
                    <th class = "table-row" width = 12%><button><a href = "traffic.php"><img src = "img/traffic.png"></a></button></th>
                    <td><button class = "star-bt" onclick = "actClick(3)"><img class = "star" id = "3" src = "img/star.svg"></button></td>
                </tr>
                <tr>
                    <td>「你的，我的，17歳--112年高雄市長青學苑聯合成果展」<br><div class = "activity_lable_container">
                        <ul>
                            <li class = activity_lable>#藝術</li>
                            <li class = activity_lable>#歌仔戲</li>
                            <li class = activity_lable>#鄉土</li>
                        </ul>
                    </div>
                </td>
                    <th class = "table-row" width = 12%><button><a href = "traffic.php"><img src = "img/traffic.png"></a></button></th>
                    <td><button class = "star-bt" onclick = "actClick(4)"><img class = "star" id = "4" src = "img/star.svg"></button></td>
                </tr>
                <tr>
                    <td>大港老味<br>
                        <div class = "activity_lable_container">
                            <ul>
                                <li class = activity_lable>#鄉土</li>
                            </ul>
                        </div>
                    </td>
                    <th class = "table-row" width = 12%><button><a href = "traffic.php"><img src = "img/traffic.png"></a></button></th>
                    <td><button class = "star-bt" onclick = "actClick(5)"><img class = "star" id = "5" src = "img/star.svg"></button></td>
                </tr>
            </tbody>
        </table>
        <div class="type-col">
            <ul>
                <li><button class = "actSortType" onclick = "sort('lable')"><span class = dec_circle></span>追蹤標籤</button></li>
                <li><button class = "actSortType" onclick = "sort('date')"><span class = dec_circle></span>日期排序</button></li>
                <li><button class = "actSortType" onclick = "sort('range')"><span class = dec_circle></span>距離排序</button></li>
            </ul>
        </div>
        
       
    </div>
    
    <?php
        include_once 'template/footer.php';
    ?>
</body> 
</html>