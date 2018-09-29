<?php
    namespace core\lib;
    // 继承PDO类
    class model extends \PDO{
        // 构造方法
        public function __construct()
        {
            // 数据库
            $dsn = 'mysql:host=localhost;dbname=my_db';
            // 用户名
            $username = 'root';
            // 密码
            $password = 'Pankx0128';
            try{
                parent::__construct($dsn,$username,$password);
            }catch(\Exception $e){
                // print_r($e->getMessage());
                echo '数据库连接失败';
            }
        }
    }
?>