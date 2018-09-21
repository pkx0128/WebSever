<?php
// PHP设置单例
    class Persons{
        // 定义静态的私有变量
        static private $_instance;
        // 把构造方法设置成私有的，防止通过new创建实例
        private function __construct(){

        }
        public static function getInstance(){
            // 判断是否存在实例，不存在就创建实例
            if(!self::$_instance instanceof self){
                self::$_instance = new self();
            }
            return self::$_instance;
        }

    }
    echo "demo1.php";
    $d1 = Persons::getInstance();
    var_dump($d1);
?>