<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/12/8 0008
 * Time: 17:20
 */

//定义常量，用来授权调用网页，防止非法调用
session_start();
define('in_tg',true);
//引入公共文件
//require 'includs/comon.inc.php';
define('SCRIPTS','phpzc');
require defined('ROOT_PATH').'includs/comon.inc.php';//转换成硬路径更快
require ROOT_PATH.'includs/css.inc.php';
//echo $_SESSION['code'];
if($_GET['action']==='regestior'){
    //为了防止恶意注册，遭受恶意攻击
//    if($_POST['yzm']==$_SESSION['code']){
//        $_username=$_POST['username'];
//        echo $_username;
//    }else{
//        exit('验证码不正确');
//    }
 if(!($_POST['yzm']==$_SESSION['code'])){
     _alert_back("验证码不正确");
 }else{
     //创建一个空数组，用来存放提交过来的合法数据
     $_clean=array();
     $_clean['username']=$_POST['username'];
     $_clean['password']=$_POST['password'];
     print_r($_clean);
 }

//    exit();
}
?>

<?php
$con = mysql_connect("localhost","zhangyifeng","zhang216");
if (!$con)
{
    die('Could not connect: ' . mysql_error());
}else{
    echo '连接成功';
}

// some code

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>注册</title>；
    <script src="js/face.js"></script>
</head>
<body>
<?php
require ROOT_PATH.'includs/header.inc.php';
?>

<!--注册内容-->
<div class="zc_center">
  <div class="zc_center_bt">
      会员注册
  </div>

  <div class="zc_center_nr">
      <p class="zc_title">请认真填写一下信息</p>
      <form action="phpzc.php?action=regestior" method="post">
          <table border="0" cellpadding="0" cellspacing="0" class="zc_center_tablea">
              <tr>
                  <td>客户名：</td>
                  <td><input type="text" name="username" style="width:240px;height: 30px;border: #efefef dashed 1px;border-radius: 4px;"/></td>
                  <td>(*必填，至少两位)</td>
              </tr>
              <tr>
                  <td>密    码：</td>
                  <td><input type="text" name="password" style="width:240px;height: 30px;border: #efefef dashed 1px;border-radius: 4px;"/></td>
                  <td>(*必填，至少六位)</td>
              </tr>
              <tr>
                  <td>确认密码：</td>
                  <td><input type="text" name="passwords" style="width:240px;height: 30px;border: #efefef dashed 1px;border-radius: 4px;"/></td>
                  <td>(*必填，至少六位)</td>
              </tr>
              <tr>
                  <td>密码提示：</td>
                  <td><input type="text" name="mimatishi" style="width:240px;height: 30px;border: #efefef dashed 1px;border-radius: 4px;"/></td>
                  <td>(*必填，至少两位)</td>
              </tr>
              <tr>
                  <td>密码回答：</td>
                  <td><input type="text" name="mimahuida" style="width:240px;height: 30px;border: #efefef dashed 1px;border-radius: 4px;"/></td>
                  <td>(*必填，至少两位)</td>
              </tr>
              <tr>
                  <td>性别：</td>
                  <td><input type="radio" name="sex" value="male" checked>男
                      <input type="radio" name="sex" value="female">女</td>

              </tr>
              <tr style="height: 100px !important;">
                  <td></td>
                  <td class='face'style="height: 100px !important;width: 100px !important;"><img id='faceimg' src="../../images/icon_na.png" style="width:80px;height:80px;cursor: pointer;border: #cccccc solid 1px;" ></td>
                  <td><input type="text" value="点击选择头像" id="faced" style="width: 200px;height: 30px;border: #efefef solid 1px;"></td>
              </tr>
              <tr>
                  <td>电子邮件：</td>
                  <td><input type="text" name="dianziyoujian" style="width:240px;height: 30px;border: #efefef dashed 1px;border-radius: 4px;"/></td>
                  <td></td>
              </tr>
              <tr>
                  <td>QQ：</td>
                  <td><input type="text" name="qq" style="width:240px;height: 30px;border: #efefef dashed 1px;border-radius: 4px;"/></td>
                  <td></td>
              </tr>
              <tr>
                  <td>主页地址：</td>
                  <td><input type="text" name="zuydz" style="width:240px;height: 30px;border: #efefef dashed 1px;border-radius: 4px;"/></td>
                  <td></td>
              </tr>
              <tr>
                  <td>验证码：</td>
                  <td style="width:180px !important;"><input type="text" name="yzm" style="width:150px;height: 30px;border: #efefef  dashed 1px;border-radius: 4px;"/></td>
                  <td><img src="code.php" alt="生成的图像" id="code" onclick="javascript:this.src='code.php?tm='+Math.random()" style="cursor: pointer"></td>
              </tr>
          </table>
          <input type="submit" value="注册" style="width:80px;height: 40px;line-height: 40px;margin: 10px 440px;cursor: pointer;"/>
      </form>


  </div>
</div>
</body>
</html>
