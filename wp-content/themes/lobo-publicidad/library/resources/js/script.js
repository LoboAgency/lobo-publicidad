(function ($, window, document, undefined) {
    'use strict';

    window.onload = function(){
        var load = document.getElementById('loading');
        load.style.opacity = '0';
    }

    function initReady() {
        var containerEl = document.querySelector('[data-ref~="mixitup-container"]');

        $(window).scroll(function () {
            if ($(this).scrollTop() > 800) {
                $('#scrolltop').fadeIn();
                $('header').fadeIn();
            } else {
                $('#scrolltop').fadeOut();
                $('header').fadeOut();
            }
        });

        var mixer = mixitup(containerEl, {
            selectors: {
                target: '[data-ref~="mixitup-target"]'
            }
        });

        $('.casos-menu').click(function () {
            $('html, body').animate({scrollTop:$('#casos').position().top}, 'slow');
        });

        $('.ico-top').click(function () {
            $('html, body').animate({scrollTop:$('#home').position().top}, 'slow');
        });

        $('.nav').click(function () {
            $('html, body').animate({scrollTop:$('#casos').position().top}, 'slow');
        });

        $('.nav-int').click(function () {
            $('html, body').animate({scrollTop:$('#cases').position().top}, 'slow');
        });
    }

    function initLoad() {
        
    }

    $(document).ready(initReady);
    $(window).on('load', initLoad);
})(jQuery, window, document);