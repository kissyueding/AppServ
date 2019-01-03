<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/12/5 0005
 * Time: 16:18
 */
session_start();//开始session会话处理
header("Content-type:text/html;charset=utf-8");
//创建一个Cookie
//Cookie是在你的客户机存在一个小文件，这个文件包含你的登录时的信息
//setcookie可以创建一个客户机的cookie文件
//第一个参数表示cookie的名称，第二个参数表示cookie的值
//创建一个包含过期时间的cookie，过期时间采用当前时间戳+秒即可,time()+7*24*60*60表示未来7天；
setcookie('name','Lee',time()+7*24*60*60);
//读取本机的cookie,采用一个超级变量$_COOKIE
//里面放cookie名即可
//有一个特新，setcookie并不是及时生成，他会慢一拍
//ps，慢一拍，第一次刷新，只是生成覆盖了原来
//但获取的还是之前的，而第二次刷新，才能真正获取到
//用isset()变量判断是否存在

//isset();
//删除cookie
//setcookie('name','');
//我将过期时间调整到前一秒，就可以删除
setcookie('name','Lee',time()-1);
echo $_COOKIE['name'];

echo '<br/>';
//session只要用到这个，就必须开启session_start()
//放在文件开头
?>