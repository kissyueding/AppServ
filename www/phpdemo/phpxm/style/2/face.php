<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/12/8 0008
 * Time: 22:17
 */
//定义常量，用来授权调用网页，防止非法调用
define('in_tg',true);
define('SCRIPTS','faces');
//引入公共文件
//require 'includs/comon.inc.php';
require defined('ROOT_PATH').'includs/comon.inc.php';//转换成硬路径更快
require ROOT_PATH.'includs/css.inc.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <script src="js/open.js"></script>
</head>
<body>
<p class="xztx">选择头像</p>

<?php
foreach(range(1,10) as $i){
   echo "<img src='../../images/icon$i.png' style='width: 100px;height: 100px;border: #efefef solid 1px;margin: 10px;cursor: pointer' onclick='_open(this.src)'>";
}
?>
<?php
foreach(range(11,27) as $i){
    echo "<img src='../../images/icon$i.png' style='width: 100px;height: 100px;border: #efefef solid 1px;margin: 10px;cursor: pointer' alt='icon$i'>";
}
?>
</body>
</html>