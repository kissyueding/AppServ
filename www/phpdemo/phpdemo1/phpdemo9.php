<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/11/26 0026
 * Time: 16:27
 */
//$fruit=array("banner","oriange","apple");
////没有排序前，一般是按照key的顺序进行显示
////print_r($fruit);
////sort排序
////排序之后；
//sort($fruit);
//print_r($fruit);
//echo '<br/>';
//$number=array(1,4,2,2.3,8.9,24,9.23,4.1,91);
//print_r($number);
//echo '<br/>';
//sort($number);
//print_r($number);

$numberd=array('2','12','67','14');
//按照数字的话，要看数字大小，按照字符串的话，只看第一位的大小
//sort($numberd,SORT_STRING);

print_r($numberd);
echo '<br/>';
//asort排序保留key值
//asort($numberd);
//ksort排序按照key名  排序
ksort($numberd);
print_r($numberd);
echo '<br/>';

//echo '<img src="images/1.png" style="width:100px;height:100px;margin: 10px;">';
$imj=array('1.png','2.png','3.png','4.png','5.png','6.png');
shuffle($imj);//是数组随机排列
for ($i=0;$i<3;$i++){
    echo '<img src="images/'.$imj[$i].'" style="width:100px;height:100px;margin: 10px;">';
}


$uselist=array('张一峰','张小二','张小三');
//array_unshift这个函数的返回值将得到目前数组的元素个数
//开头插入数据
array_unshift($uselist,'张望');
print_r($uselist);
echo '<br/>';
//array_push在结尾插入
array_push($uselist,'李达');
print_r($uselist);
echo '<br/>';
//删除开头的元素
array_shift($uselist);
print_r($uselist);
echo '<br/>';
//删除结尾的元素
array_pop($uselist);
print_r($uselist);
echo '<br/>';

//获取一个数组中的键（key);
//第二个参数表明随机获取第几个
$a=array_rand($uselist,1);//随机1个
echo $a[0];
echo $a[1];//多个要分开写
echo $uselist[$a];
echo '<br/>';

$newlist=array('吴起'=>12,'梁家辉'=>15,'张起灵'=>17);
//默认情况下，指针载第一条数据
//获取指针的当前元素，current并没有将指针移到下一步；
echo current($newlist);
//指针指向下一个；
echo next($newlist);
echo reset($newlist);//指针重新指向第一个；
echo prev($newlist);
echo sizeof($newlist);//和count一样
echo "<br/>";
$newli=array('吴起'=>12,'梁家辉'=>15,'张起灵'=>17);
print_r(array_count_values($newlist)); //统计数组中所有值出现的次数；
echo '<br/>';

//通过标量函数将字符串键（key)设置成变量，然后将值赋给了这个变量
$ruguo=array('a'=>'1','b'=>'2','c'=>'3','d'=>'4','e'=>'5');
print_r($ruguo);
extract($ruguo);
echo '<br/>';
echo $ruguo.'<br/>';
echo $a;
?>
<meta charset="UTF-8">
