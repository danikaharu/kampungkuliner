$(window).scroll(function(){
    if ($(this).scrollTop() > 10 && $(window).width() >= 901) {
         $(".shape1").hide();
     }
     else if($(window).width() <= 900) {
         $(".shape1").hide();
     } else {
        $(".shape1").show();
     }
 });

 $(window).ready(function(){
    console.log("Shape 1 Z-index value is" +$('.shape1').css('z-index'));
    console.log("CTA Z-index value is" +$('.cta').css('z-index'));
    console.log("Hero Z-index value is" +$('.hero').css('z-index'));
    console.log("Navbar Z-index value is" +$('.navbar').css('z-index'));
 });