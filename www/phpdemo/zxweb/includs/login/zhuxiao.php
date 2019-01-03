<?php
///**
// * Created by PhpStorm.
// * User: Administrator
// * Date: 2018/12/18 0018
// * Time: 03:23
// */
session_start();
$uty=$_POST['action'];
if($uty=='1'){
    unset($_SESSION['id']);
    unset($_SESSION['username']);
    $success=array('code'=>200,'msg'=>'退出成功，即将跳转');
    $success=json_encode($success);
    echo $success;
}else{
    $fail=array('code'=>500,'msg'=>'退出失败');
    $fail=json_encode($fail);
    echo $fail;
}

?>