<?php

/**

 * The header for our theme.

 *

 * This is the template that displays all of the <head> section and everything up until <div id="content">

 *

 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials

 *

 * @package space_theme

 */



?>
    <!DOCTYPE html>
    <html lang="ru">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="<?php bloginfo('description'); ?>" />
        <meta name="keywords" content="<?php bloginfo('description'); ?>">
        <!-- <script src="<?php bloginfo('template_url') ?>/js/jquery-3.2.1.min.js"></script>

    <script src="<?php bloginfo('template_url') ?>/js/header.js"></script> -->
        <?php wp_head(); ?>
<meta name="yandex-verification" content="15b7c3bfdfc99180" />
<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
   (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
   m[i].l=1*new Date();
   for (var j = 0; j < document.scripts.length; j++) {if (document.scripts[j].src === r) { return; }}
   k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
   (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

   ym(98643382, "init", {
        clickmap:true,
        trackLinks:true,
        accurateTrackBounce:true,
        webvisor:true
   });
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/98643382" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->

    </head>

    <body <?php body_class(); ?>>
        <div id="wptime-plugin-preloader"></div>
        <div class="wrapper">
            <header class="header">
                <div class="container">
                    <a href="<?php echo home_url(); ?>" class="logo">

                    <img id="logo" src="<?php bloginfo('template_url') ?>/imeges/logo.svg" alt="Marry Sol" class="logo__img">

                    <img id="logo_wite" src="<?php bloginfo('template_url') ?>/imeges/logo_wite.png" alt="Marry Sol" class="logo__img display-none">

                </a>
                    <!-- /.logo -->
                    <nav class="menuz">
                        <div class="burger">
                            <div class="burger__line1"></div>
                            <div class="burger__line2"></div>
                        </div>
                        <!-- /.burger -->
                        <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
                        
                        <div class="call-answer">
                            
                                <img src="<?php bloginfo('template_url') ?>/imeges/call-answer.png" alt="">
                                <div class="phone_and_sosials"><a href="tel:+7(916)571-61-74">+7 916 571-61-74</a>
                            
                            <ul class="socials_header">
                                <li class="">
                                    <a href="<?php echo get_theme_mod('example_textbox4', ''); ?>" class="" target="blank">
                
                                        
                
                                                    <img src="<?php bloginfo('template_url') ?>/imeges/insta.png" alt="instagramm" class="">
                
                                        
                
                                                </a>
                                </li>
                                <!-- live__social_item -->
                                <li class="">
                                    <a href="<?php echo get_theme_mod('example_textbox5', ''); ?>" class="" target="blank">
                
                                        
                
                                                    <img src="<?php bloginfo('template_url') ?>/imeges/vk.png" alt="instagramm" class="live__social_img">
                
                                        
                
                                                </a>
                                </li>
                                <!-- live__social_item -->
                                <li class="">
                                    <a href="<?php echo get_theme_mod('example_textbox6', ''); ?>" class="" target="blank">
                
                                        
                
                                                    <img src="<?php bloginfo('template_url') ?>/imeges/facebook.png" alt="instagramm" class="">
                
                                        
                
                                                </a>
                                </li>
                                <!-- live__social_item -->
                            </ul></div>
                        </div>
                    </nav>
                </div>
                <!-- /.container -->
            </header>
            <sidebar class="nav hidden-left">
                <ul class="nav__list">
                    <li id="nav-about" class="nav__item">
                        <div class="nav__line"></div>
                        <a href="#" class="nav__link">

                        О нас

                    </a>
                    </li>
                    <li id="services" class="nav__item">
                        <div class="nav__line"></div>
                        <a href="#" class="nav__link">

                        Услуги

                    </a>
                    </li>
                    <li id="dekor_conc" class="nav__item">
                        <div class="nav__line"></div>
                        <a href="#" class="nav__link">

                        готовые



                        <p class="nav__text">

                            дизайн концепции

                        </p>



                    </a>
                    </li>
                    <li id="photo" class="nav__item">
                        <div class="nav__line"></div>
                        <a href="#" class="nav__link">

                        Фото



                        <p class="nav__text">

                            с наших мероприятий

                        </p>



                    </a>
                    </li>
                    <li id="video" class="nav__item">
                        <div class="nav__line"></div>
                        <a href="#" class="nav__link">

                        Видео



                        <p class="nav__text">

                            с наших мероприятий

                        </p>



                    </a>
                    </li>
                    <li id="why" class="nav__item">
                        <div class="nav__line"></div>
                        <a href="#" class="nav__link">

                        Почему мы

                    </a>
                    </li>
                    <li id="command" class="nav__item">
                        <div class="nav__line"></div>
                        <a href="#" class="nav__link">

                        Команда

                    </a>
                    </li>
                    <li id="action" class="nav__item nav-sale">
                        <div class="nav__line"></div>
                        <a href="#" class="nav__link">

                        Акции

                    </a>
                    </li>
                    <li id="send" class="nav__item">
                        <div class="nav__line"></div>
                        <a href="#" class="nav__link">

                        Написать нам

                    </a>
                    </li>
                </ul>
            </sidebar>
            <div class="all-sections">