/**
 * Created by Administrator on 2017/7/6.
 */
$(function(){
    var $guideUI=$("#guide ul");
    var $navSpan = $("#nav span");
    $("#menu li").on("tap", function(){
        var productId = $(this).children('.product_id').val();
        console.log(productId );
        location.href = "welcome/detail/"+productId;
    });
    $navSpan.on("tap",function(){
        $(this).addClass('active').siblings().removeClass('active');
        $guideUI.css({
            left:-$(this).index()*$guideUI.width()/2
        });
    });
    $guideUI.on("swipeleft",function(){
        $navSpan.eq(1).addClass('active').siblings().removeClass('active');
        $guideUI.css({
            left:-$guideUI.width()/2
        });
    });
    $guideUI.on("swiperight",function(){
        $navSpan.eq(0).addClass('active').siblings().removeClass('active');
        $guideUI.css({
            left:0
        });
    });
    $('#go-top').on('tap',function() {
        if($(window).scrollTop()<=1)
        {return false;}
        $('body').animate({scrollTop:0},500);
        var top=$(this).css("top");
        $(this).animate({top:0},500,function(){
            $(this).css("top",top)
        });

    });

    $("#login").on('tap',function(){
        location.href="user/login_page"
    })
    $("#user-detail").on("tap", function(){
        location.href = "user/user_detail";
    });

    $("#logout").on("tap", function(){
        location.href = "user/logout";
    });
});
