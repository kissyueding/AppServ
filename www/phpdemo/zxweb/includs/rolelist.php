<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/12/19 0019
 * Time: 00:05
 */
header("Content-type:text/html;charset=utf-8");
header('Access-Control-Allow-Origin:*');
header('Content-Type:application/json');//这个类型声明非常关键
$servername = "localhost";//服务器地址
$username = "zhangyifeng";//数据库账户名
$password = "zhang216";//数据库密码
$dbname = "zb";//数据库名称
$pageNum=trim($_POST['pageNum']);//接受用户传入页数
$pageSize=trim($_POST['pageSize']);//接受用户传入一页条数
$rolename = trim($_POST['rolename']);//接受用户传入数据

//初始化页码
if($pageNum==''){
    $pageNum=1;
}
if($pageSize==''){
    $pageSize=10;
}

/*--------------------------*/
// 第一步创建链接
$conn = new mysqli($servername, $username, $password, $dbname);
mysql_query('SET NAMES utf8') or die(json_encode(array('code' => 300, 'msg' => '字符集设置错误！')));

/*--------------------------*/
// 第二步检查链接
if ($conn->connect_error) {
    die(json_encode(array('code' => 300, 'msg' => '数据库连接错误！')) . $conn->connect_error);
}

/*-----------------------------------*/
//第三步根据搜索条件和页码和条数显示
$start =($pageNum-1) * $pageSize;//起始位置
if($rolename==''){
    $row = "select * from role_create limit ".$start.",".$pageSize;
}
else{
    $row = "select * from role_create where rolename='$rolename' limit ".$start.",".$pageSize;
}
$rows=mysqli_query($conn,$row);
while($rowd=mysqli_fetch_assoc($rows)) {
  $rowr[]=$rowd;
}

/*----------------------------------*/
//第四步获取总条数countNumber和总页数
$rowe=mysqli_query($conn,'select * from role_create');
$countNumber=mysqli_num_rows($rowe);
$totalpage=ceil($countNumber/$pageSize);


/*-----------------------------------*/
//第五步创建对象存储页码和条数以及总条数和总页码
$data = new stdClass();
$data->pageNum=$pageNum;
$data->pageSize=$pageSize;
$data->countNumber=$countNumber;//总条数
$data->totalpage=$totalpage;//总页数

/*-------------------------------------*/
//成功输出
$success=array('code'=>200,'data'=>$data,'list'=>$rowr);
$success=json_encode($success);
echo $success;
mysqli_close($conn);
?>