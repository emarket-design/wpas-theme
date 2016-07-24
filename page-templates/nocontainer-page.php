<?php
/**
 * Template Name: No Container Template
 *
 * Description: Displays a full-width front page. The front page template provides an optional
 * banner section that allows for highlighting a key message. It can contain up to 2 widget areas,
 * in one or two columns. These widget areas are dynamic so if only one widget is used, it will be
 * displayed in one column. If two are used, then they will be displayed over 2 columns.
 * There are also four front page only widgets displayed just beneath the main content. Like the
 * banner widgets, they will be displayed in anywhere from one to four columns, depending on
 * how many widgets are active.
 *
 * @package Wpas
 * @since Wpas 1.0
 */

get_header('nocontainer'); ?>
        <div id="primary" class="fluid" role="main">


                        <?php if ( have_posts() ) : ?>

                                <?php // Start the Loop ?>
                                <?php while ( have_posts() ) : the_post(); ?>
                                        <?php get_template_part( 'content', 'nocontainer' ); ?>
                                <?php endwhile; ?>

                        <?php endif; // end have_posts() check ?>


        </div> <!-- /#primary.site-content.row -->


<?php get_footer(); ?>
