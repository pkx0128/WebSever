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

    //选取数据库
    mysqli_select_db($con,"my_db");
    //创建数据表
    $sql = " CREATE TABLE persons(personID int NOT NULL AUTO_INCREMENT,PRIMARY KEY(personID),FirstName varchar(15),LastName varchar(15),Age int)";

    if(mysqli_query($con,$sql)){
        echo "创建persons成功";
    }else{
        die("创建persons失败".mysqli_error());
    }
    // 关闭数据库
    mysqli_colose($con);
?>
