<?php
/**
 * 定义路由类
 */
// 定义命名空间
    namespace core\lib;
    // 定义路由类
    class route {
        // 定义控制器变量
        public $ctr;
        // 定义方法变量
        public $action;
         public function __construct()
         {
             /**
              * 截取index.php后面的参数
              */
             if(isset($_SERVER['REQUEST_URI'])&& $_SERVER['REQUEST_URI']!= '/'){
                $path = $_SERVER['REQUEST_URI'];
                // 去除URI左侧的/
                $path = trim($path,'/');
                // 以/为界分割URI
                $patharr = explode('/',$path);
                print_r($patharr);
                if(isset($patharr[0])){
                    $this->$ctr = $patharr[0];
                }
                if(isset($patharr[1])){
                    $this->$action = $patharr[1];
                }else{
                    $this->$action = "index";
                }    
             }else{
               $this->$ctr = 'index';
                $this->$action = 'index';
             }
         }           
    }





?>