<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/11/30 0030
 * Time: 19:25
 */
//标准函数 ，内置函数
echo md5("1312312");//md5函数对字符串进行加密
echo sha1('12312312312312');//也是加密

//创建函数，不要跟系统的内置函数重名
//函数有个特性，必须调用，才可以执行
//五参数表示（）里面是空的，无返回就是函数的程序没有return
//function functionname(){
//    echo '我是一个函数';
//}
//functionname();


////包含参数无返回值得函数
////一般来说写好的函数是不用修改了。变化的是参数
//function functionArea($radius){
//    // $radius=10;
//    $area = $radius * $radius*pi();
//    echo '半径为'.$radius.'面积为'.$area;
//}
//functionArea(20);

//包含参数，有返回值
//function functionAred($radius){
//    // $radius=10;
//    $area = $radius * $radius*pi();
////    echo '半径为'.$radius.'面积为'.$area;
//    return $area;
//}
//这里的10表示默认值，如果没传值，就是表示$radius=10,就是启用默认值;
function functionAred($radius=10){
    // $radius=10;
    $area = $radius * $radius*pi();
//    echo '半径为'.$radius.'面积为'.$area;
    return $area;
}
//调用
//这样子大大提高了函数的灵活性
//functionAred（20）；整体就得到一个值，在内存里
echo '面积为:'.functionAred(20);
echo functionAred(20);
echo '<br/>';
//写一个函数要返回三条数据
//在函数里的变量和函数外的变量重名无所谓
function functionXinxi($name,$age,$job){
//  $userinfo=array($name,$age,$job);
  //也可以这样写
    $userinfo[]=$name;
    $userinfo[]=$age;
    $userinfo[]=$job;
  return $userinfo;
}
//print_r(functionXinxi('张一峰','12','美术老师'));
list($name,$age,$job)=functionXinxi('吴起','12','学生');
//list 把数组中的值赋给一些变量：
echo $name.'is'.$age.'岁'.$job.'的';
?>
<meta charset="UTF-8">
