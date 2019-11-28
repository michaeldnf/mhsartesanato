$(function(){
   $('.carrinho-btn').hover(function(){
       $('.dropdown-btn').css('border-left-color','#fff');
   }).mouseout(function(){
       $('.dropdown-btn').css('border-left-color','#1b68b7');
   });

    $('.home-btn').hover(function(){
        $('.carrinho-btn').css('border-left-color','#fff');
    }).mouseout(function(){
        $('.carrinho-btn').css('border-left-color','#1b68b7');
    });

    var tam = $(window).width(); 
    if (tam < 990){
        $('.bannerPromo').attr("src","http://localhost/mhsartesanato/Assets/images/bannerPromoCel.png");
    }
});