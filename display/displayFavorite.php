<?php

    session_start();
    if(isset($_SESSION["userId"])){
    }

    $link = @mysqli_connect('localhost','root','','draft');
    mysqli_set_charset($link, "utf8");

    extract($_POST);
        $table = '<table class="content-table">
                    <thead>
                        <tr>
                            <th class = "table-row" width = 8%></th>
                            <th class = "table-row">收藏項目</th>
                            <th class = "table-row" width = 15%>編輯收藏</th>
                        </tr>
                    </thead>
                    <tbody>';
                    $sql = "SELECT activity.activity_name
                            FROM `activity` JOIN `favorited_activity` ON activity.activity_id = favorited_activity.category_id
                            Where favorited_activity.user_id = 1";
                    $result = mysqli_query($link, $sql);
                    while($row = mysqli_fetch_assoc($result)){
                        $favoriteName = $row["activity_name"];
                        $table.=
                        '<tr>
                            <td><img class = "img-type" src = "img\activity.svg"></td>
                            <td>'.$favoriteName.'<br>
                            <td><button class = "star-bt" onclick = "favClick(1)"><img class = "star" id = "1" src = "img/star-fill.svg"></button></td>';
                        $table.= '</tr>';
                        }
                    $table.='</tbody></table>';
                    echo $table;
?>
