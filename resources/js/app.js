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

    $('.burger').on('click', function () {
        if($(this).hasClass('burger_active')) {
            $(this).removeClass('burger_active');
            $('.nav').removeClass('nav_burger-active');
        } else {
            $(this).addClass('burger_active');
            $('.nav').addClass('nav_burger-active');
        }
    })
});
