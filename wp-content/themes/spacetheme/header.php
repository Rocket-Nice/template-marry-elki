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
    <script type="text/javascript">
        (function(m, e, t, r, i, k, a) {
            m[i] = m[i] || function() {
                (m[i].a = m[i].a || []).push(arguments)
            };
            m[i].l = 1 * new Date();
            for (var j = 0; j < document.scripts.length; j++) {
                if (document.scripts[j].src === r) {
                    return;
                }
            }
            k = e.createElement(t), a = e.getElementsByTagName(t)[0], k.async = 1, k.src = r, a.parentNode.insertBefore(k, a)
        })
        (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

        ym(98643382, "init", {
            clickmap: true,
            trackLinks: true,
            accurateTrackBounce: true,
            webvisor: true
        });
    </script>
    <noscript>
        <div><img src="https://mc.yandex.ru/watch/98643382" style="position:absolute; left:-9999px;" alt="" /></div>
    </noscript>
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
                    <?php wp_nav_menu(array('theme_location' => 'primary', 'menu_id' => 'primary-menu')); ?>

                    <div class="call-answer">

                        <img src="<?php bloginfo('template_url') ?>/imeges/call-answer.png" alt="">
                        <div class="phone_and_sosials"><a href="tel:+7(916)571-61-74">+7 916 571-61-74</a>

                            <ul class="socials_header">
                                <li class="">
                                    <a href="https://api.whatsapp.com/send/?phone=79165716174&amp;text&amp;type=phone_number&amp;app_absent=0x6', ''); ?>" class="" target="blank">



                                        <svg height="800px" width="800px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                            viewBox="0 0 418.135 418.135" xml:space="preserve">
                                            <g>
                                                <path style="fill:black;" d="M198.929,0.242C88.5,5.5,1.356,97.466,1.691,208.02c0.102,33.672,8.231,65.454,22.571,93.536
		L2.245,408.429c-1.191,5.781,4.023,10.843,9.766,9.483l104.723-24.811c26.905,13.402,57.125,21.143,89.108,21.631
		c112.869,1.724,206.982-87.897,210.5-200.724C420.113,93.065,320.295-5.538,198.929,0.242z M323.886,322.197
		c-30.669,30.669-71.446,47.559-114.818,47.559c-25.396,0-49.71-5.698-72.269-16.935l-14.584-7.265l-64.206,15.212l13.515-65.607
		l-7.185-14.07c-11.711-22.935-17.649-47.736-17.649-73.713c0-43.373,16.89-84.149,47.559-114.819
		c30.395-30.395,71.837-47.56,114.822-47.56C252.443,45,293.218,61.89,323.887,92.558c30.669,30.669,47.559,71.445,47.56,114.817
		C371.446,250.361,354.281,291.803,323.886,322.197z" />
                                                <path style="fill:black;" d="M309.712,252.351l-40.169-11.534c-5.281-1.516-10.968-0.018-14.816,3.903l-9.823,10.008
		c-4.142,4.22-10.427,5.576-15.909,3.358c-19.002-7.69-58.974-43.23-69.182-61.007c-2.945-5.128-2.458-11.539,1.158-16.218
		l8.576-11.095c3.36-4.347,4.069-10.185,1.847-15.21l-16.9-38.223c-4.048-9.155-15.747-11.82-23.39-5.356
		c-11.211,9.482-24.513,23.891-26.13,39.854c-2.851,28.144,9.219,63.622,54.862,106.222c52.73,49.215,94.956,55.717,122.449,49.057
		c15.594-3.777,28.056-18.919,35.921-31.317C323.568,266.34,319.334,255.114,309.712,252.351z" />
                                            </g>
                                        </svg>



                                    </a>
                                </li>
                                <li class="">
                                    <a href="https://t.me/marrysol" class="" target="blank">



                                        <svg fill="#000000" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                            viewBox="0 0 24 24" xml:space="preserve">
                                            <style type="text/css">
                                                .st0 {
                                                    fill: none;
                                                }
                                            </style>
                                            <path d="M19.2,4.4L2.9,10.7c-1.1,0.4-1.1,1.1-0.2,1.3l4.1,1.3l1.6,4.8c0.2,0.5,0.1,0.7,0.6,0.7c0.4,0,0.6-0.2,0.8-0.4
	c0.1-0.1,1-1,2-2l4.2,3.1c0.8,0.4,1.3,0.2,1.5-0.7l2.8-13.1C20.6,4.6,19.9,4,19.2,4.4z M17.1,7.4l-7.8,7.1L9,17.8L7.4,13l9.2-5.8
	C17,6.9,17.4,7.1,17.1,7.4z" />
                                            <rect y="0" class="st0" width="24" height="24" />
                                        </svg>



                                    </a>
                                </li>
                                <!-- live__social_item -->
                                <li class="">
                                    <a href="tel:+7(916)571-61-74" class="" target="blank">



                                        <svg xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#" xmlns="http://www.w3.org/2000/svg" xmlns:cc="http://web.resource.org/cc/" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:dc="http://purl.org/dc/elements/1.1/" style="shape-rendering:geometricPrecision;text-rendering:geometricPrecision;image-rendering:optimizeQuality" fill-rule="evenodd" xml:space="preserve" clip-rule="evenodd" viewBox="0 0 58.282 58.282">
                                            <defs>
                                                <style type="text/css">
                                                    .fil0 {
                                                        fill: #1B1C1F
                                                    }

                                                    .fil1 {
                                                        fill: #1B1C1F;
                                                        fill-rule: nonzero
                                                    }
                                                </style>
                                            </defs>
                                            <g id="Layer_x0020_1">
                                                <g id="_152222920">
                                                    <path id="_152222248" class="fil0" d="m24.186 22.5c-5.4466 3.1445 2.8637 18.724 8.8237 15.283 1.0584 1.8332 4.4676 7.7381 5.526 9.5712-2.5146 1.4519-4.6432 2.3671-7.5585 0.70054-8.0946-4.6273-17.005-20.054-16.751-29.256 0.088046-3.196 1.971-4.4482 4.434-5.8702 1.0584 1.8332 4.4676 7.738 5.526 9.5712z" />
                                                    <path id="_150519168" class="fil0" d="m26.47 22.24c-0.58849 0.33978-1.3458 0.13697-1.6856-0.45158l-5.2095-9.0232c-0.33984-0.58862-0.13704-1.3459 0.45152-1.6857l2.738-1.5808c0.58855-0.33984 1.346-0.13685 1.6858 0.4517l5.2095 9.0231c0.33978 0.58849 0.13691 1.3458-0.45158 1.6856l-2.738 1.5808z" />
                                                    <path id="_226148072" class="fil0" d="m40.702 46.89c-0.58849 0.33978-1.3458 0.13697-1.6856-0.45164l-5.2095-9.0232c-0.33984-0.58855-0.13704-1.3459 0.45152-1.6856l2.738-1.5808c0.58855-0.33978 1.346-0.13679 1.6858 0.4517l5.2095 9.0231c0.33978 0.58855 0.13691 1.3459-0.45158 1.6856l-2.738 1.5808z" />
                                                </g>
                                                <path class="fil1" d="m29.141-2.845e-15h0.0004319v0.006787c8.05 0.0001234 15.335 3.26 20.604 8.5296 5.2693 5.2693 8.5291 12.554 8.5293 20.604h0.006787v0.0013574h-0.006787c-0.0001234 8.05-3.26 15.335-8.5296 20.604-5.2694 5.2693-12.554 8.5291-20.604 8.5293v0.006787h-0.0013574v-0.006787c-8.05-0.0001234-15.335-3.26-20.604-8.5296-5.2693-5.2694-8.5291-12.554-8.5293-20.604h-0.006787v-0.0013574h0.006787c0.0001234-8.05 3.26-15.335 8.5296-20.604 5.2693-5.2693 12.554-8.5291 20.604-8.5293v-0.006787h0.0009255zm0.0004319 3.4758v0.006787h-0.0013574v-0.006787c-7.0792 0.0001851-13.494 2.8753-18.141 7.5226-4.6477 4.6476-7.5229 11.063-7.5229 18.142h0.006787v0.0013574h-0.006787c0.0001851 7.0792 2.8753 13.494 7.5226 18.141 4.6476 4.6477 11.063 7.5229 18.142 7.5229v-0.006787h0.0013574v0.006787c7.0792-0.0001851 13.494-2.8753 18.141-7.5226 4.6477-4.6476 7.5229-11.063 7.5229-18.142h-0.006787v-0.0013574h0.006787c-0.0001851-7.0792-2.8753-13.494-7.5226-18.141-4.6476-4.6477-11.063-7.5229-18.142-7.5229z" />
                                            </g>
                                        </svg>




                                    </a>
                                </li>
                                <!-- live__social_item -->
                                <!-- live__social_item -->
                            </ul>
                        </div>
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