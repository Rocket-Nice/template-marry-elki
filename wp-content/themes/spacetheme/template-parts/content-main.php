<?php

/**
 * Template part for displaying page content in page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package space_theme
 */

?>


<section id="proem" class="section active proem">
    <div class="container">
        <div class="proem__content proem__content_main">
            <h2 class="proem__header">
                Организация и оформление мероприятий
            </h2>
            <div class="proem__text">
                <div class="proem__line"></div>
                <p>
                    Ищите компанию, которой можно доверить организацию важного события вашей жизни?
                </p>
                <ul>
                    <li>свадьбу мечты</li>
                    <li>бизнес мероприятие или </li>
                    <li>первоклассную имиджевую историю </li>
                </ul>
                <p>
                    Хотите быть уверенном в превосходном результате без лишних затрат?
                </p>
                <p>
                    Давайте знакомиться!
                </p>
                <img src="<?php bloginfo('template_url') ?>/imeges/scroll.png" alt="" class="proem__scroll">
            </div>
            <!-- proem__text -->
        </div>
        <!-- /.proem__content -->
        <div class="proem__pic">
            <img src="<?php bloginfo('template_url') ?>/imeges/proem__img.png" alt="" class="proem__img">
        </div>
        <!-- /.proem__pic -->
    </div>
    <!-- /.container -->
</section>
<!-- /.proem -->
<section class="section about">
    <div class="container">
        <div class="about__pic">
            <img src="<?php bloginfo('template_url') ?>/imeges/about__foto.png" alt="foto" class="about__img">
            <div class="about__name">
                <!--<p class="about__name-text">
                                Новицкая<span class="about__name_black">Мария</span>
                            </p>
                            <p class="about__name-status">
                                креативный <span class="pink">директор</span>
                            </p>-->
            </div>
            <!-- /.about__name -->
        </div>
        <!-- /.about__pic -->
        <div class="about__content">
            <div class="about__line"></div>
            <div class="about__text">
                <?php echo get_field('о_нас'); ?>
            </div>
            <!-- about__text -->
        </div>
        <!-- /.about__content -->
    </div>
    <!-- /.container -->
</section>
<!-- /.about -->
<section class="section services">
    <ul class="services__list">
        <li class="services__item services__item_wedding">
            <div class="services__hover"></div>
            <a href="/wedding/" class="services__link">
                <h3 class="services__title">
                    СвадебныЕ<br>торжества
                </h3>
            </a>
        </li>
        <!-- /.services__item -->
        <li class="services__item services__item_bisnes">
            <div class="services__hover"></div>
            <a href="/biznes/" class="services__link">
                <h3 class="services__title">
                    бИЗНЕС<br>МЕРОПРИЯТИЯ
                </h3>
            </a>
        </li>
        <!-- /.services__item -->
        <li class="services__item services__item_image">
            <div class="services__hover"></div>
            <a href="/image/" class="services__link">
                <h3 class="services__title">
                    ИМИДЖЕВЫЕ<br>МЕРОПРИЯТИЯ
                </h3>
            </a>
        </li>
        <!-- /.services__item -->
        <li class="services__item services__item_decoction">
            <div class="services__hover"></div>
            <a href="/dekor/" class="services__link">
                <h3 class="services__title">
                    ДЕКОР И<br>ОФОРМЛЕНИЕ
                </h3>
            </a>
        </li>
        <!-- /.services__item -->
    </ul>
</section>
<!-- services -->
<section class="section photo">
    <div class="container container_h100">
        <h2 class="photo__title">
            <span class="photo__title_black">Фото </span>с наших мероприятий
        </h2>
        <div class="photo__btn"><a class="scrollTo" href="#feedback">
                <div class="btn">
                    <p class="btn__text">Пообщаемся?</p>
            </a>
        </div>
    </div>
    <!-- /.photo__btn -->
    <div class="slider">
        <ul class="slider__list slider__list_photo" date_1="0">


            <?php
            if (have_rows('фото')) {
                while (have_rows('фото')) {
                    the_row();
            ?>

                    <li class="slider__item slider_photo slider_photo_active" date_1="0">
                        <img src="<?php echo get_sub_field('фото'); ?>" alt="photo" class="slider__img pop-up-img">
                        <div class="slaider__hover">
                            <div class="slaider__hover-skew"></div>
                            <h3 class="slaider__title">
                                <?php echo get_sub_field('заголовок'); ?>
                            </h3>
                            <div class="slider__title-line"></div>
                            <p class="slider__text">
                                <?php echo get_sub_field('описание'); ?>
                            </p>
                        </div>
                        <!-- /.slaider__hover -->
                    </li>

            <?php
                }
            } ?>

            <!-- /.slider__item -->
        </ul>
        <!-- slider__list -->
    </div>
    <!-- /.slider -->
    <div class="controls">
        <div class="controls__arrows">
            <div id="arrow-left_photo" class="controls__arrow controls__arrow-left">
                <img src="<?php bloginfo('template_url') ?>/imeges/arrow-left.png" alt="arrow" class="controls__arrow-img">
            </div>
            <!-- controls__arrow-left -->
            <div id="slider-first_photo" class="controls__circle">
            </div>
            <!-- /.controls__circle -->
            <div id="arrow-right_photo" class="controls__arrow ">
                <img src="<?php bloginfo('template_url') ?>/imeges/arrow-right.png" alt="arrow" class="controls__arrow-img controls__arrow-right">
            </div>
            <!-- controls__arrow-right -->
        </div>
        <!-- /.controls__arrows -->
        <div class="controls__line">
            <div class="controls__line-bg controls__line-bg_photo"></div>
            <!-- /.controls__line-bg -->
        </div>
        <!-- /.controls__line -->
    </div>
    <!-- /.controls -->
    </div>
    <!-- container -->
</section>
<!-- /.section photo -->
<section class="section video">
    <div class="container container_h100">
        <h2 class="photo__title">
            <span class="photo__title_black">Видео </span>с наших мероприятий
        </h2>
        <div class="photo__btn">
            <div class="btn">
                <a href="#feedback">
                    <p class="btn__text">Пообщаемся?</p>
                </a>
            </div>
        </div>
        <!-- /.video__btn -->
        <div class="slider">
            <ul class="slider__list slider__list_video" date_1="0">



                <?php if (have_rows('видео')) {
                    while (have_rows('видео')) {
                        the_row(); ?>
                        <li class="slider__item slider_video pop-up-youtube slider_video_active" date_1="0" date="<?php echo get_sub_field('видео'); ?>">
                            <img src="<?php echo get_sub_field('баннер'); ?>" alt="video" class="slider__img">
                            <div class="slaider__hover-video">
                            </div>
                            <!-- /.slaider__hover -->
                            <img src="<?php bloginfo('template_url') ?>/imeges/play.png" class="slaider__play" alt="play">
                            <img src="<?php bloginfo('template_url') ?>/imeges/play-hover.png" class="slaider__play-hover" alt="play">
                        </li>
                <?php
                    }
                } ?>

            </ul>
            <!-- slider__list -->
        </div>
        <!-- /.slider -->
        <div class="controls">
            <div class="controls__arrows">
                <div id="arrow-left_video" class="controls__arrow controls__arrow-left">
                    <img src="<?php bloginfo('template_url') ?>/imeges/arrow-left.png" alt="arrow" class="controls__arrow-img">
                </div>
                <!-- controls__arrow-left -->
                <div id="slider-first_video" class="controls__circle">
                </div>
                <!-- /.controls__circle -->
                <div id="arrow-right_video" class="controls__arrow ">
                    <img src="<?php bloginfo('template_url') ?>/imeges/arrow-right.png" alt="arrow" class="controls__arrow-img controls__arrow-right">
                </div>
                <!-- controls__arrow-right -->
            </div>
            <!-- /.controls__arrows -->
            <div class="controls__line">
                <div class="controls__line-bg controls__line-bg_video"></div>
                <!-- /.controls__line-bg -->
            </div>
            <!-- /.controls__line -->
        </div>
        <!-- /.controls -->
    </div>
    <!-- container -->
</section>
<!-- /.section video -->
<section class="section why">
    <h2 class="photo__title">
        <span class="photo__title_black">Почему </span>мы
    </h2>
    <div class="why__scuare_box">
        <div class="why__square"></div>
        <!-- /.why__square -->
    </div>
    <!-- /.why__scuare_box -->
    <img src="<?php bloginfo('template_url') ?>/imeges/why_img.png" alt="Photo" class="why__img">
    <div class="container container_h100">
        <ul class="why__list">
            <li class="why__item">
                <div class="why__row">
                    <img src="<?php bloginfo('template_url') ?>/imeges/why-1.png" alt="Icon" class="why__icon">
                    <h3 class="why__title">
                        формат luxury по приемлемой стоимости
                    </h3>
                </div>
                <!-- /.why__row -->
                <div class="why__desc">
                    <div class="why__desc-line"></div>
                    <!-- /.why__desc-line -->
                    <p class="why__text">
                        Мы предлагаем шикарные мероприятия по приятным ценам. Организация мероприятий – это наша любимая работа. Мы внимательно относимся к каждому клиенту. Поэтому готовы предложить самые приятные условия совместной работы!
                    </p>
                </div>
                <!-- /.why__desc -->
            </li>
            <!-- /.why__item -->
            <li class="why__item">
                <div class="why__row">
                    <img src="<?php bloginfo('template_url') ?>/imeges/why-2.png" alt="Icon" class="why__icon">
                    <h3 class="why__title">
                        мы на связи 24 часа в сутки
                    </h3>
                </div>
                <!-- /.why__row -->
                <div class="why__desc">
                    <div class="why__desc-line"></div>
                    <!-- /.why__desc-line -->
                    <p class="why__text">
                        Мы всегда готовы помочь Вам с организацией незабываемого события. Выходим на связь в любое время, Вы всегда можете внести корректироваки в план мероприятия, все пожелания будут учтены. Связь производится по телефону, указанному на сайте: +7(916)571-61-74.
                    </p>
                </div>
                <!-- /.why__desc -->
            </li>
            <!-- /.why__item -->
            <li class="why__item">
                <div class="why__row">
                    <img src="<?php bloginfo('template_url') ?>/imeges/why-3.png" alt="Icon" class="why__icon">
                    <h3 class="why__title">
                        качественные проекты в минимальные сроки
                    </h3>
                </div>
                <!-- /.why__row -->
                <div class="why__desc">
                    <div class="why__desc-line"></div>
                    <!-- /.why__desc-line -->
                    <p class="why__text">
                        Часто органиция престижного мероприятия занимает недели и месяцы. Мы решили эту проблему! Мы организуем мероприятия в невозможно короткие сроки - от 2-3 дней до начала мероприятия. Причём качество от этого никак не страдает.
                    </p>
                </div>
                <!-- /.why__desc -->
            </li>
            <!-- /.why__item -->
            <li class="why__item">
                <div class="why__row">
                    <img src="<?php bloginfo('template_url') ?>/imeges/why-4.png" alt="Icon" class="why__icon">
                    <h3 class="why__title">
                        собственное производство декора
                    </h3>
                </div>
                <!-- /.why__row -->
                <div class="why__desc">
                    <div class="why__desc-line"></div>
                    <!-- /.why__desc-line -->
                    <p class="why__text">
                        У нас своя декор-студия, где создаются шедевры. Аксессуары, дополнения и мебель могут быть изготовлены на заказ или выбраны из уже готовых вариантов. Также у нас можно взять в аренду предметы декора. Креатив и индивидуальность каждого элемента оформления гарантируем.
                    </p>
                </div>
                <!-- /.why__desc -->
            </li>
            <!-- /.why__item -->
            <li class="why__item">
                <div class="why__row">
                    <img src="<?php bloginfo('template_url') ?>/imeges/why-5.png" alt="Icon" class="why__icon">
                    <h3 class="why__title">
                        работаем по всей рф и зарубежом
                    </h3>
                </div>
                <!-- /.why__row -->
                <div class="why__desc">
                    <div class="why__desc-line"></div>
                    <!-- /.why__desc-line -->
                    <p class="why__text">
                        Расстояние - не проблема для профессионалов нашего уровня! Если необходимо подготовить мероприятие в другом городе или за границей, наше агентство смело возьмется за организацию. Мы продумаем маршрут, размещение, арендуем и оформим площадку и проведем мероприятие на высшем уровне!
                    </p>
                </div>
                <!-- /.why__desc -->
            </li>
            <!-- /.why__item -->
        </ul>
        <!-- /.why__list -->
    </div>
    <!-- /.container -->
</section>
<!-- /.section why -->
<section class="section command">
    <div class="container">
        <h2 class="photo__title command__title">
            <span class="photo__title_black">Команда</span>
        </h2>
    </div>
    <!-- /.container -->
    <div class="command__wrapp">
        <div class="container">
            <ul class="command__list  owl-carousel owl-theme">


                <?php
                if (have_rows('фото_команды')) {
                    while (have_rows('фото_команды')) {
                        the_row();
                ?>
                        <li class="command__item">
                            <div class="command__photo">
                                <img src="<?php echo get_sub_field('фото_команды2'); ?>" alt="Photo" class="command__photo_img">
                            </div>
                            <p class="command__mame">
                                <?php echo get_sub_field('имя'); ?>
                            </p>
                        </li>
                <?php
                    }
                } ?>



                <!-- /.command__item -->
            </ul>
            <!-- /.command__list -->
        </div>
        <!-- /.container -->
    </div>
    <!-- /.command__wrapp -->
    <div class="container">
        <div class="command__arrow">
            <img src="<?php bloginfo('template_url') ?>/imeges/command_arrow.png" alt="arrow" class="command__arrow_img">
            <p class="command__arrow_text">
                Познакомьтесь с нашей командой!
            </p>
        </div>
        <!-- /.command__arrow -->
        <div class="command__content">
            <div class="command__line"></div>
            <!-- /.command__line -->
            <p class="command__text">
                <?php echo get_field('описание_команды'); ?>
            </p>
            <!-- /.command__text -->
        </div>
        <!-- /.command__content -->
    </div>
    <!-- /.container -->
    <div class="clients">
        <div class="container">
            <div class="clients__wrapp">
                <h3 class="clients__title">
                    Наши клиенты
                </h3>
                <ul class="client__list">
                    <li class="clients__item">
                        <img src="<?php bloginfo('template_url') ?>/imeges/clients_1.jpg" alt="Client" class="clients__img">
                    </li>
                    <!-- /.clients__item -->
                    <li class="clients__item">
                        <img src="<?php bloginfo('template_url') ?>/imeges/clients_2.jpg" alt="Client" class="clients__img">
                    </li>
                    <!-- /.clients__item -->
                    <li class="clients__item">
                        <img src="<?php bloginfo('template_url') ?>/imeges/clients_3.jpg" alt="Client" class="clients__img">
                    </li>
                    <!-- /.clients__item -->
                    <li class="clients__item">
                        <img src="<?php bloginfo('template_url') ?>/imeges/clients_4.jpg" alt="Client" class="clients__img">
                    </li>
                    <!-- /.clients__item -->
                    <li class="clients__item">
                        <img src="<?php bloginfo('template_url') ?>/imeges/clients_5.jpg" alt="Client" class="clients__img">
                    </li>
                    <!-- /.clients__item -->
                    <li class="clients__item">
                        <img src="<?php bloginfo('template_url') ?>/imeges/clients_6.jpg" alt="Client" class="clients__img">
                    </li>
                    <!-- /.clients__item -->
                    <li class="clients__item">
                        <img src="<?php bloginfo('template_url') ?>/imeges/clients_7.jpg" alt="Client" class="clients__img">
                    </li>
                    <!-- /.clients__item -->
                    <li class="clients__item">
                        <img src="<?php bloginfo('template_url') ?>/imeges/clients_8.jpg" alt="Client" class="clients__img">
                    </li>
                    <!-- /.clients__item -->
                </ul>
                <!-- /.client__list -->
            </div>
            <!-- /.clients__wrapp -->
        </div>
        <!-- /.container -->
    </div>
    <!-- /.clients -->
</section>
<!-- /.section command -->
<section class="section action">
    <div class="container container_h100">
        <h2 class="photo__title">
            <span class="photo__title_black">Акции</span>
        </h2>
        <ul class="action__list">
            <li class="action__item">
                <img src="<?php bloginfo('template_url') ?>/imeges/action__ramka.png" alt="ramka" class="action__ramka">
                <img src="<?php bloginfo('template_url') ?>/imeges/action_cart.png" alt="cart" class="action_1__img">
                <div class="action_1__text">
                    <h3 class="action_1__text_1">
                        Скидочная карта <br>
                        MarrySol на 10%
                    </h3>
                    <p class="action_1__text_2">
                        <span class="action_1__text_3">в подарок!</span>
                    </p>
                    <p class="action_1__text_4">
                        При заказе мероприятия от <span>500 тыс. р.</span>
                    </p>

                </div>
                <!-- /.action_1__text -->
            </li>
        </ul>
        <!-- /.action__list -->
    </div>
    <!-- /.container container_h100 -->
</section>
<!-- /.section action -->
<section class="section send" id="feedback">
    <!-- <iframe   class="send__video"  width="560" height="315" src="https://www.youtube.com/embed/Y92CTa2yLpk?rel=0&showinfo=0&autoplay=1&loop=1&playlist=Y92CTa2yLpk&fmt=18" frameborder="0" loop allowfullscreen autoplay="1"></iframe> -->
    <video class="send__video" width="560" height="315" src="<?php bloginfo('template_url') ?>/video/bg_marrysol.mp4" loop autoplay></video>

    <div class="container container_h100">
        <div class="form">

            <h2 class="form__title">
                обсудим ваше мероприятие?
            </h2>
            <div class="form__text_bg">
                <p class="form__text">
                    Оставьте свои контакты или позвоните нам. Мы 100% придумаем отличную идею как сделать Ваше мероприятие незабываемым!
                </p>
            </div>
            <!-- /.form__text_bg -->
            <div class="form__form">
                <?php echo do_shortcode('[contact-form-7 id="5" title="form main"]') ?>
                <!-- /.form__btn -->
            </div>
            <!-- /#form.form__form -->
            <div class="form__text_2">
                или звоните по телефону:
            </div>
            <div class="form__phone">
                +7 495 151-22-41
            </div>
        </div>
        <!-- /.form -->
    </div>
    <!-- /.container container_h100 -->
</section>
<!-- /.section send -->
<section class="section live">
    <div class="container container_h100">
        <div class="live__title">
            live
        </div>
        <!-- /.live__btn -->
        <div class="slider">
            <ul class="slider__list slider__list_live" date_1="0">
                <?php
                $a = array(
                    'cat' => 3,
                    'orderby' => 'date',
                    'order' => 'DESC',

                );
                $query = new WP_Query($a);
                if ($query->have_posts()) {
                    while ($query->have_posts()) {
                        $query->the_post();
                ?>
                        <li class="slider__item slider__item_live slider_live slider_live_active" date_1="0">
                            <p class="slider_live__date">
                                <?php the_time('m/d/Y'); ?>
                            </p>
                            <div class="slider__pic">
                                <?php the_post_thumbnail(array('class' => 'slider__img')); ?>
                                <div class="slaider__hover_live">
                                </div>
                                <!-- /.slaider__hover -->
                                <a href="<?php the_permalink(); ?>" target="blank" class="slider__hover_live_btn">
                                    <p class="slider__hover_live_btn_text">
                                        Читать далее
                                    </p>
                                </a>
                                <!-- /.slider__hover_live_btn -->
                            </div>
                            <!-- /.slider__pic -->
                            <p class="slider_live__title">
                                <?php the_title(); ?>
                            </p>
                        </li>
                <?php
                    }
                }
                wp_reset_postdata();
                ?>
            </ul>
            <!-- slider__list -->
        </div>
        <!-- /.slider -->
        <div class="controls controls_live">
            <div class="controls__arrows">
                <div id="arrow-left_live" class="controls__arrow controls__arrow-left">
                    <img src="<?php bloginfo('template_url') ?>/imeges/arrow-left.png" alt="arrow" class="controls__arrow-img">
                </div>
                <!-- controls__arrow-left -->
                <div id="slider-first_live" class="controls__circle">
                </div>
                <!-- /.controls__circle -->
                <div id="arrow-right_live" class="controls__arrow ">
                    <img src="<?php bloginfo('template_url') ?>/imeges/arrow-right.png" alt="arrow" class="controls__arrow-img controls__arrow-right">
                </div>
                <!-- controls__arrow-right -->
            </div>
            <!-- /.controls__arrows -->
            <div class="controls__line">
                <div class="controls__line-bg controls__line-bg_live"></div>
                <!-- /.controls__line-bg -->
            </div>
            <!-- /.controls__line -->
        </div>
        <!-- /.controls -->

    </div>
    <!-- container -->
</section>