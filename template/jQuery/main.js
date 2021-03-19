$(document).ready(function(){

    $(".owl-carousel").owlCarousel({
        loop:true,
        margin:10,
        nav:true,
        dots:false,
        autoplay:true,
        autoplayTimeout:5000,
        autoplayHoverPause:true,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:2
            },
            1000:{
                items:3
            }
        }

    });

    $('.play').on('click',function(){
        owl.trigger('play.owl.autoplay',[1000])
    });

});