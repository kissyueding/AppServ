<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/12/18 0018
 * Time: 17:31
 */
header("Content-type:text/html;charset=utf-8");
header('Access-Control-Allow-Origin:*');
date_default_timezone_set('PRC');//修改时区
$servername = "localhost";
$username = "zhangyifeng";
$password = "zhang216";
$dbname = "zb";//数据库名称
$rolename = trim($_POST['rolename']);//接受用户传入数据;

$time=date('y-m-d h:i:s',time());//获取用户操作时间

// 创建链接
$conn = new mysqli($servername, $username, $password, $dbname);
mysql_query('SET NAMES utf8') or die(json_encode(array('code' => 300, 'msg' => '字符集设置错误！')));
// 检查链接
if ($conn->connect_error) {
    die(json_encode(array('code' => 300, 'msg' => '数据库连接错误！')) . $conn->connect_error);
}

if(!empty($rolename)){
    //查询数据，看有没有重复的，如果重复的报错
    $result = mysqli_query($conn,"SELECT * FROM role_create
WHERE rolename='$rolename'");
    while($row = mysqli_fetch_array($result)){
        $rows[]=$row;
    }
    $rower=count($rows);
    if($rower>=1){
        failfuns();
        exit;
    }else{
        $sql = "INSERT INTO role_create (rolename, time)
     VALUES ('$rolename', '$time')";
        //判断是否插入成功
        if ($conn->multi_query($sql) === TRUE) {
            successfu();
        } else {
            failfun();
        }

    }
}
else{
    failfuna();
}


function successfu(){
    $success=array('code'=>200,'msg'=>'添加成功,正在跳转');
    $success=json_encode($success);
    echo $success;
}
function failfun(){
    $fail=array('code'=>300,'msg'=>'添加失败');
    $fail=json_encode($fail);
    echo $fail;
}
function failfuns(){
    $fail=array('code'=>300,'msg'=>'添加失败,重复添加');
    $fail=json_encode($fail);
    echo $fail;
}
function failfuna(){
    $fail=array('code'=>300,'msg'=>'角色不能为空');
    $fail=json_encode($fail);
    echo $fail;
}

//关闭数据库
$conn->close();

?>