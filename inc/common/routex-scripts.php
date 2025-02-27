<?php

/**
 * routex_scripts description
 * @return [type] [description]
 */
function routex_scripts() {

/**
 * all css files
*/ 
wp_enqueue_style( 'routex-fonts', routex_fonts_url(), array(), '1.0.0');
if( is_rtl() ){
    wp_enqueue_style( 'bootstrap-rtl', ROUTEX_THEME_CSS_DIR.'bootstrap.rtl.min.css', array() );
}else{
    wp_enqueue_style( 'bootstrap-min', ROUTEX_THEME_CSS_DIR.'bootstrap.min.css', array() );
}

wp_enqueue_style( 'animate-min', ROUTEX_THEME_CSS_DIR . 'animate.min.css', [] );
wp_enqueue_style( 'custom-font', ROUTEX_THEME_CSS_DIR.'custom-font.css', array() );
wp_enqueue_style( 'fontawesome-pro', ROUTEX_THEME_CSS_DIR . 'font-awesome-pro.css', [] );
wp_enqueue_style( 'magnific-popup', ROUTEX_THEME_CSS_DIR . 'magnific-popup.css', [] );
wp_enqueue_style( 'spacing', ROUTEX_THEME_CSS_DIR . 'spacing.css', [] );
wp_enqueue_style( 'nice-select', ROUTEX_THEME_CSS_DIR . 'nice-select.css', [] );
wp_enqueue_style( 'odometer-min', ROUTEX_THEME_CSS_DIR . 'odometer.min.css', [] );
wp_enqueue_style( 'slick', ROUTEX_THEME_CSS_DIR . 'slick.css', [] );
wp_enqueue_style( 'swiper-min', ROUTEX_THEME_CSS_DIR . 'swiper.min.css', [] );
wp_enqueue_style( 'routex-core', ROUTEX_THEME_CSS_DIR . 'routex-core.css', [], time() );
wp_enqueue_style( 'routex-unit', ROUTEX_THEME_CSS_DIR . 'routex-unit.css', [], time() );
wp_enqueue_style( 'routex-custom', ROUTEX_THEME_CSS_DIR . 'routex-custom.css', [] );
wp_enqueue_style( 'routex-style', get_stylesheet_uri() );

// all js
wp_enqueue_script( 'bootstrap-bundle-min', ROUTEX_THEME_JS_DIR . 'bootstrap.bundle.min.js', [ 'jquery' ], '', true );
wp_enqueue_script( 'isotope-docs', ROUTEX_THEME_JS_DIR . 'isotope-docs.min.js', [ 'jquery' ], '', true );
wp_enqueue_script( 'jquery-appear', ROUTEX_THEME_JS_DIR . 'jquery.appear.js', [ 'jquery' ], '', true );
wp_enqueue_script( 'jquery-countdown', ROUTEX_THEME_JS_DIR . 'jquery.countdown.min.js', [ 'jquery' ], '', true );
wp_enqueue_script( 'magnific-popup-js', ROUTEX_THEME_JS_DIR . 'magnific-popup.min.js', [ 'jquery' ], '', true );
wp_enqueue_script( 'meanmenu-min', ROUTEX_THEME_JS_DIR . 'meanmenu.min.js', [ 'jquery' ], '', true );
wp_enqueue_script( 'nice-select', ROUTEX_THEME_JS_DIR . 'nice-select.min.js', [ 'jquery' ], '', true );
wp_enqueue_script( 'odometer-min', ROUTEX_THEME_JS_DIR . 'odometer.min.js', [ 'jquery' ], '', true );
wp_enqueue_script( 'parallax-scroll', ROUTEX_THEME_JS_DIR . 'parallax-scroll.js', [ 'jquery' ], '', true );
wp_enqueue_script( 'parallax-min', ROUTEX_THEME_JS_DIR . 'parallax.min.js', [ 'jquery' ], '', true );
wp_enqueue_script( 'easypiechart', ROUTEX_THEME_JS_DIR . 'easypiechart.min.js', [ 'jquery' ], '', true );
wp_enqueue_script( 'slick-min', ROUTEX_THEME_JS_DIR . 'slick.min.js', [ 'jquery' ], '', true );
wp_enqueue_script( 'smooth-scroll', ROUTEX_THEME_JS_DIR . 'smooth-scroll.js', [ 'jquery' ], '', true );
wp_enqueue_script( 'swiper-min-js', ROUTEX_THEME_JS_DIR . 'swiper.min.js', [ 'jquery' ], false, true );
wp_enqueue_script( 'type', ROUTEX_THEME_JS_DIR . 'type.js', [ 'jquery' ], false, true );
wp_enqueue_script( 'vanilla-tilt.js', ROUTEX_THEME_JS_DIR . 'vanilla-tilt.js', [ 'jquery' ], false, true );
wp_enqueue_script( 'waypoints-min', ROUTEX_THEME_JS_DIR . 'waypoints.min.js', [ 'jquery' ], false, true );
wp_enqueue_script( 'wow-min', ROUTEX_THEME_JS_DIR . 'wow.min.js', [ 'jquery' ], false, true );
wp_enqueue_script( 'routex-main', ROUTEX_THEME_JS_DIR . 'main.js', [ 'jquery' ], time(), true );

    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
}
add_action( 'wp_enqueue_scripts', 'routex_scripts' );

/*
Register Fonts
*/
function routex_fonts_url() {
    $font_url = '';

    /*
    Translators: If there are characters in your language that are not supported
    by chosen font(s), translate this to 'off'. Do not translate into your own language.
     */
    if ('off' !== _x('on', 'Google font: on or off', 'routex')) {
        $font_url = 'https://fonts.googleapis.com/css2?' . urlencode('family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap');
    }
    return $font_url;
}

