require('./bootstrap');

import $ from "jquery";

import 'owl.carousel/dist/assets/owl.carousel.css';

require('owl.carousel');

$(document).ready(function () {
    $('.owl-carousel').owlCarousel({
        loop: true,
        nav: true,
        items: 1,
    });

    /* nav */
    $('.burger').on('click', function () {
        burger();
    })

    function burger() {
        let burger = $('.burger');
        if (burger.hasClass('burger_active')) {
            burger.removeClass('burger_active');
            $('.nav').removeClass('nav_burger-active');
        } else {
            burger.addClass('burger_active');
            $('.nav').addClass('nav_burger-active');
        }
    }

    $('.link_to').on('click', function (e) {
        e.preventDefault();
        let section = $(this).attr('data-to');
        let scrollTop = $(`#${section}`).offset().top;
        $("html, body").animate({scrollTop: scrollTop}, 500);
        if ($('.nav').hasClass('nav_burger-active'))
            burger();
    })

    function navLink(scrollTop) {
        if (($("body, html").height() - $(window).height() - 10) < scrollTop) {
            $(`.nav .link_to`).removeClass('nav__link_active');
            $(`.nav .link_to[data-to="contacts"]`).addClass('nav__link_active');
            return;
        }

        let arr = [
            'home',
            'info',
            'work',
            'contacts'
        ];
        let setActive = false;
        arr.forEach(function (section) {
            if (scrollTop >= $(`#${section}`).offset().top && scrollTop <= ($(`#${section}`).offset().top + $(`#${section}`).height())) {
                $(`.nav .link_to`).removeClass('nav__link_active');
                $(`.nav .link_to[data-to="${section}"]`).addClass('nav__link_active');
                setActive = true;
            }
        });

        if (!setActive)
            $(`.nav .link_to[data-to="home"]`).addClass('nav__link_active');

        /* end nav */
    }

    /* paralax */
    function parallaxScroll(scrollTop) {
        $('.about__photo').css('bottom', (0 - (scrollTop * .25)) + 'px');
    }

    /* end parallax */

    /* menuUp */
    let scrollPrev = 0;
    let header = $('.header');

    function menuUp(scrollTop) {
        if (scrollTop > 100 && scrollTop > scrollPrev) {
            header.addClass('out');
        } else {
            header.removeClass('out');
        }

        scrollPrev = scrollTop;
    }

    /* end menuUp */

    //event scroll
    $(window).on('scroll', function () {
        let scrollTop = $(window).scrollTop();
        parallaxScroll(scrollTop);
        navLink(scrollTop);
        menuUp(scrollTop);
    });

});
