<?php
echo 'this is a test<br/>';
//php中数据类型转换1.自动转换（隐式转换）程序根据上下文自动转换a.其他类型转换成数值型，b.其他类型转换成字符串型c.其他类型转换成bool型
echo 1+true,"<br/>";
echo 1+'3king',"<br/>";//4
echo 1+'21dede',"<br/>";//22
echo 1+'2e2a3c',"<br/>";//201
//2.强制转换（显式转换）
echo 1+'true',"<br/>";
//字符串如果以非法数值开始，直接转换成0，如果以合法字符开始，一直取到第一个非法字符
echo true;
echo"<br/>";
echo false,"<br/>";

 $arr = array();
echo $arr;
//对象不能直接转换成字符串，会报致命错误，程序终止执行
//true转换成字符串1，null,false转换成空字符串，数组转换成array
//只有空字符串或字符串0会转换成false,其他字符串转换成true
