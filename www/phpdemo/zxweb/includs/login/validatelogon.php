<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/12/17 0017
 * Time: 00:22
 */
session_start();
define('ROOT_PATH',dirname(__FILE__));
//echo dirname(__FILE__);
$username = trim(htmlspecialchars($_POST['username']));
//$password = MD5($_POST['password']);
$password = $_POST['password'];
$roletype=$_POST['roletype'];
require ROOT_PATH . '/../common.inc.php';//连接数据库

if(!empty($_POST["username"]))//确定是否存在数据
{
    if(!empty($_POST['password'])){
        if( $roletype=='pc端,移动端,全' or $roletype=='pc端'){
            $check_query = mysql_query("select * from user_info  where username='$username' and  password='$password'  limit 1");
            if($result = mysql_fetch_array($check_query)){
                //登录成功
                $raw_success = array('code' => 200, 'msg' => '登录成功');
                $res_success = json_encode($raw_success);
                $_SESSION['username']=$username;
                echo $res_success;
                exit;
            } else {
                $raw_fail = array('code' => 500, 'msg' => '登录失败,密码或账号有误');
                $res_fail = json_encode($raw_fail);
                echo $res_fail;
                exit;
            }
        }
        else{
//            echo $roletype;
            $raw_fail = array('code' => 500, 'msg' => '登录失败,您没有登录此平台权限');
            $res_fail = json_encode($raw_fail);
            echo $res_fail;
            exit;
        }

    }
    else{
        $raw_fail = array('code' => 300, 'msg' => '密码不能为空，登录失败');
        $res_fail = json_encode($raw_fail);
        echo $res_fail;
        exit;
    }

}
else{
    $raw_fail = array('code' => 400, 'msg' => '账户不能为空，登录失败');
    $res_fail = json_encode($raw_fail);
    echo $res_fail;
    exit;
}

//第五步释放记录集资源
mysql_free_result($result);

//关闭数据库
mysql_close($conn);

?>