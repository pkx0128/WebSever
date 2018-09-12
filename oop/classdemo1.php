<?php
// 定义Person类
    class Person{
        // 定义类变量
        public $name="xiaoming";
        public $age=12;
        // 定义构造方法
        public function __construct()
        {
            echo "这是构造方法";
        }
        // 定义成员方法
        public function sayHi(){
            echo $this->name.$this->age;
            echo self::MONEY;
        }
        // 定义类常量
        const MONEY = 1000000;
        
    }
    // 创建person对象
    $person = new Person();
    // 调用类的成员方法
    echo $person->sayHi();
    // 调用类常量
    echo Person::MONEY;
?>