<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/11/30 0030
 * Time: 23:06
 */
//之前的传参都是按值传参
$price=50;
$tax=0.5;
//这个函数没有任何值出来，目前是按值传参
//函数里的变量和函数外的变量没有任何关系
function functionPrice($price,$tax){
    //里面的prices这个变量已经是75
 $price=$price+$tax*$price;
 $tax=$tax*$tax;
 echo $price;//75
 echo '<br/>';
 echo $tax;
 echo '<br/>';
 echo '<br/>';
};
functionPrice($price,$tax);
echo $price;//50
echo '<br/>';
echo $tax;
echo '<br/>';
echo '<br/>';

function functionPrices(&$price,$tax){//加了&之后
    //里面的prices这个变量已经是75
    $price=$price+$tax*$price;
    $tax=$tax*$tax;
    echo $price;//75
    echo '<br/>';
    echo $tax;
    echo '<br/>';
    echo '<br/>';
}
functionPrices($price,$tax);
//引用这个概念我们会在将opp时将，现阶段无法掌握
echo $price;//75//引用过后变成75，之前是50
echo '<br/>';
echo $tax;
echo '<br/>';
echo '<br/>';
?>
<meta charset="GBK">
