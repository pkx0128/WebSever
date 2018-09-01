<?php
    //创建数据库实例
    //连接数据库
    $con = mysqli_connect("localhost","root","Pankx0128");
    if(!$con){
        echo "连接失败".mysqli_error();
    }else{
        if(mysqli_query($con,"CREATE DATABASE my_db")){
            echo "创建my_db成功!";
        }else{
            echo "创建my_db失败".mysqli_error();
        }
    }
?>
