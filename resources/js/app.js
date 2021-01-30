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
});
