<?php
    $name = $_POST['name'];
    $email = $_POST['email'];

    echo "你提交的数据为name:$name,email:$email";


    $getname = $_GET['name'];
    $getemail = $_GET['email'];

    echo $getname.$getemail;
?>