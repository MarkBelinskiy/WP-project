
jQuery(document).ready(function($) {

	"use strict";

	var hash = location.hash.substring(1);
	if (hash.length) {
		if(window.history.pushState) {
			window.history.pushState('', '/', window.location.pathname)
		} else {
			window.location.hash = '';
		}
		$('.grid').imagesLoaded(function() {
			$('.property-filter>a[filter="'+hash+'"]').click();
		});
	}

    // Home Slider
    $('#slider>.slides').on('init', function(event, slick){
    	$(slick.$slides[0]).find(".detail").addClass("active");
    });
    $('#slider>.slides').slick({
    	dots: true,
    	infinite: true,
    	speed: 500,
    	slidesToShow: 1,
    	slidesToScroll: 1,
    	autoplay:true,
    	autoplaySpeed:5000,
    	appendDots: $(".fordots"),
    	prevArrow:'<i class="fa fa-angle-left slick-prev" aria-hidden="true"></i>',
    	nextArrow:'<i class="fa fa-angle-right slick-next" aria-hidden="true"></i>'
    });
    $('#slider>.slides').on('beforeChange', function(event, slick, currentSlide, nextSlide){
    	$(slick.$slides[currentSlide]).find(".detail").removeClass("active");
    });
    $('#slider>.slides').on('afterChange', function(event, slick, currentSlide){
    	$(slick.$slides[currentSlide]).find(".detail").addClass("active");
    });

    $('.property-slider>figure').slick({
    	dots: false,
    	arrows: false,
    	fade: true,
    	slidesToShow: 1,
    	slidesToScroll: 1,
    	asNavFor: '.property-slider>.thumbnails'
    });
    $('.property-slider>.thumbnails').slick({
    	slidesToShow: 3,
    	slidesToScroll: 1,
    	asNavFor: '.property-slider>figure',
    	dots: false,
    	arrows: true,
    	focusOnSelect: true,
    	centerMode: true,
    	variableWidth: true,
    	prevArrow:'<i class="fa fa-angle-left slick-prev" aria-hidden="true"></i>',
    	nextArrow:'<i class="fa fa-angle-right slick-next" aria-hidden="true"></i>'
    });

    $('.bigestimg[rel="gal"]').fancybox({
    	openEffect: "elastic",
    	closeEffect: "elastic",
    	loop : false,
    	afterLoad: function(current, previous) {
    		if (previous) {
    			(current.index > previous.index ? $('.property-slider>.thumbnails').slick('slickNext') : $('.property-slider>.thumbnails').slick('slickPrev'));     
    		}
    	}
    });

    var $grid = $('.grid').isotope({
    	itemSelector: '.gitem',
    	layoutMode: 'fitRows'
    });

    $grid.imagesLoaded().progress( function() {
    	$grid.isotope('layout');
    });

    $(".fitem").on("click", function(e){
    	e.preventDefault();
    	$('.property-filter>a').removeClass('active');
    	$(this).addClass('active');
    	var f = $(this).attr('filter');
    	$grid.isotope({ filter: f });
    });

    // Select Box Replacements

    $('select').selectBox({
    	mobile: true,
    	menuSpeed: 'fast'
    });

    // Accordions

    $( ".accordion" ).accordion({
    	heightStyle: "content",
    	collapsible: true
    });

    // Area Range

    $( "#area-range" ).slider({
    	range: true,
    	min: 0,
    	max: 1000,
    	values: [ 500, 800 ],
    	slide: function( event, ui ) {
    		$( "#area" ).val( ui.values[ 0 ] + " - " + ui.values[ 1 ] );
    	}
    });
    $( "#area" ).val( $( "#area-range" ).slider( "values", 0 ) + " - " + $( "#area-range" ).slider( "values", 1 ) );

    // Price Range

    $( "#price-range" ).slider({
    	range: true,
    	min: 10000,
    	max: 100000,
    	values: [ 30000, 50000 ],
    	slide: function( event, ui ) {
    		$( "#price" ).val( ui.values[ 0 ] + " - " + ui.values[ 1 ] );
    	}
    });
    $( "#price" ).val( $( "#price-range" ).slider( "values", 0 ) + " - " + $( "#price-range" ).slider( "values", 1 ) );

    // Checkbox Replacements

    $('input.checkbox').iCheck({
    	checkboxClass: 'icheckbox_square-green',
    	radioClass: 'iradio_square-green',
    	increaseArea: '20%'
    });

    // Gallery Grid

    $('.grid').masonry({
    	itemSelector: '.grid-item',
    	columnWidth: '.grid-sizer',
    	percentPosition: true,
    	gutter: 0
    });

    // Counter

    $(function() {
    	var value;
    	$('.counter span').appear();
    	$(document.body).on('appear', '.counter span', function(e, $affected) {
    		$affected.each(function() {
    			value = $(this).data('fact');
    			$(this).animateNumbers( value, false, 1000, "easeOutBounce" );
    		});
    	});
    });

    $('.animated').appear();

    $('.nav>li').each(function () {
    	if ($(this).children("a").attr("href") == window.location.href) {
    		$(this).addClass("active");
    	}
    });

});