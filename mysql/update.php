<?php
//  连接数据库
    $con = mysqli_connect("localhost","root","Pankx0128");
    // 判断是否连接成功
    if(!$con){
        die("连接数据库失败".mysqli_error($con));
    }
// 选取需操作的数据库
    mysqli_select_db($con,"my_db");
// 更新数据库数据sql语句
    $sql="UPDATE persons SET Age=30 WHERE FirstName='pan' AND LastName='kankx'";
// 判断是否更新成功
    if(!mysqli_query($con,$sql)){
        echo "更新失败".mysqli_error($con);
    }else{
        echo "更新成功";
    }
// 关闭数据库连接
    mysqli_close($con);

?>