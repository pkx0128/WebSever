<?php
// 定义一个二维数组
    $arr = Array(Array("vovo",12,32),Array("Noka",100,105));
        echomes($arr[0][0],$arr[0][1],$arr[0][2]);
        echomes($arr[1][0],$arr[1][1],$arr[1][2]);

    function echomes($name,$k,$s){
        echo $name.":库存：".$k." 销量：".$s."<br>";
    }

    for($row = 0;$row < count($arr);$row++){
        echo "行数".$row."<br>";
        for($l=0;$l<count($arr[$row]);$l++){
            echo $arr[$row][$l]."<br>";
        }
    }

?>