<?php

/**

 * Template part for displaying page content in page.php.

 *

 * @link https://codex.wordpress.org/Template_Hierarchy

 *

 * @package space_theme

 */



?>



<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="entry-content">

		<section class="section command command-about">

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

         if( have_rows('фото') ){

             while ( have_rows('фото') ) { the_row();

     ?>         

  <li class="command__item">

 <div class="command__photo">

  <img src="<?php echo get_sub_field('фото'); ?>" alt="Photo" class="command__photo_img">

   </div>

   <p class="command__mame">

     <?php echo get_sub_field('имя'); ?>

  </p>

</li>

       <?php

      }

   }?>



                            



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

                            <?php echo get_field('описание'); ?>

                        </p>

                        <!-- /.command__text -->

                    </div>

                    <!-- /.command__content -->

                </div>

                <!-- /.container -->

                


            </section>

		<?php the_content(); ?>

	</div><!-- .entry-content -->

</article><!-- #post-## -->

