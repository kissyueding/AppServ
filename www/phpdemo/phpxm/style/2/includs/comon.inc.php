<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/12/8 0008
 * Time: 16:06
 */
header("Content-type:text/html;charset=utf-8");
//防止恶意调用
if(!defined('in_tg')){
    exit('非法调用');
}

//转换硬路径,赋值给常量
 define('ROOT_PATH',substr(dirname(__FILE__),0,-7));

//拒绝php低版本
if(PHP_VERSION<'5.2.6'){
  exit('php版本太低');
}
//引入核心函数库
require ROOT_PATH.'includs/globa.fun.php';
//执行耗时
//$_mitime=explode(' ',microtime());//获取当前时间；
$_start=_runtime();
define('_starty',_runtime());
usleep(2000);
//$_mitime=explode(' ',microtime());//获取当前时间；
//$_end=$_mitime[1]+$_mitime[0];
//echo $_end-$_start;
$_end=_runtime();
//echo $_end-$_start;
?>

