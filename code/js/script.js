jQuery(document).ready(function($){
    var btn = $('.page-to-top');
    btn.addClass('show');

    // $(window).scroll(function() {
    //     console.log('test');
    // if ($(window).scrollTop() >= 0) {
    //     btn.addClass('show');
    // } else {
    //     btn.removeClass('show');
    // }
    // });

    $('.back-to-top').on('click', function(e) {
    e.preventDefault();
    $('html, body').animate({scrollTop:0}, '300');
    });


});
