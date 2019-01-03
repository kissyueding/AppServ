<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/12/1 0001
 * Time: 01:37
 */
//_FILE_
//魔法常量，这里的常量说白了就是一个值而已
$file=__FILE__;
echo $file;
//所以，一般包含文件的时候，建议采用_FILE_这样速度更快
//dirname取得目录，去掉文件名
require (dirname(__FILE__).'\phpdemo3.php');
echo __LINE__;//当前行号
function fff(){
    return __FUNCTION__;//获取函数名
}
echo fff();
?>