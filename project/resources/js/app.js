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

        const swiper = new Swiper('.swiperBanner', {
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
        const swiper2 = new Swiper('.swiperVideo', {
            slidesPerView: 3,
            spaceBetween: 30,
            breakpoints: {
                320: {
                    slidesPerView: 1,
                    spaceBetween: 20
                },
                1080: {
                    slidesPerView: 3,
                    spaceBetween: 30
                }
            }
        })

        if ($(window).width() < 768) {
            $('.changed').prepend( $('.first') );
        }
        if ($(window).width() > 768) {
            $('.changed').append( $('.first') );
        }
    });


})(jQuery);

