<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="maincontentcontainer">
 *
 * @package WPAS
 * @since WPAS 1.0
 */
?><!doctype html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->


<head>
        <meta charset="<?php bloginfo( 'charset' ); ?>" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

        <title><?php wp_title( '|', true, 'right' ); ?></title>
        <meta http-equiv="cleartype" content="on">

        <meta name="HandheldFriendly" content="True">
        <meta name="MobileOptimized" content="320">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="google-site-verification" content="zou1HqeWWBUIELr067aS4UamcIt4WToRzEpEqeAXBQ8" />

        <link rel="profile" href="//gmpg.org/xfn/11" />
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

        <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="container" style="min-height:100%;position:relative">
<div id="wrapper" class="page-wrap hfeed site">

        <div class="visuallyhidden skip-link"><a href="#primary" title="<?php esc_attr_e( 'Skip to main content', 'wpas' ); ?>"><?php esc_html_e( 'Skip to main content', 'wpas' ); ?></a></div>

        <div id="headercontainer">

                <header id="masthead" class="site-header row" role="banner">
                        <div class="col grid_5_of_12 site-title">
                                <h1>
                                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>" rel="home">
                                                <?php
                                                $headerImg = get_header_image();
                                                if( !empty( $headerImg ) ) { ?>
                                                        <img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" />
                                                <?php }
                                                else {
                                                        echo get_bloginfo( 'name' );
                                                } ?>
                                        </a>
                                </h1>
                        </div> <!-- /.col.grid_5_of_12 -->

                        <div class="col grid_7_of_12">
                                <div class="social-media-icons">
                                        <?php echo wpas_get_social_media(); ?>
                                </div>
                                <nav id="site-navigation" class="main-navigation" role="navigation">
                                        <h3 class="menu-toggle assistive-text"><?php esc_html_e( 'Menu', 'wpas' ); ?></h3>
                                        <div class="assistive-text skip-link"><a href="#content" title="<?php esc_attr_e( 'Skip to content', 'wpas' ); ?>"><?php esc_html_e( 'Skip to content', 'wpas' ); ?></a></div>
                                 <?php
                                        if( is_user_logged_in() ) {
                                        $menu = 'logged-in';
                                        } else {
                                        $menu = 'public';
                                        }
                                        wp_nav_menu( array(  'menu' => $menu, 'theme_location' => 'primary', 'menu_class' => 'nav-menu' ) );
                                ?>
                                </nav> <!-- /.site-navigation.main-navigation -->
                        </div> <!-- /.col.grid_7_of_12 -->
                </header> <!-- /#masthead.site-header.row -->

        </div> <!-- /#headercontainer -->

        <div class="emd-container" id="maincontentcontainer">
