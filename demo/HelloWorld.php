<DOCTYPE html>
<html>
    <title> This is My First</title>
    <body>
        <?php echo "Hello World!!<br/>" ?>
        <?php
            $name = "Pankx";
            echo "Hello :".$name."<br/>";
            function sayHi(){
                global $name;
                $age = 28;
                echo "$name=".$name."<br/>";
                // echo $age;
            }
            function sayHi2(){
                echo "name=",$GLOBALS[name]."<br/>";
            }
            sayHi();    
            sayHi2();

            function sayHi3(){
               static $x=0;
                $x++;
                echo $x."<br/>";
                echo var_dump($x);
            }

            sayHi3();
            sayHi3();
            sayHi3();

            echo"<h1>This is a html tag</h1>";

            $say = "你好";
            $car = array("宝马","本田");
            echo "car is $say";
            echo "<h1>My car is {$car[1]}</h1>";

            echo var_dump($say);

            $myarray = array("java","php","C#");
            echo var_dump($myarray);
            
        ?>
    </body>

</html>