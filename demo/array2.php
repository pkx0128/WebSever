<?php
    // 定义关联数组
    $arr = Array("name"=>"pankx","age"=>25,"sex"=>"女");
    // 使用关联数组
    echo $arr["name"];
    echo $arr["age"];
    echo "<br>";

    foreach($arr as $x=>$v){
        echo $x."=".$v;
        echo "<br>";
    }

?>