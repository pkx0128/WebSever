<?php
    //验证变量是否在某一范围
    $arr = array("options"=>array("min_range"=>10,"max_range"=>100));
    $num = 300;
    if(filter_var($num,FILTER_VALIDATE_INT,$arr)){
        echo "这是在10-100之间的整数";
    }else{
        echo "no";
    }
?>