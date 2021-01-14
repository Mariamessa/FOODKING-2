$(function() {
    'use strict';
    // header height
    // var winH = $(window).height(),
    //     navH = $('.navbar').innerHeight();
    // $('.header').height(winH - navH);

    $('.header').height($(window).height());

    // Trigger nice scroll
    // $('html').niceScroll();

    // Change header hight

    // Resize
    $(window).resize(function() {
        $('.intro ').each(function() {
            $(this).css('paddingTop', ($(window).height() - $('.intro').height()) / 2);
        });
    });

    // Text position center

    $('.intro').each(function() {
        $(this).css('paddingTop', ($(window).height() - $('.intro').height()) / 2);
    });
    //Arrow clicked animation

    $('.header .arrow i').click(function() {
        $('html, body').animate({
            scrollTop: $('.section').offset().top
        }, 1000);
    });



    // Trigger Nice scroll
    // $('html').niceScroll({
    //     cursorcolor: '#74b9ff',
    //     cursorwidth: '7px',
    //     cursorborder: '1px solid #74b9ff'
    // });

});
// fixed navbar
// $(function(){

//     $(window).scroll(function(){

//         if($(this).scrollTop()>400)
//         {
//             $("#top").fadeIn();
//             $("#navbar").addClass("fixednav")
//         }
//         else
//         {
//             $("#top").fadeOut()
//             $("#navbar").removeClass("fixednav")
//     }
//     })})