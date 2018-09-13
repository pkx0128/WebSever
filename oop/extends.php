<?php
// 父类
    class Person {
        public $name = "xiaoming";
        public function say(){
            echo "Person Can Say!!";
        }
    }
    // boy继承父类Person
    class Boy extends Person {
        // 重写父类方法
        public function say(){
            echo "Boy can jump!!";
        }
    }
// 实例化一个Boy对象
    $boy = new Boy();
    echo $boy->name;
    $boy->say();
?>