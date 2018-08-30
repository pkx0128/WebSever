<?php
    $v = 2;
    if($v>1){
        trigger_error("触发错误！",E_USER_ERROR);
    }else{
        echo "pass!";
    }
?>