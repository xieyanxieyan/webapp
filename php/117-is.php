<?php
//通过变量函数库检测变量类型，is_*
$var = 123;
//注意不要使用gettype得到函数类型
//is_int|is_integer|is_long
//is_float|is_double|is_real
//is_string
//is_bool
//is_scalar标量类型
//is_null
//is_array
//is_object
//is_resource
//is_unmerice判断是否为数值型或者字符串形式的数值
echo "<hr/>";

$var = 0;
var_dump(
    is_int($var)
);
var_dump(is_int(23)); //bool(true)
var_dump(is_int("23")); //bool(false)
var_dump(is_int(23.5)); //bool(false)
var_dump(is_int(NULL)); //bool(false)
var_dump(ctype_digit(23)); //bool(true)
var_dump(ctype_digit("23")); //bool(false)
var_dump(ctype_digit(23.5)); //bool(false)
var_dump(ctype_digit(NULL)); //bool(false)
var_dump(ctype_digit("")); //bool(true)
echo "<hr/>";
$a="hello";
$b="world";
echo $a.=$b.="imook";
echo '<br/>';
$max=max([10,5,6],[5,7,8]);
echo $max;
$one='two';
$two='three';
$three='four';
echo $$$one;
echo '<br/>';
$arr="2e3abc5s";
var_dump((int)$arr);
echo '<br/>';
$str='0';
if($str)echo'真';
else echo '假';
?>

