<?php
    // 连接数据库
    $con = mysqli_connect("localhost","root","Pankx0128");
    if(!$con){
        die("Could not connect mysql".mysqli_error());
    }
    // 选择数据库
    mysqli_select_db($con,"my_db");
// 根据Age列升序
    // $sql="SELECT * FROM persons ORDER BY Age";
    // 根据Age列降序排列
    $sql="SELECT * FROM persons ORDER BY Age DESC";
    $res=mysqli_query($con,$sql);
    while($row=mysqli_fetch_array($res)){
        echo $row['FirstName'].$row['LastName'].$row['Age']."<br>";
    }


?>