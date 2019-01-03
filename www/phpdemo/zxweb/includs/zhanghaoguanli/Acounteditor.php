<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/12/25 0025
 * Time: 03:27
 */
header("Content-type:text/html;charset=utf-8");
header('Access-Control-Allow-Origin:*');
header('Content-Type:application/json');//这个类型声明非常关键
$servername = "localhost";//服务器地址
$username = "zhangyifeng";//数据库账户名
$password = "zhang216";//数据库密码
$dbname = "zb";//数据库名称
$counts=$_POST['counts'];//决定他是编辑还是删除，1为删除，2为编辑
//接收数据
$id=$_POST['id'];
$usernames=$_POST['usernames'];//账户号
$passwords=$_POST['passwords'];//密码
$role=$_POST['role'];//角色名称
$roletype=$_POST['roletype'];//账户适用在那种设备，有三种：1.pc端和2.移动端以及3.都适用
$rolejb=$_POST['rolejb'];//账户权限
$glname=$_POST['glname'];//关联名字
$telphone=$_POST['telphone'];//关联的号码
$rolesId=$_POST['rolesId'];//角色名称id值
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
//echo $counts;
//删除角色
if( $counts =='1'){
    $id= implode(",",$_POST['id']);
    $sql = "delete from user_info where id in ($id)";
    $r = $conn->query($sql);
    if($r)
    {
        $success=array('code'=>200,'msg'=>'删除成功');
        $success=json_encode($success);
        echo $success;
        //重置id自增长
        $sqls="alter table user_info drop column id";
        $results=$conn->query($sqls);
        $alterpkadd="alter table user_info add id int(32) not null auto_increment primary key;";
        $resultd=$conn->query($alterpkadd);

    }
    else
    {
        $fail=array('code'=>300,'msg'=>'删除失败');
        $fail=json_encode($fail);
        echo $fail;
    }
}
//and password='$passwords',date='$time' and role='$role' and  roletype='$roletype'and rolejb='$rolejb' and glname='$glname'and telphone='$telphone'and rolesId='$rolesId'
//修改数据
if($counts=='2'){
    $resulty="UPDATE user_info SET  password='$passwords',username='$usernames',date='$time',role='$role',roletype='$roletype',rolejb='$rolejb',glname='$glname',telphone='$telphone',rolesId='$rolesId'
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
    }


}


//关闭数据库
$conn->close();
