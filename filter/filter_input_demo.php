<DOCTYPE html>
    <html>
        <body>
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="GET">
                <p>Email:<input type="text" name="email"></p>
                <p><input type="submit"></p>
            </form>
        </body>
    </html>

    <?php
    // 判断否有GET类型的email输入变量
        if(filter_has_var(INPUT_GET,"email")){
            //    echo filter_has_var(INPUT_GET,"email"); 
            //    检测输入的email是否有效
            if(filter_input(INPUT_GET,"email",FILTER_VALIDATE_EMAIL)){
                echo "邮箱有效".$_GET["email"];
            }else{
                echo "邮箱地址无效";
            }
               
        }else{
            echo "no email!";
        }

    ?>