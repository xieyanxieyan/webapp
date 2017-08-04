<?php
//告诉浏览器以什么方式解析什么类型的文档，防止中文乱码
header('content-type:text/html;charset=utf-8');
//定界符
//单引号，双引号
//区别1：单引号不解析变量，双引号解析变量
//区别2：如果内容中和定界符有冲突，就需要转义符\n换行，\r回车，\t制表，\\ \本身，\$ $, \' ',\" "
//单引号只解析\'和\\两个转义符
$username = 'king';
$email = "1948281639@qq.com";
$string = '';
var_dump($username);
echo '<br/>';
//echo可以输出一个或多个字符串，之间,分割
echo '$username';
echo '<br/>';
echo "$username";
echo '<br/>';
//$str = 'he sad "I'm fine"';
$str  = '!\r@\n\t%a\\b\'c\$de';
echo $str;
echo "<br/>";
$str  = "!\r@\n\t%a\\b\'c\$de";
echo $str;
echo '<hr/>';
$var  = 123;
echo "\$var 的值为$var";
//php引擎在解析变量时会尽可能多的向后取合法字符，认为取得越多，含义越明确
//{}作用，将php变量括成整体来解析，对字符串的指定字符做增删改查的操作
$username = 'king';
//echo "名称$username是我";//出现错误
echo "名称{$username}是我";
echo "<br/>";