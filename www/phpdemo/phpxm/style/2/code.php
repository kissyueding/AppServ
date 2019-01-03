<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/12/9 0009
 * Time: 23:56
 */
session_start();
define('in_tg',true);
//require defined('ROOT_PATH').'includs/comon.inc.php';//转换成硬路径更快
require dirname(__FILE__).'\includs\globa.fun.php';
_code();
?>