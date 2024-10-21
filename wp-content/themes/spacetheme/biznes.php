<?php

/*

Template Name: Biznes

*/

get_header(); ?>
    <style>
    li#action {
        display: none!important;
    }

    li#video {
        display: none!important;
    }
    </style>
    <div id="primary">
        <main id="main" class="site-main" role="main">
            <section id="proem" class="section active proem proem_image about">
                <div class="container">
                    <div class="proem__content">
                        <h2 class="proem__header">

                            ОРГАНИЗАЦИЯ <br>

                            <spam class="pink">БИЗНЕС</spam> МЕРОПРИЯТИЙ

                        </h2>
                        <div class="proem__text">
                            <div class="proem__line"></div>
                            <?php echo get_field('о_нас'); ?>
                            <img src="<?php bloginfo('template_url') ?>/imeges/scroll.png" alt="" class="proem__scroll">
                        </div>
                        <!-- proem__text -->
                    </div>
                    <!-- /.proem__content -->
                    <div class="proem__pic proem__pic_wedding proem__pic_biznes">
                        <img src="<?php bloginfo('template_url') ?>/imeges/gakstuk.png" alt="" class="proem__img">
                    </div>
                    <!-- /.proem__pic -->
                </div>
                <!-- /.container -->
            </section>
            <!-- /.proem -->
            <section class="section why_services services">
                <img src="<?php bloginfo('template_url') ?>/imeges/biznes.png" alt="Photo" class="why__img why__img_biznes why-img_biznes-choice">
                <div class="container container_h100">
                    <div class="why__services_wrapp">
                        <ul class="why__list why__list_image accordeon">
                            <li id="poezdki" class="why__itemz">
                                <h3 class="accordeon-title">

                                        Частные поездки по России и за рубежом

                                    </h3>
                                <!-- /.why__row -->
                                <div class="why__desc accordeon-content">
                                    <div class="why__desc-line"></div>
                                    <!-- /.why__desc-line -->
                                    <p class="why__text">
                                        Встречи с партнерами по бизнесу – это важная часть общей работы. Мы организуем транспорт по России и за ее пределы. Вам не стоит беспокоиться о дороге, мы знаем, как сделать поездку комфортной.
                                    </p>
                                </div>
                                <!-- /.why__desc -->
                            </li>
                            <!-- /.why__item -->
                            <li id="vstrechi" class="why__itemz">
                                <h3 class="accordeon-title">

                                        Организация бизнес-встреч

                                    </h3>
                                <!-- /.why__row -->
                                <div class="why__desc why__desc_image accordeon-content">
                                    <div class="why__desc-line"></div>
                                    <!-- /.why__desc-line -->
                                    <p class="why__text">
                                        Помогаем в организации приемов, встреч, переговоров. Деловые встречи важны для ведения успешного бизнеса. Мы знаем, что вам нужно. Бизнес встреча будет результативной.
                                    </p>
                                </div>
                                <!-- /.why__desc -->
                            </li>
                            <!-- /.why__item -->
                            <li id="konf" class="why__itemz">
                                <h3 class="accordeon-title">

                                        Проведение бизнес конференций

                                    </h3>
                                <!-- /.why__row -->
                                <div class="why__desc why__desc_image accordeon-content">
                                    <div class="why__desc-line"></div>
                                    <!-- /.why__desc-line -->
                                    <p class="why__text">
                                        Бизнес-конференции – это основная часть мероприятия. Здесь обсуждаются самые важные вопросы, проводятся деловые презентации. Мы позаботимся о всем техническом оснащении зала и правильной рабочей атмосфере конференции.
                                    </p>
                                </div>
                                <!-- /.why__desc -->
                            </li>
                            <!-- /.why__item -->
                            <li id="lainer" class="why__itemz">
                                <h3 class="accordeon-title">

                                        аренда частных лайнеров

                                    </h3>
                                <!-- /.why__row -->
                                <div class="why__desc why__desc_image accordeon-content">
                                    <div class="why__desc-line"></div>
                                    <!-- /.why__desc-line -->
                                    <p class="why__text">
                                        Мы арендуем Вам личный лайнер, чтобы быстро и с высочайшим комфортом доставить на бизнес-мероприятие, ведь Вы как никто иной знаете, что время – бесценно! Мы работаем с проверенными компаниями, в самолетах и персонале которых совершенно уверены.
                                    </p>
                                </div>
                                <!-- /.why__desc -->
                            </li>
                            <!-- /.why__item -->
                            <li id="gost" class="why__itemz">
                                <h3 class="accordeon-title">

                                        Встреча гостей в аэропорту

                                    </h3>
                                <!-- /.why__row -->
                                <div class="why__desc why__desc_image accordeon-content">
                                    <div class="why__desc-line"></div>
                                    <!-- /.why__desc-line -->
                                    <p class="why__text">
                                        Мы встретим Ваших гостей в аэропорту, доставим до отеля и поможем с размещением и проводим на встречу. Наши специалисты разговаривают на нескольких языках, поэтому можно не волноваться, мы со всеми найдет общий язык!
                                    </p>
                                </div>
                                <!-- /.why__desc -->
                            </li>
                            <!-- /.why__item -->
                            <li id="apartament" class="why__itemz">
                                <h3 class="accordeon-title">

                                        Размещение в апартаментах

                                    </h3>
                                <!-- /.why__row -->
                                <div class="why__desc why__desc_image accordeon-content">
                                    <div class="why__desc-line"></div>
                                    <!-- /.why__desc-line -->
                                    <p class="why__text">
                                        Заранее выбираем и бронируем апартаменты для размещения Ваших гостей или при организации Ваших деловых поездок. Удобное расположение, качественное обслуживание и приятные номера – мы работаем только с лучшим отелями.
                                    </p>
                                </div>
                                <!-- /.why__desc -->
                            </li>
                            <!-- /.why__item -->
                            <li id="biz_img" class="why__itemz">
                                <h3 class="accordeon-title">

                                        Разработка и создание бизнес имиджа

                                    </h3>
                                <!-- /.why__row -->
                                <div class="why__desc why__desc_image accordeon-content">
                                    <div class="why__desc-line"></div>
                                    <!-- /.why__desc-line -->
                                    <p class="why__text">
                                        Наша креативная команда поможет при создании бизнес имиджа. Мы поможем подчеркнуть статус Вашей компании, организовав мероприятие на высшем уровне!
                                    </p>
                                </div>
                                <!-- /.why__desc -->
                            </li>
                            <!-- /.why__item -->
                            <li id="chast_vech" class="why__itemz">
                                <h3 class="accordeon-title">

                                        Организация частных мероприятий

                                    </h3>
                                <!-- /.why__row -->
                                <div class="why__desc why__desc_image accordeon-content">
                                    <div class="why__desc-line"></div>
                                    <!-- /.why__desc-line -->
                                    <p class="why__text">
                                        В наших силах не только организовать большой мероприятие, но и встречу нескольких деловых партнеров. Стильно, четко и по-деловому подходим к любым вопросам. Вы нам доверяете, и мы вас не подведем.
                                    </p>
                                </div>
                                <!-- /.why__desc -->
                            </li>
                            <!-- /.why__item -->
                        </ul>
                        <!-- /.why__list -->
                    </div>
                    <!-- why__services_wrapp -->
                </div>
                <!-- /.container -->
            </section>
            <!-- /.section why -->
            <section class="section photo">
                <div class="container container_h100">
                    <h2 class="photo__title">

                        <span class="photo__title_black">Фото </span>с наших мероприятий

                    </h2>
                    <div class="photo__btn">
                        <a href="#feedback"><div class="btn">
                            <p class="btn__text">Пообщаемся?</p>
                        </div></a>
                    </div>
                    <!-- /.photo__btn -->
                    <div class="slider">
                        <ul class="slider__list slider__list_photo" date_1="0">
                            <?php

         if( have_rows('фото') ){

             while ( have_rows('фото') ) { the_row();

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

   }?>
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
            <section class="section why">
                <h2 class="photo__title">

                    <span class="photo__title_black">Почему </span>мы

                </h2>
                <div class="why__scuare_box why__scuare_box_image">
                    <div class="why__square why__square_image"></div>
                    <!-- /.why__square -->
                </div>
                <!-- /.why__scuare_box -->
                <img src="<?php bloginfo('template_url') ?>/imeges/why_biznes.png" alt="Photo" class="why__img why_img_image">
                <div class="container container_h100">
                    <ul class="why__list">
                        <li class="why__item">
                            <div class="why__row">
                                <img src="<?php bloginfo('template_url') ?>/imeges/why-1.png" alt="Icon" class="why__icon">
                                <h3 class="why__title">

                                    что насчет цен?

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

                                    как с нами связаться?

                                </h3>
                            </div>
                            <!-- /.why__row -->
                            <div class="why__desc">
                                <div class="why__desc-line"></div>
                                <!-- /.why__desc-line -->
                                <p class="why__text">
                                    Связь производится по телефону, указанному на сайте +7(916)571-61-74. Также можно заполнить электронную форму и отправить заявку нам на почту. В ближайшее время мы с вами свяжемся и ответим на все интересующие вопросы.
                                </p>
                            </div>
                            <!-- /.why__desc -->
                        </li>
                        <!-- /.why__item -->
                        <li class="why__item">
                            <div class="why__row">
                                <img src="<?php bloginfo('template_url') ?>/imeges/why-3.png" alt="Icon" class="why__icon">
                                <h3 class="why__title">

                                    какие сроки

                                </h3>
                            </div>
                            <!-- /.why__row -->
                            <div class="why__desc">
                                <div class="why__desc-line"></div>
                                <!-- /.why__desc-line -->
                                <p class="why__text">
                                    Часто органиция престижного мероприятия занимает недели и месяцы! Мы решили эту проблему! Мы организовываем мероприятия в невозможно короткие сроки - от 2-3 дней до начала мероприятия. Причём, качество от этого никак не страдает.
                                </p>
                            </div>
                            <!-- /.why__desc -->
                        </li>
                        <!-- /.why__item -->
                        <li class="why__item">
                            <div class="why__row">
                                <img src="<?php bloginfo('template_url') ?>/imeges/why-4.png" alt="Icon" class="why__icon">
                                <h3 class="why__title">

                                    сами производите декор?

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

                                    а если мероприятие за рубежом?

                                </h3>
                            </div>
                            <!-- /.why__row -->
                            <div class="why__desc">
                                <div class="why__desc-line"></div>
                                <!-- /.why__desc-line -->
                                <p class="why__text">
                                    Если необходимо подготовить мероприятие за границей, наше агентство смело возьмется за организацию. Мы продумаем маршрут, размещение, арендуем и оформим площадку и проведем мероприятие на высшем уровне!
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

         if( have_rows('фото_команды') ){

             while ( have_rows('фото_команды') ) { the_row();

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

   }?>
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
            <!-- /.section action -->
            <section class="section send send_wedding" id="feedback">
                <div class="container container_h100">
                    <div class="send_pic">
                        <div class="send__pic_shadow"></div>
                        <div class="send__pic_border"></div>
                        <img src="<?php bloginfo('template_url') ?>/imeges/send__img_biznes.jpg" alt="" class="send__img_wedding">
                    </div>
                    <!-- /.send_pic -->
                    <div class="form form_wedding">
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
                            <?php echo do_shortcode('[contact-form-7 id="66" title="form biznes"]') ?>
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
        </main>
        <!-- #main -->
    </div>
    <!-- #primary -->
    <?php

get_sidebar();

get_footer();