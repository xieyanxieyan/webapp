<?php
date_default_timezone_set('PRC');
echo date("Y年m月d日 H:i:s");
echo '<br/>';
echo date('y-m-d H:i:s',time());
echo '<hr/>';
$time = date('H',time());
if($time>=5&&$time<=10){
    echo date('y-m-d H:i:s',time()).'早上好';
}else if($time>10&&$time<14){
    echo date('y-m-d H:i:s',time()).'中午好';
}else if($time>=14&&$time<18){
    echo date('y-m-d H:i:s',time()).'下午好';
}else if($time>=18&&$time<21){
    echo date('y-m-d H:i:s',time()).'晚上好';
}else{
    echo date('y-m-d H:i:s',time()).'休息时间';
}
