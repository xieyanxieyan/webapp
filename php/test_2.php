<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/8/2
 * Time: 10:04
 */
//php常量
//设置常量用define()
//参数一：常量名称
//参数二：常量值
//参数三：是否大小写敏感，默认false
define('GREETING','Welcome to three',false);
echo GREETING;
//关联数组
$age = array('Bill'=>"35","Steve"=>"37","Prter"=>"43");
foreach($age as $x=>$x_value){
    echo "key=".$x.",value=".$x_value;
    echo "<br/>";
}


