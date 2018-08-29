<DOCTYPE html>
<html>
    <title>常量的定义实例</title>
        <body>
            <?php
                //定义一个对大小写不敏感的常量
                define("name","Pankx",true);
                echo Name;
                echo "<br/>";
                //定义一个对大小写敏感的常量
                define("Age","19",false);
                echo age;
                echo "<br/>";
                echo Age;
                
            ?>
        </body>
</html>