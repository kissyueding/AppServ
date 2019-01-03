<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/12/20 0020
 * Time: 14:03
 */
header("Content-type:text/html;charset=utf-8");
header('Access-Control-Allow-Origin:*');
header('Content-Type:application/json');//这个类型声明非常关键
$servername = "localhost";//服务器地址
$username = "zhangyifeng";//数据库账户名
$password = "zhang216";//数据库密码
$dbname = "zb";//数据库名称
$counts=$_POST['counts'];//决定他是编辑还是删除，1为删除，2为编辑
$id=$_POST['id'];
$rolename=$_POST['rolename'];
/*--------------------------*/
// 第一步创建链接
$conn = new mysqli($servername, $username, $password, $dbname);
mysql_query('SET NAMES utf8') or die(json_encode(array('code' => 300, 'msg' => '字符集设置错误！')));

/*--------------------------*/
// 第二步检查链接
if ($conn->connect_error) {
    die(json_encode(array('code' => 300, 'msg' => '数据库连接错误！')) . $conn->connect_error);
}
//echo $counts;
//删除角色
if( $counts =='1'){
    $id= implode(",",$_POST['id']);
    $sql = "delete from role_create where id in ($id)";
    $r = $conn->query($sql);
    if($r)
    {
        $success=array('code'=>200,'msg'=>'删除成功');
        $success=json_encode($success);
        echo $success;
        //重置id自增长
        $sqls="alter table role_create drop column id";
        $results=$conn->query($sqls);
        $alterpkadd="alter table role_create add id int(32) not null auto_increment primary key;";
        $resultd=$conn->query($alterpkadd);

    }
    else
    {
        $fail=array('code'=>300,'msg'=>'删除失败');
        $fail=json_encode($fail);
        echo $fail;
    }
}

//修改数据
if($counts=='2'){
    $resulty="UPDATE role_create SET rolename = '$rolename'
			WHERE id = '$id'";
    $s=$conn->query($resulty);
    if($s)
    {
        $success=array('code'=>200,'msg'=>'修改成功');
        $success=json_encode($success);
        echo $success;
    }
    else
    {
        $fail=array('code'=>300,'msg'=>'修改失败');
        $fail=json_encode($fail);
        echo $fail;
        echo $id;
        echo $rolename;
    }
}


//关闭数据库
$conn->close();

?>