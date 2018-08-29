<?php
//开启session
    session_start();
    //设置session
    if(isset($_SESSION["view"])){
        $_SESSION["view"] = $_SESSION["view"] + 1;
    }else{
        $_SESSION["view"] = 1;
    }

?>

<html>
    <body>
        <?php
        //获取session
            echo "访问了".$_SESSION["view"]."次";
        ?>
    </body>
</html>
<?php
    // session_destroy();
?>