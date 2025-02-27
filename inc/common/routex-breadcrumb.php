<?php
/**
 * Breadcrumbs for routex theme.
 *
 * @package     routex
 * @author      RRdevs
 * @copyright   Copyright (c) 2022, RRdevs
 * @link        https://www.weblearnbd.net
 * @since       routex 1.0.0
 */

function routex_breadcrumb_func() {
    global $post;  
    $breadcrumb_class = ''; 
    $breadcrumb_show = 1;
       $title = '';

    if ( is_front_page() && is_home() ) {
        $title = get_theme_mod('breadcrumb_blog_title', __('Blog','routex'));
        $breadcrumb_class = 'home_front_page';
    }
    elseif ( is_front_page() ) {
        $title = get_theme_mod('breadcrumb_blog_title', __('Blog','routex'));
        $breadcrumb_show = 0;
    }
    elseif ( is_home() ) {
        if ( get_option( 'page_for_posts' ) ) {
            $title = get_the_title( get_option( 'page_for_posts') );
        }
    }
    elseif ( is_single() && 'post' == get_post_type() ) {
      $title = get_the_title();
    } 
    elseif ( is_single() && 'product' == get_post_type() ) {
        $title = get_theme_mod( 'breadcrumb_product_details', __( 'Shop', 'routex' ) );
    } 
    elseif ( is_single() && 'courses' == get_post_type() ) {
      $title = esc_html__( 'Course Details', 'routex' );
    } 
    elseif ( function_exists( 'is_woocommerce' ) && is_woocommerce() ) {
        $title = get_theme_mod( 'breadcrumb_shop', __( 'Shop', 'routex' ) );
    }
    elseif ( is_search() ) {
        $title = esc_html__( 'Search Results for : ', 'routex' ) . get_search_query();
    } 
    elseif ( is_404() ) {
        $title = esc_html__( 'Page not Found', 'routex' );
    } 
    elseif ( is_archive() ) {
        $title = get_the_archive_title();
    } 
    else {
        $title = get_the_title();
    }
 
    $_id = get_the_ID(); 

    if ( is_single() && 'product' == get_post_type() ) { 
        $_id = $post->ID;
    } 
    elseif ( function_exists("is_shop") AND is_shop()  ) { 
        $_id = wc_get_page_id('shop');
    } 
    elseif ( is_home() && get_option( 'page_for_posts' ) ) {
        $_id = get_option( 'page_for_posts' );
    }

    $is_breadcrumb = function_exists('tpmeta_field')? tpmeta_field('routex_check_bredcrumb') : 'on';

    $con1 = $is_breadcrumb && ($is_breadcrumb== 'on') && $breadcrumb_show == 1;

    $con_main = is_404() ? is_404() : $con1; 
    
      if (  $con_main ) {
        $bg_img_from_page = function_exists('tm_image_field')? tm_image_field('routex_breadcrumb_bg') : '';

        $hide_bg_img = function_exists('tpmeta_field')? tpmeta_field('routex_check_bredcrumb_img') : 'on';
        // get_theme_mod
        $breadcrumb_image = get_template_directory_uri() . '/assets/imgs/breadcrumb/breadcrumb.png';
        $bg_img = get_theme_mod( 'breadcrumb_image' );
        $breadcrumb_padding = get_theme_mod( 'breadcrumb_padding' );
        $breadcrumb_bg_color = get_theme_mod( 'breadcrumb_bg_color', '#16243E' );
        if ( $hide_bg_img == 'off' ) {
            $bg_main_img = '';
        }else{  
            $bg_main_img = !empty( $bg_img_from_page ) ? $bg_img_from_page['url'] : $bg_img;
        }

        $padding_top = get_theme_mod( 'routex_breadcrumb_pt', '166');
        $padding_bottom = get_theme_mod( 'routex_breadcrumb_pb', '160');
        $routex_breadcrumb_switch = get_theme_mod( 'routex_breadcrumb_switch', false );
        ?>
<?php if(!empty($routex_breadcrumb_switch)) : ?>
<div class="breadcrumb__area dark-green overflow-hidden custom-width position-relative z-1"
    data-background="<?php print esc_url($bg_main_img);?>"
    data-bg-color="<?php echo esc_attr( $breadcrumb_bg_color ); ?>"
    data-padding-top="<?php echo esc_attr($padding_top) ?>px"
    data-padding-bottom="<?php echo esc_attr($padding_bottom) ?>px">
    <div class="container">
        <div class="row align-items-center justify-content-between">
            <div class="col-12">
                <div class="breadcrumb__content">
                    <div class="breadcrumb__title-wrapper mb-15 mb-sm-10 mb-xs-5">
                        <h1 class="breadcrumb__title color-white wow fadeInLeft animated" data-wow-delay=".2s">
                            <?php echo routex_kses( $title ); ?></h1>
                    </div>
                    <?php if(function_exists('bcn_display')) : ?>
                    <div class="breadcrumb__menu wow fadeInLeft animated" data-wow-delay=".4s">
                        <?php bcn_display(); ?>
                    </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php endif; ?>

<?php 
      }
}

add_action( 'routex_before_main_content', 'routex_breadcrumb_func' );

// brulloft_search_form
function routex_search_form() {
    ?>

<div id="popup-search-box">
    <div class="box-inner-wrap d-flex align-items-center">
        <form id="form" action="<?php print esc_url( home_url( '/' ) );?>" method="get" role="search">
            <input id="popup-search" type="text" name="s" value="<?php print esc_attr( get_search_query() )?>"  placeholder="<?php print esc_attr__( 'Type here to search...', 'routex' );?>">
        </form>
        <div class="search-close"><i class="fa-sharp fa-regular fa-xmark"></i></div>
    </div>
</div>


<?php
}
add_action( 'routex_before_main_content', 'routex_search_form' );