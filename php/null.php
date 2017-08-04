<?php
//设置错误级别，E_ALL但是除了NOTICE
error_reporting(E_ALL&~E_NOTICE);
//1.变量未声明直接使用，职为null
//2.声明一变量赋值为null;
//3.经过unset注销过的变量
var_dump($notExistsVar);//null
//unset销毁变量
echo"<br/>";
$var = 123;
var_dump($var);
//销毁变量，可以一次销毁一个或多个，销毁后职为null
unset($var);
var_dump($var);
echo "<hr/>";
$a=$b=$c='king';
var_dump($a,$b,$c);
unset($a,$b,$c);
var_dump($a,$b,$c);
echo '<br/>';