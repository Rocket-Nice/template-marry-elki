jQuery(document).ready(function($) {


	var sections = $('.section'),
		display = $('.all-sections'),
		inScroll = false,
		inModifi = false;

	//show sidebar
	var showSitebar = function(sectionEq) {

		if (sections.eq(sectionEq).index() != 0) {

			setTimeout(function() {

				$('.nav').removeClass('hidden-left');

			},500);
			
		}

		if (sections.eq(sectionEq).index() == 0) {

				$('.nav').addClass('hidden-left');
			
		}

	}

	// modifi sections
	var modifi = function(sectionEq) {

		if(inModifi == false) {

			inModifi = true;

			// if about secion show
			if (sections.eq(sectionEq).index() == 1) {

				$('.nav__item').removeClass('nav__item_active');

				$('#nav-about').addClass('nav__item_active');

			}
			// if services section show
			if (sections.eq(sectionEq).index() == 2) {

				$('.nav__item').removeClass('nav__item_active');		

				$('#services').addClass('nav__item_active');

				$('.nav__list').addClass('services__color_text');

				$('.menu__list').addClass('services__color_text');

				setTimeout(function() {

					$('#logo').addClass('display-none');

					$('#logo_wite').removeClass('display-none');

				}, 1000);

			} else {

				$('.nav__list').removeClass('services__color_text');

				$('.menu__list').removeClass('services__color_text');

				$('#logo_wite').addClass('display-none');

				$('#logo').removeClass('display-none');

			}

			// if services photo show
			if (sections.eq(sectionEq).index() == 3) {

				$('.nav__item').removeClass('nav__item_active');		

				$('#photo').addClass('nav__item_active');

			}

			// if services video show
			if (sections.eq(sectionEq).index() == 4) {

				$('.nav__item').removeClass('nav__item_active');		

				$('#video').addClass('nav__item_active');

			}

			// if services why show
			if (sections.eq(sectionEq).index() == 5) {

				$('.nav__item').removeClass('nav__item_active');		

				$('#why').addClass('nav__item_active');

			}

			// if services command show
			if (sections.eq(sectionEq).index() == 6) {

				$('.nav__item').removeClass('nav__item_active');		

				$('#command').addClass('nav__item_active');

			}

			setTimeout(function() {

				inModifi = false;

			}, 1300);

		}

	}

	// section About
	// show about__line
	var showAboutLine = function(sectionEq) {

		if (sections.eq(sectionEq).index() == 1) {

			setTimeout(function() {

				$('.about__line').addClass('about__line_show');

			},1000);

		}

		if (sections.eq(sectionEq).index() != 1) {

			$('.about__line').removeClass('about__line_show');

		}

	}

	// section command
	// show command__line
	var showCommandLine = function(sectionEq) {

		if (sections.eq(sectionEq).index() == 6) {

			setTimeout(function() {

				$('.command__line').addClass('command__line_show');

			},1000);

		}

		if (sections.eq(sectionEq).index() != 6) {

			$('.command__line').removeClass('command__line_show');

		}

	}

	// scrol one page
	var scrollToSection = function(sectionEq) {

		var position = 0;

		if(inScroll == false) {

			console.log('scroll', sections.eq(sectionEq).index());

			inScroll = true;

			position = (sections.eq(sectionEq).index() * -100) + 'vh';

			sections.eq(sectionEq).addClass('active')
				.siblings().removeClass('active');

			display.css({
				'transform' : 'translate3d(0, ' + position + ', 0'
			});

			setTimeout(function() {

				inScroll = false;

			}, 1300);

		}

	}

	var allFunctions = function(deltaY) {

		var	activeSection = sections.filter('.active'),
			nextSection = activeSection.next(),
			prevSection = activeSection.prev();

		if (deltaY > 0) {

			if(nextSection.length) {

				var sectionNum = nextSection.index();

				scrollToSection(sectionNum);

				showSitebar(sectionNum);

				showAboutLine(sectionNum);

				showCommandLine(sectionNum);

				modifi(sectionNum);

			}
			
		}

		if (deltaY < 0) {

			if(prevSection.length) {

				var sectionNum = prevSection.index();

				scrollToSection(sectionNum);

				showSitebar(sectionNum);

				showAboutLine(sectionNum);

				showCommandLine(sectionNum);

				modifi(sectionNum);

			}

		}

	}

	$(".all-sections").on("touchstart", function(e) {
	  var startingY = e.originalEvent.touches[0].pageY;

	  var handleTouchMove = function(e) {
	    currentY = e.originalEvent.touches[0].pageY;
	    var deltaY = startingY - currentY;

	    	allFunctions(deltaY);

	    $(".all-sections").off("touchmove", handleTouchMove);
	  }

	  $(".all-sections").on("touchmove", handleTouchMove);
	});


	$('.all-sections').on('wheel', function(e) {

		var deltaY = e.originalEvent.deltaY;
			
		allFunctions(deltaY);
		
	});

	$(document).on('keydown', function(e) {

		var activeSection = sections.filter('.active'),
			nextSection = activeSection.next(),
			prevSection = activeSection.prev();

		switch (e.keyCode) {

			case 40 : //scroll down

				if(nextSection.length) {
					scrollToSection(nextSection.index());
				}
				break;

			case 38 : // scroll up

				if(prevSection.length) {
					scrollToSection(prevSection.index());
				}
				break;

		}

	})

});