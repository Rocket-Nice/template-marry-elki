jQuery(document).ready(function() {

	// bg youtube

	var send_h = window.innerHeight* 1.35;
	var send_w = window.innerWidth;

	var frame_h;
	var frame_w;

	if (send_h*1.777777777777778 < send_w) {
		frame_w = send_w;
		frame_h = send_w*0.5625;
	}

	if (send_h*1.777777777777778 > send_w) {
		frame_w = send_h*1.777777777777778;
		frame_h = send_h;
	}

	$('.send__video').attr('width', frame_w);

	$('.send__video').attr('height', frame_h);

	$(window).resize(function() {

		console.log('resize');

		send_h = window.innerHeight* 1.35;
		send_w = window.innerWidth;

		if (send_h*1.777777777777778 < send_w) {
			frame_w = send_w;
			frame_h = send_w*0.5625;
		}

		if (send_h*1.777777777777778 > send_w) {
			frame_w = send_h*1.777777777777778;
			frame_h = send_h;
		}
        
        $('.send__video').attr('width', frame_w);

        $('.send__video').attr('height', frame_h);

    });

    // send form
    $('#form_btn').click(function() {

    	$('.form__input').removeClass('form__input_border');
        
        form_elements=document.getElementById('form').elements;
        valid = true;

        if ( form_elements['name'].value == "" ) {
            // alert ( "Пожалуйста укажите ваши контактные данные" );

            $('.form__input_name').addClass('form__input_border');
            
            valid = false;
            return valid;
        }

        if ( form_elements['phone'].value == "" ) {
            // alert ( "Пожалуйста укажите ваши контактные данные" );

            $('.form__input_phone').addClass('form__input_border');
            
            valid = false;
            return valid;
        }
        /*console.log('все поля заполнены');
        console.log('valid = ' + valid);*/
        if (valid == true) {
            // console.log('запускаем отправку');
            jQuery.ajax({
                type: "POST",
                url: "send.php",
                data: $('#form').serialize()
            }).done(function(){
                // alert("Спасибо за заявку! Скоро мы с вами свяжемся");

                $('.form__input_name').val('');

                $('.form__input_phone').val('');

                // pop up open
                console.log('send');

                // stop scroll
                window.onmousewheel = function( e ) {
                    e.preventDefault();
                }

                $('.pop-up').addClass('display_block');

                $('.pop-up__win').addClass('display_block');

                setTimeout(function() {
                    $('.pop-up').addClass('opacity_1');
                }, 4);

                valid = false;
            });
            return false;
        }
        return false;
    });

});