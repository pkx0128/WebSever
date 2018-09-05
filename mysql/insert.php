<?php
    // 连接数据库
    $con = mysqli_connect("localhost","root","Pankx0128");
    if(!$con){
        die("数据库连接失败").mysql_error();
    }
    mysqli_select_db($con,"my_db");
    // 如果有设置主键则需用(column1,column2...) VALUES (value1,value2...);
    mysqli_query($con,"INSERT INTO persons (FirstName,LastName,Age) VALUES('pan','kankx',28);");

    mysqli_close($con);
?>