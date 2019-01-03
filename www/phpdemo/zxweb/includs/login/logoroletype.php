<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/12/23 0023
 * Time: 20:08
 */
header("Content-type:text/html;charset=utf-8");
header('Access-Control-Allow-Origin:*');
date_default_timezone_set('PRC');//修改时区
$servername = "localhost";
$username = "zhangyifeng";
$password = "zhang216";
$dbname = "zb";//数据库名称

$usernames=$_POST['usernames'];

/*--------------------------*/
// 第一步创建链接
$conn = new mysqli($servername, $username, $password, $dbname);
mysql_query('SET NAMES utf8') or die(json_encode(array('code' => 300, 'msg' => '字符集设置错误！')));

/*--------------------------*/
// 第二步检查链接
if ($conn->connect_error) {
    die(json_encode(array('code' => 300, 'msg' => '数据库连接错误！')) . $conn->connect_error);
}

$sql="select roletype from user_info where username='$usernames'";
$row=$conn->query($sql);
$num = 0;
$rowe=mysqli_query($conn,"select * from user_info where username='$usernames'");
$num = mysqli_num_rows($rowe);
if(!$num == 0){
    while($rows=mysqli_fetch_assoc($row)){
        $raw_success = array('code' => 200, 'msg' => '获取成功','roletype'=>$rows);
        $res_success = json_encode($raw_success);
        echo $res_success;
        exit;
    }
}
else{
    $raw_success = array('code' => 300, 'msg' => '获取失败','roletype'=>$rows);
    $res_success = json_encode($raw_success);
    echo $res_success;
    exit;
}

//关闭数据库
$conn->close();
?>