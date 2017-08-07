
<?php
header('content-type:text/html;charset=utf-8');
//    常量，分系统常量，自定义常量，魔术常量，常量已经定义在脚本中执行时不能改变
//系统常量
echo PHP_VERSION;
echo '<br/>';
//自定义的常量
//define()函数定义常量，const关键字定义常量4
//define(name,value)定义常量
//注意：常量名称不加$，以字母或下划线开始，区分大小写。可以定义之后在任何位置使用
define('TEST','this is test');//常量值可以是标量或数组
//使用常量，直接用名称
echo TEST;
define('USERNAME','king');
define('AGE',12);
define('MARRIIED',true);
define('TEST_ARRAY',array('a','b','c'));
echo '用户名为',USERNAME,"<BR/>";
echo '年龄为：',AGE,'<br/>';
echo '婚否：',MARRIIED,'<br/>';
var_dump(TEST_ARRAY);
const WEB_TITLE = 'king的个人博客';
const WEB_BLOG_URL = 'http://blog.dddd';
echo WEB_TITLE;
//通过constant获取常量值；
echo constant('TEST');
//defined();检测常量是否存在？
var_dump(defined('TEST'));
//得到所有已定义常量，get_defined_constants();包括系统常量和自定义常
//print_r(get_defined_constants());
//__LINE__得到当前行号
//__FILE__得到当前文件的绝对路径名和文件名
//__DIR__得到文件的绝对路径
//__FUNCTION__得到当函数的名称
//__CLASS__得到当前类名
//__METHOD__得到当前类的方法名
//__NAMESPACE__得到当前命名空间的函数
echo '<hr/>';
echo __LINE__;
echo '<hr/>';
echo __FILE__;
echo '<hr/>';
echo __DIR__;