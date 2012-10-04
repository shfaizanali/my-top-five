$(document).ready(function(){
    $('.login-button').click(function(){
        var addr = $('.login-button').attr('id');
        window.location.href = addr;
    });
    
});

