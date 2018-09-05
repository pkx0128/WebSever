<?php

    $firstName=$_POST["FirstName"];
    $lastName=$_POST["LastName"];
    $age=$_POST["Age"];

    $con =mysqli_connect("localhost","root","Pankx0128");
    if(!$con){
        die("数据库连接失败".mysqli_error());
    }else{
        mysqli_select_db($con,"my_db");
        $sql = "INSERT INTO persons (FirstName,LastName,Age) VALUES ('$firstName','$lastName',$age);";
        // echo $sql;
        echo mysqli_query($con,$sql);
        if(!mysqli_query($con,$sql)){
            die("数据添加失败".mysqli_error());
        }else{
            echo "成功插入一条数据";
        }
    }
    mysqli_close($con);
?>