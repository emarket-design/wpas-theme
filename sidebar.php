<?php
/**
 * The Sidebar containing the main widget areas.
 *
 * @package Wpas
 * @since Wpas 1.0
 */
?>
	<div class="col grid_4_of_12">

		<div id="secondary" class="widget-area emd-container" role="complementary" itemscope="itemscope" itemtype="http://schema.org/WPSideBar">
			<?php
			do_action( 'before_sidebar' );

			if ( is_active_sidebar( 'sidebar-main' ) ) {
				dynamic_sidebar( 'sidebar-main' );
			}

			if ( ( is_home() || is_archive() ) && is_active_sidebar( 'sidebar-blog' ) ) {
				dynamic_sidebar( 'sidebar-blog' );
			}

			if ( is_single() && is_active_sidebar( 'sidebar-single' ) ) {
				dynamic_sidebar( 'sidebar-single' );
			}

			if ( is_page() && is_active_sidebar( 'sidebar-page' ) ) {
				dynamic_sidebar( 'sidebar-page' );
			}
			?>

		</div> <!-- /#secondary.widget-area emd-container -->

	</div> <!-- /.col.grid_4_of_12 -->
