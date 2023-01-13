(function($){
	$(document).ready(function(){

		// hide first navbar
		$('.navscroll').hide();

		// hide first dropbox
		$('.dropbox').hide();

		// fade in navbar
		$(function(){
			$(window).scroll(function(){

				// set distance user needs to scroll before it starts fadein
				if($(this).scrollTop()>200){
					$('.navscroll').fadeIn();
					$('.dropbox').fadeIn();
				}
				else{
					$('.navscroll').fadeOut();
					$('.dropbox').fadeOut();
				}
			});
		});
	});
}(jQuery));