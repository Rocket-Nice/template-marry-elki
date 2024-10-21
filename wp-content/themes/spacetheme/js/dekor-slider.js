jQuery(document).ready(function($) { 

	var slidDekor = $('.slider_dekor'),
		slidsDekor = $('.slider__list_dekor'),
		inSlidingDekor = false;

	// заполнение бегунка при прослистывании слайдера
	var overFlowDekor = function(slidEq) {

		var quNum = $('.slider_dekor').length,
			slideNum = $('.slider_dekor').eq(slidEq).index() + 1,
			widthOvFl = (100/quNum)*slideNum;

		console.log('quantity: ', quNum);

		console.log('active slide: ', slideNum);

		$('.controls__line-bg_dekor').css({

			"width" : widthOvFl + "%"

		});

	}

	// постановка бегунка в нужное положение
	overFlowDekor(0);	

	var slidingToNextSlid = function(slidEq) {

		slidDekor = slidDekor.eq(slidEq);

		var slideWidth = Number(slidDekor.outerWidth(true)),
			nextSlid = slidDekor.next();

		if(nextSlid.length) {

			console.log('width: ', slideWidth);

			var position = Number(slidsDekor.attr('date_1')) - slideWidth;

			console.log('position: ', position);

			slidsDekor.css({
				'transform' : 'translate3d(' + position + 'px, 0,  0)'
			});

			slidsDekor.attr('date_1', position);

			nextSlid.addClass('slider_dekor_active').siblings().removeClass('slider_dekor_active');

			overFlowDekor(nextSlid.index());

		} else {

			console.log('next slide none');

		}

	}

	var slidingToPrevSlid = function(slidEq) {

		slidDekor = slidDekor.eq(slidEq);

		var prevSlid = slidDekor.prev(),
			slideWidth = Number(prevSlid.outerWidth(true));

		if(prevSlid.length) {

			console.log('width: ', slideWidth);

			var position = Number(slidsDekor.attr('date_1')) + slideWidth;

			console.log('date_1: ', slidsDekor.attr('date_1'));

			console.log('position: ', position);

			slidsDekor.css({
				'transform' : 'translate3d(' + position + 'px, 0,  0)'
			});

			slidsDekor.attr('date_1', position);

			prevSlid.addClass('slider_dekor_active').siblings().removeClass('slider_Dekor_active');

			overFlowDekor(prevSlid.index());

		} else {

			console.log('prev slide none');

		}

	}

	var slidingToFirstSlid = function(slidEq) {

		slidDekor = slidDekor.eq(slidEq);

		if(slidDekor.index() != 0) {

			console.log('to first slid: ');

			var position = 0;

			console.log('date_1: ', slidsDekor.attr('date_1'));

			console.log('position: ', position);

			slidsDekor.css({
				'transform' : 'translate3d(' + position + 'px, 0,  0)'
			});

			slidsDekor.attr('date_1', position);

			$('.slider_dekor').eq(0).addClass('slider_dekor_active').siblings().removeClass('slider_Dekor_active');

			overFlowDekor(0);

		} else {

			console.log('first slid');

		}

	}

	$('#arrow-right_dekor').click(function() {

		slidDekor = $('.slider_dekor');

		console.log('clic to #arrow-right_dekor');

		var activeSlid = slidDekor.filter('.slider_dekor_active');

		slidingToNextSlid(activeSlid.index());

	});

	$('#arrow-left_dekor').click(function() {

		slidDekor = $('.slider_dekor');

		console.log('clic to #arrow-left_dekor');

		var activeSlid = slidDekor.filter('.slider_dekor_active');

		slidingToPrevSlid(activeSlid.index());

	});

	$('#slider-first_dekor').click(function() {

		slidDekor = $('.slider_dekor');

		console.log('clic to #slider-first_dekor');

		var activeSlid = slidDekor.filter('.slider_dekor_active');

		slidingToFirstSlid(activeSlid.index());

	});

});



