jQuery(document).ready(function($) {

	$('.wrapper').on('scroll', function() {

		var topWindow = $(window).scrollTop();
		var heightWrapper = $('.wrapper').height();

		//section proem
		if($('.proem__content').length != 0) {
			var proem = $('.proem__content');
			var topProem = (proem.offset().top - topWindow);
			var dnProem = topProem + proem.height();

			if(topProem > heightWrapper || dnProem > 0) {
				$('.nav').addClass('hidden-left'); //hidden sidebar
				$('.proem__line').addClass('proem__line_show'); // show proem__line
			} else {
				$('.nav').removeClass('hidden-left'); //show sidebar
				$('.proem__line').removeClass('proem__line_show'); // hidden proem__line
			}
		}

		// section about
		if($('.about__content').length != 0) {
			var about = $('.about__content');
			var topAbout = (about.offset().top - topWindow);
			var dnAbout = topAbout + about.height();

			if(topAbout > 0 && dnAbout < heightWrapper) {
				$('.nav__item').removeClass('nav__item_active');
				$('#nav-about').addClass('nav__item_active');
				$('.about__line').addClass('about__line_show'); // show about__line
			} else {
				$('.about__line').removeClass('about__line_show'); // hidden about__line
			}
		}

		// section servises
		if($('.services__list').length != 0) {
			var services = $('.services__list');
			var topServices = (services.offset().top - topWindow);
			var dnServices = topServices + services.height();

			if(topServices < heightWrapper/2 && dnServices > heightWrapper/2) {
				$('.nav__item').removeClass('nav__item_active');
				$('#services').addClass('nav__item_active');
				$('.nav__list').addClass('services__color_text');
			} else {
				$('.nav__list').removeClass('services__color_text');
			}
		}

		// section leader
		if($('.leader').length != 0) {
			var leader = $('.leader');
			var topLeader = (leader.offset().top - topWindow);
			var dnLeader = topLeader + leader.height();

			if(topLeader < heightWrapper/2 && dnLeader > heightWrapper/2) {
				$('.nav__item').removeClass('nav__item_active');
				$('#services').addClass('nav__item_active');
				$('.leader__line').addClass('leader__line_show'); // show leader__line
			} else {
				$('.leader__line').removeClass('leader__line_show'); // show leader__line
			}
		}

		// section phpoto
		if($('.photo').length != 0) {
			var photo = $('.photo');
			var topPhoto = (photo.offset().top - topWindow);
			var dnPhoto = topPhoto + photo.height();

			if(topPhoto < heightWrapper/2 && dnPhoto > heightWrapper/2) {
				$('.nav__item').removeClass('nav__item_active');
				$('#photo').addClass('nav__item_active');
			}
		}

		// section video
		if($('.video').length != 0) {
			var video = $('.video');
			var topVideo = (video.offset().top - topWindow);
			var dnVideo = topVideo + video.height();

			if(topVideo < heightWrapper/2 && dnVideo > heightWrapper/2) {
				$('.nav__item').removeClass('nav__item_active');
				$('#video').addClass('nav__item_active');
			}
		}

		// section why
		if($('.why').length != 0) {
			var why = $('.why');
			var topWhy = (why.offset().top - topWindow);
			var dnWhy = topWhy + why.height();

			if(topWhy < heightWrapper/2 && dnWhy > heightWrapper/2) {
				$('.nav__item').removeClass('nav__item_active');
				$('#why').addClass('nav__item_active');
			}
		}

		// section command
		if($('.command').length != 0) {
			var command = $('.command');
			var topCommand = (command.offset().top - topWindow);
			var dnCommand = topCommand + command.height();

			if(topCommand < heightWrapper/2 && dnCommand > heightWrapper/2) {
				$('.nav__item').removeClass('nav__item_active');
				$('#command').addClass('nav__item_active');
				$('.command__line').addClass('command__line_show');
			} else	{
				$('.command__line').removeClass('command__line_show');
			}
		}

		// section action
		if($('.action').length != 0) {
			var action = $('.action');
			var topAction = (action.offset().top - topWindow);
			var dnAction = topAction + action.height();

			if(topAction < heightWrapper/2 && dnAction > heightWrapper/2) {
				$('.nav__item').removeClass('nav__item_active');
				$('#action').addClass('nav__item_active');
			}
		}

		// section send
		if($('.send').length != 0) {
			var send = $('.send');
			var topSend = (send.offset().top - topWindow);
			var dnSend = topSend + send.height();

			if(topSend < heightWrapper/2 && dnSend > heightWrapper/2) {
				$('.nav__item').removeClass('nav__item_active');
				$('#send').addClass('nav__item_active');
			} else {
				$('#send').removeClass('nav__item_active');
			}
		}

	});

	// переходы между экранами по клику в меню

	var scrollToTarget = function(section, speed_scroll) {
		var target = $(section);
		var winScroll = $('.wrapper');
        if (target.length != 0) { // проверим существование элемента чтобы избежать ошибки
        	var topTarget = target.offset().top + ($('.all-sections').offset().top)*-1;
		    winScroll.animate({
			    scrollTop: topTarget
		    }, speed_scroll); // анимируем скроолинг к элементу scroll_el
        }
	    return false; // выключаем стандартное действие
	}

	$('#nav-about').click(function(e) {
		e.preventDefault();
		scrollToTarget('.about', 1500);
	});

	$('#services').click(function(e) {
		e.preventDefault();
		scrollToTarget('.services', 1500);
		// scrollToTarget('.leader', 1500);
	});
	$('#dekor_conc').click(function(e) {
		e.preventDefault();
		scrollToTarget('.dekor_conc', 1500);
		// scrollToTarget('.leader', 1500);
	});

	$('#photo').click(function(e) {
		e.preventDefault();
		scrollToTarget('.photo', 1500);
	});

	$('#video').click(function(e) {
		e.preventDefault();
		scrollToTarget('.video', 1500);
	});

	$('#why').click(function(e) {
		e.preventDefault();
		scrollToTarget('.why', 1500);
	});

	$('#command').click(function(e) {
		e.preventDefault();
		scrollToTarget('.command', 1500);
	});

	$('#action').click(function(e) {
		e.preventDefault();
		scrollToTarget('.action', 1500);
	});

	$('#send').click(function(e) {
		e.preventDefault();
		scrollToTarget('.send', 1500);
	});

});
