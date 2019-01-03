<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/12/8 0008
 * Time: 15:40
 */
//防止恶意调用
if(!defined('in_tg')){
    exit('非法调用');
}
$_end=_runtime();
//echo $_end-$_start;
?>
<!--底部-->
<div class="footer">
    <p>本程序执行耗时：<?php echo round(_runtime()-_starty,4) ?>秒</p>
    <p>版权所有    翻版必究</p>
</div>
