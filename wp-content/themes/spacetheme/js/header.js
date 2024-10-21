jQuery(document).ready(function() {

	var burger = false;

	$('.burger').click(function() {

		$('.menuz').toggleClass('menu_active');

		console.log('click to .burger')

		burger = true;

	})

	$('body').click(function(e) {

		

		if (!$.contains($('.menuz')[0], e.target) && burger == true) {

			console.log('close menuz');

			$('.menuz').removeClass('menu_active');

		}

	})

});


$('.wpcf7-form-control.wpcf7-submit.contacts__btn_new').attr('value', '');
