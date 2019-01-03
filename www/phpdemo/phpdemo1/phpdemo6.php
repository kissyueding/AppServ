<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/11/23 0023
 * Time: 01:57
 */
//创建自定义键（key)数组
//如果你不去申明元素的key,那么从0开始计算
$usernames=array('百度'=>'李彦宏','淘宝'=>'马云','360'=>'周宏伟');
echo $usernames['百度'];

echo "<br/>" ;
$userbd=array('usename'=>'admin');
//将以前的数组追加两条
$userbd['password']='123456';
echo "<br/>";
print_r($userbd);

//arrary关键字都可以不要，就能创建数组；
//这里无法使用for循环将数据全部显示出来，只能通过foreach遍历出来
$user['names']='张一峰';
$user['password']='1234';
print_r($user);
echo '<br/>';
foreach ($user as $key=> $value){
    echo $key.'----'.$value;
    echo '<br/>';
}
echo '<br/>';
//each--返回数组中当前的键/值对并将数组指针向前移动一步
//这里有一个指针，默认情况下，指针是指向第一个键值对
//这里的第一个键值对是‘wuqi'=>12
//如果each($ad),那么获取的就是第一个键值对'wuqi'=>12
//each这个函数返回的是一个数组；
//each将第一个键值对获取到，然后包装成一个新数组；
$ad=array('wuqi'=>12,'wi'=>13,'wo'=>56);
//print_r(each($ad));
each($ad);//这个是第一步，将12，wuqi取出来，包装成新数组；
$d=each($ad);//这个是第二步了，指针已经下移一条
echo  $d['value'];
echo '<br/>';
$jd=array('wuqi'=>12,'wi'=>13,'wo'=>56);
//$g=each($jd);
//两个感叹号，将真实存在的数据转换成布尔值
//echo !!each($jd);//说明有数据，有数据，用布尔值的理念就是真（true)
//echo !!each($jd);
//echo !!each($jd);
//echo !!each($jd);//这个是假的
while (!!$l=each($jd)){
    echo $l['key'].'---'.$l['value'].'<br/>';
}
//echo $g[0].$g[1].'<br/>'
?>
<meta charset="UTF-8">
