<?php
/*
Template Name: Gallery photo
*/
get_header(); ?>

    <div id="primary">
        <main id="main" class="site-main" role="main">

<section class="section article gallery-article">
    <?php echo do_shortcode('[codenovo-portfolio]') ?>
               
</section>

</main><!-- #main -->
    </div><!-- #primary -->

<?php
get_sidebar();
get_footer();
