
$(document).ready(function() {

  // Mobile menu toggle
  var menuButton = $('.main-navigation-button').unbind();
  $('.navigation').removeClass("show");
  menuButton.on('click', function(e) {
    e.preventDefault();
    $('.main-navigation').slideToggle(function() {
      $('.navigation').toggleClass("show");
      if($('.main-navigation').is(':hidden')) {
        $('.main-navigation').removeAttr('style');
      }
    });
  });

  // Grid hover
  $('.hover-item').on('mouseover', function() {
    $('.grid').addClass('hover');
  });

  $('.hover-item').on('mouseout', function() {
    $('.grid').removeClass('hover');
  });

  // Sticky headers
  /*var header = $('.header');
  var headerPosTop = header.position().top;
  var subNav = $('.sub-navigation');
  var subNavPosTop;
  if (subNav.length) {
    subNavPosTop = subNav.position().top;
  }
  $(window).resize(function() {
    headerPosTop = header.position().top;
    if (subNav.length) {
      subNavPosTop = subNav.position().top;
    }
  });
  $(window).scroll(function() {
    var scrollTop = $(window).scrollTop();
    if (scrollTop > headerPosTop) {
      header.addClass('fixed');
      if (scrollTop > (subNavPosTop - header.height()) && scrollTop <= subNavPosTop) {
        header.css('top', ((subNavPosTop - scrollTop) - header.height()) + 'px');
      } else if (scrollTop > subNavPosTop) {
        header.css('top', -header.height() + 'px');
      } else if (scrollTop < subNavPosTop) {
        header.css('top', '0');
      }
    } else {
      header.removeClass('fixed');
      header.removeAttr('style');
    }
    if (scrollTop > subNavPosTop) {
      subNav.addClass('fixed');
    } else {
      subNav.removeClass('fixed');
    }
  });

  // Scroll to top
  $('.scroll-to-top').on('click', function(e) {
    e.preventDefault();
    $("html, body").animate({ scrollTop: 0 }, "slow");
  });*/

});
