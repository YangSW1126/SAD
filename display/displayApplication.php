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
                    <th class = "table-row" width = 35%>補助項目</th>
                    <th class = "table-row" width = 35%>補助項目條件</th>
                    <th class = "table-row" width = 15%>查看教學</th>
                    <th class = "table-row" width = 15%>加入收藏</th>
                </tr>
                </thead>
                <tbody>';
                $sql = "SELECT * FROM `application`";
                $result = mysqli_query($link, $sql);
                while($row = mysqli_fetch_assoc($result)){
                    $applicationId = $row["application_id"];
                    $applicationName = $row["application_name"];
                    $table.=
                    '<tr>
                        <td><a href = "application_detail.php?id='.$applicationId.'">'.$applicationName.'</a><br></td>
                        <td></td>
                        <td><button class = "tutorial-bt"><img class = "tutorial-img" src = "img/teacher.png"></button></td>';
                        if(isset($_SESSION["userId"])){
                            $sql_check = "SELECT application.application_id
                                            FROM `application` JOIN `favorited_application` ON application.application_id = favorited_application.category_id
                                            Where favorited_application.user_id =".$_SESSION["userId"]." && application.application_id = ".$applicationId." LIMIT 1";
                            $result_check = mysqli_query($link, $sql_check);
                            if(empty($row = mysqli_fetch_assoc($result_check))){
                                $table.= '<td><button class = "star-bt" onclick = "appliClick('.$applicationId.','.$_SESSION["userId"].')"><img class = "star" id = "'.$applicationId.'" src = "img/star.svg"></button></td>';
                            }else{
                                $table.= '<td><button class = "star-bt" onclick = "appliClick('.$applicationId.','.$_SESSION["userId"].')"><img class = "star" id = "'.$applicationId.'" src = "img/star-fill.svg"></button></td>';
                            }
                        }else{
                            $table.= '<td><button class = "star-bt"><a href = "login.php"><img class = "star" id = "'.$applicationId.'" src = "img/star.svg"></a></button></td>';
                        }
                        $table.= '</tr>';
                    }
                $table.='</tbody></table>';
                echo $table;
?>
