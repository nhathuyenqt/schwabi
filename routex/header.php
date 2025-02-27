<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package routex
 */
?>

<!doctype html>
<html <?php language_attributes();?>>

<head>
    <meta charset="<?php bloginfo( 'charset' );?>">
    <?php if ( is_singular() && pings_open( get_queried_object() ) ): ?>
    <?php endif;?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <?php wp_head();?>
</head>

<body <?php body_class();?>>

    <?php wp_body_open();?>  

    <?php
        $routex_preloader = get_theme_mod( 'header_preloader_switch', false );
        $routex_backtotop = get_theme_mod( 'header_backtotop_switch', true );
    ?>

    <?php if ( !empty( $routex_backtotop ) ): ?>
    <!-- back to top start -->
    <div id="scroll-percentage">
        <span id="scroll-percentage-value"></span>
    </div>
    <!-- back to top end -->
    <?php endif;?>

    <?php if ( !empty( $routex_preloader ) ): ?>
    <!-- preloader area start -->
    <div id="preloader">
    <div class="preloader-close">x</div>
    <div class="sk-three-bounce">
        <div class="sk-child sk-bounce1"></div>
        <div class="sk-child sk-bounce2"></div>
        <div class="sk-child sk-bounce3"></div>
    </div>
</div>
<!-- pre loader area end -->
<?php endif;?>

<!-- header start -->
<?php do_action( 'routex_header_style' );?>
<!-- header end -->

<!-- wrapper-box start -->
<?php do_action( 'routex_before_main_content' );?>
