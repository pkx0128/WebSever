<?php
    namespace core;
    
    class imooc {
        public static $fileMap = array();
        public $assign;
        static public function run(){
            // echo "OK";
           $routes =  new \core\lib\route();
           $ctrClass = $routes->ctr;
           $action = $routes->action;
           $ctrFile = APP.'/ctr/'.$ctrClass.'ctr.PHP';
           $ctrFileClass = MODEL.'\ctr\\'.$ctrClass.'ctr';
        //    print_r($ctrFile);
           if(is_file($ctrFile)){
                include $ctrFile;
                $ctrl = new $ctrFileClass();
                $ctrl->$action();
           }else{
               throw new Exception("找不到控制器">$ctrClass);
           }
        }
        // 自动加载未引入的类
        static public function load($class){
            // echo $class;
            if(isset($fileMap[$class])){
                return true;
            }else{  
                $class = str_replace('\\','/',$class);
                $file =  IMOOC.'/'.$class.".php";
                if(is_file($file)){
                    include $file;
                    self::$fileMap[$class] = $class;
                }else {
                    return false;
                }
            }
        }

        function assign($name,$value){
            $this->assign[$name]=$value;
        }
        function display($file){
            $file = APP.'/views/'.$file;
            if(is_file($file)){
                // print_r($file);
                extract($this->assign);
                include $file;
            }
        }
    }

?>