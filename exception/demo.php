<?php
    //设置一个异常
    function checkNum($n){
        if($n>1){
            throw new Exception("必须小于1");
        }
    }
    try{
        checkNum(2);
    }catch(Exception $e){
        echo $e->getMessage();
    }

?>