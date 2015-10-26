<?php
/**
 * The default template for displaying content. Used for both single and index/archive/search.
 *
 * @package WPAS
 * @since WPAS 1.0
 */
?>

                <div class="entry-content">
                        <?php the_content( wp_kses( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'wpas' ), array( 'span' => array(
                                        'class' => array() ) ) )
                                        ); ?>
                </div> <!-- /.entry-content -->
