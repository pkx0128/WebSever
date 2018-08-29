<DOCTYPE html>
<html>
    <title> message</title>
    <body>
        <form  method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        Name:<input name = "fname" type = "text">
        <input type = "submit" text="提交">

        </form>
    </body>

    <?php
        echo "提交的数据为：".$_POST['fname'];
    ?>
</html>


