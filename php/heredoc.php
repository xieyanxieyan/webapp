<?php
$id=2;
$username = 'queen';
$email = '1234@qq.com';
$str = "<table border='1' width='80%'bgcolor=\"pink\">
<tr>
<td>编号</td>
<td>用户名</td>
<td>邮箱</td>
</tr>
<tr>
<td>1</td>
<td>king</td>
<td>13100887329@qq.com</td>
</tr>
<tr>
<td>{$id}</td>
<td>{$username}</td>
<td>{$email}</td>
</tr>
</table>";
echo $str;
//通过heredoc的写法
//结束之前不能有任何输出
$str=<<<EOF
this is a test
<h1 align="center">hello world 
<small>power by king</small></h1>
EOF;
echo $str;
$str =<<<table
<table border='1' width='80%'bgcolor="pink">
<tr>
<td>编号</td>
<td>用户名</td>
<td>邮箱</td>
</tr>
<tr>
<td>1</td>
<td>king</td>
<td>13100887329@qq.com</td>
</tr>
<tr>
<td>{$id}</td>
<td>{$username}</td>
<td>{$email}</td>
</tr>
</table>
table;
echo $str;
echo '<hr/>';
//heredoc相当于双引号
//nowdoc相当于单引号
$str=<<<'EOD'
<h1>this is a test</h1>
<p>用户名：{$username}</p>
EOD;
echo $str;
$str=<<<"EOF"
<h2>this is a test</h2>
<p>用户名:{$username}</p>
EOF;
echo $str;
