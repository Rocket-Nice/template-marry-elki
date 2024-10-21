<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package space_theme
 */

?>

            <section class="section article">
                <h1 class="article-title"><?php the_title() ?></h1>
                <div class="grey-line-d"></div>
                <div class="d-article-content">
                    <div class="d-a-left"><?php the_post_thumbnail(); ?></div>
                    <div class="d-a-right">
                        <div class="d-a-right-text"><?php the_content() ?>
                            <div class="d-a-time"><?php the_time( 'd/m/Y'); ?></div>
                        </div>
                        
                    </div>
                </div>
                
            </section>
          
