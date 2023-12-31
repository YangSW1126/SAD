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
                    <th class = "table-row">長者資訊</th>
                    <th class = "table-row" width = 15%>加入收藏</th>
                </tr>
                </thead>
                <tbody>';
                $sql = "SELECT * FROM `elder`";
                $result = mysqli_query($link, $sql);
                while($row = mysqli_fetch_assoc($result)){
                    $elderId = $row["elder_id"];
                    $elderName = $row["elder_name"];
                    $table.=
                    '<tr>
                        <td><a href = "elder_detail.php?id='.$elderId.'">'.$elderName.'</a><br></td>';
                        if(isset($_SESSION["userId"])){
                            $sql_check = "SELECT elder.elder_id
                                            FROM `elder` JOIN `favorited_elder` ON elder.elder_id = favorited_elder.category_id
                                            Where favorited_elder.user_id =".$_SESSION["userId"]." && elder.elder_id = ".$elderId." LIMIT 1";
                            $result_check = mysqli_query($link, $sql_check);
                            if(empty($row = mysqli_fetch_assoc($result_check))){
                                $table.= '<td><button class = "star-bt" onclick = "elderClick('.$elderId.','.$_SESSION["userId"].')"><img class = "star" id = "'.$elderId.'" src = "img/star.svg"></button></td>';
                            }else{
                                $table.= '<td><button class = "star-bt" onclick = "elderClick('.$elderId.','.$_SESSION["userId"].')"><img class = "star" id = "'.$elderId.'" src = "img/star-fill.svg"></button></td>';
                            }
                        }else{
                            $table.= '<td><button class = "star-bt"><a href = "login.php"><img class = "star" id = "'.$elderId.'" src = "img/star.svg"></a></button></td>';
                        }
                        $table.= '</tr>';
                    }
                $table.='</tbody></table>';
                echo $table;
?>
