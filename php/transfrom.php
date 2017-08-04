
<?php
//临时变量
//(变量类型)$变量名称
//特别注意(unset)$变量名称。。。。。。。临时转换不改变变量类型
$var = true;
var_dump($var);
$res=(int)$var;
var_dump($res);
var_dump($var);
echo"<hr/>";
var_dump((int)$var,(integer)$var);
echo"<br/>";
$var = 3.6;
var_dump((int)$var);
echo"<br/>";