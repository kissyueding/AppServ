<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/12/8 0008
 * Time: 22:09
 */
//防止恶意调用
if(!defined('in_tg')){
    exit('非法调用');
}
if(!defined('SCRIPTS')){
    exit('非法调用');
}
?>
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="<?php echo SCRIPTS ?>.css">
<link rel="shortcut icon" href=" ../../images/favicon.ico" />
