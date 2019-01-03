<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/12/18 0018
 * Time: 17:31
 */
session_start();
header("Content-type:text/html;charset=utf-8");
header('Access-Control-Allow-Origin:*');
date_default_timezone_set('PRC');//修改时区
$servername = "localhost";
$username = "zhangyifeng";
$password = "zhang216";
$dbname = "zb";//数据库名称

//获取用户传入数据
$id=$_POST['id'];//当是编辑或删除的时候需要传
$counts=$_POST['counts'];//决定是添加还是删除，编辑：1.添加 2.编辑 3.删除
$lsname=$_POST['lsname'];//获取用户传入流水名称
$lstime=$_POST['lstime'];//获取用户传入流水时间
$glnamea=$_POST['glnamea'];//获取用户传入流水关联姓名
$lstype=$_POST['lstype'];//获取流水的类型，1.为支出，2.为收入
$lsmoney=$_POST['lsmoney'];//获取流水金额
$bz=$_POST['bz'];//获取备注
$cztime=date('y-m-d h:i:s',time());//获取用户操作时间
$czr=$_SESSION['username'];//获取操作人

// 创建链接
$conn = new mysqli($servername, $username, $password, $dbname);
mysql_query('SET NAMES utf8') or die(json_encode(array('code' => 300, 'msg' => '字符集设置错误！')));
// 检查链接
if ($conn->connect_error) {
    die(json_encode(array('code' => 300, 'msg' => '数据库连接错误！')) . $conn->connect_error);
}
if( $czr==''){
    $ag="需要登录";
    failfuns($ag);
}
else{
    //3为删除
    if($counts =='3'){
        if(!empty($id)){
            $id=implode(",",$id);
            $roa="delete from liushui_info where id in ('$id')";
            $r = $conn->query($roa);
            if($r)
            {
                $ad="删除成功";
                successfu($ad);
                //重置id自增长
                $sqls="alter table liushui_info drop column id";
                $results=$conn->query($sqls);
                $alterpkadd="alter table liushui_info add id int(32) not null auto_increment primary key;";
                $resultd=$conn->query($alterpkadd);

            }
            else
            {
                $ac="删除失败";
                failfuna($ac);
            }
        }else{
            $ac="id不能为空";
            failfuna($ac);
        }
    }else{
        if(!empty($lsname)){
            if(!empty($lstime)){
                if(!empty($lsmoney)){
                    if(!empty($lstype)){
                        if(!empty($glnamea)){
                            //1为添加
                            if($counts=='1'){
                                //查询数据，看有没有重复的，如果重复的报错
                                $result = mysqli_query($conn,"SELECT * FROM liushui_info
WHERE lsname='$lsname'");
                                while($row = mysqli_fetch_array($result)){
                                    $rows[]=$row;
                                }
                                $rower=count($rows);
                                if($rower>=1){
                                    $ac="流水重复录入";
                                    failfuna($ac);
                                    exit;
                                }else{
                                    $sqls = "INSERT INTO liushui_info (lsname, lstime,glnamea,lstype,lsmoney,czr,bz,cztime)
     VALUES ('$lsname','$lstime','$glnamea','$lstype','$lsmoney','$czr','$bz','$cztime')";
                                    //判断是否插入成功

                                    if ($conn->multi_query($sqls) === TRUE) {
                                        $ad="插入成功";
                                        successfu($ad);
                                    } else {

                                        $ac="流水插入失败";
                                        failfuna($ac);
                                    }

                                }
                            }
                            //2为编辑
                            if($counts=='2'){
                                if(!empty($id)){
                                    $resulty="UPDATE liushui_info SET lsname='$lsname', lstime='$lstime',glnamea='$glnamea',lstype='$lstype',lsmoney='$lsmoney',bz='$bz',czr='$czr',cztime='$cztime'
			WHERE id = '$id'";
                                    $s=$conn->query($resulty);
                                    if($s)
                                    {
                                        $ad="修改成功";
                                        successfu($ad);
                                    }
                                    else
                                    {
                                        $ac="修改失败";
                                        failfuna($ac);
                                    }
                                }
                                else{
                                    $ac="id不能为空";
                                    failfuna($ac);
                                }
                            }


                        }else{
                            $ac="关联姓名不能为空";
                            failfuna($ac);
                        }
                    }
                    else{
                        $ac="流水类型不能为空";
                        failfuna($ac);
                    }
                }
                else{
                    $ac="流水金额不能为空";
                    failfuna($ac);
                }
            }else{
                $ac="流水日期不能为空";
                failfuna($ac);
            }

        }else{
            $ac="流水名称不能为空";
            failfuna($ac);
        }
    }
}






function successfu($ad){
    $success=array('code'=>200,'msg'=>$ad);
    $success=json_encode($success);
    echo $success;
}
function failfuna($ac){
    $fail=array('code'=>300,'msg'=>$ac);
    $fail=json_encode($fail);
    echo $fail;
}
function failfuns($ag){
    $fail=array('code'=>500,'msg'=>$ag);
    $fail=json_encode($fail);
    echo $fail;
}
//function failfuns(){
//    $fail=array('code'=>300,'msg'=>'添加失败,重复添加');
//    $fail=json_encode($fail);
//    echo $fail;
//}
//function failfuna(){
//    $fail=array('code'=>300,'msg'=>'角色不能为空');
//    $fail=json_encode($fail);
//    echo $fail;
//}

//关闭数据库
$conn->close();

?>