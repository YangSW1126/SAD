<?php

    session_start();
    if(isset($_SESSION["userId"])){
        $userId = $_SESSION["userId"];

        $link = @mysqli_connect('localhost','root','','draft');
        mysqli_set_charset($link, "utf8");

        extract($_POST);
        

        /* $conditions = array("年滿65歲","條件1","條件2", "條件3"); */
        $conditions = '<ul>';
            $sql = "SELECT `over65`, `test1`, `test2`, `test3` FROM `user` WHERE `user_id` = $userId";
            $result = mysqli_query($link, $sql);

            $row = mysqli_fetch_assoc($result);
            $getover65 = $row["over65"];
            $gettest1 = $row["test1"];
            $gettest2 = $row["test2"];
            $gettest3 = $row["test3"];

            if($getover65 == 1){
                $conditions.="<li class = 'condition'><button class = 'condition-bt' onclick = \"removeCondition('over65',".$userId.")\">─</button>年滿65歲</li>";
            }
            if($gettest1 == 1){
                $conditions.="<li class = 'condition'><button class = 'condition-bt' onclick = \"removeCondition('test1',".$userId.")\">─</button>test1</li>";
            }
            if($gettest2 == 1){
                $conditions.="<li class = 'condition'><button class = 'condition-bt' onclick = \"removeCondition('test2',".$userId.")\">─</button>test2</li>";
            }
            if($gettest3 == 1){
                $conditions.="<li class = 'condition'><button class = 'condition-bt' onclick = \"removeCondition('test3',".$userId.")\">─</button>test3</li>";
            }
            $conditions.='</ul>';
        echo $conditions;
    }
?>