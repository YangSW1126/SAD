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
                    <th class = "table-row">醫療資訊</th>
                    <th class = "table-row" width = 12%>交通</th>
                    <th class = "table-row" width = 15%>加入收藏</th>
                </tr>
                </thead>
                <tbody>';
                $sql = "SELECT * FROM `hospital`";
                $result = mysqli_query($link, $sql);
                while($row = mysqli_fetch_assoc($result)){
                    $hospitalId = $row["hospital_id"];
                    $hospitalName = $row["hospital_name"];
                    $table.=
                    '<tr>
                        <td><a href = "hospital_detail.php?id='.$hospitalId.'">'.$hospitalName.'</a><br></td>
                        <td><button><a href = "traffic.php"><img src = "img/traffic.png"></a></button></td>';
                        if(isset($_SESSION["userId"])){
                            $sql_check = "SELECT hospital.hospital_id
                                            FROM `hospital` JOIN `favorited_hospital` ON hospital.hospital_id = favorited_hospital.category_id
                                            Where favorited_hospital.user_id =".$_SESSION["userId"]." && hospital.hospital_id = ".$hospitalId." LIMIT 1";
                            $result_check = mysqli_query($link, $sql_check);
                            if(empty($row = mysqli_fetch_assoc($result_check))){
                                $table.= '<td><button class = "star-bt" onclick = "hospitalClick('.$hospitalId.','.$_SESSION["userId"].')"><img class = "star" id = "'.$hospitalId.'" src = "img/star.svg"></button></td>';
                            }else{
                                $table.= '<td><button class = "star-bt" onclick = "hospitalClick('.$hospitalId.','.$_SESSION["userId"].')"><img class = "star" id = "'.$hospitalId.'" src = "img/star-fill.svg"></button></td>';
                            }
                        }else{
                            $table.= '<td><button class = "star-bt"><a href = "login.php"><img class = "star" id = "'.$hospitalId.'" src = "img/star.svg"></a></button></td>';
                        }
                        $table.= '</tr>';
                    }
                $table.='</tbody></table>';
                echo $table;
?>