
<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/8/1
 * Time: 16:57
 */
//声明变量
$username = 'king';
$age = 23;
$email = '32555151@qq.com';
//变量名称以字母，下划线开始，最好含义明确，驼峰标记法
//php对象
class Car{
    var $color;
    function Car($color = 'green'){
        $this->color = $color;
    }
    function what_color(){
        return $this->color;
    }
}
//字符串函数
echo strlen('hello world');
echo strpos('hello world!','world');//如果找到，返回首歌匹配字符位置，找不到，返回false

?>

