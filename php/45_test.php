<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>计算器</h1>
<form action="" method="post">
    num1: <input type="text" name="num1"id="">
    <select name="op" id="">
        <option value="+">+</option>
        <option value="-">-</option>
        <option value="*">*</option>
        <option value="/">/</option>
        <option value="%">%</option>
    </select>
    num2: <input type="text" name="num2" id="">
    <hr/>
    <input type="submit" name="act" value="计算">
</form>
<?php
$act=$_POST['act'];
if($act){
    $num1=$_POST['num1'];
    $num2=$_POST['num2'];
    $op=$_POST['op'];
    if(is_numeric($num1)&&is_numeric($num2)){
        if($op=='+'){
            $res=$num1+$num2;
        }else if($op=='-'){
            $res=$num1-$num2;
        }else if($op =='*'){
            $res=$num1*$num2;
        }else if($op=='/'){
            if($num2!=0)
                $res=$num1/$num2;
            exit('0不能当作除数');
        }
        else if($op=="%"){
            $res=$num1%$num2;
        }else{
            echo '非法操作';
        }
        echo "运算结果为：<br/>{$num1}{$op}{$num2}={$res}";

    }else{exit('非法操作数');}
    }

?>
</body>
</html>