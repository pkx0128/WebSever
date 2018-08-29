<DOCTYPE html>

<html>
    <body>
        <?php require "../include/nofile.php"?>
        <?php include "../include/menu.php"; ?>
        <h1> 欢迎您访问</h1>

        <?php include "../include/footer.php" ?>
        <?php
            include "../include/vars.php";
            echo $name.$page;
        ?>
    </body>
</html