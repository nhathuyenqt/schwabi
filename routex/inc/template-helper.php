<?php
/**
 * Custom template tags for this theme
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package routex
 */

 function get_header_style($style){
    if ( $style == 'header_2'  ) {
        get_template_part( 'template-parts/header/header-2' );
    }
    elseif ( $style == 'header_3'  ) {
        get_template_part( 'template-parts/header/header-3' );
    }
    elseif ( $style == 'header_1_onepage' ) {
        get_template_part( 'template-parts/header/header-1-onepage' );
    }
    elseif ( $style == 'header_2_onepage' ) {
        get_template_part( 'template-parts/header/header-2-onepage' );
    }
    elseif ( $style == 'header_3_onepage' ) {
        get_template_part( 'template-parts/header/header-3-onepage' );
    }
    
    elseif ( $style == 'header_4'  ) {
        get_template_part( 'template-parts/header/header-4' );
    }
    elseif ( $style == 'header_5'  ) {
        get_template_part( 'template-parts/header/header-5' );
    }
    elseif ( $style == 'header_6'  ) {
        get_template_part( 'template-parts/header/header-6' );
    }
    else{
        get_template_part( 'template-parts/header/header-1');
    }
}

function routex_check_header() {
    $tp_header_tabs = function_exists('tpmeta_field')? tpmeta_field('routex_header_tabs') : false;
    $tp_header_style_meta = function_exists('tpmeta_field')? tpmeta_field('routex_header_style') : '';
    $elementor_header_template_meta = function_exists('tpmeta_field')? tpmeta_field('routex_header_templates') : false;

    $routex_header_option_switch = get_theme_mod('routex_header_elementor_switch', false);
    $header_default_style_kirki = get_theme_mod( 'header_layout_custom', 'header_1' );
    $elementor_header_templates_kirki = get_theme_mod( 'routex_header_templates' );
    
    if($tp_header_tabs == 'default'){
        if($routex_header_option_switch){
            if($elementor_header_templates_kirki){
                echo \Elementor\Plugin::$instance->frontend->get_builder_content($elementor_header_templates_kirki);
            }
        }else{ 
            if($header_default_style_kirki){
                get_header_style($header_default_style_kirki);
            }else{
                get_template_part( 'template-parts/header/header-1' );
            }
        }
    }elseif($tp_header_tabs == 'custom'){
        if ($tp_header_style_meta) {
            get_header_style($tp_header_style_meta);
        }else{
            get_header_style($header_default_style_kirki);
        }  
    }elseif($tp_header_tabs == 'elementor'){
        if($elementor_header_template_meta){
            echo \Elementor\Plugin::$instance->frontend->get_builder_content($elementor_header_template_meta);
        }else{
            echo \Elementor\Plugin::$instance->frontend->get_builder_content($elementor_header_templates_kirki);
        }
    }else{
        if($routex_header_option_switch){

            if($elementor_header_templates_kirki){
                echo \Elementor\Plugin::$instance->frontend->get_builder_content($elementor_header_templates_kirki);
            }else{
                get_template_part( 'template-parts/header/header-1' );
            }
        }else{
            get_header_style($header_default_style_kirki);

        }
        
    }

}
add_action( 'routex_header_style', 'routex_check_header', 10 );



/**
 * [routex_header_lang description]
 * @return [type] [description]
 */

function routex_header_lang_defualt() {
    $routex_header_lang = get_theme_mod( 'routex_header_lang', true );
    if ( $routex_header_lang ): ?>

<span class="tp-header-lang-selected-lang tp-lang-toggle"
    id="tp-header-lang-toggle"><?php print esc_html__( 'English', 'routex' );?></span>

<?php do_action( 'routex_language' );?>

<?php endif;?>
<?php
}

/**
 * [routex_language_list description]
 * @return [type] [description]
 */
function _routex_language( $mar ) {
    return $mar;
}
function routex_language_list() {

    $mar = '';
    $languages = apply_filters( 'wpml_active_languages', NULL, 'orderby=id&order=desc' );
    if ( !empty( $languages ) ) {
        $mar = '<ul class="tp-header-lang-list tp-lang-list">';
        foreach ( $languages as $lan ) {
            $active = $lan['active'] == 1 ? 'active' : '';
            $mar .= '<li class="' . $active . '"><a href="' . $lan['url'] . '">' . $lan['translated_name'] . '</a></li>';
        }
        $mar .= '</ul>';
    } else {
        //remove this code when send themeforest reviewer team
        $mar .= '<ul class="tp-header-lang-list tp-lang-list tp-header-lan-list-area">';
        $mar .= '<li><a href="#">' . esc_html__( 'English', 'routex' ) . '</a></li>';
        $mar .= '<li><a href="#">' . esc_html__( 'Bangla', 'routex' ) . '</a></li>';
        $mar .= '<li><a href="#">' . esc_html__( 'French', 'routex' ) . '</a></li>';
        $mar .= '<li><a href="#">' . esc_html__( 'Hindi', 'routex' ) . '</a></li>';
        $mar .= ' </ul>';
    }
    print _routex_language( $mar );
}
add_action( 'routex_language', 'routex_language_list' );


// header logo
function routex_header_logo() { ?>
<?php 
        $routex_logo_on = function_exists('tpmeta_field')? tpmeta_field('routex_en_secondary_logo') : '';
        $routex_logo = get_template_directory_uri() . '/assets/imgs/logo/logo.svg';
        $routex_logo_white = get_template_directory_uri() . '/assets/imgs/logo/logo-3.svg';

        $routex_site_logo = get_theme_mod( 'header_logo', $routex_logo );
        $routex_secondary_logo = get_theme_mod( 'header_secondary_logo', $routex_logo_white );
      ?>

<?php if ( $routex_logo_on == 'on' ) : ?>
<a class="main-logo" href="<?php print esc_url( home_url( '/' ) );?>">
    <img src="<?php print esc_url( $routex_secondary_logo );?>" alt="<?php print esc_attr__( 'logo', 'routex' );?>" />
</a>
<?php else : ?>
<a class="standard-logo" href="<?php print esc_url( home_url( '/' ) );?>">
    <img src="<?php print esc_url( $routex_site_logo );?>" alt="<?php print esc_attr__( 'logo', 'routex' );?>" />
</a>
<?php endif; ?>
<?php
}


// header logo
function routex_header_black_logo() { ?>
<?php 
        $routex_logo = get_template_directory_uri() . '/assets/imgs/logo/logo.svg';

        $routex_black_logo = get_theme_mod( 'header_logo', $routex_logo );
    ?>

<a href="<?php print esc_url( home_url( '/' ) );?>">
    <img src="<?php print esc_url( $routex_black_logo );?>" alt="<?php print esc_attr__( 'logo', 'routex' );?>" />
</a>
<?php
}
 
/**
 * [routex_header_social_profiles description]
 * @return [type] [description] 
 */
function routex_header_social_profiles() {
    $routex_topbar_fb_url = get_theme_mod( 'header_facebook_link', __( '#', 'routex' ) );
    $routex_topbar_twitter_url = get_theme_mod( 'header_twitter_link', __( '#', 'routex' ) );
    $routex_topbar_instagram_url = get_theme_mod( 'header_instagram_link', __( '#', 'routex' ) );
    $routex_topbar_linkedin_url = get_theme_mod( 'header_linkedin_link', __( '#', 'routex' ) );
    ?>

<ul class="list">
<?php if ( !empty( $routex_topbar_fb_url ) ): ?>
    <li><a href="<?php print esc_url( $routex_topbar_fb_url );?>"><i class="fa-brands fa-facebook-f"></i></a></li>
<?php endif;?>
<?php if ( !empty( $routex_topbar_instagram_url ) ): ?>
    <li><a href="<?php echo esc_url( $routex_topbar_instagram_url ) ?>"><i class="fa-brands fa-instagram"></i></a></li>
<?php endif;?>
<?php if ( !empty( $routex_topbar_twitter_url ) ): ?>
    <li><a href="<?php print esc_url( $routex_topbar_twitter_url );?>"><i class="fa-brands fa-twitter"></i></a></li>
<?php endif;?>
<?php if ( !empty( $routex_topbar_linkedin_url ) ): ?>
    <li><a href="<?php echo esc_url( $routex_topbar_linkedin_url ) ?>"><i class="fa-brands fa-linkedin"></i></a></li>
<?php endif;?>
</ul>

<?php 
}
// Header Logo Size Control 
function routex_style_functions()
{
    wp_enqueue_style('routex-custom', ROUTEX_THEME_CSS_DIR . 'routex-custom.css', []);

    $logo_size = get_theme_mod('routex_logo_size', '156');
    if ($logo_size != '') {
        $custom_css = '';
        $custom_css .= ".header__logo a img { width: " . $logo_size . "px}";
        wp_add_inline_style('routex-custom', $custom_css);
    }    
}
add_action('wp_enqueue_scripts', 'routex_style_functions');
/**
 * [routex_header_social_profiles description]
 * @return [type] [description]
 */
function routex_header_social_main_profiles() {
    $routex_topbar_fb_url = get_theme_mod( 'header_facebook_link', __( '#', 'routex' ) );
    $routex_topbar_twitter_url = get_theme_mod( 'header_twitter_link', __( '#', 'routex' ) );
    $routex_topbar_instagram_url = get_theme_mod( 'header_instagram_link', __( '#', 'routex' ) );
    $routex_topbar_linkedin_url = get_theme_mod( 'header_linkedin_link', __( '#', 'routex' ) );
    ?>

<?php if ( !empty( $routex_topbar_fb_url ) ): ?>
<a href="<?php print esc_url( $routex_topbar_fb_url );?>">
    <svg width="9" height="16" viewBox="0 0 9 16" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path
            d="M8 1H6.09091C5.24704 1 4.43773 1.36875 3.84102 2.02513C3.24432 2.6815 2.90909 3.57174 2.90909 4.5V6.6H1V9.4H2.90909V15H5.45455V9.4H7.36364L8 6.6H5.45455V4.5C5.45455 4.31435 5.52159 4.1363 5.64093 4.00503C5.76027 3.87375 5.92213 3.8 6.09091 3.8H8V1Z"
            stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
    </svg>
</a>
<?php endif;?>

<?php if ( !empty( $routex_topbar_twitter_url ) ): ?>
<a href="<?php print esc_url( $routex_topbar_twitter_url );?>">
    <svg width="17" height="16" viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path
            d="M16 1.00785C15.3471 1.53487 14.6242 1.93795 13.8591 2.20158C13.4485 1.66129 12.9027 1.27834 12.2957 1.10454C11.6887 0.930729 11.0497 0.974449 10.4651 1.22978C9.88045 1.48511 9.37848 1.93974 9.02703 2.53217C8.67558 3.1246 8.49161 3.82626 8.5 4.54224V5.32246C7.3018 5.35801 6.11451 5.05391 5.04387 4.43726C3.97323 3.8206 3.05249 2.91052 2.36364 1.78806C2.36364 1.78806 -0.363636 8.81003 5.77273 11.9309C4.36854 13.0216 2.69579 13.5685 1 13.4913C7.13636 17.3924 14.6364 13.4913 14.6364 4.51883C14.6357 4.3015 14.6175 4.08471 14.5818 3.87125C15.2777 3.08595 15.7687 2.09447 16 1.00785Z"
            stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
    </svg>
</a>
<?php endif;?>

<?php if ( !empty( $routex_topbar_instagram_url ) ): ?>
<a href="<?php echo esc_url( $routex_topbar_instagram_url ) ?>">
    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path
            d="M11.5 1H4.5C2.567 1 1 2.567 1 4.5V11.5C1 13.433 2.567 15 4.5 15H11.5C13.433 15 15 13.433 15 11.5V4.5C15 2.567 13.433 1 11.5 1Z"
            stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
        <path
            d="M10.7997 7.55897C10.8861 8.14154 10.7866 8.73652 10.5153 9.25928C10.2441 9.78204 9.8149 10.206 9.28884 10.4707C8.76277 10.7355 8.16661 10.8277 7.58515 10.7341C7.00368 10.6406 6.46653 10.366 6.05008 9.94958C5.63364 9.53313 5.35911 8.99598 5.26554 8.41452C5.17198 7.83305 5.26414 7.23689 5.52893 6.71083C5.79371 6.18476 6.21763 5.75559 6.74039 5.48434C7.26315 5.21309 7.85813 5.11358 8.4407 5.19997C9.03494 5.28809 9.58509 5.56499 10.0099 5.98978C10.4347 6.41457 10.7116 6.96472 10.7997 7.55897Z"
            stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
        <path d="M11.8501 4.14996H11.8571" stroke="white" stroke-width="1.5" stroke-linecap="round"
            stroke-linejoin="round" />
    </svg>
</a>
<?php endif;?>

<?php if ( !empty( $routex_topbar_linkedin_url ) ): ?>
<a href="<?php echo esc_url( $routex_topbar_linkedin_url ) ?>">
    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path
            d="M10.8001 5.42102C11.914 5.42102 12.9823 5.88681 13.7699 6.71592C14.5576 7.54503 15.0001 8.66954 15.0001 9.84207V15H12.2001V9.84207C12.2001 9.45123 12.0526 9.07639 11.79 8.80002C11.5275 8.52365 11.1714 8.36839 10.8001 8.36839C10.4288 8.36839 10.0727 8.52365 9.81015 8.80002C9.5476 9.07639 9.4001 9.45123 9.4001 9.84207V15H6.6001V9.84207C6.6001 8.66954 7.0426 7.54503 7.83025 6.71592C8.6179 5.88681 9.68619 5.42102 10.8001 5.42102Z"
            stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
        <path d="M3.8 6.1579H1V15H3.8V6.1579Z" stroke="white" stroke-width="1.5" stroke-linecap="round"
            stroke-linejoin="round" />
        <path
            d="M2.4 3.94737C3.1732 3.94737 3.8 3.28758 3.8 2.47368C3.8 1.65979 3.1732 1 2.4 1C1.6268 1 1 1.65979 1 2.47368C1 3.28758 1.6268 3.94737 2.4 3.94737Z"
            stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
    </svg>
</a>
<?php endif;?>

<?php
}

/**
 * [routex_header_side_info_social_profiles description]
 * @return [type] [description]
 */
function routex_header_side_info_social_profiles() {
    $routex_topbar_fb_url = get_theme_mod( 'header_facebook_link', __( '#', 'routex' ) );
    $routex_topbar_twitter_url = get_theme_mod( 'header_twitter_link', __( '#', 'routex' ) );
    $routex_topbar_pinterest_url = get_theme_mod( 'header_pinterest_link', __( '#', 'routex' ) );
    $routex_topbar_linkedin_url = get_theme_mod( 'header_linkedin_link', __( '#', 'routex' ) );
    ?>

<ul class="header-top-socail-menu d-flex">
    <?php if ( !empty( $routex_topbar_fb_url ) ): ?>
    <li><a class="icon facebook" href="<?php print esc_url( $routex_topbar_fb_url );?>"><i
                class="fab fa-facebook-f"></i>
        </a></li>
    <?php endif;?>

    <?php if ( !empty( $routex_topbar_pinterest_url ) ): ?>
    <li><a class="icon linkedin" href="<?php echo esc_url( $routex_topbar_pinterest_url ) ?>"><i
                class="fa-brands fa-pinterest-p"></i></a></li>
    <?php endif;?>

    <?php if ( !empty( $routex_topbar_linkedin_url ) ): ?>
    <li><a class="icon linkedin" href="<?php echo esc_url( $routex_topbar_linkedin_url ) ?>"><i
                class="fa-brands fa-vimeo-v"></i></a></li>
    <?php endif;?>
</ul>



<?php
}
function routex_footer_social_profiles() {
    $header_facebook_link = get_theme_mod( 'header_facebook_link', __( '#', 'routex' ) );
    $header_instagram_link = get_theme_mod( 'header_instagram_link', __( '#', 'routex' ) );
    $header_pinterest_link = get_theme_mod( 'header_pinterest_link', __( '#', 'routex' ) );
    $header_linkedin_link = get_theme_mod( 'header_linkedin_link', __( '#', 'routex' ) );
    ?>
<div class="footer2__right-social d-flex">
    <?php if ( !empty( $header_facebook_link ) ): ?>
    <a href="<?php print esc_url( $header_facebook_link );?>"><i class="fab fa-facebook-f"></i></a>
    <?php endif;?>
    <?php if ( !empty( $header_instagram_link ) ): ?>
    <a href="<?php print esc_url( $header_instagram_link );?>"><i class="fa-brands fa-pinterest-p"></i></a>
    <?php endif;?>
    <?php if ( !empty( $header_linkedin_link ) ): ?>
    <a href="<?php print esc_url( $header_instagram_link );?>"><i class="fa-brands fa-linkedin"></i></a>
    <?php endif;?>
    <?php if ( !empty( $header_pinterest_link ) ): ?>
    <a href="<?php print esc_url( $header_pinterest_link );?>"><i class="fa-brands fa-pinterest-p"></i></a>
    <?php endif;?>
</div>

<?php
}

/** 
 * [routex_header_menu description]
 * @return [type] [description]
 */
function routex_header_menu() {
    ?>
<?php
        wp_nav_menu( [
            'theme_location' => 'main-menu',
            'menu_class'     => '',
            'container'      => '',
            'fallback_cb'    => 'routex_Navwalker_Class::fallback',
            'walker'         => new \TPCore\Widgets\routex_Navwalker_Class,
        ] );
    ?>
<?php
}

/**
 * [routex_footer_menu description]
 * @return [type] [description]
 */
function routex_footer_bottom_menu() {
    wp_nav_menu( [
        'theme_location' => 'footer-bottom-menu',
        'menu_class'     => '',
        'container'      => '',
        'fallback_cb'    => 'routex_Navwalker_Class::fallback',
        'walker'         =>  new \TPCore\Widgets\routex_Navwalker_Class,
    ] );
}
/**
 * [routex_footer_menu description]
 * @return [type] [description]
 */
function routex_header_top_menu() {
    wp_nav_menu( [
        'theme_location' => 'header-top-menu',
        'menu_class'     => '',
        'container'      => '',
        'fallback_cb'    => 'routex_Navwalker_Class::fallback',
        'walker'         =>  new \TPCore\Widgets\routex_Navwalker_Class,
    ] );
}

 /*
 * routex footer
 */
add_action( 'routex_footer_style', 'routex_check_footer', 10 );


function get_footer_style($style){
    if( $style == 'footer_2'  ) {
        get_template_part( 'template-parts/footer/footer-2' );
    }

    elseif ( $style == 'footer_3'  ) {
        get_template_part( 'template-parts/footer/footer-3' );
    }
    elseif ( $style == 'footer_4'  ) {
        get_template_part( 'template-parts/footer/footer-4' );
    }

    else{
        get_template_part( 'template-parts/footer/footer-1');
    }
}

function routex_check_footer() {
    $tp_footer_tabs = function_exists('tpmeta_field')? tpmeta_field('routex_footer_tabs') : '';
    $routex_footer_style = function_exists( 'tpmeta_field' ) ? tpmeta_field( 'routex_footer_style' ) : NULL;
    $footer_template = function_exists('tpmeta_field')? tpmeta_field('routex_footer_template') : false;

    $routex_footer_option_switch = get_theme_mod( 'routex_footer_elementor_switch', false );
    $elementor_footer_template = get_theme_mod( 'routex_footer_templates');
    $routex_default_footer_style = get_theme_mod( 'footer_layout', 'footer_1' );

    if($tp_footer_tabs == 'default'){
        if($routex_footer_option_switch){
            if($elementor_footer_template){
                echo \Elementor\Plugin::$instance->frontend->get_builder_content($elementor_footer_template);
            }
        }else{ 
            if($routex_default_footer_style){
                get_footer_style($routex_default_footer_style);
            }else{
                get_template_part( 'template-parts/footer/footer-1' );
            }
        }
    }elseif($tp_footer_tabs == 'custom'){
        if ($routex_footer_style) {
            get_footer_style($routex_footer_style);
        }else{
            get_footer_style($routex_default_footer_style);
        }  
    }elseif($tp_footer_tabs == 'elementor'){
        if($footer_template){
            echo \Elementor\Plugin::$instance->frontend->get_builder_content($footer_template);
        }else{
            echo \Elementor\Plugin::$instance->frontend->get_builder_content($elementor_footer_template);
        }

    }else{
        if($routex_footer_option_switch){

            if($elementor_footer_template){
                echo \Elementor\Plugin::$instance->frontend->get_builder_content($elementor_footer_template);
            }else{
                get_template_part( 'template-parts/footer/footer-1' );
            }
        }else{
            get_footer_style($routex_default_footer_style);

        }
    }
}

// routex_copyright_text
function routex_copyright_text() {
   print get_theme_mod( 'footer_copyright', esc_html__( '© 2024 Routex, All Rights Reserved. Design By RRDevs', 'routex' ) );
}


/**
 *
 * pagination
 */
if ( !function_exists( 'routex_pagination' ) ) {

    function _routex_pagi_callback( $pagination ) {
        return $pagination;
    } 

    //page navegation
    function routex_pagination( $prev, $next, $pages, $args ) {
        global $wp_query, $wp_rewrite;
        $menu = '';
        $wp_query->query_vars['paged'] > 1 ? $current = $wp_query->query_vars['paged'] : $current = 1;

        if ( $pages == '' ) {
            global $wp_query;
            $pages = $wp_query->max_num_pages;

            if ( !$pages ) {
                $pages = 1;
            }

        }

        $pagination = [
            'base'      => add_query_arg( 'paged', '%#%' ),
            'format'    => '',
            'total'     => $pages,
            'current'   => $current,
            'prev_text' => $prev,
            'next_text' => $next,
            'type'      => 'array',
        ];

        //rewrite permalinks
        if ( $wp_rewrite->using_permalinks() ) {
            $pagination['base'] = user_trailingslashit( trailingslashit( remove_query_arg( 's', get_pagenum_link( 1 ) ) ) . 'page/%#%/', 'paged' );
        }

        if ( !empty( $wp_query->query_vars['s'] ) ) {
            $pagination['add_args'] = ['s' => get_query_var( 's' )];
        }

        $pagi = '';
        if ( paginate_links( $pagination ) != '' ) {
            $paginations = paginate_links( $pagination );
            $pagi .= '<ul>';
            foreach ( $paginations as $key => $pg ) {
                $pagi .= '<li>' . $pg . '</li>';
            }
            $pagi .= '</ul>';
        }

        print _routex_pagi_callback( $pagi );
    }
} 

// theme color
function routex_custom_color() {
    $routex_color_1 = get_theme_mod( 'routex_color_1', '#83CD20' );
    $routex_color_2 = get_theme_mod( 'routex_color_2', '#034833' );
    $routex_color_3 = get_theme_mod( 'routex_color_3', '#727272' );

    wp_enqueue_style( 'routex-custom', ROUTEX_THEME_CSS_DIR . 'routex-custom.css', [] );
    
    if ( !empty($routex_color_1 || $routex_color_2 || $routex_color_3 )) {
        $custom_css = '';
        $custom_css .= "html:root{
            --rr-theme-primary: " . $routex_color_1 . ";
            --rr-heading-primary: " . $routex_color_2 . ";
            --rr-text-body: " . $routex_color_3 . ";
        }";

        wp_add_inline_style( 'routex-custom', $custom_css );
    }
}
add_action( 'wp_enqueue_scripts', 'routex_custom_color' );

// routex_kses_intermediate
function routex_kses_intermediate( $string = '' ) {
    return wp_kses( $string, routex_get_allowed_html_tags( 'intermediate' ) );
}

function routex_get_allowed_html_tags( $level = 'basic' ) {
    $allowed_html = [
        'b'      => [],
        'i'      => [],
        'u'      => [],
        'em'     => [],
        'br'     => [],
        'abbr'   => [
            'title' => [],
        ],
        'span'   => [
            'class' => [],
        ],
        'strong' => [],
        'a'      => [
            'href'  => [],
            'title' => [],
            'class' => [],
            'id'    => [],
        ],
    ];

    if ($level === 'intermediate') {
        $allowed_html['a'] = [
            'href' => [],
            'title' => [],
            'class' => [],
            'id' => [],
        ];
        $allowed_html['div'] = [
            'class' => [],
            'id' => [],
        ];
        $allowed_html['img'] = [
            'src' => [],
            'class' => [],
            'alt' => [],
        ];
        $allowed_html['del'] = [
            'class' => [],
        ];
        $allowed_html['ins'] = [
            'class' => [],
        ];
        $allowed_html['bdi'] = [
            'class' => [],
        ];
        $allowed_html['i'] = [
            'class' => [],
            'data-rating-value' => [],
        ];
    }

    return $allowed_html;
}



// WP kses allowed tags
// ----------------------------------------------------------------------------------------
function routex_kses($raw){

   $allowed_tags = array(
      'a'                         => array(
         'class'   => array(),
         'href'    => array(),
         'rel'  => array(),
         'title'   => array(),
         'target' => array(),
      ),
      'abbr'                      => array(
         'title' => array(),
      ),
      'b'                         => array(),
      'blockquote'                => array(
         'cite' => array(),
      ),
      'cite'                      => array(
         'title' => array(),
      ),
      'code'                      => array(),
      'del'                    => array(
         'datetime'   => array(),
         'title'      => array(),
      ),
      'dd'                     => array(),
      'div'                    => array(
         'class'   => array(),
         'title'   => array(),
         'style'   => array(),
      ),
      'dl'                     => array(),
      'dt'                     => array(),
      'em'                     => array(),
      'h1'                     => array(),
      'h2'                     => array(),
      'h3'                     => array(),
      'h4'                     => array(),
      'h5'                     => array(),
      'h6'                     => array(),
      'i'                         => array(
         'class' => array(),
      ),
      'img'                    => array(
         'alt'  => array(),
         'class'   => array(),
         'height' => array(),
         'src'  => array(),
         'width'   => array(),
      ),
      'li'                     => array(
         'class' => array(),
      ),
      'ol'                     => array(
         'class' => array(),
      ),
      'p'                         => array(
         'class' => array(),
      ),
      'q'                         => array(
         'cite'    => array(),
         'title'   => array(),
      ),
      'span'                      => array(
         'class'   => array(),
         'title'   => array(),
         'style'   => array(),
      ),
      'iframe'                 => array(
         'width'         => array(),
         'height'     => array(),
         'scrolling'     => array(),
         'frameborder'   => array(),
         'allow'         => array(),
         'src'        => array(),
      ),
      'strike'                 => array(),
      'br'                     => array(),
      'strong'                 => array(),
      'data-wow-duration'            => array(),
      'data-wow-delay'            => array(),
      'data-wallpaper-options'       => array(),
      'data-stellar-background-ratio'   => array(),
      'ul'                     => array(
         'class' => array(),
      ),
      'svg' => array(
           'class' => true,
           'aria-hidden' => true,
           'aria-labelledby' => true,
           'role' => true,
           'xmlns' => true,
           'width' => true,
           'height' => true,
           'viewbox' => true, // <= Must be lower case!
       ),
       'g'     => array( 'fill' => true ),
       'title' => array( 'title' => true ),
       'path'  => array( 'd' => true, 'fill' => true,  ),
      );

   if (function_exists('wp_kses')) { // WP is here
      $allowed = wp_kses($raw, $allowed_tags);
   } else {
      $allowed = $raw;
   }
 
   return $allowed; 
}
// blog single social share
function routex_blog_social_share(){

    $routex_singleblog_social = get_theme_mod( 'routex_singleblog_social', false );
    $post_url = get_the_permalink();
    $end_class = has_tag() ? 'text-lg-end' : 'text-lg-start';

    if(!empty($routex_singleblog_social)) : ?>
<div class="blog-details__social-media wow fadeInLeft  animated" data-wow-delay=".9s">
    <a href="<?php echo esc_url($post_url);?>"><i class="fa-brands fa-facebook-f"></i></a>
    <a href="<?php echo esc_url($post_url);?>"><i class="fa-brands fa-pinterest-p"></i></a>
    <a href="<?php echo esc_url($post_url);?>"><i class="fa-brands fa-linkedin"></i></a>
    <a href="<?php echo esc_url($post_url);?>"><i class="fa-brands fa-pinterest"></i></a>
</div>
<?php endif ; 

}

// product single social share
function routex_product_social_share(){
    $post_url = get_the_permalink();
    ?>
<div class="tp-shop-details__social">
    <span><?php echo esc_html__('Share:', 'routex');?></span>
    <a href="https://www.linkedin.com/shareArticle?mini=true&url=<?php echo esc_url($post_url);?>" target="_blank"><i
            class="fa-brands fa-linkedin-in"></i></a>
    <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo esc_url($post_url);?>" target="_blank"><i
            class="fa-brands fa-facebook"></i></a>
    <a href="https://twitter.com/share?url=<?php echo esc_url($post_url);?>" target="_blank"><i
            class="fa-brands fa-twitter"></i></a>
    <a href="http://pinterest.com/pin/create/button/?url=<?php echo esc_url($post_url);?>" target="_blank"><i
            class="fa-brands fa-pinterest-p"></i></a>
</div>
<?php
}

// / This code filters the Archive widget to include the post count inside the link /
add_filter( 'get_archives_link', 'routex_archive_count_span' );
function routex_archive_count_span( $links ) {
    $links = str_replace('</a>&nbsp;(', '<span > (', $links);
    $links = str_replace(')', ')</span></a> ', $links);
    return $links;
}


// / This code filters the Category widget to include the post count inside the link /
add_filter('wp_list_categories', 'routex_cat_count_span');
function routex_cat_count_span($links) {
  $links = str_replace('</a> (', '<span> (', $links);
  $links = str_replace(')', ')</span></a>', $links);
  return $links;
}