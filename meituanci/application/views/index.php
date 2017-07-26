<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width,user-scalable=no,initial-scale=1.0,maximum-scale=1.0,minimum-scale=1.0">

    <title>我的美团</title>
    <base href="<?php echo site_url();?>">
    <link rel="shortcut icon" href="img/favicon.ico" />
    <link rel="stylesheet" href="css/jquery.mobile-1.4.5.css">
    <link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" href="css/index.css">

    <script src="javascript/rem.js"></script>
    <script src="javascript/jquery-1.12.4.js"></script>
    <script src="javascript/index.js"></script>
    <script src="javascript/jquery.mobile-1.4.5.js"></script>

</head>
<body>
<div id="header">
    <div id="city">
        哈尔滨
    </div>
    <div id="search">
        <input type="text" placeholder="请输入商家/品类/商圈">
    </div>
    <div data-role="popup" id="popupMenu" data-theme="a">
                <ul data-role="listview" data-inset="true" style="min-width:2rem;">
                         <li><a id="user-detail" href="javascript:;">个人信息</a></li>
                        <li><a id="logout" href="javascript:;">退出登录</a></li>
                    </ul>
    </div>
    <div id="mine">
        <?php
            $userinfo = $this->session->userinfo;
            if($userinfo){
                echo " <a href=\"#popupMenu\" data-rel=\"popup\" data-transition=\"slideup\">". $userinfo->username. "</a>>";
            }else{
                echo "<span id='login'>登录</span>";
            }
        ?>
    </div>

</div>
<div id="banner"></div>
<div id="guide">
    <ul>
        <li>
            <img src="img/meishi.png" alt="">
            <p>美食</p>
        </li>
        <li>
            <img src="img/meishi.png" alt="">
            <p>美食</p>
        </li>
        <li>
            <img src="img/meishi.png" alt="">
            <p>美食</p>
        </li>
        <li>
            <img src="img/meishi.png" alt="">
            <p>美食</p>
        </li>
        <li>
            <img src="img/meishi.png" alt="">
            <p>美食</p>
        </li>
        <li>
            <img src="img/meishi.png" alt="">
            <p>美食</p>
        </li>
        <li>
            <img src="img/meishi.png" alt="">
            <p>美食</p>
        </li>
        <li>
            <img src="img/meishi.png" alt="">
            <p>美食</p>
        </li>
        <li>
            <img src="img/meishi.png" alt="">
            <p>美食</p>
        </li>
        <li>
            <img src="img/meishi.png" alt="">
            <p>美食</p>
        </li>
        <li>
            <img src="img/meishi.png" alt="">
            <p>美食</p>
        </li>
        <li>
            <img src="img/meishi.png" alt="">
            <p>美食</p>
        </li>
        <li>
            <img src="img/meishi.png" alt="">
            <p>美食</p>
        </li>
        <li>
            <img src="img/meishi.png" alt="">
            <p>美食</p>
        </li>
        <li>
            <img src="img/meishi.png" alt="">
            <p>美食</p>
        </li>
        <li>
            <img src="img/meishi.png" alt="">
            <p>美食</p>
        </li>
        <li>
            <img src="img/meishi.png" alt="">
            <p>美食</p>
        </li>
        <li>
            <img src="img/meishi.png" alt="">
            <p>美食</p>
        </li>
        <li>
            <img src="img/meishi.png" alt="">
            <p>美食</p>
        </li>
        <li>
            <img src="img/meishi.png" alt="">
            <p>美食</p>
        </li>
    </ul>
    <div id="nav">
        <span id="left" class="active"></span>
        <span id="right"></span>
    </div>
</div>
<div id="active">
    <div>
        <h3 class="friend">我们约吧</h3>
        <p >恋人家人好朋友</p>
        <img src="img/img/activity1.png" alt="">
    </div>
    <div>
        <h3 class="life">低价超值</h3>
        <p >十元惠生活</p>
        <img src="img/img/activity2.jpg" alt="">
    </div>
    <div>
        <h3 class="work">工作简餐</h3>
        <p >实惠方便选择多</p>
        <img src="img/img/activity3.png" alt="">
    </div>
</div>
<div class="guess">
<h3>猜你喜欢</h3>
   <ul id="menu">
<?php foreach ($result as $product){?>
       <li>
           <input type="hidden" class="product_id" value="<?php echo $product->product_id?>">
           <img src="<?php echo $product->img?>" alt="">
            <div class="brand">
                <div><?php echo $product->product_name?></div>
                <div class="youhui"><?php echo $product->description?></div>
                <div class="detail">
                    <span class="detail-name"><?php echo $product->discount_price ?>元</span>
                    <span class="price">门市价：<?php echo $product->price?>元</span>
                    <span class="detail-desc">已售<?php echo $product->num==null?0:$product->num?></span>
                </div>
            </div>
       </li>
<?php }?>
   </ul>
    <div id="go-top"></div>
</div>
<div id="footer">
    <img src="img/img/meituan.jpg" class="logo">
    <div>
        <p>9.9看电影</p>
        <p>快来美团手机客户端</p>
    </div>
    <button class="download">点击下载</button>
</div>

</body>
</html>