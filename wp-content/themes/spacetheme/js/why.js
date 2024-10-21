jQuery(document).ready(function() {

	$('.why__row').click(function() {

		console.log('click to .why__row');

		$('.why__desc').removeClass('why__desc_active');

		var why__row = $(this);

		setTimeout(function() {

			$(why__row).next('.why__desc').addClass('why__desc_active');

		}, 250);

		setTimeout(function() {

			var why__item_active = why__row.parent('.why__item');

			var why__item_Qa = $('.why__item').length;

			console.log(why__item_Qa);

			var why__item_active_Eq = why__item_active.index();

			console.log(why__item_active_Eq);

			var why__square_top = (100 / why__item_Qa) * why__item_active_Eq;

			$('.why__square').css({

				"top" : why__square_top + "%"

			});

		}, 100);

	});

});