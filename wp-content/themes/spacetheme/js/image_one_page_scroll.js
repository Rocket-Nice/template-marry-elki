jQuery(document).ready(function($) {

	var isMobile = {
	    Android: function() {
	        return navigator.userAgent.match(/Android/i);
	    },
	    BlackBerry: function() {
	        return navigator.userAgent.match(/BlackBerry/i);
	    },
	    iOS: function() {
	        return navigator.userAgent.match(/iPhone|iPad|iPod/i);
	    },
	    Opera: function() {
	        return navigator.userAgent.match(/Opera Mini/i);
	    },
	    Windows: function() {
	        return navigator.userAgent.match(/IEMobile/i);
	    },
	    any: function() {
	        return (isMobile.Android() || isMobile.BlackBerry() || isMobile.iOS() || isMobile.Opera() || isMobile.Windows());
	    }
	};

	if(isMobile.any()){

		console.log('зашли с мобильного устройства');

	
	}


	// width window
	var page_scroll = true;

	var window_w = window.innerWidth;

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

			// if leader secion show
			if (sections.eq(sectionEq).index() == 1) {

				$('.nav__item').removeClass('nav__item_active');

				$('#services').addClass('nav__item_active');

			}

			// if  photo show
			if (sections.eq(sectionEq).index() == 2) {

				$('.nav__item').removeClass('nav__item_active');		

				$('#photo').addClass('nav__item_active');

			}

			// if  video show
			if (sections.eq(sectionEq).index() == 3) {

				$('.nav__item').removeClass('nav__item_active');		

				$('#video').addClass('nav__item_active');

			}

			// if  why show
			if (sections.eq(sectionEq).index() == 4) {

				$('.nav__item').removeClass('nav__item_active');		

				$('#why').addClass('nav__item_active');

			}

			// if  send show
			if (sections.eq(sectionEq).index() == 7) {

				$('.nav__item').removeClass('nav__item_active');		

				$('#send').addClass('nav__item_active');

			} 

			// if  command show
			if (sections.eq(sectionEq).index() == 5) {

				$('.nav__item').removeClass('nav__item_active');		

				$('#command').addClass('nav__item_active');

			}

			// if  prices show
			if (sections.eq(sectionEq).index() == 6) {

				$('.nav__item').removeClass('nav__item_active');		

				$('#action').addClass('nav__item_active');

			}

			setTimeout(function() {

				inModifi = false;

			}, 1300);

		}

	}

	// section Proem
	// show about__line
	var showProemLine = function(sectionEq) {

		if (sections.eq(sectionEq).index() == 0) {

			setTimeout(function() {

				$('.proem__line').addClass('proem__line_show');

			},1000);

		}

		if (sections.eq(sectionEq).index() != 0) {

			$('.proem__line').removeClass('proem__line_show');

		}

	}

	showProemLine(0);

	// section About
	// show about__line
	var showLeaderLine = function(sectionEq) {

		if (sections.eq(sectionEq).index() == 1) {

			setTimeout(function() {

				$('.leader__line').addClass('leader__line_show');

			},1000);

		}

		if (sections.eq(sectionEq).index() != 1) {

			$('.leader__line').removeClass('leader__line_show');

		}

	}

	// section command
	// show command__line
	var showCommandLine = function(sectionEq) {

		if (sections.eq(sectionEq).index() == 5) {

			setTimeout(function() {

				$('.command__line').addClass('command__line_show');

			},1000);

		}

		if (sections.eq(sectionEq).index() != 5) {

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

			}, 500);

		}

	}

	var allFunctions = function(sectionNum) {

		scrollToSection(sectionNum);

		showSitebar(sectionNum);

		showProemLine(sectionNum);

		showLeaderLine(sectionNum);

		showCommandLine(sectionNum);

		modifi(sectionNum);

	}

	var deltaFunctions = function(deltaY) {

		var	activeSection = sections.filter('.active'),
			nextSection = activeSection.next(),
			prevSection = activeSection.prev();

		if (deltaY > 0) {

			if(nextSection.length) {

				var sectionNum = nextSection.index();

				allFunctions(sectionNum);

			}
			
		}

		if (deltaY < 0) {

			if(prevSection.length) {

				var sectionNum = prevSection.index();

				allFunctions(sectionNum);

			}

		}

	}

	$(".all-sections").on("touchstart", function(e) {
	  var startingY = e.originalEvent.touches[0].pageY;

	  var handleTouchMove = function(e) {
	    currentY = e.originalEvent.touches[0].pageY;
	    var deltaY = startingY - currentY;

	    var window_w = window.innerWidth;

		if (window_w >= 991 && !isMobile.any()) {

	    	deltaFunctions(deltaY);

	    }	

	    $(".all-sections").off("touchmove", handleTouchMove);
	  }

	  $(".all-sections").on("touchmove", handleTouchMove);
	});


	$('.all-sections').on('wheel', function(e) {

		var deltaY = e.originalEvent.deltaY;

		var window_w = window.innerWidth;

		if (window_w >= 991 && !isMobile.any()) {
			
			deltaFunctions(deltaY);

		}
		
	});

	$(document).on('keydown', function(e) {

		var activeSection = sections.filter('.active'),
			nextSection = activeSection.next(),
			prevSection = activeSection.prev();

		var window_w = window.innerWidth;

		if (window_w >= 991 && !isMobile.any()) {	

			switch (e.keyCode) {

				case 40 : //scroll down

					if(nextSection.length) {

						var sectionNum = nextSection.index();
						
						allFunctions(sectionNum);
					}

					break;

				case 38 : // scroll up

					if(prevSection.length) {

						var sectionNum = prevSection.index();

						allFunctions(sectionNum);

					}
					
					break;

			}

		}	

	})


	

	// переходы между экранами по клику в меню 
	$('#nav-about').click(function() {

		allFunctions(0);

	});
	
	$('#services').click(function() {

		allFunctions(1);

	});
	
	$('#photo').click(function() {

		allFunctions(2);

	});
	
	$('#video').click(function() {

		allFunctions(3);

	});
	
	$('#why').click(function() {

		allFunctions(4);

	});

	$('#command').click(function() {

		allFunctions(5);

	});

	$('#action').click(function() {

		allFunctions(6);

	});

	$('#send').click(function() {

		allFunctions(7);

	});

	$(window).resize(function() {

		var window_w = window.innerWidth;

		if (window_w < 991) {
			
			$('.all-sections').css({

				"transform" : "translate3d(0, 0vh, 0)"

			});

		}

		if (isMobile.any()) {
			
			$('.all-sections').css({

				"transform" : "translate3d(0, 0vh, 0)"

			});

		}

	});


});