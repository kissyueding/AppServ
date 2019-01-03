<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/11/26 0026
 * Time: 13:49
 */
$userlist=array(
    array(
        'user'=>'admin',
        'password'=>'123456',
        'reals'=>'1',
    ),
    array(
        'user'=>'9001',
        'password'=>'123456',
        'reals'=>'2',
    ),
        array(
            'user'=>'9002',
            'password'=>'123456',
            'reals'=>'2',
        ),
//    array('校长月薪:',112,2,12.4),
//    array('主任月薪:',3,123,1.24),
//    array('保安月薪:',1,123,1.24),
);
//echo($userlist[0][0]);
//print_r($userlist);
//echo '<br/>';

//for($i=0;$i<count($userlist);$i++){
//    print_r($userlist[$i]);
//    echo '<br/>';
//}


////没有列名
//for($i=0;$i<count($userlist);$i++){
//    for ($j=0;$j<count($userlist[$i]);$j++){
//        echo $userlist[$i][$j];
//
//    }
//    echo '<br/>';
//}

//有列名
for($i=0;$i<count($userlist);$i++){
    //第一种方式
//    foreach ($userlist[$i] as $value){
//        echo $value.'.';
//    }
//    echo '<br/>';
    //第二种方式
    while(list($key,$value)=each($userlist[$i])){
        echo $key.'--'.$value.'|';
    }
    echo '<br/>';
};

?>
<meta charset="utf-8">
