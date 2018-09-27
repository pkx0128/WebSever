<?php
    namespace core;
    
    class imooc {
        public static $fileMap = array();
        static public function run(){
            // echo "OK";
           $route =  new \core\route();
        }
        static public function load($class){
            // echo $class;
            if(isset($fileMap[$class])){
                return true;
            }else{  
                $class = str_replace('\\','/',$class);
                $file =  IMOOC.'/'.$class.".php";
                if(is_file($file)){
                    include $file;
                    $fileMap[$class] = $class;
                }else {
                    return false;
                }
            }
        }
    }

?>