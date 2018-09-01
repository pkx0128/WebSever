<?php
//连接mysqlPHP7后使用mysqli_connect()函数
    $con = mysqli_connect("localhost","root","Pankx0128");
    print_r($con);
    if($con){
        echo "ok";
    }else{
        echo "no";
    }
    //关闭mysql连接
    mysqli_close($con);
?>