<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/11/19 0019
 * Time: 22:28
 */
//echo $username;这种简短风格不允许用
//他会混淆和普通变量混淆
header("Content-type:text/html;charset=utf-8");
//第一步，将接收到的表单数据赋给一个变量
//将上一张表单用name的名称的value的值提取出来 value="吴起" name="username"
$username= $_POST['username'];//这个整体就会返回‘吴起’这个字符串
//如果表单采用get方式，那必须采用$_GET,一般采用在链接跳转上
echo $_GET['a'];
//echo $_GET['username'];
echo "姓名：".$username;
echo "<br/>";
echo "wo shi $username";
echo "<br/>";
echo "我是".$username;
//单引号会按照声明的原样解释，解析字符串时，变量和转义序列都不会进行解析
echo '我是：$username';
//isset判断是否存在配置
//目前所说的非法提交，是你没有进过表单提交，没有生成全局变量，而不是username为空

if(isset($_POST['username'])){
    echo '正常提交';
}else{
    echo '非法提交';
};
//!empty($_POST['username'])和==''基本一样，但是，并不能说，人家是非法的，只能说人家没有填而已；
if(!empty($_POST['username'])){
    echo '正常提交';
    $rtyu=$_POST['username'];
    //在输出之前，为了页面安全性
    $rtyu=trim($rtyu);
    $rtyu=htmlspecialchars($rtyu);
    echo $rtyu;
    if(strlen($rtyu)<2){
        echo '位数不能小于2为';
       exit;
    }
    if(!is_numeric($rtyu)){
        echo '用户名必须是纯数字';
        exit;
    }
}else{
    echo '非法提交';
};

$a=5;
$b=5;
//在网页上判断true为1，false为空
echo $a!=$b;

$week=5;

switch ($week){
    case 1:
      echo '今天星期一';
      break;
    case 2:
        echo '今天星期二';
        break;
    case 3:
        echo '今天星期三';
        break;
    default:
        echo '无聊在家';
}

echo "<br/>";
$a=10;
while($a>0){
    echo $a;
    $a--;
    echo "<br/>";
}

echo "<br/>";
for($a=0;$a<=10;$a++){
    echo $a;
    echo "<br/>";
}
echo '结束了';
echo "<br/>";
$a=10;
do{
    echo $a;
    $a--;
    echo "<br/>";
}while($a>0);

echo "<br/>";
$a='2';
$b=7+$a;
echo "7+$a=".$b;

echo "<br/>";
$a="2";
$b="7"+$a;
echo "7+$a=".$b;


echo "<br/>";
$a='123';
if(is_numeric($a)){
    echo "我是数字";
}
else{
    echo "我不是数字";
};

echo "<br/>";
echo rand(1,12);

echo '<br/>';
?>
<meta charset="utf-8">
