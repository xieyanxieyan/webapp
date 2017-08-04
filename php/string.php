
<?php
//根据下标找到相应字符做操作
$string = 'abcdef';
echo $string{0};
echo "<br/>";
echo $string{5};
//修改时只能一对一
$string{1}='z';
echo "<br/>$string";
echo "<br/>";
$string{0} = 'hello';
echo $string;
//不要对中文字符进行操作
$string = '你好';
var_dump($string);//你好，length为6
echo "<hr/>";
//删除
$string = "abcdef";
$string{2}='';
echo $string;
//添加字符，一次只能添加一个
$string = 'abc';
$string{3}='d';
echo $string;
echo"<br/>";
$string = 'abc';
$string{5} = 'e';
echo $string;
echo "<br/>";
echo "<hr/>";
$string = "king";
echo $string{0};
echo "<br/>";
$string{2}='o';
echo $string;
echo "<br/>";
$string{3}='';
echo $string;
echo"<br/>";
$string{3}='s';
var_dump($string) ;
echo "<br/>";
