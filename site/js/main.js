$(document).ready(function(){
	var _window = $(window);

	// ---
	// Nav
	// ---
	// Navigate when nav select is changed (for mobile)
	$('.nav-select').on('change', 'select', function(){
		if (this.value !== '')
			window.location = this.value;
	});

	// Automatically set links with a different domain to open in a new window
	$('[href^=http]').each(function(){
		if(this.href.indexOf(window.location.hostname) < 0)
			this.target = '_blank';
	});


	// -----------
	// Nice Select
	// -----------
	$('.nice-select-selector').niceSelect();


	// --------------
	// External Links
	// --------------
	$('[rel=external]').attr('target', '_blank');


	// --------------
	// Slick Carousel
	// --------------
	// $('.js-slick-carousel').slick({
	// 	dots: true,
	// 	infinite: false,
	// 	speed: 300,
	// 	slidesToShow: 4,
	// 	slidesToScroll: 4,
	// 	responsive: [{
	// 		breakpoint: 1024,
	// 		settings: {
	// 			slidesToShow: 3,
	// 			slidesToScroll: 3,
	// 			infinite: true,
	// 			dots: true
	// 		}
	// 	}, {
	// 		breakpoint: 600,
	// 		settings: {
	// 			slidesToShow: 2,
	// 			slidesToScroll: 2
	// 		}
	// 	}, {
	// 		breakpoint: 480,
	// 		settings: {
	// 			slidesToShow: 1,
	// 			slidesToScroll: 1
	// 		}
	// 	}]
	// });

	$('.js-slick-carousel').slick({
		dots: true,
		infinite: true,
		speed: 300,
		slidesToShow: 1,
		slidesToScroll: 1
	});


	// --------------
	// Swish Carousel
	// --------------
	$('.js-swish-carousel').swishCarousel();


	// ---------------
	// Form Validation
	// ---------------
	// http://jqueryvalidation.org/validate
	$('.js-form-validate').each(function(index, element){
		var _form = $(element);

		_form.validate({
			errorContainer: element.querySelector('.js-error-container'),
			errorLabelContainer: element.querySelector('.js-error-container'),
			wrapper: 'div'
		});
	});


	// -------
	// Cookies
	// -------
	if (false && readCookie('policy') !== 'accepted') {
		var _cookie = $('.cookie'),
			_inner = _cookie.find('.inner');

		_cookie
			.removeClass('hide');

		_cookie.height(_inner.outerHeight());

		$('.js-accept-cookies')
			.on('click', function(){
				createCookie('policy', 'accepted', 365);
				_cookie
					.height(0);
			});
	} else {
		createCookie('policy', 'accepted', 365);
	}


	// ---------
	// Polyfills
	// ---------

});