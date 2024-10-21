jQuery(document).ready(function($) {

	var close_image = function() {

		console.log('close image__pop_up');

		$('.leader__pop_up').removeClass('opacity_1');

		$('.why_img_image_serv').removeClass('opacity_0');

		setTimeout(function(){ 

			$('.leader__pop_up__line').removeClass('leader__pop_up__line_show');

			$('.leader__pop_up').removeClass('display_block');
			
		}, 1000);

	}

	var open_image = function(leader_class) {

		$(leader_class).addClass('display_block');

		setTimeout(function(){ 

			$(leader_class).addClass('opacity_1');
			
		}, 4);

		$('.nav__item').removeClass('nav__item_active');		

		$('#services').addClass('nav__item_active');	

		$('.why_img_image_serv').addClass('opacity_0');

		setTimeout(function() {

			$('.leader__pop_up__line').addClass('leader__pop_up__line_show');

		},1000);

	}

	$('.leader__pop_up__close').click(function() {

		close_image();

	});

	$('#org').click(function() {

		console.log('click to .org');

		open_image('.org');

	});

	$('#mod').click(function() {

		console.log('click to .mod');

		open_image('.mod');

	});

	$('#vecher').click(function() {

		console.log('click to .vecher');

		open_image('.vecher');

	});

	$('#creat_image').click(function() {

		console.log('click to .creat_image');

		open_image('.creat_image');

	});

	$('#corp').click(function() {

		console.log('click to .corp');

		open_image('.corp');

	});

	$('#master').click(function() {

		console.log('click to .master');

		open_image('.master');

	});

	$('#shoping').click(function() {

		console.log('click to .shoping');

		open_image('.shoping');

	});

	

});