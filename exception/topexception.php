<?php
// set_exception_handler()可设置所有未捕获异常的所有自定义函数
function testException($e){
    echo $e->getMessage();
}
set_exception_handler("testException");
throw new Exception("set_exception_handler")
?>