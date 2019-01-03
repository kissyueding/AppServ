<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/12/5 0005
 * Time: 15:17
 */
//重新导向一个url
//header
//header('Location:https://www.baidu.com/');//跳转到百度
//在执行header()函数，必须注意，之前不能有任何浏览器输出，除非开启缓冲
//ob_start();开启缓冲
header('Content-Type:text/html;charset=utf-8');
echo '我是你的';
?>
<!--<meta charset="UTF-8">-->
