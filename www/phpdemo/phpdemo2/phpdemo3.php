<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/11/30 0030
 * Time: 23:26
 */
////了解全局变量
////可以将$a设置成全局变量
//
//$a=5;
//function fa(){
//     global $a;//将a设置成全局变量
//    $a=2;
//     return $a;
//}
//echo fa();
//echo $a;


//使用超级全局变量GLOBALS
$GLOBALS['a']=5;
function fg(){
    $GLOBALS['a']=2;
}
fg();
echo $GLOBALS['a'];

//调用tool.library.php中的函数
//include中如果不存在，就告诉你两个警告，然后继续执行
//require中如果不存在，他不会告诉你警告的，直接报错，会直接停止执行
//include "library/tool.library.php";//这句话把函数库包含进来
require "library/tool.library.php";//推荐使用require
echo functionPi();

//include_once 'phpdemo1.php';//h和include不同的是，他会检测，如果有已经执行的，他不会在执行
//include_once  'phpdemo1.php';
echo '这是phpdemo3.php';
?>
<meta charset="UTF-8">
