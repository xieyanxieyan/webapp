<?php
//永久转换变量的类型
$var=123;
var_dump($var);
echo gettype($var);
echo '<br/>';
$var = true;
echo gettype($var);
echo '<hr/>';
$var=123;
var_dump($var);
settype($var,'bool');
var_dump($var);
echo '<hr/>';

?>