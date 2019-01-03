<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/12/8 0008
 * Time: 15:34
 */
//防止恶意调用
if(!defined('in_tg')){
    exit('非法调用');
}

?>
<!--顶部-->
<div class="top">
    <div class="top_left">瓢城Web俱乐部</div>
    <div class="top_right">
        <ul>
            <li onclick="javascript:window.location.href='../../style/2/phpindex.php'" style="cursor: pointer">首页</li>
            <li onclick="javascript:window.location.href='../../style/2/phpzc.php'" style="cursor: pointer">注册</li>
            <li>登录</li>
            <li>个人中心</li>
            <li>风格</li>
            <li>管理</li>
            <li>退出</li>
        </ul>
    </div>
</div>

