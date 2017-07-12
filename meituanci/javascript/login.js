/**
 * Created by Administrator on 2017/7/12.
 */

$(document).on('pageinit',function(){
    var $username = $('#username');
    var $password = $('#password')
    $("#register_page").on('tap',function(){
        location.href="welcome/register_page";
    });
    $("#login_page").on('tap',function(){
        location.href="welcome/login_page";
    });


});