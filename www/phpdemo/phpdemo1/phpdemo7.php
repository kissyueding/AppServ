<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/11/24 0024
 * Time: 01:41
 */
//$username=array('张一峰'=>'0','李刚'=>'1','马磊'=>'2');
$username=array('张一峰','李刚','马磊');
//list只能认识key为数字的
//自定义的字符串key是无法使用list来识别的
list($z1,$z2,$z3)=$username;
echo $z1;
$a=array('a','b','c','d','e');
//list--把数组中的值赋给一些变量
list($a1,$a2,$a3)=$a;
echo $a1;


echo '<br/>';
$userjkl=array('吴起'=>19,'王刚'=>12);
//each($userjkl)将吴起19取出，0代表吴起，1代表19；
//list($named,$age)=each($userjkl);
//echo $named;
//echo $age;
//echo '<br/>';
//reset-将数组的内部指针指向第一个单元
reset($userjkl);
$a=each($userjkl);
echo  $a['key'];
each($userjkl);

//移除数组中重复的值，去重
//创建了一个新数组，新数组已经移除掉了，
//$ui=array('a'=>12,'b'=>13,'c'=>13,'d'=>14,'e'=>14,);
//print_r($ui);
//echo '<br/>';
//$a=array_unique($ui);
//print_r($a);
echo '<br/>';
$numbers=array(1,2,2,3,4,5,6,2,2,4,6,7,8,9);
$new=array_unique($numbers);
print_r($new);
echo '<br/>';

?>
<meta charset="UTF-8">
