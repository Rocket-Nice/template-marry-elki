<?php
/*
Template Name: Live
*/
get_header(); ?>

    <div id="primary">
        <main id="main" class="site-main" role="main">
            <section class="section live">
                <div class="box-1280">
            <div class="d-live d-live-main">
<div class="d-live-title">
    Live
</div>
<div class="d-live-content"> 
<?php
  $a = array(
         'cat' => 3,
         'orderby' => 'date',
         'order' => 'DESC',
                
  );
  $query = new WP_Query($a);
  if ( $query->have_posts() ) {
    while ( $query->have_posts() ) {
  $query->the_post();
?>
    <div class="d-live-point">
        <div class="live-point-even">
            <div class="l-p-date">
              
                                <?php the_time('d'); ?>
                                <span><?php the_date('F'); ?></span>
            </div>
        </div>
        <div class="live-point-top">
         <div class="l-p-img"><?php the_post_thumbnail(); ?></div>
        <div class="l-p-title">
            <h1><?php the_title(); ?></h1>
            <div class="l-p-desc">
                <?php the_excerpt(); ?>
                <a href="<?php the_permalink(); ?>">Читать далее</a>
            </div>
        </div>
        </div>
        <div class="live-point-bottom">
            <div class="l-p-date">
                <?php the_time('d'); ?>
                                <span><?php the_time('F'); ?></span>
            </div>
        </div>       
    </div>                     
<?php
    }
  }
  wp_reset_postdata(); 
?> 
</div>
 </div>

</div>
</section>
</main><!-- #main -->
    </div><!-- #primary -->

<?php
get_sidebar();
get_footer();
