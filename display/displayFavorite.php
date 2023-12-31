<?php

    session_start();
    if(isset($_SESSION["userId"])){
    }
    $categorys = array("application","activity","school","elder","hospital");


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

                    for($i = 0; $i < 5; $i++){

                        $sql = "SELECT {$categorys[$i]}.{$categorys[$i]}_id, {$categorys[$i]}.{$categorys[$i]}_name 
                                FROM `{$categorys[$i]}` JOIN `favorited_{$categorys[$i]}` ON {$categorys[$i]}.{$categorys[$i]}_id = favorited_{$categorys[$i]}.category_id
                                Where favorited_{$categorys[$i]}.user_id = ".$_SESSION["userId"];
                        $result = mysqli_query($link, $sql);
                        while($row = mysqli_fetch_assoc($result)){
                            $favoritedId = $row["{$categorys[$i]}_id"];
                            $favoritedName = $row["{$categorys[$i]}_name"];
                            $table.=
                            '<tr>
                                <td><img class = "img-type" src = "img/'.$categorys[$i].'.svg"></td>
                                <td>'.$favoritedName.'<br>
                                <td><button class = "star-bt" onclick = "favClick('.$favoritedId.','.$_SESSION["userId"].','.$i.')"><img class = "star" id = "'.$categorys[$i].$favoritedId.'" src = "img/star-fill.svg"></button></td>';
                                
                            $table.= '</tr>';
                        }
                    }

                    $table.='</tbody></table>';
                    echo $table;
?>
