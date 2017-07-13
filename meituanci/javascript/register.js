/**
 * Created by Administrator on 2017/7/12.
 */
$(document).on('pageinit',function(){
    // $("#register_page").on('tap',function(){
    //     location.href = 'welcome/register_page';
    // });
    var $username = $('#username');
    var $password = $('#password');
    $('#login_page').on('tap',function(){
        location.href='user/login_page'
    });
    $username.on('blur',function(){
        $.post('user/check_username',{
            "username":$(this).val()
        },function(res){
            console.log(res);
            if(res == 'no'){
                $('#is-use').html("用户名已存在，你换一个");
            }else{
                $('#is-use').html('用户名可用');
            }
        });
    });
    $("#login-form").on("submit", function(){
        if( $username.val()==""){
            return false;
        }
        if( $password.val() == ""){
            return false;
        }
    });
})