$(document).ready(function () {

    return;

    // Mobile menu toggle
    var menuButton = $('.main-navigation-button').unbind();
    $('.navigation').removeClass("show");
    menuButton.on('click', function (e) {
        e.preventDefault();
        $('.main-navigation').slideToggle(function () {
            $('.navigation').toggleClass("show");
            if ($('.main-navigation').is(':hidden')) {
                $('.main-navigation').removeAttr('style');
            }
        });
    });

    // Grid hover
    $('.hover-item').on('mouseover', function () {
        $('.grid').addClass('hover');
    });

    $('.hover-item').on('mouseout', function () {
        $('.grid').removeClass('hover');
    });

    // Sticky navigation
    var fixedOffset = $('.sub-navigation').offset().top;
    $(window).scroll(function () {
        var fixed = $('.sub-navigation');
        var scroll = $(window).scrollTop();

        if (scroll >= fixedOffset) {
            fixed.addClass('is-fixed');
        } else {
            fixed.removeClass('is-fixed');
        }
    });

    // Scroll to top
    $('.scroll-to-top').on('click', function (e) {
        e.preventDefault();
        $("html, body").animate({scrollTop: 0}, "slow");
    });

    // Add active class to main navigation
    $(".main-navigation li a").click(function () {
        $(".main-navigation li a").removeClass("active");
        $(this).addClass("active");
    });

});
