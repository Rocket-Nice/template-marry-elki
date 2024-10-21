jQuery(document).ready(function($) {

	var close_leader = function() {

		console.log('close leader__pop_up');

		$('.leader__pop_up').removeClass('opacity_1');

		setTimeout(function(){ 

			$('.leader__pop_up__line').removeClass('leader__pop_up__line_show');

			$('.leader__pop_up').removeClass('display_block');
			
		}, 1000);

	}

	var open_leader = function(leader_class) {

		$(leader_class).addClass('display_block');

		setTimeout(function(){ 

			$(leader_class).addClass('opacity_1');
			
		}, 4);

		$('.nav__item').removeClass('nav__item_active');		

		$('#services').addClass('nav__item_active');

		setTimeout(function() {

			$('.leader__pop_up__line').addClass('leader__pop_up__line_show');

		},1000);

	}

	$('.leader__pop_up__close').click(function() {

		close_leader();

	});

	$('.leader__item_toaster').click(function() {

		console.log('click to .leader__item_toaster');

		open_leader('.toaster');

	});

	$('.leader__item_organization').click(function() {

		console.log('click to .leader__item_toaster');

		open_leader('.organization');

	});

	$('.leader__item_concept').click(function() {

		console.log('click to .leader__item_toaster');

		open_leader('.concept');

	});

	$('.leader__item_select').click(function() {

		console.log('click to .leader__item_toaster');

		open_leader('.select');

	});

	$('.leader__item_show').click(function() {

		console.log('click to .leader__item_toaster');

		open_leader('.show');

	});

	$('.leader__item_dj').click(function() {

		console.log('click to .leader__item_toaster');

		open_leader('.dj');

	});

	$('.leader__item_postanovka').click(function() {

		console.log('click to .leader__item_toaster');

		open_leader('.postanovka');

	});

	$('.leader__item_podbor').click(function() {

		console.log('click to .leader__item_toaster');

		open_leader('.podbor');

	});

	$('.leader__item_make_up').click(function() {

		console.log('click to .leader__item_toaster');

		open_leader('.make_up');

	});

	$('.leader__item_obraz').click(function() {

		console.log('click to .leader__item_toaster');

		open_leader('.obraz');

	});

	$('.leader__item_dekor').click(function() {

		console.log('click to .leader__item_toaster');

		open_leader('.dekor');

	});

	$('.leader__item_vedushi').click(function() {

		console.log('click to .leader__item_toaster');

		open_leader('.vedushi');

	});

	$('.leader__item_photo_video').click(function() {

		console.log('click to .leader__item_toaster');

		open_leader('.photo_video');

	});

});



$(".attachment-slider__img.size-slider__img.wp-post-image").attr({
	width: 'auto',
	height: '100%'
});