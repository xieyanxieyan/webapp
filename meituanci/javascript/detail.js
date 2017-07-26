/**
 * Created by Administrator on 2017/7/10.
 */
$(document).on('pageinit',function(){
    $('#left img').on('tap',function(){
        location.href='welcome/index';
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
    $('#collect-btn').on('tap',function(){
        //将收藏信息插入到数据库
        //userid product_id
        var _that = $(this);
        var productId = $('#hidden-product-id').val();
        // console.log(productId);
        if(!_that.hasClass('active')){
            $.get('user/check_logined',{},function(aa){
                if(aa.trim() == 'yes'){
                    //做收藏
                    $.get('user/collect',{'productId':productId},function(data){
                        if(data.trim()=='success'){
                            _that.text('取消');
                            _that.addClass('active');
                        }
                    },'text');
                }else{
                    location.href = "user/login_page";
                }
            },'text');
        }
        else{
            //做取消
            console.log("xsxx");
            $.get('user/cancel_collect',{'productId':productId},function(data){
                if(data == 'sucess'){
                    _that.text('收藏');
                    _that.removeClass('active');
                }
            },'text')
        }

    })
});