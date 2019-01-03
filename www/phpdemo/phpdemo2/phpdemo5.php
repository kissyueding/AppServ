<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/12/3 0003
 * Time: 21:01
 */
header("Content-type:text/html;charset=utf-8");
$pu='  php我是你  ';
//清理一下两边的空格，ltrim清除左边，rtrim只清除右边
//两边都清理trim，chop函数移除字符串后面多余的空白，包括新行
echo trim($pu);

//但是我想要在网页中实现换行
//在回帖的时候，一个回车就是\n
//我们通过函数来实现转换过程nl2br();
$pus="\nphp我是你,\n我是你";
echo nl2br($pus);

//将所有字符转换成html
$pua='<strong>吴起</strong>';
echo htmlentities($pua);//转换所有字符
echo htmlspecialchars($pua);//转换特殊字符
echo strip_tags($pua);//去出所有html
echo '<br/>';

$pui='我是你，\n你的名字叫什么"张一峰"';
//对于即将插入数据库的字符串，把有问题的字符处理一下
echo addslashes($pui);
$b=addslashes($pui);
//这个$b写入数据库。我拿出来的话，就会有\这个符号,需要stripcslashes这个过滤以下
echo stripcslashes($b);

echo '<br/>';
//将字符串转换为大写
echo strtoupper("asdghjkl");
//将函数字符串转换为小写
echo strtolower('ASDFHJJJ');
//将第一个字母转换为大写；
echo ucfirst("no.1212312312");
//将每个单词，第一个单词转换为大写
echo ucwords('wode.eqwqqwe.eqwqw.ewqqwe');

echo '<br/>';
//填充字符串：str_pad()将字符串用指定个数的字符串填充字符串
$tu="lk";
echo str_pad($tu,4,'#'.STR_PAD_RIGHT).'is good';

echo '<br/>';
//explode --使用一个字符串分割另一个字符串
//返回的是一个数组
//第一个参数是分割字符串，第二个字符串是要被分割的字符串

$email=explode('@','zhangyifeng330@qq.com');
print_r($email);
//for($i=0;$i<count($email);$i++){
//    $email[$i]='2018'.$email[$i];
//}
//print_r($email);
//分割完了之后，我经过一轮筛选之后我还要重新组合
$email=implode('@',$email);
echo $email;
$yu=array("12","213123","33423");
echo implode(' & ',$yu);
echo '<br/>';
$rt='i,will.be#back';
//$sdg=explode(' ',$rt);
$sdg=strtok($rt,',.#');
echo $sdg;
while ($sdg){
    echo $sdg.'<br/>';
    $sdg=strtok(',.#');
}
echo '<br/>';

//$sdg=strtok(' ');
//echo $sdg;
//print_r($sdg);



echo '<br/>';
$strs='adssadas13123@12312.com';
//substar 中间参数表示开始的位置，位置从1开始，最后一个参数是取值的个数
echo substr($strs,'1','5');

echo '<br/>';
//分解字符串，返回一个数组
$ty='他是吴起';
print_r(str_split($ty));

echo '<br/>';
//逆置字符串
echo strrev('this is my wife');

echo '<br/>';
//比较两个字符串
echo strcmp('a','b');//如果这两个字符串相等，该函数返回0，如果按字典排序str1和str2后面（str2)就返回一个正数，如果str1小于str2就返回一个负数，这个函数是区分大小写的。
echo strcmp('B','b');//返回-1，不等，
echo strcmp('2','10');//返回1，这里是非自然排序，
//不区分大小写的
echo strcasecmp('B','b');
//自然排序，不区分大小写
echo strnatcasecmp('2','10');//返回-1；

echo '<br/>';
//strspan,找出某字符串落在另一个字符串遮罩的数目
echo strspn('12312','dasasdasdsda123123',2,2);

echo '<br/>';
//测试字符串的长度
echo strlen('123123213');

echo '<br/>';
//测试字符串出现的频率
echo substr_count('dsadsadasdasdfg','f');

echo '<br/>';
//strstr 返回字符串中某字符串开始处至结束的字符串；
echo strstr('zhangyifeng@qq.com','@');//从指定的字符串开始输出指定的字符串
//不区分大小写
echo stristr('zhangyifeng@qq.com','Q');

echo '<br/>';
//strpos寻找字符串最先出现的位置
echo strpos('qweqweqweqwe','q');
//strrpos寻找字符串最后出现的位置
echo strrpos('qweqweqweqwe','q');
//替换字符串,
echo str_replace('zhangyifeng','jiaoguangqin','zhangyifeng shi sha zi ma');
//echo str_ireplace();//不区分大小写；
//从第一个位置开始，取出2个来，将它换成想要替换的
echo substr_replace('wo jiu shi yi ge sha zi','dg','1','2');

//处理中文字符
//取中文字符串长度
$zw='我是吴起';
//用普通的计算长度为字符串为两个
//echo strlen($zw);//8个
echo mb_strlen($zw,'utf-8');//4个


?>

