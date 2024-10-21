<?php
/*
Template Name: Gallery video
*/
get_header(); ?>

    <div id="primary">
        <main id="main" class="site-main" role="main">

 
            <section class="section video article">
                <div class="container container_h100">
                    <h2 class="photo__title">
                        <span class="photo__title_black">Видео </span>с наших мероприятий
                    </h2>
                    <div class="slider slider_galery">
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
                    <div class="controls controls-video">
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


</main><!-- #main -->
    </div><!-- #primary -->

<?php
get_sidebar();
get_footer();
