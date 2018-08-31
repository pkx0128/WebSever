<?php
    // filter_var()函数实例
    $num = 124;
     if(filter_var($num,FILTER_VALIDATE_INT)){
         echo "this is a int ";
     }elseif(filter_var($num,FILTER_VALIDATE_FLOAT)) {
         echo "this is a float";
     }
?>