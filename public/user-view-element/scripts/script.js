jQuery(document).ready(function($) {
	// sidebar menu icon
	$('.menu-icon').on('click', function(){
		$(this).toggleClass('open');
		$('.left-side-bar').toggleClass('open');
	});

	var w = $(window).width();
	$(document).on('touchstart click', function(e){
		if($(e.target).parents('.left-side-bar').length == 0 && !$(e.target).is('.menu-icon, .menu-icon span'))
		{
			$('.left-side-bar').removeClass('open');
			$('.menu-icon').removeClass('open');
		};
	});
	$(window).on('resize', function() {
		var w = $(window).width();
		if ($(window).width() > 1200) {
			$('.left-side-bar').removeClass('open');
			$('.menu-icon').removeClass('open');
		}
	});
});

