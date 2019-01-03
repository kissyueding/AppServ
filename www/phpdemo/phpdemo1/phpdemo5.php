<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/11/23 0023
 * Time: 00:01
 */
//创建一个数组变量

$usernames = array("李彦宏","周宏伟","马云","俞敏洪","李开复","雷军");
//打印数组
echo $usernames[0];
//如果你想打印出数组的某个元素
//那你必须找到这个元素的下表，键（key)
$usernames[0]="张一峰";
echo "<br/>";
//count获取数组的长度
//is_arrary()判断是否为数组
if(is_array($usernames)){
    for($i=0;$i<count($usernames);$i++){
        echo $usernames[$i];
        echo "<br/>";
    }

//如果key不是从0开始，或者压根不是数字，可以使用foreach来循环
    foreach ($usernames as $value){
        echo  $value."<br/>";
    }
//foreach遍历$key=>$value
    foreach ($usernames as $key=>$value){
        echo  $key.'--'.$value ."<br/>";
    }
    print_r($usernames);
}
else{
    echo $usernames;
}

echo "<br/>";
//range包含指定数组
//包含两种东西，一种叫做键（key),一种叫做值（value);
//key是自动生成的，默认从0开始，每次+1；
//value是自己赋值的；
$use=range(1,10);
print_r($use);//打印关于变量易于理解的东西
?>
<meta charset="UTF-8">
