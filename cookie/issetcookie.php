<?php
    if(isset($_COOKIE["user"])){
        echo "Hello".$_COOKIE["user"];
    }else{
        echo "welcome guest";
    }
?>