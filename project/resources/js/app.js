/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');


import Swiper, {Navigation, Pagination, Autoplay, EffectFade, Thumbs} from 'swiper';

Swiper.use([Navigation, Pagination, Autoplay, EffectFade, Thumbs]);

(function ($) {
    $(document).ready(function () {

        //mobilka
        $('#menu-burger__header').click(function(){
            $('.menu-burger__header').addClass('open-menu');

        });


        // $('a[href^="#"]').bind('click.smoothscroll', function (e) {
        //     e.preventDefault();
        //     var target = this.hash,
        //         $target = $(target);
        //     $('html, body').stop().animate({
        //         'scrollTop': $target.offset().top
        //     }, 500, 'swing', function () {
        //         window.location.hash = target;
        //     });
        // });

        $('.menu-burger__header').click(function(){
            $('.header__nav .header__auth').toggleClass('open-menu');
            $('.menu-burger__header').toggleClass('open-menu');
            $('.header__media').toggleClass('open-menu');
            $('.header__nav').toggleClass('open-menu');
            $('body').toggleClass('fixed-page');
        });

        $('.menu-user').click(function(){
            $(this).toggleClass('active');
        });

        const swiperBanner = new Swiper('.swiperBanner', {
            slidesPerView: 1,
            spaceBetween: 30,
            breakpoints: {
                320: {
                    slidesPerView: 1,
                    spaceBetween: 20
                },
                1080: {
                    slidesPerView: 1,
                    spaceBetween: 30
                }
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
        })

        const swiperPopular = new Swiper('.swiperPopular', {
            slidesPerView: 4,
            spaceBetween: 20,
            breakpoints: {
                320: {
                    slidesPerView: 2,
                    spaceBetween: 20
                },

                1080: {
                    slidesPerView: 4,
                    spaceBetween: 15
                }
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
        })

        const swiperNew = new Swiper('.swiperNew', {
            slidesPerView: 4,
            spaceBetween: 20,
            breakpoints: {
                320: {
                    slidesPerView: 2,
                    spaceBetween: 10
                },

                1080: {
                    slidesPerView: 4,
                    spaceBetween: 15
                }
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
        })

        if ($(window).width() < 768) {
            $('.changed').prepend( $('.first') );
        }
        if ($(window).width() > 768) {
            $('.changed').append( $('.first') );
        }
    });


    //счетчик товаров
    $('main').on('click', '.number-minus, .number-plus', function(){
        var $row = $(this).closest('.number');
        var $input = $row.find('.number-text');
        var step = $row.data('step');
        var val = parseFloat($input.val());
        if ($(this).hasClass('number-minus')) {
            val -= step;
        } else {
            val += step;
        }
        $input.val(val);
        $input.change();
        return false;
    });

    $('main').on('change', '.number-text', function(){
        var $input = $(this);
        var $row = $input.closest('.number');
        var step = $row.data('step');
        var min = parseInt($row.data('min'));
        var max = parseInt($row.data('max'));
        var val = parseFloat($input.val());
        if (isNaN(val)) {
            val = step;
        } else if (min && val < min) {
            val = min;
        } else if (max && val > max) {
            val = max;
        }
        $input.val(val);
    });

    //фильтр
    // $( "#slider-range" ).slider({
    //     range: true,
    //     min: 5000,
    //     max: 75000,
    //     values: [ 5000, 75000 ],
    //     slide: function( event, ui ) {
    //         $( "#amount" ).val( ui.values[ 0 ] + " - " + ui.values[ 1 ] );
    //     }
    // });
    // $( "#amount" ).val( $( "#slider-range" ).slider( "values", 0 ) +
    //     " - " + $( "#slider-range" ).slider( "values", 1 ) );


    const ProductRecomend = new Swiper('.swiperProductRecomend', {
        slidesPerView: 3,
        breakpoints: {
            320: {
                slidesPerView: 2,
                spaceBetween: 20
            },

            1080: {
                slidesPerView: 3,
                spaceBetween: 15
            }
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
    })

    const ProductPopular = new Swiper('.swiperProductPopular', {
        slidesPerView: 3,
        breakpoints: {
            320: {
                slidesPerView: 2,
                spaceBetween: 20
            },

            1080: {
                slidesPerView: 3,
                spaceBetween: 15
            }
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
    })


    var smallProductSwiper = new Swiper(".swiperProductSmall", {
        spaceBetween: 10,
        slidesPerView: 3,
        freeMode: true,
        watchSlidesProgress: true,
    });
    var swiperProductMain = new Swiper(".swiperProductMain", {
        spaceBetween: 10,
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        thumbs: {
            swiper: smallProductSwiper,
        },
    });


})(jQuery);

