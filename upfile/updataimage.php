<?php
    if($_FILES["filename"]["type"]=="image/gif" || 
    $_FILES["filename"]["type"]=="image/jpeg" || 
    $_FILES["filename"]["type"]=="image/pjpeg" ||
    $_FILES["filename"]["type"]=="image/png"
    && $_FILES["filename"]["size"]<1024000){

        if($_FILES["filename"]["error"]>0){
            echo "上传失败";
        }else{
            echo $_FILES["filename"]["name"]."<br>";
            echo $_FILES["filename"]["type"]."<br>";
            echo $_FILES["filename"]["tmp_name"]."<br>";
            echo $_FILES["filename"]["size"] / 1024 ."KB";

            if (file_exists("upload".$_FILES["filename"]["name"])){
                echo $_FILES["filename"]["name"]."is already exists!";              
            }else {
                move_uploaded_file($_FILES["filename"]["tmp_name"],"upload/".$_FILES["filename"]["name"]);
            }
        }
    }else{
        echo $_FILES["filename"]["error"];
    }

?>