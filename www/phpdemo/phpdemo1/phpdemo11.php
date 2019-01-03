<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/11/28 0028
 * Time: 03:33
 */
////打开文件,第一个参数表明哪个文件，第二个表示什么模式
//$fp=fopen('123.txt','w');//r只读 r++读写  w只写  w++读写
////w如果123.txt已经有了，并且有数据了。那么，删除这个文件，重新创建
////如果没有file.txt这个文件，那么我就自行创建
////fopen返回的是自愿类型resource,我们一般称他为句柄，或者叫资源句柄
//fwrite($fp,'this is wh ! ');//向文件里写入一些数据
//$ghj="this is my father";
//fwrite($fp,$ghj,strlen($ghj));//向文件里写入一些数据,strlen()获取写入资源的长度
////当打开一个文件的时候，习惯性的将它关掉
//fclose($fp);
//$pl="我是混小子";
////就只有一句话，不需要任何其他灵活的事情的时候使用
////这个比较特殊，只有在php5的版本才可以使用
//file_put_contents("124.txt",$pl);

////\r\n换行,a是追加
//$fkp=fopen('123.txt','a');
//$outshuru="this is my name !\r\n this is your mother";
//fwrite($fkp,$outshuru,strlen($outshuru));
//fclose($fkp);
//现在要读出文件
file_put_contents('125.txt','wo shi ni');
$fp=fopen("125.txt",'r++');
//echo fgetc($fp);//读处一个字符，并将指针移到下一个字符。
//echo fgets($fp);//读出文件的一行,并返回长度最多为length-1字节的字符串。
//echo fgets($fp,2);
//echo fgetss($fp);//从文件指针中读取一行，并过滤到HTML标记；、
//echo fread($fp,2);//读取定量字符；
echo fgets($fp,3).'<br/>';
fpassthru($fp);//输出剩余的字符,本身包含了向浏览器输出的功能，所以不需要echo;
echo fpassthru($fp);//返回的是剩余的总长度
fclose($fp);
?>
<meta charset="UTF-8">
