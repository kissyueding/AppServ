<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/11/27 0027
 * Time: 20:34
 */
//将一个路径赋给一个变量
//它目前来说，只是一个字符串，字符串表示的是一个目录的路径；
//文件名包含，文件的名称+文件的扩展名（就是.后面的文件类型）
//文件的扩展名说白了就是文件后缀
$path='D:\炸鸡\广告资料\饿了么店铺二维码.png';
echo $path;
//返回文件名
echo basename($path).'<br/>';
//返回路径的目录部分
echo dirname($path).'<br/>';
//获取路径文件的信息
print_r(pathinfo($path));
echo '<br/>';
$ujik=pathinfo($path);
echo $ujik['dirname'].'<br/>';
$pg='../hsrv.txt';//这是相对路径
echo $pg;
echo realpath($pg);

echo '<br/>';
//获取文件大小
$pathd='images/1.png';
echo round(filesize($pathd)/1024,2);//round四舍五入
echo '<br/>';
//计算磁盘的可用空间disk_free_space；
echo round(disk_free_space('C:')/1024/1024/1024,2).'GB';
echo '<br/>';
//计算磁盘的总空间disk_total_space;
$sg='C:';
echo round(disk_total_space($sg)/1024/1024/1024,2).'GB';
echo '<br/>';
//文件最后访问时间,将时间戳转换
//格式化一个本地日期；
//调整一下时区上
$kl='images/1.png';
//文件最后访问时间,将时间戳转换
date_default_timezone_set('Asia/Shanghai');//调整时区
echo '最后访问：'.date("Y-m-d H:i:s",fileatime($kl)).'<br/>';
//文件最后的改变时间,将时间戳转换，所有者权限修改
echo '权限所有者等：'.date("Y-m-d H:i:s",filectime($kl)).'<br/>';
//文件最后修改时间,将时间戳转换,文件里面的内容修改后的时间
echo '内容修改时间'.date("Y-m-d H:i:s",filemtime($kl));
?>
<meta charset="UTF-8">
