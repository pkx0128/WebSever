<?php
    // 连接数据库
    $con = mysqli_connect("localhost","root","Pankx0128");
    // 判断连接
    if(!$con){
        die("连接失败".mysqli_error($con));
    }   
    // 选取需操作的数据库
    mysqli_select_db($con,"my_db");
    // 删除数据sql语句
    $sql="DELETE FROM persons WHERE FirstName = 'pan'";
    // 执行删除操作并判断是否成功
    if(!mysqli_query($con,$sql)){
        die("删除失败".mysqli_error($con));
    }else{
        echo "删除成功";
    }

?>