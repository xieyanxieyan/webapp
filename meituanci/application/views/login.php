<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta charset="UTF-8">
    <base href="<?php echo site_url()?>">
    <title>登录</title>
    <link rel="shortcut icon" href="img/favicon.ico"/>
    <link rel="stylesheet" href="css/jquery.mobile-1.4.5.css">
    <link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" href="css/login.css">
    <script src="javascript/rem.js"></script>
    <script src="javascript/jquery-1.12.4.js"></script>
    <script src="javascript/index.js"></script>
    <script src="javascript/login.js"></script>
    <script src="javascript/jquery.mobile-1.4.5.js"></script>
</head>
<body>
<div id="header">
    登录
</div>
<form action="user/login" method="post" id="login-form" data-ajax="false">
    <div class="ui-field">
        <label for="username">用户名：</label>
        <input type="text" name="username" id="username" placeholder="请输入用户名">
        <span id="is-use"></span>
        <label for="password">密码</label>
        <input type="password"  name="password" id="password" placeholder="请输入密码">
        <button class="ui-shadow ui-btn ui-corner-all ui-btn-inline ui-btn-icon-left ui-icon-user" id="login_page">登录</button>
        <button class="ui-shadow ui-btn ui-corner-all ui-btn-inline ui-btn-icon-left ui-icon-tag" type="button" id="register_page">新用户注册</button>
    </div>
</form>
</body>
</html>