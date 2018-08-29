<?php
    $str = readfile("../files/demo.txt");
    $myfile = fopen("demo.txt","r") or die("打开文件错误");

    echo fread($myfile,filesize("demo.txt"));
    // echo fgets($myfile,1);
    fclose($myfile);

    echo "<br>========================";

    $rf = fopen("hi.txt","r") or die("打开文件失败");
    echo "<br>";
    echo fread($rf,filesize("hi.txt"));
    fclose($rf);
    echo "<br>========================";
    
    // echo fgets($myfile);

    $kk = fopen("demo.txt","r")or die("打开文件失败");
    echo fgetc($kk);
    // while(!feof($kk)){
    //     echo fgetc($kk);
    // }
    fclose($kk);
    $nf = fopen("hello.txt","w")or die("打开文件失败");
    $str = "Hello World!!";
    fwrite($nf,$str);
?>