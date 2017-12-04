$( document ).ready(function(){
	$('[data-trigger="address.mobile.toggle"]').on('click', function () {
		$( this ).parent().toggleClass( 'show' );
	});
	$('[data-trigger="menu.mobile.toggle"]').on('click', function () {
		$( '.root .container' ).toggleClass( 'showMobileMenu' );
	});

	$('.bxslider').bxSlider({
		// mode: 'fade',
		// captions: true
	});
});
