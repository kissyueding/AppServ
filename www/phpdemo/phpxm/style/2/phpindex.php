<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/12/8 0008
 * Time: 03:21
 * Author:zhangyifeng
 */
//定义常量，用来授权调用网页，防止非法调用
define('in_tg',true);
//引入公共文件
//require 'includs/comon.inc.php';
define('SCRIPTS','phpindex');
require defined('ROOT_PATH').'includs/comon.inc.php';//转换成硬路径更快
require ROOT_PATH.'includs/css.inc.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>首页</title>
<!--    <link rel="stylesheet" href="style.css">-->
<!--    <link rel="shortcut icon" href=" ../../images/favicon.ico" />-->
</head>
<body>
<?php
//include 'includs/header.inc.php';
require ROOT_PATH.'includs/header.inc.php';
?>
<!--居中主要内容-->
<div class="center">
    <div class="center_left">
        <div class="center_left_top">
            <div class="bt">新进会员</div>
            <div class="nr"></div>
        </div>
        <div class="center_left_footer">
            <div class="bt">最新图片</div>
            <div class="nr"></div>
        </div>
    </div>
    <div class="center_right">
        <div class="bt2">帖子列表</div>
        <div class="nr2"></div>
    </div>
</div>
<?php
require ROOT_PATH.'includs/footer.inc.php';

?>
</body>
</html>
