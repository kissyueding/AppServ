<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/12/17 0017
 * Time: 23:22
 */

session_start();
header("Content-type:text/html;charset=utf-8");
header('Access-Control-Allow-Origin:*');
header('Content-Type:application/json');//这个类型声明非常关键
if (isset($_SESSION['username']) && !empty($_SESSION['username'])) {
    $success=array('code'=>200,'msg'=>'已登录','username'=>$_SESSION['username']);
    $success=json_encode($success);
    echo $success;
}else{
    $fail=array('code'=>500,'msg'=>'未登录或登录已失效','username'=>$_SESSION['username']);
    $fail=json_encode($fail);
    echo $fail;
}
?>