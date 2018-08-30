<?php
// die函数的用法
    if(file_exists("Hello.txt")){
        $file = fopen("Hello.txt","r");
    }else{
        die("no found!");
    }
?>