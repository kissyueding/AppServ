<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/12/16 0016
 * Time: 16:57
 */

header("Content-type:text/html;charset=utf-8");
header('Access-Control-Allow-Origin:*');
/**
 * 这个是用来连接数据库的
*/
//设置常量参数
define('DB_HOST','localhost');//服务器数据库地址
define('DB_USER','zhangyifeng');//数据库账户名称
define('DB_PWD','zhang216');//数据库密码
define('DB_NAME','zb');//数据库名
header('Content-Type:application/json');//这个类型声明非常关键
//第一步，连接数据库
$conn=@mysql_connect(DB_HOST,DB_USER,DB_PWD)or die(json_encode(array('code' => 100, 'msg' => '数据库连接失败！')));

//第二步，连接指定的数据库
mysql_select_db(DB_NAME,$conn)or die(json_encode(array('code' => 300, 'msg' => '数据库错误！'))). mysql_error();
mysql_query('SET NAMES utf8') or die(json_encode(array('code' => 300, 'msg' => '字符集设置错误！')));
////第三步，获取数据库里选一张表（user_info),然后把这个表的数据库提出来（获取记录集）
//$query='SELECT * FROM user_info';
//$result=@mysql_query($query) or die(json_encode(array('code' => 500, 'msg' => 'SQL语句有错误！'))).mysql_error();
//
////第四步，输出一条记录
////print_r((mysql_fetch_array($result)));
//while($row=mysql_fetch_assoc($result)){
//    $rows[]=$row;
//}
//$raw_success = array('code' => 200, 'msg' => '获取数据成功','list'=>$rows);
//$res_success = json_encode($raw_success);
//echo $res_success;

//print_r(($rows));

////第五步释放记录集资源
//mysql_free_result($result);
//
////关闭数据库
//mysql_close($conn);
?>