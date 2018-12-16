$(function () {
	"use strict";
    var $body = $("body"),/* cash Body */
        $window = $(window), /* cash window */
        myNav = $("#nav"), /* cash Nav */
        $link = $(".nav a"); /* cash Link */
    
/* Loading Animation */
    $window.on('load', function () {
        $('.loading').fadeOut();
        $body.css({overflow: "visible"});
    });
    /* Magnefic Popup */
    $('.image-popup-vertical-fit').magnificPopup({
        type: 'image',
        closeOnContentClick: true,
        mainClass: 'mfp-img-mobile',
        image: {
            verticalFit: true
        }
    });
    /* End Magnefic Pop Up */
    
    /* Wow */
    new WOW().init();
    /* End WoW */
    
/* End Loading Animation */

/* Navbar */
    $window.on('scroll', function () {
        if ($window.scrollTop() >= 280) {
            myNav.addClass("scroll");
        } else {
            myNav.removeClass("scroll");
        }
    });
/* navbar toggle */
    $link.on("click", function () {
        if ($(".navbar-toggle").css("display") !== "none") {
            $(".navbar-toggle").trigger("click");
        }
    });
/* End Navbar */
});
