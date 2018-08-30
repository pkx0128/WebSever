<?php
    if(isset($_POST["email"]) && isset($_POST["subjuct"]) && isset($_POST["message"])){
        mail($_POST["email"],$_POST["subjuct"],$_POST["message"]);
        echo $_POST["email"].$_POST["subjuct"].$_POST["message"];
        echo "邮件发送成功";
    }else{
        echo "<form action='message.php' method='POST'>
            <p>邮箱：<input type='text' name = 'email' value = '764670547@qq.com'></p>
            <p>主题：<input type='text' name = 'subjuct'></p>
            <p>内容：<textarea type='text' name = 'message'></textarea></P>
            <p><input type='submit'></p>
            </form>
        ";
    }
?>