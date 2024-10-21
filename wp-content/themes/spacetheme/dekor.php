<?php

/*

Template Name: Dekor

*/

get_header(); ?>
<style>
    li#photo {
        display: none!important;
    }
</style>
    <div id="primary">
        <main id="main" class="site-main" role="main">
            <section id="proem" class="section active proem proem_image">
                <div class="container container_h100">
                    <div class="proem__content">
                        <h2 class="proem__header">

                           

                            декор

                            <span class="pink">и оформление</span> <br>

                            мероприятий



                        </h2>
                        <div class="proem__text">
                            <div class="proem__line"></div>
                            <?php echo get_field('о_нас'); ?>
                            <img src="<?php bloginfo('template_url') ?>/imeges/scroll.png" alt="" class="proem__scroll">
                        </div>
                        <!-- proem__text -->
                    </div>
                    <!-- /.proem__content -->
                    <div class="proem__pic proem__pic_dekor">
                        <img src="<?php bloginfo('template_url') ?>/imeges/dekor_proem.png" alt="" class="proem__img">
                    </div>
                    <!-- /.proem__pic -->
                </div>
                <!-- /.container -->
            </section>
            <!-- /.proem -->
            <section class="section why_services services">
                <img src="<?php bloginfo('template_url') ?>/imeges/why_img_dekor.png" alt="Photo" class="why__img why__img_biznes why__img_biznes-dekor dekor-choise">
                <div class="container container_h100">
                    <div class="why__services_wrapp">
                        <ul class="why__list why__list_image accordeon">
                            <li id="dek_sv" class="why__itemz">
                              
                                    <h3 class="accordeon-title">

                                        декор свадеб

                                    </h3>
                            
                                <!-- /.why__row -->
                                <div class="why__desc accordeon-content">
                                    <div class="why__desc-line"></div>
                                    <!-- /.why__desc-line -->
                                    <p class="why__text">
                                        Мы стильно украсим помещение для проведения столь важного события! Любая тематика, креативный подход и полная согласованность с идеями молодоженов обеспечит создание атмосферы сказки и восхищение ваших гостей.
                                    </p>
                                </div>
                                <!-- /.why__desc -->
                            </li>
                            <!-- /.why__item -->
                            <li id="dek_club" class="why__itemz">
                               
                                    <h3 class="accordeon-title">

                                        клубный и тв декор

                                    </h3>
                            
                                <!-- /.why__row -->
                                <div class="why__desc accordeon-content">
                                    <div class="why__desc-line"></div>
                                    <!-- /.why__desc-line -->
                                    <p class="why__text">
                                        С нами вы можете оформить Ваш клуб или подготовить помещение для телевизионных съемок. Мы всегда прислушиваемся к пожеланиям заказчика, но и вносим свои профессиональные предложения, поэтому Вы можете не волноваться о функциональности и привлекательности созданного интерьера.
                                    </p>
                                </div>
                                <!-- /.why__desc -->
                            </li>
                            <!-- /.why__item -->
                            <li id="dek_fs" class="why__itemz">
                             
                                    <h3 class="accordeon-title">

                                        фотозоны

                                    </h3>
                             
                                <!-- /.why__row -->
                                <div class="why__desc accordeon-content">
                                    <div class="why__desc-line"></div>
                                    <!-- /.why__desc-line -->
                                    <p class="why__text">
                                        Чтобы фотосессия стала необыкновенной, вашему вниманию представляется индивидуально изготовленные предметы интерьера, аксессуары и украшения, которые дополнят любой фотосет. Дизайн фотостудии или фотозоны на Вашем мероприятии – наша приятная забота.
                                    </p>
                                </div>
                                <!-- /.why__desc -->
                            </li>
                            <!-- /.why__item -->
                            <li id="dek_di" class="why__itemz">
                               
                                    <h3 class="accordeon-title">

                                        дизайн интерьера

                                    </h3>
                            
                                <!-- /.why__row -->
                                <div class="why__desc accordeon-content">
                                    <div class="why__desc-line"></div>
                                    <!-- /.why__desc-line -->
                                    <p class="why__text">
                                        Чтобы событие выло выдержано в едином стиле, необходимо внимательно подходить к выбору атрибутов декора. Индивидуально созданные элементы создадут гармоничную атмосферу и нужное настроение Вашего события.
                                    </p>
                                </div>
                                <!-- /.why__desc -->
                            </li>
                            <!-- /.why__item -->
                            <li id="dek_ap" class="why__itemz">
                             
                                    <h3 class="accordeon-title">

                                        арт-перфоманс

                                    </h3>
                              
                                <!-- /.why__row -->
                                <div class="why__desc why__desc_image accordeon-content">
                                    <div class="why__desc-line"></div>
                                    <!-- /.why__desc-line -->
                                    <p class="why__text">
                                        Самое трендовое оформление мероприятия можно дополнить арт-перфомансом – живым выступлением артистов. Фотографии с таких мероприятий выглядят великолепно.
                                    </p>
                                </div>
                                <!-- /.why__desc -->
                            </li>
                            <!-- /.why__item -->
                            <li id="dek_rs" class="why__itemz">
                             
                                    <h3 class="accordeon-title">

                                        роспись стен

                                    </h3>
                            
                                <!-- /.why__row -->
                                <div class="why__desc why__desc_image accordeon-content">
                                    <div class="why__desc-line"></div>
                                    <!-- /.why__desc-line -->
                                    <p class="why__text">
                                        Наши художники готовы расписать Ваши стены для создания уникальной атмосферы. Возможно нанесение на стены графики, живописи, мозаики. Качественно оживим Ваш интерьер!
                                    </p>
                                </div>
                                <!-- /.why__desc -->
                            </li>
                            <!-- /.why__item -->
                            <li id="dek_dk"  class="why__itemz">
                              
                                    <h3 class="accordeon-title">

                                        Аренда готовых декораций

                                    </h3>
                             
                                <!-- /.why__row -->
                                <div class="why__desc why__desc_image accordeon-content">
                                    <div class="why__desc-line"></div>
                                    <!-- /.why__desc-line -->
                                    <p class="why__text">
                                        Шикарно выглядит то событие, на котором каждый элемент вписывается в концепцию. У нас есть готовые решения для любого события, будь то свадьба, бизнес-встреча или имиджевое мероприятие. Мы всегда открыты предложениям со стороны заказчика – создадим идеальное мероприятие вместе!
                                    </p>
                                </div>
                                <!-- /.why__desc -->
                            </li>
                            <li id="dek_dk"  class="why__itemz">
                              
                                    <h3 class="accordeon-title">

                                        Декор детских мероприятий

                                    </h3>
                             
                                <!-- /.why__row -->
                                <div class="why__desc why__desc_image accordeon-content">
                                    <div class="why__desc-line"></div>
                                    <!-- /.why__desc-line -->
                                    <p class="why__text">
                                        Текст описание
                                    </p>
                                </div>
                                <!-- /.why__desc -->
                            </li>
                            <li id="dek_dk"  class="why__itemz">
                              
                                    <h3 class="accordeon-title">

                                        Новогодний декор

                                    </h3>
                             
                                <!-- /.why__row -->
                                <div class="why__desc why__desc_image accordeon-content">
                                    <div class="why__desc-line"></div>
                                    <!-- /.why__desc-line -->
                                    <p class="why__text">
                                        Текст описание
                                    </p>
                                </div>
                                <!-- /.why__desc -->
                            </li>
                            <!-- /.why__item -->
                        </ul>
                        <!-- /.why__list -->
                        <section class="leader__pop_up dek_sv">
                            <div class="leader__pop_up__pic">
                                <img src="<?php bloginfo('template_url') ?>/imeges/dekor_1.png" alt="Toaster" class="leader__pop_up__img">
                                <h2 class="leader__pop_up__title">

                                    декор свадеб

                                </h2>
                                <h3 class="leader__pop_up__title_2">

                                    

                                </h3>
                            </div>
                            <div class="leader__pop_up__contant">
                                <div class="leader__pop_up__text">
                                    <div class="leader__pop_up__line"></div>
                                    <p class="leader__pop_up__text_1">
                                        Мы стильно украсим помещение для проведения столь важного события! Любая тематика, креативный подход и полная согласованность с идеями молодоженов обеспечит создание атмосферы сказки и восхищение ваших гостей.
                                    </p>
                                </div>
                                <!-- /.leader__pop_up__text -->
                                <div class="leader__pop_up__btn">
                                    <div class="btn">
                                        <a href="#feedback">
                                            <p class="btn__text">
                                            Пообщаемся?
                                        </p></a>
                                    </div>
                                </div>
                                <!-- /.leader__pop_up__btn -->
                            </div>
                            <!-- /.leader__pop_up__contant -->
                            <div class="leader__pop_up__close">
                                <div class="leader__pop_up__close_line_1"></div>
                                <div class="leader__pop_up__close_line_2"></div>
                            </div>
                            <!-- /.leader__pop_up__close -->
                        </section>
                        <!-- /.dek_sv -->
                        <section class="leader__pop_up dek_club">
                            <div class="leader__pop_up__pic">
                                <img src="<?php bloginfo('template_url') ?>/imeges/dekor_2.png" alt="Toaster" class="leader__pop_up__img">
                                <h2 class="leader__pop_up__title">

                                    клубный декор

                                </h2>
                                <h3 class="leader__pop_up__title_2">

                                    

                                </h3>
                            </div>
                            <div class="leader__pop_up__contant">
                                <div class="leader__pop_up__text">
                                    <div class="leader__pop_up__line"></div>
                                    <p class="leader__pop_up__text_1">
                                        С нами вы можете оформить Ваш клуб или подготовить помещение для телевизионных съемок. Мы всегда прислушиваемся к пожеланиям заказчика, но и вносим свои профессиональные предложения, поэтому Вы можете не волноваться о функциональности и привлекательности созданного интерьера.
                                    </p>
                                </div>
                                <!-- /.leader__pop_up__text -->
                                <div class="leader__pop_up__btn">
                                    <div class="btn">
                                       <a href="#feedback"> <p class="btn__text">
                                            Пообщаемся?
                                        </p></a>
                                    </div>
                                </div>
                                <!-- /.leader__pop_up__btn -->
                            </div>
                            <!-- /.leader__pop_up__contant -->
                            <div class="leader__pop_up__close">
                                <div class="leader__pop_up__close_line_1"></div>
                                <div class="leader__pop_up__close_line_2"></div>
                            </div>
                            <!-- /.leader__pop_up__close -->
                        </section>
                        <!-- /.vstrechi -->
                        <section class="leader__pop_up dek_fs">
                            <div class="leader__pop_up__pic">
                                <img src="<?php bloginfo('template_url') ?>/imeges/dekor_3.png" alt="Toaster" class="leader__pop_up__img">
                                <h2 class="leader__pop_up__title">

                                    декор

                                </h2>
                                <h3 class="leader__pop_up__title_2">

                                    для фотосессии

                                </h3>
                            </div>
                            <div class="leader__pop_up__contant">
                                <div class="leader__pop_up__text">
                                    <div class="leader__pop_up__line"></div>
                                    <p class="leader__pop_up__text_1">
                                        Чтобы фотосессия стала необыкновенной, вашему вниманию представляется индивидуально изготовленные предметы интерьера, аксессуары и украшения, которые дополнят любой фотосет. Дизайн фотостудии или фотозоны на Вашем мероприятии – наша приятная забота.
                                    </p>
                                </div>
                                <!-- /.leader__pop_up__text -->
                                <div class="leader__pop_up__btn">
                                    <div class="btn">
                                        <a href="#feedback"><p class="btn__text">
                                            Пообщаемся?
                                        </p></a>
                                    </div>
                                </div>
                                <!-- /.leader__pop_up__btn -->
                            </div>
                            <!-- /.leader__pop_up__contant -->
                            <div class="leader__pop_up__close">
                                <div class="leader__pop_up__close_line_1"></div>
                                <div class="leader__pop_up__close_line_2"></div>
                            </div>
                            <!-- /.leader__pop_up__close -->
                        </section>
                        <!-- /.konf -->
                        <section class="leader__pop_up dek_di">
                            <div class="leader__pop_up__pic">
                                <img src="<?php bloginfo('template_url') ?>/imeges/dekor_4.png" alt="Toaster" class="leader__pop_up__img">
                                <h2 class="leader__pop_up__title leader__pop_up__title_2_row ">

                                    дизайн интерьера

                                </h2>
                                <h3 class="leader__pop_up__title_2">

                                    

                                </h3>
                            </div>
                            <div class="leader__pop_up__contant">
                                <div class="leader__pop_up__text">
                                    <div class="leader__pop_up__line"></div>
                                    <p class="leader__pop_up__text_1">
                                        Чтобы событие выло выдержано в едином стиле, необходимо внимательно подходить к выбору атрибутов декора. Индивидуально созданные элементы создадут гармоничную атмосферу и нужное настроение Вашего события.
                                    </p>
                                </div>
                                <!-- /.leader__pop_up__text -->
                                <div class="leader__pop_up__btn">
                                    <div class="btn">
                                       <a href="#feedback"> <p class="btn__text">
                                            Пообщаемся?
                                        </p></a>
                                    </div>
                                </div>
                                <!-- /.leader__pop_up__btn -->
                            </div>
                            <!-- /.leader__pop_up__contant -->
                            <div class="leader__pop_up__close">
                                <div class="leader__pop_up__close_line_1"></div>
                                <div class="leader__pop_up__close_line_2"></div>
                            </div>
                            <!-- /.leader__pop_up__close -->
                        </section>
                        <!-- /.lainer -->
                        <section class="leader__pop_up gost dek_ap">
                            <div class="leader__pop_up__pic">
                                <img src="<?php bloginfo('template_url') ?>/imeges/dekor_5.png" alt="Toaster" class="leader__pop_up__img">
                                <h2 class="leader__pop_up__title ">

                                    арт-перфоманс

                                </h2>
                                <h3 class="leader__pop_up__title_2">

                                    

                                </h3>
                            </div>
                            <div class="leader__pop_up__contant">
                                <div class="leader__pop_up__text">
                                    <div class="leader__pop_up__line"></div>
                                    <p class="leader__pop_up__text_1">
                                        Самое трендовое оформление мероприятия можно дополнить арт-перфомансом – живым выступлением артистов. Фотографии с таких мероприятий выглядят великолепно.
                                    </p>
                                </div>
                                <!-- /.leader__pop_up__text -->
                                <div class="leader__pop_up__btn">
                                    <div class="btn">
                                       <a href="#feedback"> <p class="btn__text">
                                            Пообщаемся?
                                        </p></a>
                                    </div>
                                </div>
                                <!-- /.leader__pop_up__btn -->
                            </div>
                            <!-- /.leader__pop_up__contant -->
                            <div class="leader__pop_up__close">
                                <div class="leader__pop_up__close_line_1"></div>
                                <div class="leader__pop_up__close_line_2"></div>
                            </div>
                            <!-- /.leader__pop_up__close -->
                        </section>
                        <!-- /.gost -->
                        <section class="leader__pop_up dek_rs">
                            <div class="leader__pop_up__pic">
                                <img src="<?php bloginfo('template_url') ?>/imeges/dekor_6.png" alt="Toaster" class="leader__pop_up__img">
                                <h2 class="leader__pop_up__title">

                                    роспись стен

                                </h2>
                                <h3 class="leader__pop_up__title_2">

                                    

                                </h3>
                            </div>
                            <div class="leader__pop_up__contant">
                                <div class="leader__pop_up__text">
                                    <div class="leader__pop_up__line"></div>
                                    <p class="leader__pop_up__text_1">
                                        Наши художники готовы расписать Ваши стены для создания уникальной атмосферы. Возможно нанесение на стены графики, живописи, мозаики. Качественно оживим Ваш интерьер!
                                    </p>
                                </div>
                                <!-- /.leader__pop_up__text -->
                                <div class="leader__pop_up__btn">
                                    <div class="btn">
                                        <a href="#feedback"><p class="btn__text">
                                            Пообщаемся?
                                        </p></a>
                                    </div>
                                </div>
                                <!-- /.leader__pop_up__btn -->
                            </div>
                            <!-- /.leader__pop_up__contant -->
                            <div class="leader__pop_up__close">
                                <div class="leader__pop_up__close_line_1"></div>
                                <div class="leader__pop_up__close_line_2"></div>
                            </div>
                            <!-- /.leader__pop_up__close -->
                        </section>
                        <!-- /.apartament -->
                        <section class="leader__pop_up dek_dk">
                            <div class="leader__pop_up__pic">
                                <img src="<?php bloginfo('template_url') ?>/imeges/dekor_7.png" alt="Toaster" class="leader__pop_up__img">
                                <h2 class="leader__pop_up__title">

                                    аренда готовых

                                </h2>
                                <h3 class="leader__pop_up__title_2">

                                    элементов оформления

                                </h3>
                            </div>
                            <div class="leader__pop_up__contant">
                                <div class="leader__pop_up__text">
                                    <div class="leader__pop_up__line"></div>
                                    <p class="leader__pop_up__text_1">
                                        Шикарно выглядит то событие, на котором каждый элемент вписывается в концепцию. У нас есть готовые решения для любого события, будь то свадьба, бизнес-встреча или имиджевое мероприятие. Вы всегда можете взять у нас в аренду декорации для идеального мероприятия.
                                    </p>
                                </div>
                                <!-- /.leader__pop_up__text -->
                                <div class="leader__pop_up__btn">
                                    <div class="btn">
                                        <a href="#feedback"><p class="btn__text">
                                            Пообщаемся?
                                        </p></a>
                                    </div>
                                </div>
                                <!-- /.leader__pop_up__btn -->
                            </div>
                            <!-- /.leader__pop_up__contant -->
                            <div class="leader__pop_up__close">
                                <div class="leader__pop_up__close_line_1"></div>
                                <div class="leader__pop_up__close_line_2"></div>
                            </div>
                            <!-- /.leader__pop_up__close -->
                        </section>
                        <!-- /.biz_img -->
                    </div>
                    <!-- why__services_wrapp -->
                </div>
                <!-- /.container -->
            </section>
            <!-- /.section why -->
            <section class="section dekor_reshenia dekor_conc">
                <div class="container container_h100">
                    <div class="why__services_wrapp">
                        <h2 class="photo__title">

                            <span class="photo__title_black">Готовые </span>дизайн-концепции

                        </h2>



 <div class="wrapz">
                
<div class="gallery">
  <div class="buttons">
    <button class="filter filter-btn" data-filter="all">Все</button>
    <button class="filter filter-btn" data-filter=".dek-sv">Декор свадеб</button>
    <button class="filter filter-btn" data-filter=".club">Клубный и ТВ декор</button>
    <button class="filter filter-btn" data-filter=".dek-photo">Фотозоны</button>
    <button class="filter filter-btn" data-filter=".diz-interier">Дизайн интерьера</button>
    <button class="filter filter-btn" data-filter=".art-perf">Арт-перфоманс</button>
    <button class="filter filter-btn" data-filter=".write-wall">Роспись стен</button>
    <button class="filter filter-btn" data-filter=".rent-got">Аренда готовых декораций</button>
    <button class="filter filter-btn" data-filter=".dekor-child">Декор детских мероприятий</button>
    <button class="filter filter-btn" data-filter=".new-year">Новогодний декор</button>
  </div>
 <?php
         if( have_rows('dek-sv') ){
             while ( have_rows('dek-sv') ) { the_row();
     ?>         
<a href="#" class="lightBox"><img class="mix dek-sv thumb" src="<?php echo get_sub_field('фото'); ?>"></a>
<?php
      }
   }?>


<?php
         if( have_rows('клубный_и_тв_декор') ){
             while ( have_rows('клубный_и_тв_декор') ) { the_row();
     ?>         

<a href="#" class="lightBox"><img class="mix club thumb" src="<?php echo get_sub_field('фото'); ?>"></a>
    


     <?php
      }
   }?>

<?php
         if( have_rows('декор_для_фотосессий') ){
             while ( have_rows('декор_для_фотосессий') ) { the_row();
     ?>         

<a href="#" class="lightBox"><img class="mix dek-photo thumb" src="<?php echo get_sub_field('фото'); ?>"></a>    


     <?php
      }
   }?>
<?php
         if( have_rows('дизайн_интерьера') ){
             while ( have_rows('дизайн_интерьера') ) { the_row();
     ?>         
  
<a href="#" class="lightBox"><img class="mix diz-interier thumb" src="<?php echo get_sub_field('фото'); ?>"></a>

     <?php
      }
   }?>
<?php
         if( have_rows('арт_перфоманс') ){
             while ( have_rows('арт_перфоманс') ) { the_row();
     ?>         
<a href="#" class="lightBox"><img class="mix art-perf thumb" src="<?php echo get_sub_field('фото'); ?>"></a>
     <?php
      }
   }?>
<?php
         if( have_rows('роспись_стен') ){
             while ( have_rows('роспись_стен') ) { the_row();
     ?>         
<a href="#" class="lightBox"><img class="mix write-wall thumb" src="<?php echo get_sub_field('фото'); ?>"></a>
     <?php
      }
   }?>
<?php
         if( have_rows('аренда_готовых_декораций') ){
             while ( have_rows('аренда_готовых_декораций') ) { the_row();
     ?>         
<a href="#" class="lightBox"><img class="mix rent-got thumb" src="<?php echo get_sub_field('фото'); ?>"></a>
     <?php
      }
   }?>
   <?php
         if( have_rows('декор_детских_мероприятий') ){
             while ( have_rows('декор_детских_мероприятий') ) { the_row();
     ?>         
<a href="#" class="lightBox"><img class="mix dekor-child thumb" src="<?php echo get_sub_field('фото'); ?>"></a>
     <?php
      }
   }?>
   <?php
         if( have_rows('новогодний_декор') ){
             while ( have_rows('новогодний_декор') ) { the_row();
     ?>         
<a href="#" class="lightBox"><img class="mix new-year thumb" src="<?php echo get_sub_field('фото'); ?>"></a>
     <?php
      }
   }?>

</div>

<div class="backDrop"></div>
  
  <div class="box">
    <div class="close">✘</div>
    <img class="largeImage" src=""/>
  </div>
  
  <div class="clear"></div>


</div>
                        































                     
                        
                    </div>
                    <!-- why__services_wrapp -->
                </div>
                <!-- container -->
            </section>

           



            <section class="section video">
                <div class="container container_h100">
                    <h2 class="photo__title">

                        <span class="photo__title_black">Видео </span>с наших мероприятий

                    </h2>
                    <div class="photo__btn">
                        <a href="#feedback"><div class="btn">
                            <p class="btn__text">Пообщаемся?</p>
                        </div></a>
                    </div>
                    <!-- /.video__btn -->
                    <div class="slider">
                        <ul class="slider__list slider__list_video" date_1="0">
                            <?php if( have_rows('видео') ){ while ( have_rows('видео') ) { the_row(); ?>
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

   }?>
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
                <div class="why__scuare_box why__scuare_box_image">
                    <div class="why__square why__square_image"></div>
                    <!-- /.why__square -->
                </div>
                <!-- /.why__scuare_box -->
                <img src="<?php bloginfo('template_url') ?>/imeges/why_dekor.png" alt="Photo" class="why__img why_img_dekor">
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
            <section class="section send send_wedding" id="feedback">
                <div class="container container_h100">
                    <div class="send_pic">
                        <div class="send__pic_shadow"></div>
                        <div class="send__pic_border"></div>
                        <img src="<?php bloginfo('template_url') ?>/imeges/send__img_dekor.jpg" alt="" class="send__img_wedding">
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
                            <?php echo do_shortcode('[contact-form-7 id="71" title="form dekor"]') ?>
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
get_footer();