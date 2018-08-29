<?php
// 索引数组
//创建数组
$arr = Array(1,2,3,4,5,6,7,8,9);
    // 使用数组
    echo $arr[1];
    echo "<br>";
    //获取数组的长度
    echo count($arr);
    echo "<br>";
    //遍历数组
    for($i=0;$i<count($arr);$i++){
        echo $arr[$i];
        echo "<br>";
    }
?>