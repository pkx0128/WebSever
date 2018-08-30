<?php
// 定义error处理函数
    function customError($errno,$errstr){
        echo "errorNumber:".$errno."message:".$errstr;
        echo "end Script!";
        // die();
    }
    //处理所有错误
    set_error_handler("customError");
    //模拟错误
    echo $a;

?>