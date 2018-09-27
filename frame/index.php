<?php
    /**
     * 学习框架开发
     * 入口文件
     * 1.定义常量(a.项目根目录，b.项目核心文件目录，c.项目文件目录)
     * 2.加载函数库
     * 3.启动框架
     */


    // 项目根目录
    define('IMOOC',realpath('./'));
    // 项目核心文件目录
    define('CORE',IMOOC.'/core');
    // 项目文件目录
    define('APP',IMOOC.'/app');
    // 定义是否开启调试模式常量
    define('DEBUG',true);
    // 判断调试模式
    if(DEBUG){
        ini_set('display_error','on');
    }else{
        ini_set('display_error','off');
    }
    echo IMOOC;
    // 加载函数库
    include CORE.'/common/function.php';
    include CORE.'/imooc.php';
    // 启动框架
    \core\imooc::run();
?>