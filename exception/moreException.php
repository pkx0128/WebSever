
<?php
// 多个异常实例
    //定义自定义异常类
    class CustomException extends Exception {
        public function customMessage(){
            $msg = $this->getLine().$this -> getFile().$this->getMessage();
            return $msg;
        }
    }
    //抛出异常函数
    function chName($name){
        if($name == "abc"){
            throw new CustomException("name is ok!");
        }else{
            throw new Exception("name is unknow!");
        }

    }
    // 捕获多个异常
    try{
        chName("d");
    }catch(CustomException $e){
        echo $e->customMessage();
    }catch(Exception $e){
        echo $e->getMessage();
    }
   
?>