/*
Author       : Code-Theme
Template Name: Find Houses - HTML5 Template
Version      : 1.0
*/

"use strict";

jQuery(document).on('ready', function ($) {

	/*---------------------------------
	 //------ PRELOADER ------//
	 ----------------------------------*/
	$('#status').fadeOut();
	$('#preloader').delay(200).fadeOut('slow');

	/*---------------------------------
	 //------ ANIMATE HEADER ------//
	 ----------------------------------*/
	$(window).on('scroll', function () {
		var sticky = $(".sticky-header");
		var scroll = $(window).scrollTop();
		if (scroll < 265) {
			sticky.removeClass("sticky");
		} else {
			sticky.addClass("sticky");
		}
	});

	/*----------------------------------
	//------ SMOOTHSCROLL ------//
	-----------------------------------*/
	smoothScroll.init({
		speed: 1000, // Integer. How fast to complete the scroll in milliseconds
		offset: 200, // Integer. How far to offset the scrolling anchor location in pixels

	});

	/*----------------------------------
	//------ LIGHTCASE ------//
	-----------------------------------*/
	$('a[data-rel^=lightcase]').lightcase();


	/*----------------------------------
	//------ ISOTOPE GALLERY ------//
	-----------------------------------*/
	/* activate jquery isotope */
	$(window).on('load', function () {
		var $container = $('.portfolio-items').isotope({
			itemSelector: '.item',
			masonry: {
				columnWidth: '.col-xs-12'
			}
		});
	});
	// bind filter button click
	var filters = $('.filters-group ul li');
	filters.on('click', function () {
		filters.removeClass('active');
		$(this).addClass('active');
		var filterValue = $(this).attr('data-filter');
		// use filterFn if matches value
		$('.portfolio-items').isotope({
			filter: filterValue
		});
	});

	/*----------------------------------
	//------ OWL CAROUSEL ------//
	-----------------------------------*/
	$('.style1').owlCarousel({
		loop: true,
		margin: 10,
		autoplay: true,
		autoplayTimeout: 5000,
		responsive: {
			0: {
				items: 1
			},
			400: {
				items: 1,
				margin: 20
			},
			500: {
				items: 1,
				margin: 20
			},
			768: {
				items: 2,
				margin: 20
			},
			991: {
				items: 2,
				margin: 20
			},
			1000: {
				items: 3,
				margin: 20
			}
		}
	});

	$('.style2').owlCarousel({
		loop: true,
		margin: 0,
		dots: false,
		autoWidth: false,
		autoplay: true,
		autoplayTimeout: 5000,
		responsive: {
			0: {
				items: 2,
				margin: 20
			},
			400: {
				items: 2,
				margin: 20
			},
			500: {
				items: 3,
				margin: 20
			},
			768: {
				items: 4,
				margin: 20
			},
			992: {
				items: 5,
				margin: 20
			},
			1000: {
				items: 6,
				margin: 20
			}
		}
	});

	$('.style3').owlCarousel({
		loop: true,
		margin: 10,
		autoplay: true,
		autoplayTimeout: 5000,
		responsive: {
			0: {
				items: 1
			},
			400: {
				items: 1,
				margin: 20
			},
			500: {
				items: 1,
				margin: 20
			},
			768: {
				items: 2,
				margin: 20
			},
			991: {
				items: 2,
				margin: 20
			},
			1000: {
				items: 5,
				margin: 20
			}
		}
	});
    $('.owl-carousel-slider-top').owlCarousel({
        items:1,
        loop: true,
        itemsDesktop:[1000,1],
        itemsDesktopSmall:[979,1],
        itemsTablet:[768,1],
        pagination: false,
        navigation:true,
        nav: true,
        navText: [
            "<i class='fa fa-angle-left'></i>",
            "<i class='fa fa-angle-right'></i>"
        ],
        navigationText:["",""],
        slideSpeed:1000,
        autoPlay:true

    });
	/*----------------------------------
	//------ TOP LOCATION ------//
	-----------------------------------*/
	if ($('#tp-carousel').length) {
		$('#tp-carousel').owlCarousel({
			loop: true,
			margin: 2,
			dots: false,
			responsiveClass: true,
			responsive: {
				0: {
					items: 1,
					nav: true
				},
				600: {
					items: 2,
					nav: true
				},
				1000: {
					items: 5,
					nav: true,
					loop: false
				}
			}
		})
	}

	/*----------------------------------
	//------ JQUERY SCROOLTOP ------//
	-----------------------------------*/
	var go = $(".go-up");
	$(window).on('scroll', function () {
		var scrolltop = $(this).scrollTop();
		if (scrolltop >= 50) {
			go.fadeIn();
		} else {
			go.fadeOut();
		}
	});

	/*----------------------------------
	//----- JQUERY COUNTER UP -----//
	-----------------------------------*/
	$('.counter').counterUp({
		delay: 10,
		time: 5000,
		offset: 100,
		beginAt: 0,
		formatter: function (n) {
			return n.replace(/,/g, '.');
		}
	});

	/*----------------------------------
	//------ MAGNIFIC POPUP ------//
	-----------------------------------*/
	$(document).ready(function () {
		$('.popup-youtube, .popup-vimeo, .popup-gmaps').magnificPopup({
			disableOn: 700,
			type: 'iframe',
			mainClass: 'mfp-fade',
			removalDelay: 160,
			preloader: false,
			fixedContentPos: false
		});
	});

	/*----------------------------------------------
	//------ FILTER TOGGLE (ON GOOGLE MAPS) ------//
	----------------------------------------------*/
	$('.filter-toggle').on('click', function () {
		$(this).parent().find('form').stop(true, true).slideToggle();
	});

	/*----------------------------------
	//------ RANGE SLIDER ------//
	-----------------------------------*/
	$(".slider-range").slider({
		range: true,
		min: 10,
		max: 200,
		step: 1,
		values: [20, 60],
		slide: function (event, ui) {
			$(".slider_amount").val(ui.values[0].toString() + "-" + ui.values[1].toString());
		}
	});
	$(".slider_amount").val($(".slider-range").slider("values", 0).toString()+ "-" + $(".slider-range").slider("values", 1).toString());

}(jQuery));
