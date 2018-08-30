<?php
// 定义error处理函数
    function customError($errno,$errstr){
        echo "errorNumber:".$errno."message:".$errstr;
        echo "end Script!";
        error_log("errorNumber:".$errno."message:".$errstr,1,"764670547@qq.com","764670547@qq.com");
        // die();
    }
    //处理所有错误
    set_error_handler("customError");
    //模拟错误
    echo $a;

?>