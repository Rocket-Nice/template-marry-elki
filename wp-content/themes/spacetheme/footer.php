<?php

/**

 * The template for displaying the footer.

 *

 * Contains the closing of the #content div and all content after.

 *

 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials

 *

 * @package space_theme

 */



?>
    <div class="container f-container">
        <div class="live__footer live__footer_mobile">
            <ul class="live__social live__footer_item">
                <li class="live__social_item">
                    <a href="<?php echo get_theme_mod('example_textbox4', ''); ?>" class="live__social_link" target="blank">

                        

                                    <img src="<?php bloginfo('template_url') ?>/imeges/insta.png" alt="instagramm" class="live__social_img">

                        

                                </a>
                </li>
                <!-- live__social_item -->
                <li class="live__social_item live__item_vk">
                    <a href="<?php echo get_theme_mod('example_textbox5', ''); ?>" class="live__social_link" target="blank">

                        

                                    <img src="<?php bloginfo('template_url') ?>/imeges/vk.png" alt="instagramm" class="live__social_img">

                        

                                </a>
                </li>
                <!-- live__social_item -->
                <li class="live__social_item">
                    <a href="<?php echo get_theme_mod('example_textbox6', ''); ?>" class="live__social_link" target="blank">

                        

                                    <img src="<?php bloginfo('template_url') ?>/imeges/facebook.png" alt="instagramm" class="live__social_img">

                        

                                </a>
                </li>
                <!-- live__social_item -->
            </ul>
            <!-- /.live__social -->
            <div class="live__adres live__footer_item">
                <p class="live__adres_text">
                    <?php echo get_theme_mod('example_textbox2', ''); ?>
                </p>
            </div>
            <div class="live__phone live__footer_item">
                <img src="<?php bloginfo('template_url') ?>/imeges/live_phone.png" alt="phone" class="live__phone_ing">
                <p class="live__phone_text">
                    <!-- <?php echo get_theme_mod('example_textbox3', ''); ?> -->
                    +7 916 571-61-74
                </p>
                
            </div>
            <!-- /.live__phone -->
            <div class="live__adres live__adres_w100 live__footer_item">
                <p class="live__adres_text">
                    <?php echo get_theme_mod('example_textbox', ''); ?>
                </p>
            </div>
            <div class="live__cop live__footer_item">
                <p class="live__cop_text">
                    © 2017 MARRYSOL
                </p>
                <p class="live__cop_text">
                    <span class="iOne">Разработано в <a target="_blank" href="http://i1-web.ru/"><span>i</span>One digital agency</a></span>
                </p>
            </div>
            <!-- /.live__cop -->
        </div>
        <!-- live__footer -->
        <div class="live__footer live__footer_desctp">
            <div class="live__cop live__footer_item">
                <p class="live__cop_text">
                    © 2017 MARRYSOL
                </p>
                <p class="live__cop_text">
                    <span class="iOne">Разработано в <a target="_blank" href="http://i1-web.ru/"><span>i</span>One digital agency</a></span>
                </p>
            </div>
            <!-- /.live__cop -->
            <div class="live__adres live__footer_item">
                <p class="live__adres_text">
                    <?php echo get_theme_mod('example_textbox', ''); ?>
                    <?php echo get_theme_mod('example_textbox2', ''); ?>
                </p>
            </div>
            <div class="live__phone live__footer_item">
                <img src="<?php bloginfo('template_url') ?>/imeges/live_phone.png" alt="phone" class="live__phone_ing">
                <p class="live__phone_text">
                     +7 916 571-61-74
                </p>
            </div>
  
            <!-- /.live__phone -->
            <ul class="live__social live__footer_item">
                <li class="live__social_item">
                    <a href="<?php echo get_theme_mod('example_textbox4', ''); ?>" class="live__social_link" target="blank">

                        

                                    <img src="<?php bloginfo('template_url') ?>/imeges/insta.png" alt="instagramm" class="live__social_img">

                        

                                </a>
                </li>
                <!-- live__social_item -->
                <li class="live__social_item live__item_vk">
                    <a href="<?php echo get_theme_mod('example_textbox5', ''); ?>" class="live__social_link" target="blank">

                        

                                    <img src="<?php bloginfo('template_url') ?>/imeges/vk.png" alt="instagramm" class="live__social_img">

                        

                                </a>
                </li>
                <!-- live__social_item -->
                <li class="live__social_item">
                    <a href="<?php echo get_theme_mod('example_textbox6', ''); ?>" class="live__social_link" target="blank">

                        

                                    <img src="<?php bloginfo('template_url') ?>/imeges/facebook.png" alt="instagramm" class="live__social_img">

                        

                                </a>
                </li>
                <!-- live__social_item -->
            </ul>
            <!-- /.live__social -->
        </div>
    </div>
    </div>
    <!-- /.all-sections -->
    </div>
    <div class="call-wrapper">
                            <div class="call-border animated infinite pulse">
                                <a class="call-icon" href="tel:+7(916)571-61-74"></a>
                            </div>
                        </div>
    <!-- /.wrapper -->
    <section class="pop-up">
        <div class="pop-up__bg"></div>
        <div class="pop-up__close">
            <div class="pop-up__close-line pop-up__close-line-1"></div>
            <div class="pop-up__close-line pop-up__close-line-2"></div>
        </div>
        <!-- /.pop-up__close -->
        <video class="pop-up__video pop_up__contant" playsinline autoplay controls></video>
        <iframe class="pop-up__youtobe pop_up__contant" width="560" height="315" src="" frameborder="0" allowfullscreen autoplay="1"></iframe>
        <img src="" alt="" class="pop-up__img pop_up__contant">
        <div class="pop-up__win pop_up__contant">
            <div class="pop-up__title">
                Спасибо за обращение!
            </div>
            <!-- /.pop-up__title -->
            <div class="pop-up__text">
                Мы свяжемся с Вами в ближайшее время!
            </div>
            <!-- /.pop-up__text -->
        </div>
        <!-- /.pop-up__win -->
    </section>
    <script src="<?php bloginfo('template_url') ?>/js/jquery-3.2.1.min.js"></script>
    <script src="<?php bloginfo('template_url') ?>/js/header.js"></script>
    <script src="<?php bloginfo('template_url') ?>/js/photo-slider.js"></script>
    <script src="<?php bloginfo('template_url') ?>/js/video-slider.js"></script>
    <script src="<?php bloginfo('template_url') ?>/js/why.js"></script>
    <!-- <script src="<?php bloginfo('template_url') ?>/js/send.js"></script> -->
    <script src="<?php bloginfo('template_url') ?>/js/live-slider.js"></script>
    <script src="<?php bloginfo('template_url') ?>/js/pop-up.js"></script>
    <script src="<?php bloginfo('template_url') ?>/js/owl.carousel.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <script>
    $('#menu-item-24 > a').click(function() {
   
        $('#menu-item-24 > a').next('.parent-sub-menu').find('.sub-menu').slideToggle('1000');
        $('#menu-item-26 > a').next('.parent-sub-menu').find('.sub-menu').css('display', 'none');
        return false;
    });
    
    function handleMenuInteractions() {
        let windowWidth = $(window).width();

        if (windowWidth > 1201) {

            let closeMenuTimeout;

            $('#menu-item-26').off('click');
            $('#menu-item-26').on('mouseenter', function() {
                clearTimeout(closeMenuTimeout);
                $('#menu-item-26 > a').next('.parent-sub-menu').find('.sub-menu').stop(true, true).slideDown('200');
            });

            $('#menu-item-26').on('mouseleave', function(event) {
                closeMenuTimeout = setTimeout(function() {
                    if (!$('#menu-item-26').is(':hover') && !$('#menu-item-26 > a').next('.parent-sub-menu').find('.sub-menu').is(':hover')) {
                        $('#menu-item-26 > a').next('.parent-sub-menu').find('.sub-menu').slideUp('200');
                    }
                }, 300);
            });
        } else {
            $('#menu-item-26').off('mouseenter mouseleave'); 
            $('#menu-item-26 > a').off('click').on('click', function() {
                $('#menu-item-26 > a').next('.parent-sub-menu').find('.sub-menu').slideToggle('1000');
                return false;
            });
        }
    }

    handleMenuInteractions();

    $(window).resize(function() {
        handleMenuInteractions();
    });

    </script>

    <script>
    jQuery(document).ready(function() {



        var window_w = window.innerWidth;



        if (window_w >= 991) {



            $('.owl-carousel').owlCarousel({



                items: 6,



                loop: true,



                nav: false



            });



        }



        if (window_w < 991 && window_w >= 730) {



            $('.owl-carousel').owlCarousel({



                items: 5,



                loop: true,



                nav: false



            });



        }



        if (window_w < 730 && window_w >= 530) {



            $('.owl-carousel').owlCarousel({



                items: 4,



                loop: true,



                nav: false



            });



        }



        if (window_w < 530 && window_w >= 400) {



            $('.owl-carousel').owlCarousel({



                items: 3,



                loop: true,



                nav: false



            });



        }



        if (window_w < 400) {



            $('.owl-carousel').owlCarousel({



                items: 2,



                loop: true,



                nav: false



            });



        }



    });
    </script>
    <?php wp_footer(); ?>

       <script>
    $(function($) {
        var contents = $('.accordeon-content');
        var titles = $('.accordeon-title');
        titles.on('click', function() {
            var title = $(this);
            contents.filter(':visible').slideUp(function() {
                $(this).prev('.accordeon-title').removeClass('is-opened');
            });

            var content = title.next('.accordeon-content');

            if (!content.is(':visible')) {
                content.slideDown(function() {
                    title.addClass('is-opened')
                });
            }
        });
    });
 
    </script>

    </body>

    </html>