
    $(".loader").delay(400).fadeOut("slow");
    new WOW().init();

    $(function () {
        $('.marquee').marquee({
            allowCss3Support: true,
            css3easing: 'linear',
            easing: 'linear',
            delayBeforeStart: 0,
            direction: 'left',
            duplicated: true,
            duration: 40000,
            gap: 30,
            pauseOnCycle: false,
            pauseOnHover: true,
            startVisible: false,
        });
    });


    $(function () {
        $(window).scroll(function () {
            if ($(this).scrollTop() > 50) {
                $('.header').addClass("header header-scroll");
            } else {
                $('.header').removeClass("header-scroll");
            }
        });


        (function mobileBtn() {
            var mobileBtnOpen = $('.open-nav-btn'),
                mobileMenu = $('.header-nav');
            mobileBtnOpen.on('click', function(){
                mobileMenu.toggleClass('show');
                $(this).toggleClass('active');
                $('.overlay').toggleClass('show');
                $('body').toggleClass('no-scroll');
                $('html').toggleClass('no-scroll');
            });
        }());

        if ($(window).outerWidth() > 767) {
            $(".text-scroll").mCustomScrollbar({
                theme:"minimal"
            });
        }

        if ($(window).outerWidth() < 1100) {
            $( ".header-nav li a" ).click(function() {
                $(this).closest('li').find( ".drop" ).slideToggle( "slow" );
                $(this).closest('li').find( ".drop" ).toggleClass('opened');
            });
        }
        if ($(window).outerWidth() > 1101) {
            if ($( ".header-nav li a " ).focus(function() {
                $(this).closest('li').find( ".drop" ).show();
            })

            );
            if ($( ".header-nav li a  ~ .drop" ).focus(function() {
                $(this).show();
            })

            );
            if (
                $( ".header-nav .drop" ).focusout(function() {
                    $(this).hide();
                })
            );
        }

        $('.Mylightgallery').lightGallery({
            thumbnail:true,
            showThumbByDefault: true,
            loop:true,
            zoom:true,
            scale:1.2,
            actualSize:false,
            appendSubHtmlTo:'.lg-sub-html',
            download:false,
        });
    });


    $(document).ready(function(){
        $("#notificationModal").modal('show');
    });

    jQuery(function($) {
        $("video").lazy();
    });

    $('.open-lang').on('click', function () {
        $('.lang-inner').toggleClass('show');
        $(this).toggleClass('active');
    });

    $( "#account-mobile-toggle" ).click(function() {
        $( ".left-menu ul" ).slideToggle( "slow" );
    });

    // $(function() {
    //     $('.lazy').lazy();
    // });

    //margin of content with fixed header block
    if ($(window).outerWidth() < 767) {
        $(document).ready(function () {
            (function () {
                var height = $('.header').outerHeight();
                $('main').css("margin-top", height);
            }());
        });
    }

    $('.mouse-scroll').on('click', function (event) {
        event.preventDefault();
        var id = $(this).attr('href'),
            top = $(id).offset().top;
        $('body,html').animate({
            scrollTop: top - 200
        }, 1000);
    });
    $('.news-block-slider').slick({
        dots: false,
        fade: false,
        infinite: true,
        slidesToScroll: 1,
        slidesToShow: 2,
        arrows: true,
        prevArrow: '<span class="slick-prev"><i class="fas fa-chevron-left"></i></span>',
        nextArrow: '<span class="slick-next"><i class="fas fa-chevron-right"></i></span>',
        autoplay: false,
        cssEase:'linear',
        pauseOnFocus:false,
        pauseOnHover:false,
        centerMode:true,
        responsive: [
            {
                breakpoint: 700,
                settings: {
                    fade:true,
                    slidesToShow: 1,
                }
            },
        ]
    });

    if($('.left-menu').length > 0) {
        $('.main-part').addClass('main-part-width');
    }

    // change background-color for body while scrolling
    // $(window).scroll(function() {
    //
    //     // selectors
    //     var $window = $(window),
    //         $body = $('body'),
    //         $panel = $('.section');
    //
    //     // Change 33% earlier than scroll position so colour is there when you arrive.
    //     var scroll = $window.scrollTop() + ($window.height() / 3);
    //
    //     $panel.each(function () {
    //         var $this = $(this);
    //
    //         if ($this.position().top <= scroll && $this.position().top + $this.height() > scroll) {
    //
    //             // Remove all classes on body with bg-color--
    //             $body.removeClass(function (index, css) {
    //                 return (css.match (/(^|\s)bg-color--\S+/g) || []).join(' ');
    //             });
    //
    //             // Add class of currently active div
    //             $body.addClass('bg-color--' + $(this).data('color'));
    //         }
    //     });
    //
    // }).scroll();

    $('.home-leaders-slider').slick({
        dots: false,
        fade: false,
        speed: 10000,
        infinite: true,
        slidesToScroll: 1,
        arrows: true,
        prevArrow: '<span class="slick-prev"><i class="fas fa-chevron-left"></i></span>',
        nextArrow: '<span class="slick-next"><i class="fas fa-chevron-right"></i></span>',
        autoplay: true,
        variableWidth: true,
        autoplaySpeed: 0,
        cssEase:'linear',
        pauseOnFocus:false,
        pauseOnHover:false,
    });


    if ($('.home--video-album-section').length) {

        $('.home--video-album-section .video-holder video').on('click', function (e) {
            $(this).closest('.video-holder').toggleClass('active');
        });
        $('.home--video-album-section .video-holder .play').on('click', function (e) {
            $(this).closest('.video-holder').toggleClass('active');

        });

        $(document).on('click', '.home--video-album-section .video-holder video', function (e) {
            var video = $(this).get(0);
            if (video.paused === false) {
                video.pause();
            } else {
                video.play();
            }
            return false;
        });

        $(document).on('click', '.home--video-album-section .video-holder play', function (e) {
            var video = this.find('.home--video-album-section .video-holder video').get(0);
            if (video.paused === false) {
                video.pause();
            } else {
                video.play();
            }
            return false;
        });
        document.getElementById('playVid').onclick = function () {
            var video = document.getElementById('videoPlayer');
            if (video.paused === false) {
                video.pause();
            } else {
                video.play();
            }
            return false;
        };

    }







