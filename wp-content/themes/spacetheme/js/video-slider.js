jQuery(document).ready(function($) { 

	var slidVideo = $('.slider_video'),
		slidsVideo = $('.slider__list_video'),
		inSlidingVideo = false;

	// заполнение бегунка при прослистывании слайдера
	var overFlowVideo = function(slidEq) {

		var quNum = $('.slider_video').length,
			slideNum = $('.slider_video').eq(slidEq).index() + 1,
			widthOvFl = (100/quNum)*slideNum;

		console.log('quantity: ', quNum);

		console.log('active slide: ', slideNum);

		$('.controls__line-bg_video').css({

			"width" : widthOvFl + "%"

		});

	}

	// постановка бегунка в нужное положение
	overFlowVideo(0);	

	var slidingToNextSlid = function(slidEq) {

		slidVideo = slidVideo.eq(slidEq);

		var slideWidth = Number(slidVideo.outerWidth(true)),
			nextSlid = slidVideo.next();

		if(nextSlid.length) {

			console.log('width: ', slideWidth);

			var position = Number(slidsVideo.attr('date_1')) - slideWidth;

			console.log('position: ', position);

			slidsVideo.css({
				'transform' : 'translate3d(' + position + 'px, 0,  0)'
			});

			slidsVideo.attr('date_1', position);

			nextSlid.addClass('slider_video_active').siblings().removeClass('slider_video_active');

			overFlowVideo(nextSlid.index());

		} else {

			console.log('next slide none');

		}

	}

	var slidingToPrevSlid = function(slidEq) {

		slidVideo = slidVideo.eq(slidEq);

		var prevSlid = slidVideo.prev(),
			slideWidth = Number(prevSlid.outerWidth(true));

		if(prevSlid.length) {

			console.log('width: ', slideWidth);

			var position = Number(slidsVideo.attr('date_1')) + slideWidth;

			console.log('date_1: ', slidsVideo.attr('date_1'));

			console.log('position: ', position);

			slidsVideo.css({
				'transform' : 'translate3d(' + position + 'px, 0,  0)'
			});

			slidsVideo.attr('date_1', position);

			prevSlid.addClass('slider_video_active').siblings().removeClass('slider_video_active');

			overFlowVideo(prevSlid.index());

		} else {

			console.log('prev slide none');

		}

	}

	var slidingToFirstSlid = function(slidEq) {

		slidVideo = slidVideo.eq(slidEq);

		if(slidVideo.index() != 0) {

			console.log('to first slid: ');

			var position = 0;

			console.log('date_1: ', slidsVideo.attr('date_1'));

			console.log('position: ', position);

			slidsVideo.css({
				'transform' : 'translate3d(' + position + 'px, 0,  0)'
			});

			slidsVideo.attr('date_1', position);

			$('.slider_video').eq(0).addClass('slider_video_active').siblings().removeClass('slider_video_active');

			overFlowVideo(0);

		} else {

			console.log('first slid');

		}

	}

	$('#arrow-right_video').click(function() {

		slidVideo = $('.slider_video');

		console.log('clic to #arrow-right_video');

		var activeSlid = slidVideo.filter('.slider_video_active');

		slidingToNextSlid(activeSlid.index());

	});

	$('#arrow-left_video').click(function() {

		slidVideo = $('.slider_video');

		console.log('clic to #arrow-left_video');

		var activeSlid = slidVideo.filter('.slider_video_active');

		slidingToPrevSlid(activeSlid.index());

	});

	$('#slider-first_video').click(function() {

		slidVideo = $('.slider_video');

		console.log('clic to #slider-first_video');

		var activeSlid = slidVideo.filter('.slider_video_active');

		slidingToFirstSlid(activeSlid.index());

	});

});



