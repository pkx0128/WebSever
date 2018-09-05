<?php
    // 连接数据库
    $con = mysqli_connect("localhost","root","Pankx0128");
    if(!$con){
        die("数据库连接失败".mysqli_error());
    }
// 选择数据库
    mysqli_select_db($con,"my_db");

    $sql = "SELECT * FROM persons;";

    $res = mysqli_query($con,$sql);

    echo "<table border=1>
            <tr>
            <th>FirstName</th>
            <th>LastName</th>
            <th>Age</th>
            </tr>
    ";
        while($row=mysqli_fetch_array($res)){
            echo "<tr>";
            echo "<td>".$row['FirstName']."</td>";
            echo "<td>".$row['LastName']."</td>";
            echo "<td>".$row['Age']."</td>";
            echo "</tr>";
        }


    echo "</table>";





?>