/*********************************************************************************

	Template Name: Karbar - Multipurpose Bootstrap 4 Template
	Template URI: https://themeforest.net/user/themes-hub   
	Description: Karbar is a best templete for your corporate/business website which comes with unique design and user friendly code.  
	Author: Themes-Hub
	Author URI: https://hastech.company/
	Version: 1.0

    Note: This is scripts js. All custom scripts here.

**********************************************************************************/

/*===============================================================================

    [ INDEX ]
	|
    |___Body Overlay
    |___Trigger Menu
    |___Button Effect
    |___Trigger Sidemenu
    |___Banner Padding
    |___Mouse Parallax
    |   |___Banner Layers Parallax
    |   |___Banner Content Parallax
    |
    |___Trigger Sidemenu Another
    |___Sticky Header
    |___Last Dropdown Selector
    |___Sidemenu Dropdown
    |___Contact Form Message Popup
    |
	[END INDEX ]

================================================================================*/

(function ($) {
    'use strict';

    /* Body Overlay */
    $('<div class="body-overlay"></div>').appendTo($('.wrapper'));

    function bodyOverlay() {
        $('html').css('overflow-y', 'hidden');
        $('.body-overlay').addClass('is-visible')
            .on('click', function () {
                $(this).removeClass('is-visible');
                $('.header-sidemenu-minimal').removeClass('is-visible');
                $('.sidemenu-header-optional-trigger').removeClass('is-active');
                $('.wrapper').removeClass('left-offset-active');
                $('html').css('overflow-y', 'auto');
            });

    }


    //fileter checkbox checked
    var ckbox = $('.ck_contian input[type="checkbox"]');

    $(ckbox).on('click',function () {
        if (ckbox.is(':checked')) {
            $('html, body').delay(700).animate({ scrollTop: 0 }, 1200);

        } else {
            $('html, body').delay(700).animate({ scrollTop: 0 });
        }
    });





//site scroll easing

    $(function() {

        jQuery.scrollSpeed(100, 800);

    });

    $(window).on('load', function() { // makes sure the whole site is loaded
        $('#status').fadeOut(); // will first fade out the loading animation
        $('#preloader').delay(350).fadeOut('slow'); // will fade out the white DIV that covers the website.
        $('body').delay(350).css({'overflow':'visible'});
    });



    //Scroll down icon (Slider)
    // $(function() {
    //     $('a[href*=#]').on('click', function(e) {
    //         e.preventDefault();
    //         $('html, body').animate({ scrollTop: $($(this).attr('href')).offset().top}, 500, 'linear');
    //     });
    // });

    $(function() {
        $('.scroll-down').click (function() {
            $('html, body').animate({scrollTop: $('#about-sec').offset().top }, 700, 'linear');
            return false;
        });
    });



    /* Trigger Menu */
    var slideMenu = function (container, trigger) {
        var slideMenuContainer = container;
        var slideMenutrigger = trigger;
        $(slideMenutrigger).on('click', function () {
            $(this).toggleClass('is-active')
                .siblings(slideMenuContainer).toggleClass('is-visible');
        });
    };
    var slidemenu1 = new slideMenu('.slide-menu-inner', '.header-style-2 .trigger-menu-icon');



    /* Button Effect */
    function buttonEffect() {
        $('<b></b>').appendTo('.cr-btn');
        $('.cr-btn')
            .on('mouseenter', function (e) {
                var parentOffset = $(this).offset(),
                    relX = e.pageX - parentOffset.left,
                    relY = e.pageY - parentOffset.top;
                $(this).find('b').css({
                    top: relY,
                    left: relX
                });
            })
            .on('mouseout', function (e) {
                var parentOffset = $(this).offset(),
                    relX = e.pageX - parentOffset.left,
                    relY = e.pageY - parentOffset.top;
                $(this).find('b').css({
                    top: relY,
                    left: relX
                });
            });
        $('[href="#"]').click(function () {
            return false;
        });
    }
    buttonEffect();




    /* Trigger Sidemenu */
    function triggerHeader() {
        var menuContainer = $('.header-sidemenu-triggered');
        $('<button class="header-sidemenu-trigger"><i class="flaticon-signs"></i></button>').appendTo(menuContainer)
            .on('click', function () {
                $(this).find('i').toggleClass('flaticon-close flaticon-signs');
                menuContainer.toggleClass('is-visible');
            });
    }
    triggerHeader();





    /* Banner Padding */
    function fixedHeader() {
        var winWidth = $(window).width();
        if (!$('.sidemenu-wrapper').length) {

            if (winWidth > 991) {
                if ($('.fixed-header').length) {
                    var headerHeight = $('.header').innerHeight();
                    $('.single-banner').css({
                        'min-height': 'calc(100vh - ' + headerHeight + 'px)',
                    });
                    $('.fixed-header').next().css({
                        'margin-top': headerHeight + 'px'
                    });
                }
            }

        }
    }
    fixedHeader();





    /* Mouse Parallax */
    // Banner Layers Parallax
    function mouseParallax() {
        var trigger = $('.banner-layers');
        var container = $('.banner-area');
        container.mousemove(function (e) {
            var leftOffset = e.pageX;
            var topOffset = e.pageY;
            var currentPosLeft = (container.width() / 2) - leftOffset;
            var currentPosTop = (container.height() / 2) - topOffset;

            trigger.css({
                'transform': 'translate(' + currentPosLeft / 50 + 'px, ' + currentPosTop / 50 + 'px)'
            });
        });
    }
    mouseParallax();




    // Banner Content Parallax
    function mouseParallax2() {
        var trigger = $('.single-banner-content-parallax');
        var container = $('.banner-area');
        container.mousemove(function (e) {
            var leftOffset = e.pageX;
            var topOffset = e.pageY;
            var currentPosLeft = (container.width() / 2) - leftOffset;
            var currentPosTop = (container.height() / 2) - topOffset;

            trigger.css({
                'transform': 'translate(' + currentPosLeft / 50 + 'px, ' + currentPosTop / 50 + 'px)'
            });
        });
    }
    mouseParallax2();





    /* Trigger Sidemenu Another */
    function headerSidemenuOptionalTrigger() {
        var trigger = $('.sidemenu-header-optional-trigger');
        var container = $('.header-sidemenu-minimal');
        trigger.on('click', function () {
            container.toggleClass('is-visible');
            $(this).toggleClass('is-active');
            $('.wrapper').toggleClass('left-offset-active');
            bodyOverlay();
        });
    }
    headerSidemenuOptionalTrigger();



    /* Sticky Header */
    $(window).on('scroll', function () {
        var scrollPos = $(this).scrollTop();
        if (scrollPos > 300) {
            $('.sticky-header').addClass('is-sticky');
        } else {
            $('.sticky-header').removeClass('is-sticky');
        }
    });

    /* Header for mobile */
    $(window).on('scroll', function () {
        var mobscrollPos = $(this).scrollTop();
        if (mobscrollPos > 150) {
            $('#wsnavtoggle').addClass('mobile-header');
        } else {
            $('#wsnavtoggle').removeClass('mobile-header');
        }
    });




    /* Last Dropdown Selector */
    function menuDropdownLast() {
        $('nav.menu > ul > li').slice(-3).addClass('last-element');
    }
    menuDropdownLast();




    /* Sidemenu Dropdown */
    function sidemenuDropdown() {
        var $this = $('.header-sidemenu');
        $this.find('nav.menu .cr-dropdown')
            .find('ul').slideUp();
        $this.find('nav.menu li.cr-dropdown > a, nav.menu li.cr-sub-dropdown > a').on('click', function (e) {
            e.preventDefault();

            $(this).next().slideToggle();
        });
    }
    sidemenuDropdown();




    // Contact Form Message Popup
    function contactFormPopup() {
        var trigger = $('#contact-form [type="submit"]'),
            container = $('.cr-contact-message-modal');

        trigger.on('click', function () {
            container.addClass('is-visible');
        });

        $('<button><i class="icofont icofont-close"></i></button>').appendTo(container).on('click', function () {
            container.removeClass('is-visible');
        });
    }
    contactFormPopup();


    //light gallery
    $(document).ready(function(){
        $('#video-gallery').lightGallery();
        $('#lightgallery').lightGallery();

        $('#video-player-param').lightGallery({
            youtubePlayerParams: {
                modestbranding: 1,
                showinfo: 0,
                rel: 0,
                controls: 0
            },
            vimeoPlayerParams: {
                byline : 0,
                portrait : 0,
                color : 'A90707'
            }
        });
        $('#video-thumbnails').lightGallery({
            loadYoutubeThumbnail: true,
            youtubeThumbSize: 'default',
            loadVimeoThumbnail: true,
            vimeoThumbSize: 'thumbnail_medium',
        });
    })

    //company overview page content tree
    var $timeline_block = $('.cd-timeline-block');

    //hide timeline blocks which are outside the viewport
    $timeline_block.each(function(){
        if($(this).offset().top > $(window).scrollTop()+$(window).height()*0.75) {
            $(this).find('.cd-timeline-img, .cd-timeline-content').addClass('is-hidden');
        }
    });

    //on scolling, show/animate timeline blocks when enter the viewport
    $(window).on('scroll', function(){
        $timeline_block.each(function(){
            if( $(this).offset().top <= $(window).scrollTop()+$(window).height()*0.75 && $(this).find('.cd-timeline-img').hasClass('is-hidden') ) {
                $(this).find('.cd-timeline-img, .cd-timeline-content').removeClass('is-hidden').addClass('bounce-in');
            }
        });
    });



})(jQuery);

