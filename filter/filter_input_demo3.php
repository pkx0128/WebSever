<html>
    <body>
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="POST">
        <p>name:<input type="text" name="myname"></p>
        <p>age:<input type="text" name="age"></p>
        <p>Email:<input type="text" name="email"></p>
        <p><input type="submit">
        </form>
    </body>
</html>

<?php
//所有多个验证条件定义为数组
    $filters = array("myname"=>array("filter"=>FILTER_SANITIZE_STRING),
        "age"=>array("filter"=>FILTER_VALIDATE_INT,"options"=>array("min_range"=>1,"max_range"=>120)),
        "email"=>array("filter"=>FILTER_VALIDATE_EMAIL)
    );
// 使用filter_input_array对输入进行验证
    $res = filter_input_array(INPUT_POST,$filters);
    if(!$res["myname"]){
        echo "名字无效<br>";
    }elseif(!$res["age"]){
        echo "年龄输入错误<br>";
    }elseif(!$res["email"]){
        echo "邮件输入错误<br>";
    }

?>