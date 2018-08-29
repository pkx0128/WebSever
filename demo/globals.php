<?php
    //超全局变量$GLOBALS
    $x = 5;
    $y = 10;
    function add(){
       $GLOBALS['z']=$GLOBALS['x']+$GLOBALS['y'];
    }
    add();
    echo $z;
?>