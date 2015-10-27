<?php
/**
 * The Template for displaying all single posts.
 *
 * @package Wpas
 * @since Wpas 1.0
 */

get_header('fullpage'); ?>


                                <?php while ( have_posts() ) : the_post(); ?>

                                        <?php get_template_part( 'content-fullpage', get_post_format() ); ?>


                                <?php endwhile; // end of the loop. ?>


<?php get_footer('fullpage'); ?>
