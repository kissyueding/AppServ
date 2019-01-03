<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/12/23 0023
 * Time: 19:10
 */
header("Content-type:text/html;charset=utf-8");
header('Access-Control-Allow-Origin:*');
header('Content-Type:application/json');//这个类型声明非常关键
date_default_timezone_set('PRC');//修改时区
$servername = "localhost";//服务器地址
$username = "zhangyifeng";//数据库账户名
$password = "zhang216";//数据库密码
$dbname = "zb";//数据库名称
//接收数据
$usernames=$_POST['usernames'];//账户号
$passwords=$_POST['passwords'];//密码
$role=$_POST['role'];//角色名称
$roletype=$_POST['roletype'];//账户适用在那种设备，有三种：1.pc端和2.移动端以及3.都适用
$rolejb=$_POST['rolejb'];//账户权限
$glname=$_POST['glname'];//关联名字
$telphone=$_POST['telphone'];//关联的号码
$rolesId=$_POST['rolesId'];//角色名称值
$time=date('y-m-d h:i:s',time());//获取用户操作时间
/*--------------------------*/
// 第一步创建链接
$conn = new mysqli($servername, $username, $password, $dbname);
mysql_query('SET NAMES utf8') or die(json_encode(array('code' => 300, 'msg' => '字符集设置错误！')));

/*--------------------------*/
// 第二步检查链接
if ($conn->connect_error) {
    die(json_encode(array('code' => 300, 'msg' => '数据库连接错误！')) . $conn->connect_error);
}

//第三步查重，看看创建的数据在数据库里是否就有一样的账户名
$roty=mysqli_query($conn,"select * from user_info where username= '$usernames' ");
while ($rouy=mysqli_fetch_array($roty)){
    $rop[]=$rouy;
}
$rops=count($rop);
if($rops>=1){
    echo failfuns();
}
else{
    //第四步，写入数据库
    $sql="INSERT INTO user_info (username, password,date ,role,roletype,rolejb,glname,telphone,rolesId)
     VALUES ('$usernames', '$passwords','$time','$role','$roletype','$rolejb','$glname','$telphone','$rolesId')";
    if ($conn->multi_query($sql) === TRUE) {
        successfu();

    } else {
        failfun();
    }
}

function successfu(){
    $success=array('code'=>200,'msg'=>'添加成功');
    $success=json_encode($success);
    echo $success;
}
function failfun(){
    $fail=array('code'=>300,'msg'=>'添加失败');
    $fail=json_encode($fail);
    echo $fail;

}
function failfuns(){
    $fail=array('code'=>300,'msg'=>'不能重复创建同样的账户名');
    $fail=json_encode($fail);
    echo $fail;

}

//关闭数据库
$conn->close();
?>