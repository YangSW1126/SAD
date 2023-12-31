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
                        <th class = "table-row">活動項目</th>
                        <th class = "table-row" width = 12%>交通</th>
                        <th class = "table-row" width = 15%>加入收藏</th>
                    </tr>
                </thead>
                <tbody>';
                $sql = "SELECT * FROM `activity`";
                $result = mysqli_query($link, $sql);
                while($row = mysqli_fetch_assoc($result)){
                    $activityId = $row["activity_id"];
                    $activityName = $row["activity_name"];
                    $sql_getType = "SELECT activity_type.activity_type_name
                                    FROM `activity_type` JOIN `type_list` ON activity_type.activity_type_id = type_list.type_id
                                    Where type_list.activity_id =".$activityId;
                    $result_getType = mysqli_query($link, $sql_getType);
                    $table.=
                    '<tr>
                        <td><a href = "activity_detail.php?id='.$activityId.'">'.$activityName.'</a><br>
                        <div class = "activity_lable_container">
                            <ul>';
                            while($row = mysqli_fetch_assoc($result_getType)){
                                $activityType = $row["activity_type_name"];
                                $table.= "<li class = activity_lable>#".$activityType."</li>";
                            }
                    $table.='</ul>
                        </div>
                        </td>
                        <th class = "table-row" width = 12%><button><a href = "traffic.php"><img src = "img/traffic.png"></a></button></th>';
                        if(isset($_SESSION["userId"])){
                            $sql_check = "SELECT activity.activity_id
                                            FROM `activity` JOIN `favorited_activity` ON activity.activity_id = favorited_activity.category_id
                                            Where favorited_activity.user_id =".$_SESSION["userId"]." && activity.activity_id = ".$activityId." LIMIT 1";
                            $result_check = mysqli_query($link, $sql_check);
                            if(empty($row = mysqli_fetch_assoc($result_check))){
                                $table.= '<td><button class = "star-bt" onclick = "actClick('.$activityId.','.$_SESSION["userId"].')"><img class = "star" id = "'.$activityId.'" src = "img/star.svg"></button></td>';
                            }else{
                                $table.= '<td><button class = "star-bt" onclick = "actClick('.$activityId.','.$_SESSION["userId"].')"><img class = "star" id = "'.$activityId.'" src = "img/star-fill.svg"></button></td>';
                            }
                        }else{
                            $table.= '<td><button class = "star-bt"><a href = "login.php"><img class = "star" id = "'.$activityId.'" src = "img/star.svg"></a></button></td>';
                        }
                        $table.= '</tr>';
                    }
                $table.='</tbody></table>';
                echo $table;
?>
