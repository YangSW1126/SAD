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
                    <th class = "table-row">補校資訊</th>
                    <th class = "table-row" width = 12%>交通</th>
                    <th class = "table-row" width = 15%>加入收藏</th>
                </tr>
                </thead>
                <tbody>';
                $sql = "SELECT * FROM `school`";
                $result = mysqli_query($link, $sql);
                while($row = mysqli_fetch_assoc($result)){
                    $schoolId = $row["school_id"];
                    $schoolName = $row["school_name"];
                    $table.=
                    '<tr>
                        <td><a href = "school_detail.php?id='.$schoolId.'">'.$schoolName.'</a><br></td>
                        <td><button class = "tutorial-bt"><img class = "tutorial-img" src = "img/traffic.png"></button></td>';
                        if(isset($_SESSION["userId"])){
                            $sql_check = "SELECT school.school_id
                                            FROM `school` JOIN `favorited_school` ON school.school_id = favorited_school.category_id
                                            Where favorited_school.user_id =".$_SESSION["userId"]." && school.school_id = ".$schoolId." LIMIT 1";
                            $result_check = mysqli_query($link, $sql_check);
                            if(empty($row = mysqli_fetch_assoc($result_check))){
                                $table.= '<td><button class = "star-bt" onclick = "schoolClick('.$schoolId.','.$_SESSION["userId"].')"><img class = "star" id = "'.$schoolId.'" src = "img/star.svg"></button></td>';
                            }else{
                                $table.= '<td><button class = "star-bt" onclick = "schoolClick('.$schoolId.','.$_SESSION["userId"].')"><img class = "star" id = "'.$schoolId.'" src = "img/star-fill.svg"></button></td>';
                            }
                        }else{
                            $table.= '<td><button class = "star-bt"><a href = "login.php"><img class = "star" id = "'.$schoolId.'" src = "img/star.svg"></a></button></td>';
                        }
                        $table.= '</tr>';
                    }
                $table.='</tbody></table>';
                echo $table;
?>
