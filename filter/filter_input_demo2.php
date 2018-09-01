<html>
    <body>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
        <p>url:<input type="text" name="url"></p>
        <p><input type="submit"></p>
        </form>

    </body>
</html>

<?PHP
    if(!filter_has_var(INPUT_POST,"url")){
        echo "url不存在";
    }else{
        if(!filter_input(INPUT_POST,"url",FILTER_SANITIZE_URL)){
            echo "url无效";
        }else {
            $url = filter_input(INPUT_POST,"url",FILTER_SANITIZE_URL);
            echo $url;
        }
    }
?>