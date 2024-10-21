jQuery(document).ready(function() {

	// close pop up window
	$('.pop-up__close').click(function() {

		console.log('close pop up');

		var n_src = 'not.found/404';

		$('.pop-up__video').attr('src', n_src);

		$('.pop-up__youtobe').attr('src', n_src);

		$('.pop-up').removeClass('opacity_1');
		setTimeout(function() {

			$('.pop_up__contant').removeClass('display_block');

			$('.pop-up').removeClass('display_block');
			
			// play scroll
			window.onmousewheel = null;

		},600);
	})

	// close pop up window
	$('.pop-up__bg').click(function() {

		console.log('close pop up');

		var n_src = 'not.found/404';

		$('.pop-up__video').attr('src', n_src);

		$('.pop-up__youtobe').attr('src', n_src);


		$('.pop-up').removeClass('opacity_1');
		setTimeout(function() {

			$('.pop-up__video').removeClass('display_block');

			$('.pop-up__youtobe').removeClass('display_block');

			$('.pop-up__img').removeClass('display_block');

			$('.pop-up').removeClass('display_block');
			
			// play scroll
			window.onmousewheel = null;

		},600);
	})
	// pop up youtube
	$('.pop-up-youtube').click(function(){

		var main_h = window.innerHeight;
		var main_w = window.innerWidth;

		var frame_h;
		var frame_w;

		if (main_h*1.777777777777778 > main_w) {
			frame_w = main_w;
			frame_h = main_w*0.5625;
		}

		if (main_h*1.777777777777778 < main_w) {
			frame_w = main_h*1.777777777777778;
			frame_h = main_h;
		}

		$('.pop-up__youtobe').attr('width', frame_w);
		$('.pop-up__youtobe').attr('height', frame_h);

		var m_src = $(this).attr('date');

		m_src = m_src + '?rel=0&showinfo=0&autoplay=1';

		console.log(m_src);

		$('.pop-up__youtobe').attr('src', m_src);
		setTimeout(function() {
			
			$('.pop-up').addClass('display_block');

			$('.pop-up__youtobe').addClass('display_block');

			setTimeout(function() {
				$('.pop-up').addClass('opacity_1');
			}, 4);

		}, 1000);
	});

	// pop up video 
	$('.pop-up-video').click(function() {
		console.log('pop up video');

		var src_video = $(this).attr('date');
		$('.pop-up__video').attr('src', src_video);

		// stop scroll
		window.onmousewheel = function( e ) {
			e.preventDefault();
		}

		$('.pop-up').addClass('display_block');

		$('.pop-up__video').addClass('display_block');

		setTimeout(function() {
			$('.pop-up').addClass('opacity_1');
		}, 4);
	});

	// pop up image
	$('.pop-up-img').click(function() {
		console.log('pop up image');

		var src_img = $(this).attr('src');
		$('.pop-up__img').attr('src', src_img);

		// stop scroll
		window.onmousewheel = function( e ) {
			e.preventDefault();
		}

		$('.pop-up').addClass('display_block');

		$('.pop-up__img').addClass('display_block');

		setTimeout(function() {
			$('.pop-up').addClass('opacity_1');
		}, 4);
	});

});