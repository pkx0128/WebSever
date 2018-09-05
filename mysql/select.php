<?php
// 连接数据库
    $con=mysqli_connect("localhost","root","Pankx0128");
    // 判断是否成功
    if(!$con){
        die("数据库存连接失败".mysqli_error());
    }
    // 选取数据库
    mysqli_select_db($con,"my_db");
    // 查询数据表persons中的所有数据
    $sql = "SELECT * FROM persons;";
    // 使用mysqli_query执行sql语句
    $res = mysqli_query($con,$sql);
    if($res){
        echo "ok<br>";
        // print_r($res);
        // while循环取出所有结果
        while($rows=mysqli_fetch_array($res)){
            echo $rows["FirstName"].$rows["LastName"]."<br>";
        }

    }else{
        echo "没有找到合适的数据";
    }
    
?>