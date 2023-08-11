(function($) {
	
	/*
	*
	*	Name: Scroll Top
	*	Description: Script for scroll top button
	* 	Added by: Jun Baldo
	*	Date added: 3-29-2017
	*	Source: N/A
	*
	*/
	
	// hide #back-top first
	$(function () {
		$("#back-top").hide();
	});
	
	// fade in #back-top
	$(function () {
		$(window).scroll(function () {
		if ($(this).scrollTop() > 100) {
			$('#back-top').fadeIn();
		} else {
			$('#back-top').fadeOut();
		}
	});

	// scroll body to 0px on click
	$('#back-top a').click(function () {
		$('body,html').animate({
			scrollTop: 0
		}, 800);
			return false;
		});
	});
	
	/* ------------- End of Scroll Top ---------------*/	
	
	/* Additional javascript can be added below follow the comment syntax above for the comments */

})(jQuery);