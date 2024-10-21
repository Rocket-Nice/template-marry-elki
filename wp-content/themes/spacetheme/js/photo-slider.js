jQuery(document).ready(function($) { 

	var slidPhoto = $('.slider_photo'),
		slidsPhoto = $('.slider__list_photo'),
		inSlidingPhoto = false;

	// заполнение бегунка при прослистывании слайдера
	var overFlowPhoto = function(slidEq) {

		var quNum = $('.slider_photo').length,
			slideNum = $('.slider_photo').eq(slidEq).index() + 1,
			widthOvFl = (100/quNum)*slideNum;

		console.log('quantity: ', quNum);

		console.log('active slide: ', slideNum);

		$('.controls__line-bg_photo').css({

			"width" : widthOvFl + "%"

		});

	}

	// постановка бегунка в нужное положение
	overFlowPhoto(0);	

	var slidingToNextSlid = function(slidEq) {

		slidPhoto = slidPhoto.eq(slidEq);

		var slideWidth = Number(slidPhoto.outerWidth(true)),
			nextSlid = slidPhoto.next();

		if(nextSlid.length) {

			console.log('width: ', slideWidth);

			var position = Number(slidsPhoto.attr('date_1')) - slideWidth;

			console.log('position: ', position);

			slidsPhoto.css({
				'transform' : 'translate3d(' + position + 'px, 0,  0)'
			});

			slidsPhoto.attr('date_1', position);

			nextSlid.addClass('slider_photo_active').siblings().removeClass('slider_photo_active');

			overFlowPhoto(nextSlid.index());

		} else {

			console.log('next slide none');

		}

	}

	var slidingToPrevSlid = function(slidEq) {

		slidPhoto = slidPhoto.eq(slidEq);

		var prevSlid = slidPhoto.prev(),
			slideWidth = Number(prevSlid.outerWidth(true));

		if(prevSlid.length) {

			console.log('width: ', slideWidth);

			var position = Number(slidsPhoto.attr('date_1')) + slideWidth;

			console.log('date_1: ', slidsPhoto.attr('date_1'));

			console.log('position: ', position);

			slidsPhoto.css({
				'transform' : 'translate3d(' + position + 'px, 0,  0)'
			});

			slidsPhoto.attr('date_1', position);

			prevSlid.addClass('slider_photo_active').siblings().removeClass('slider_photo_active');

			overFlowPhoto(prevSlid.index());

		} else {

			console.log('prev slide none');

		}

	}

	var slidingToFirstSlid = function(slidEq) {

		slidPhoto = slidPhoto.eq(slidEq);

		if(slidPhoto.index() != 0) {

			console.log('to first slid: ');

			var position = 0;

			console.log('date_1: ', slidsPhoto.attr('date_1'));

			console.log('position: ', position);

			slidsPhoto.css({
				'transform' : 'translate3d(' + position + 'px, 0,  0)'
			});

			slidsPhoto.attr('date_1', position);

			$('.slider_photo').eq(0).addClass('slider_photo_active').siblings().removeClass('slider_photo_active');

			overFlowPhoto(0);

		} else {

			console.log('first slid');

		}

	}

	$('#arrow-right_photo').click(function() {

		slidPhoto = $('.slider_photo');

		console.log('clic to #arrow-right_photo');

		var activeSlid = slidPhoto.filter('.slider_photo_active');

		slidingToNextSlid(activeSlid.index());

	});

	$('#arrow-left_photo').click(function() {

		slidPhoto = $('.slider_photo');

		console.log('clic to #arrow-left_photo');

		var activeSlid = slidPhoto.filter('.slider_photo_active');

		slidingToPrevSlid(activeSlid.index());

	});

	$('#slider-first_photo').click(function() {

		slidPhoto = $('.slider_photo');

		console.log('clic to #slider-first_photo');

		var activeSlid = slidPhoto.filter('.slider_photo_active');

		slidingToFirstSlid(activeSlid.index());

	});

});



