<?php
    //数组排序
    //升序
    $sortarr = Array(4,3,2,5,7,6);
    sort($sortarr);
    echo "===========升序============<br>";
    foreach($sortarr as $v){
        echo $v;
        echo "<br>";
    }

    //降序
    rsort($sortarr);
    echo "===========降序===========<br>";
    foreach($sortarr as $v){
        echo $v;
        echo "<br>";
    }

    //关联数组的排序
    $arr = Array("name2"=>"abc","name1"=>"bbs","name3"=>"ccd");
    //值升序
    asort($arr);
    echo "=======值升序=========<br>";
    foreach($arr as $k=>$v){
        echo $k."=>".$v;
        echo "<br>";
    }

    //值降序
    arsort($arr);
    echo "========值降序==========<br>";
    foreach($arr as $k=>$v){
        echo $k."=>".$v;
        echo "<br>";
    }

    //键升序
    ksort($arr);
    echo "===========键升序==========<br>";
    foreach($arr as $k=>$v){
        echo $k."=>".$v;
        echo "<br>";
    }

    krsort($arr);
    echo "================键降序============<br>";
    foreach($arr as $k=>$v){    
        echo $k."=>".$v;
        echo "<br>";
    }
?>