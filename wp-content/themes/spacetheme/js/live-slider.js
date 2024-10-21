jQuery(document).ready(function($) { 

	var slidLive = $('.slider_live'),
		slidsLive = $('.slider__list_live'),
		inSlidingLive = false;

	// заполнение бегунка при прослистывании слайдера
	var overFlowLive = function(slidEq) {

		var quNum = $('.slider_live').length,
			slideNum = $('.slider_live').eq(slidEq).index() + 1,
			widthOvFl = (100/quNum)*slideNum;

		console.log('quantity: ', quNum);

		console.log('active slide: ', slideNum);

		$('.controls__line-bg_live').css({

			"width" : widthOvFl + "%"

		});

	}

	// постановка бегунка в нужное положение
	overFlowLive(0);	

	var slidingToNextSlid = function(slidEq) {

		slidLive = slidLive.eq(slidEq);

		var slideWidth = Number(slidLive.outerWidth(true)),
			nextSlid = slidLive.next();

		if(nextSlid.length) {

			console.log('width: ', slideWidth);

			var position = Number(slidsLive.attr('date_1')) - slideWidth;

			console.log('position: ', position);

			slidsLive.css({
				'transform' : 'translate3d(' + position + 'px, 0,  0)'
			});

			slidsLive.attr('date_1', position);

			nextSlid.addClass('slider_live_active').siblings().removeClass('slider_live_active');

			overFlowLive(nextSlid.index());

		} else {

			console.log('next slide none');

		}

	}

	var slidingToPrevSlid = function(slidEq) {

		slidLive = slidLive.eq(slidEq);

		var prevSlid = slidLive.prev(),
			slideWidth = Number(prevSlid.outerWidth(true));

		if(prevSlid.length) {

			console.log('width: ', slideWidth);

			var position = Number(slidsLive.attr('date_1')) + slideWidth;

			console.log('date_1: ', slidsLive.attr('date_1'));

			console.log('position: ', position);

			slidsLive.css({
				'transform' : 'translate3d(' + position + 'px, 0,  0)'
			});

			slidsLive.attr('date_1', position);

			prevSlid.addClass('slider_live_active').siblings().removeClass('slider_live_active');

			overFlowLive(prevSlid.index());

		} else {

			console.log('prev slide none');

		}

	}

	var slidingToFirstSlid = function(slidEq) {

		slidLive = slidLive.eq(slidEq);

		if(slidLive.index() != 0) {

			console.log('to first slid: ');

			var position = 0;

			console.log('date_1: ', slidsLive.attr('date_1'));

			console.log('position: ', position);

			slidsLive.css({
				'transform' : 'translate3d(' + position + 'px, 0,  0)'
			});

			slidsLive.attr('date_1', position);

			$('.slider_live').eq(0).addClass('slider_live_active').siblings().removeClass('slider_live_active');

			overFlowLive(0);

		} else {

			console.log('first slid');

		}

	}

	$('#arrow-right_live').click(function() {

		slidLive = $('.slider_live');

		console.log('clic to #arrow-right_live');

		var activeSlid = slidLive.filter('.slider_live_active');

		slidingToNextSlid(activeSlid.index());

	});

	$('#arrow-left_live').click(function() {

		slidLive = $('.slider_live');

		console.log('clic to #arrow-left_live');

		var activeSlid = slidLive.filter('.slider_live_active');

		slidingToPrevSlid(activeSlid.index());

	});

	$('#slider-first_live').click(function() {

		slidLive = $('.slider_live');

		console.log('clic to #slider-first_live');

		var activeSlid = slidLive.filter('.slider_live_active');

		slidingToFirstSlid(activeSlid.index());

	});

});



