<?php
    date_default_timezone_set("Asia/Shanghai");
    echo date("Y-m-d")."<br>";
    echo date("Y.m.d")."<br>";
    echo date("l")."<br>";

    echo "版权所有2012-".date("Y")."<br>";

    echo date("h:i:s")."<br>";
    echo date("H:i:s")."<br>";

    $mt = mktime(12,30,10,9,23,2018);
    echo $mt."<br>";
    echo date("Y-m-d H:i:s",$mt)."<br>";

    //$st = strtotime("2018-09-20");
    $st = strtotime("next saturday");
    echo date("Y-m-d",$st);

    $dt = strtotime("December 1");
    $d2 = ceil(($dt-time())/60/60/24);
    echo $d2;
?>