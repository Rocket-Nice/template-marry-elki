// jQuery(document).ready(function($) {


//     $('#dek_sv').click(function() {
//         $('.dekor-choise').attr('src', 'http://marrysol.i1-web.ru/wp-content/themes/spacetheme/imeges/dekor_1.png');
//     });

//     $('#dek_club').click(function() {
//         $('.dekor-choise').attr('src', 'http://marrysol.i1-web.ru/wp-content/themes/spacetheme/imeges/dekor_2.png');
//     });

//     $('#dek_fs').click(function() {
//         $('.dekor-choise').attr('src', 'http://marrysol.i1-web.ru/wp-content/themes/spacetheme/imeges/dekor_3.png');
//     });



//     $('#dek_di').click(function() {
//         $('.dekor-choise').attr('src', 'http://marrysol.i1-web.ru/wp-content/themes/spacetheme/imeges/dekor_4.png');

//     });



//     $('#dek_ap').click(function() {
//         $('.dekor-choise').attr('src', 'http://marrysol.i1-web.ru/wp-content/themes/spacetheme/imeges/dekor_5.png');

//     });



//     $('#dek_rs').click(function() {
//         $('.dekor-choise').attr('src', 'http://marrysol.i1-web.ru/wp-content/themes/spacetheme/imeges/dekor_6.png');

//     });



//     $('#dek_dk').click(function() {
//         $('.dekor-choise').attr('src', 'http://marrysol.i1-web.ru/wp-content/themes/spacetheme/imeges/dekor_7.png');

//     });


// });


// $(function() {
//     $('#Container').mixItUp();
// });

// // Custom click event - open fancyBox manually
// $('.fancybox').on('click', function() {
//     var visibleLinks = $('.fancybox:"visible"');

//     $.fancybox.open(visibleLinks, {}, visibleLinks.index(this));
//     return false;
// });

jQuery(document).ready(function($) {



    var close_image = function() {



        console.log('close image__pop_up');



        $('.leader__pop_up').removeClass('opacity_1');



        $('.why__img').removeClass('opacity_0');



        setTimeout(function() {



            $('.leader__pop_up__line').removeClass('leader__pop_up__line_show');



            $('.leader__pop_up').removeClass('display_block');



        }, 1000);



    }



    var open_image = function(leader_class) {



        $(leader_class).addClass('display_block');



        setTimeout(function() {



            $(leader_class).addClass('opacity_1');



        }, 4);



        $('.nav__item').removeClass('nav__item_active');



        $('.why__img').addClass('opacity_0');



        setTimeout(function() {



            $('.leader__pop_up__line').addClass('leader__pop_up__line_show');



        }, 1000);



    }



    $('.leader__pop_up__close').click(function() {



        close_image();



    });



$('#concept1').click(function() {
        console.log('click to .concept1');
        open_image('.concept1');
    });
$('#concept2').click(function() {
        console.log('click to .concept2');
        open_image('.concept2');
    });
$('#concept3').click(function() {
        console.log('click to .concept3');
        open_image('.concept3');
    });
$('#concept4').click(function() {
        console.log('click to .concept4');
        open_image('.concept4');
    });
$('#concept5').click(function() {
        console.log('click to .concept5');
        open_image('.concept5');
    });
$('#concept6').click(function() {
        console.log('click to .concept6');
        open_image('.concept6');
    });
$('#concept7').click(function() {
        console.log('click to .concept7');
        open_image('.concept7');
    });
$('#concept8').click(function() {
        console.log('click to .concept8');
        open_image('.concept8');
    });
$('#concept9').click(function() {
        console.log('click to .concept9');
        open_image('.concept9');
    });
$('#concept10').click(function() {
        console.log('click to .concept10');
        open_image('.concept10');
    });
$('#concept11').click(function() {
        console.log('click to .concept11');
        open_image('.concept11');
    });
$('#concept12').click(function() {
        console.log('click to .concept12');
        open_image('.concept12');
    });
$('#concept13').click(function() {
        console.log('click to .concept13');
        open_image('.concept13');
    });
$('#concept14').click(function() {
        console.log('click to .concept14');
        open_image('.concept14');
    });
$('#concept15').click(function() {
        console.log('click to .concept15');
        open_image('.concept15');
    });
$('#concept16').click(function() {
        console.log('click to .concept16');
        open_image('.concept16');
    });
$('#concept17').click(function() {
        console.log('click to .concept17');
        open_image('.concept17');
    });
$('#concept18').click(function() {
        console.log('click to .concept18');
        open_image('.concept18');
    });
$('#concept19').click(function() {
        console.log('click to .concept19');
        open_image('.concept19');
    });
$('#concept20').click(function() {
        console.log('click to .concept20');
        open_image('.concept20');
    });

    $('#dek_sv').click(function() {



        console.log('click to .dek_sv');



        open_image('.dek_sv');



    });





    $('#dek_club').click(function() {



        console.log('click to .dek_club');



        open_image('.dek_club');



    });





    $('#dek_fs').click(function() {



        console.log('click to .dek_fs');



        open_image('.dek_fs');



    });



    $('#dek_di').click(function() {



        console.log('click to .dek_di');



        open_image('.dek_di');



    });



    $('#dek_ap').click(function() {



        console.log('click to .dek_ap');



        open_image('.dek_ap');



    });



    $('#dek_rs').click(function() {



        console.log('click to .dek_rs');



        open_image('.dek_rs');



    });



    $('#dek_dk').click(function() {



        console.log('click to .dek_dk');



        open_image('.dek_dk');



    });







});