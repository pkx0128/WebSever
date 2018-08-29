<?php
    echo $_FILES["filename"]["name"];
    echo "<br>";
    echo $_FILES["filename"]["size"]/1024 . "kb";
    echo "<br>";
    echo $_FILES["filename"]["type"];
    echo "<br>";
    echo $_FILES["filename"]["tmp_name"];
    echo $_FILES["filename"]["error"];
?>