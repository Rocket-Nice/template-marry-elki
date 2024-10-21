<?php
/*
Template Name: Contacts
*/
get_header(); ?>

    <div id="primary">
        <main id="main" class="site-main" role="main">

 
            <section class="section article">
                <div class="container container_h100">
                    <div class="article__wrapp">
                        <div class="contacts__conent">
                            <h2 class="contacts__title">
                                свяжитесь нами
                            </h2>
                            <p class="contacts__text">
                                  <?php echo get_field('адрес'); ?>
                            </p>
                            <p class="contacts__text">
                                <?php echo get_field('телефон'); ?><br>
                                <?php echo get_field('email'); ?>
                            </p>
                        </div>
                        <!-- /.contacts__conent -->
                        <div class="form form_contacts">
                            <?php echo do_shortcode('[contact-form-7 id="93" title="form contacts"]'); ?>
                            <!-- /#form.form__form -->
                        </div>
                        <!-- /.form -->
                        <div class="map">
                            <p class="map__text">
                                наши контакты
                            </p>
                            <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3Aef918aeb1cb7a8e6711289fba6073769ad77ac666840fca52d91f02be393e3a8&amp;lang=ru_RU&amp;scroll=true&amp;source=constructor" width="100%" height="441" frameborder="0"></iframe>
                        </div>
                        <!-- /.map -->
                    </div>
                    <!-- /.article__wrapp -->
                   
                </div>
                <!-- /.container container_h100 -->
            </section>


</main><!-- #main -->
    </div><!-- #primary -->

<?php
get_sidebar();
get_footer();
