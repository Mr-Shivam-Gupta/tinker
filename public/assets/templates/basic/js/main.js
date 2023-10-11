(function ($) {
  "user strict";
  $(window).on('load', function () {
    $('.preloader').fadeOut(1000);
    $('body').removeClass('overflow-hidden');
    var img = $('.bg_img');
    img.css('background-image', function () {
      var bg = ('url(' + $(this).data('background') + ')');
      return bg;
    });
  });
    $(".menu>li>.submenu").parent("li").addClass("menu-item-has-children");
    // drop down menu width overflow problem fix
    $('ul').parent('li').hover(function () {
      var menu = $(this).find("ul");
      var menupos = $(menu).offset();
      if (menupos.left + menu.width() > $(window).width()) {
        var newpos = -$(menu).width();
        menu.css({
          left: newpos
        });
      }
    });
    $('.shapes-container').each(function(){
      if($(this).next().hasClass('bg--section')) {
        $(this).addClass('shapes-bg-bottom');
      }
      if($(this).prev().hasClass('bg--section')) {
        $(this).addClass('shapes-bg-top');
      }
    })
    $('.menu li a').on('click', function (e) {
      var element = $(this).parent('li');
      if (element.hasClass('open')) {
        element.removeClass('open');
        element.find('li').removeClass('open');
        element.find('ul').slideUp(300, "swing");
      } else {
        element.addClass('open');
        element.children('ul').slideDown(300, "swing");
        element.siblings('li').children('ul').slideUp(300, "swing");
        element.siblings('li').removeClass('open');
        element.siblings('li').find('li').removeClass('open');
        element.siblings('li').find('ul').slideUp(300, "swing");
      }
    })
    
    // Scroll To Top
    var scrollTop = $(".scrollToTop");
    $(window).on('scroll', function () {

      if ($(this).scrollTop() < 500) {
        scrollTop.removeClass("active");
        } else {
          scrollTop.addClass("active");
        }
      });

      //header
    var header = $(".header-bottom");
    $(window).on('scroll', function () {
      if ($(this).scrollTop() < 1) {
        header.removeClass("fadeInDown animated");
        $('.header-bottom').removeClass("active");
      } else {
        header.addClass("fadeInDown animated");
        $('.header-bottom').addClass("active");
      }
    });

    //Click event to scroll to top
    $('.scrollToTop').on('click', function () {
      $('html, body').animate({
        scrollTop: 0
      }, 500);
      return false;
    });
    //Header Bar
    $('.header-bar, .close-sidebar').on('click', function () {
      $('.header-bar, .close-sidebar').toggleClass('active');
      $('.overlay').toggleClass('active');
      $('.menu-area, .dashboard__sidebar').toggleClass('active');
    })
    $('.menu-close').on('click', function () {
      $('.overlay, .menu-area, .header-bar').removeClass('active');
    })
    $('.overlay, .close-searchbar').on('click', function () {
      $('.overlay, .dashboard-menu, .header-bar, .dashboard__sidebar, .menu-area').removeClass('active');
    });
    $('.faq__item .faq__title').on('click', function (e) {
      var element = $(this).parent('.faq__item');
      if (element.hasClass('open')) {
        element.removeClass('open');
        element.find('.faq__content').removeClass('open');
        element.find('.faq__content').slideUp(200, "swing");
      } else {
        element.addClass('open');
        element.children('.faq__content').slideDown(200, "swing");
        element.siblings('.faq__item').children('.faq__content').slideUp(200, "swing");
        element.siblings('.faq__item').removeClass('open');
        element.siblings('.faq__item').find('.faq__title').removeClass('open');
        element.siblings('.faq__item').find('.faq__content').slideUp(200, "swing");
      }
    });
    function copyBtn() {
      var copyText = document.getElementById('referral-link');
      copyText.select();
      document.execCommand('copy')
    }
    $('.copyBtn, #referral-link').on('click', copyBtn);

    $('.payment-slider').owlCarousel({
      loop: true,
      nav: false,
      dots: false,
      items: 2,
      autoplay: true,
      margin: 15,
      responsive: {
        400: {
          items: 3,
        },
        576: {
          items: 4,
        },
        768: {
          items: 5,
        },
        992: {
          items: 6,
        },
        1200: {
          items: 8,
        }
      }
    })
    
})(jQuery);
