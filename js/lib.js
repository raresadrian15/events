console.log("sdad");
$('.message a').click(function(){
    $('form').animate({height: "toggle", opacity: "toggle"}, "slow");
});

var registerNow= function(){
    $('.form .login-form').css('display','none');
    $('.form .register-form').css('display','block');

}