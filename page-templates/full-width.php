<?php
/**
 * Template Name: Full-width Page Template
 *
 * Description: Displays a full-width page, with no sidebar. This template is great for pages
 * containing large amounts of content.
 *
 * @package Wpas
 * @since Wpas 1.0
 */

get_header(); ?>

	<div id="primary" class="site-content emd-container row" role="main" itemprop="mainContentOfPage" itemscope="itemscope" itemtype="http://schema.org/Blog">
		<div class="col grid_12_of_12">

			<?php if ( have_posts() ) : ?>

				<?php while ( have_posts() ) : the_post(); ?>
					<?php get_template_part( 'content', 'page' ); ?>
					<?php comments_template( '', true ); ?>
				<?php endwhile; // end of the loop. ?>

			<?php endif; // end have_posts() check ?>

		</div> <!-- /.col.grid_12_of_12 -->
	</div><!-- /#primary.site-content emd-container.row -->

<?php get_footer(); ?>
