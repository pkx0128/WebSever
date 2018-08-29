<?php
    //定义带参数的函数
    $name = "小明";
    function sayfowho($name){
        echo "Hello ".$name;
    }
    sayfowho($name);

    // 定义带参数的函数
    function sayHello($names){
        echo "hi,".$names."<br>";
    }
    // 调用带参数的函数并传入参数值pankx
    sayHello("pankx");
    echo "<br/>";

    // 定义带默认参数值的函数
    function haveDefaultValue($age=18){
        echo "年龄为：".$age;
    }
    // 调用带默认参数值的函数，不传入值时$age为默认的值，传入值时$age为传入的值
    haveDefaultValue(22);
    echo "<br>";

    // 定义有反回值的函数
    function havereturn($a,$b){
        return $a+$b;
    }
    $str = havereturn(10,1);
    echo $str;
?>