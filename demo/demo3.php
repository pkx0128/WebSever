<?php date_default_timezone_set("PRC") ?>
<DOCTYPE html>
<html>
    <title>条件语句实例</title>
        <body>
            <?php
                $i = 10;
                if ($i<10){
                    echo "这是一个if条件实例";
                }

                if ($i>10){
                    echo "i大于10";
                }elseif($i==10){
                    echo "i等于10";
                }else{
                    echo "i小于10";
                }
                
                $t = date("h");
                echo $t;

                switch ($i){
                    case $i>10:
                        echo "i大于10"; 
                        break;
                    case $i==10:
                        echo "i等于10";
                        break;
                    default:
                        echo "i小于10"; 
                }
            ?>
        </body>
</html>