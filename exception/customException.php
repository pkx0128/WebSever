<?php
//定义自定义异常类
    class CustomException extends Exception{
        public function customMessage(){
            $msg =  $this->getLine().$this->getFile().$this->getMessage(); 
            return $msg;
        }
    }   

    function checkName($name){
        if($name!="pankx"){
            throw new CustomException("用户名错误！");
        }
    }

    try{
        checkName("hah");
    }catch(CustomException $e){
        echo $e->customMessage();
    }

?>