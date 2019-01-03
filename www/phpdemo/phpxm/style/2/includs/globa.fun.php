<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/12/8 0008
 * Time: 16:47
 */

/**
 *_runtime()是用来获取执行耗时的
 * @access public表示函数公开
 * @return float 表示返回出来的是一个浮点型数字
 */
function _runtime(){
    $_mitime=explode(' ',microtime());//获取当前时间；
    return $_mitime[1]+$_mitime[0];
};
/**
 * _code()是用来获取验证码的
 */
function _code(){
    //引入公共文件
//1>.创建一个图像，规定他的大小
    $_img = imagecreatetruecolor(100, 30);    //1>设置验证码图片大小的函数
//5>
    $_width=100;
    $_height=30;
//2>设置验证码颜色 imagecolorallocate(int im, int red, int green, int blue);
    $bgcolor = imagecolorallocate($_img,255,255,255); //#ffffff
//3>区域填充 int imagefill(int im, int x, int y, int col) (x,y) 所在的区域着色,col 表示欲涂上的颜色
    imagefill($_img, 0, 0, $bgcolor);
//44>设置黑色边框
    $_black=imagecolorallocate($_img,0,0,0);
    imagerectangle($_img,0,0,$_width-1,$_height-1,$_black);

//5>设置变量
    $_numcode = "";
    $captcha_code="";
////创建图像高度，宽度
//$_width=100;
//$_height=30;
////创建一个图像
//$_img=imagecreatetruecolor($_width, $_height);
////白色
//$_white=imagecolorallocate($_img,255,255,255);
////填充白色
//imagefill($_img,0,0,$_white);
//6>新建随机数组
    for($i=0;$i<4;$i++){
        $_numcode=dechex(mt_rand(0,15));//创建随机数,将十进制转换为十六进制
        $captcha_code .=$_numcode;
        //设置字体大小
        $fontsize = 6;
        //设置字体颜色，随机颜色
        $fontcolor = imagecolorallocate($_img, mt_rand(0,120),mt_rand(0,120), mt_rand(0,120));      //0-120深颜色
        //设置坐标
        $x = ($i*100/4)+mt_rand(5,10);
        $y = mt_rand(5,10);
        imagestring($_img,$fontsize,$x,$y,$_numcode,$fontcolor);
    };
//7>保存在session
    $_SESSION['code']=$captcha_code;


//8>增加干扰元素，设置雪花点
    for($i=0;$i<200;$i++){
        //设置点的颜色，50-200颜色比数字浅，不干扰阅读
        $pointcolor = imagecolorallocate($_img,mt_rand(50,200), mt_rand(50,200), mt_rand(50,200));
        //imagesetpixel — 画一个单一像素
        imagesetpixel($_img, mt_rand(1,99), mt_rand(1,29), $pointcolor);
    }
//9>增加干扰元素，设置横线
    for($i=0;$i<6;$i++){
        //设置线的颜色
        $linecolor = imagecolorallocate($_img,mt_rand(80,220), mt_rand(80,220),mt_rand(80,220));
        //设置线，两点一线
        imageline($_img,mt_rand(1,99), mt_rand(1,29),mt_rand(1,99), mt_rand(1,29),$linecolor);
    }
//10>设置php文件为png 类型，image.php
    header('Content-Type: image/png');

//11>生成png 图像
    imagepng($_img);
//12>销毁图像
    imagedestroy($_img);
};
function _alert_back($s){
    echo "<script type='text/javascript'>alert('$s');history.back();</script>";
    exit();
}
?>