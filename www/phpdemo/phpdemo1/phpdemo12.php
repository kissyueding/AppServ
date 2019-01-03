<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/11/28 0028
 * Time: 21:51
 */
//file是按照每行来分组存放在一个数组中；
//$rh=file('125.txt');//相对路径就可以了
//print_r($rh);
//echo $rh[0];

////readfile是将整个文件读出来，readfile本身能够直接输入浏览器，所以不需要echo;
////返回时文件字节的总长度
//readfile('125.txt');
//file_get_contents可以读入数据到缓冲区，然后通过echo来打印
//echo file_get_contents('123.txt');

//feof检测晚间指针是否到了文件的位置
$sp=fopen('125.txt','r');
while(!feof($sp)){
    echo fgetc($sp);

};
echo '<br/>';
fclose($sp);
//查看文件是否存在：file_exists();
$po='134.txt';
if(file_exists($po)){
    echo '存在文件:';
    $pl=fopen($po,'r');
    echo fgets($pl);
    fclose($pl);

}
else{
    $pl=fopen($po,'w');
    $lengthd='我是新增的文件';
    fwrite($pl,$lengthd,strlen($lengthd));
    echo '文件不存在';
    echo fgets($pl);
    fclose($pl);
};
echo round(filesize('134.txt')/1024,2).'kb';
//删除文件
//unlink('128.txt');

//rewind-到会文件指针位置
//ftell()返回指针的位置,查看指针位置
//在文件指针的定位fseek();
$fyu=fopen('123.txt','r');
//echo fgetc($fyu);
//echo fgetc($fyu);
//rewind($fyu);
//echo fgetc($fyu);
echo ftell($fyu);
fseek($fyu,5);
fclose($fyu);
?>
<meta charset="UTF-8">
