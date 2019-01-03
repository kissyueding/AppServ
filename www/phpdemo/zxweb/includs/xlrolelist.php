<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/12/21 0021
 * Time: 02:38
 * 下拉角色列表
 */
header("Content-type:text/html;charset=utf-8");
header('Access-Control-Allow-Origin:*');
header('Content-Type:application/json');//这个类型声明非常关键
$servername = "localhost";//服务器地址
$username = "zhangyifeng";//数据库账户名
$password = "zhang216";//数据库密码
$dbname = "zb";//数据库名称
/*--------------------------*/
// 第一步创建链接
$conn = new mysqli($servername, $username, $password, $dbname);
mysql_query('SET NAMES utf8') or die(json_encode(array('code' => 300, 'msg' => '字符集设置错误！')));

/*--------------------------*/
// 第二步检查链接
if ($conn->connect_error) {
    die(json_encode(array('code' => 300, 'msg' => '数据库连接错误！')) . $conn->connect_error);
}

//第三步检索出数据
$sql="select * from role_create";
$r=$conn->query($sql);

if($r){
    while($rowd=mysqli_fetch_assoc($r)) {
        $rowr[]=$rowd;
    }
    $success=array('code'=>200,'msg'=>'获取成功','list'=>$rowr);
    $success=json_encode($success);
    echo $success;
}
else{
    $fail=array('code'=>300,'msg'=>'获取失败');
    $fail=json_encode($fail);
    echo $fail;
}

mysqli_close($conn);
?>