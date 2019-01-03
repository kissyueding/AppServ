<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/11/18 0018
 * Time: 12:16
 */

header("Content-type:text/html;charset=utf-8");
//echo功能：向浏览器输出字符串
//返回值：void（无）
echo "我是echo";


//print功能：向浏览器输出字符串
//返回值：整型
//print将字符串打印出来，而echo又将print返回的值输出来
print "我是print";
echo print "我是重复输出";

//printf 功能：向浏览器输出字符串
//printf 返回值：字符串的长度
echo printf("我是重复输出%d",5);

echo "<br/>";
//sprintf 功能：将字符串保留在内存中
//sprintf 返回值：返回字符串
echo sprintf("我是你%d",5);


echo "<br/>";

//创建一个变量
//什么类型，整型integer，字符串，浮点型，布尔型
//创建变量的时候，通过赋值来确定它的类型；
$sum=0;
$total=1;
$total=$sum;//隐式转换
echo $total;

echo "<br/>";
//数据类型转换
$argue=1;
echo gettype($argue);
echo "<br/>";
$sum=0;
$total=(float)$sum;
echo gettype($total);//获取类型
echo settype($total,integer);//设置类型

echo "<br/>";
//isset()和unset()
//判断一个变量是否存在
//销毁一个变量
$a=5;
unset($a);
//如果$a这个变量是真的存在，那么isset($a)返回一个布尔值1,空
echo isset($a);

echo "<br/>";
$b=0;//空字符串就返回1,0是空的
echo empty($b);

echo "<br/>";
//类型判断函数
$sum=0;
echo is_integer($sum);//返回1

echo "<br/>";
//$sum 一开始是浮点型
$sum=22.22;
//intval($sum)整体变成了整型，
echo intval($sum);
//请问$sum什么类型float
echo gettype($sum);


echo "<br/>";
//常量通过define（）定义,常量无法修改
define("TOTAL",100);
echo TOTAL;
echo $_SERVER["HTTP_HOST"];
//echo phpinfo();

?>
