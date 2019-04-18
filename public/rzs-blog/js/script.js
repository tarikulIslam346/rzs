jQuery(document).ready(function($) {
	// sidebar menu icon
	$('.menu-icon').on('click', function(){
		$(this).toggleClass('open');
		$('.left-side-deco').toggleClass('open');
	});

	var w = $(window).width();
	$(document).on('touchstart click', function(e){
		if($(e.target).parents('.left-side-deco').length == 0 && !$(e.target).is('.menu-icon, .menu-icon span'))
		{
			$('.left-side-deco').removeClass('open');
			$('.menu-icon').removeClass('open');
		};
	});
	$(window).on('resize', function() {
		var w = $(window).width();
		if ($(window).width() > 1200) {
			$('.left-side-deco').removeClass('open');
			$('.menu-icon').removeClass('open');
		}
	});

		$(window).bind('scroll', function () {
	    if ($(window).scrollTop() > 5) {
	        $('.navbar').addClass('fixed');
	    } else {
	        $('.navbar').removeClass('fixed');
	    }
	});
});

