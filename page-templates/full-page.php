<?php
/**
 * Template Name: Full Page Template
 *
 * Description: Displays a full-width no header or footer, clean page.
 *
 * @package WPAS
 * @since WPAS 1.0
 */


get_header('fullpage'); ?>

                        <?php if ( have_posts() ) : ?>

                                <?php while ( have_posts() ) : the_post(); ?>
                                        <?php get_template_part( 'content', 'fullpage' ); ?>
                                        <?php comments_template( '', true ); ?>
                                <?php endwhile; // end of the loop. ?>

                        <?php endif; // end have_posts() check ?>


<?php get_footer('fullpage'); ?>
