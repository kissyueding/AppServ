<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/11/29 0029
 * Time: 21:36
 */
//a表示可以追加，b表示二进制，这样可移植性好
//w
$file = '123.txt';
$fp = fopen($file, 'a+');
if(!is_writable($file)){
    exit("The $file is not writable!");
}
flock($fp, LOCK_EX);//加锁
fwrite($fp, 'here');
sleep(10);
flock($fp, LOCK_UN);//解锁
fclose($fp);

//打开目录句柄
$op=opendir('D:\phphj\AppServ\www\phpdemo\phpdemo1');
//读出目录，使用一个循环来读出
//字符串如果是布尔值，就是说，字符串不为空，那么就是真，为空就是假
//echo readdir($op);
//echo readdir($op);
//echo readdir($op);
//echo readdir($op);
//echo readdir($op);
//echo readdir($op);
while(!!$file=readdir($op)){
    echo $file.'<br/>';
}

//关闭
closedir($op);

print_r(scandir('D:\phphj\AppServ\www\phpdemo\phpdemo1'));//以数组形式展现
rmdir('D:\phphj\AppServ\www\phpdemo\sd');//删除指定目录
//重命名
rename('123.txt','wode.txt');
?>
<meta charset="UTF-8">
