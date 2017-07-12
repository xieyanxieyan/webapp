/**
 * Created by Administrator on 2017/7/10.
 */
$(document).on('pageinit',function(){
    $('#left img').on('tap',function(){
        location.href='index';
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
});