<?php 

/**
 * Register widget area. 
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function routex_widgets_init() {

    $footer_style_2_switch = get_theme_mod( 'footer_layout_2_switch', true );
    $footer_style_3_switch = get_theme_mod( 'footer_layout_3_switch', true );
    $footer_style_4_switch = get_theme_mod( 'footer_layout_4_switch', true );
    $footer_style_5_switch = get_theme_mod( 'footer_layout_5_switch', true );

    /**
     * blog sidebar 
     */
    register_sidebar( [
        'name'          => esc_html__( 'Blog Sidebar', 'routex' ),
        'id'            => 'blog-sidebar',
        'before_widget' => '<div id="%1$s" class="sidebar__widget wow fadeInLeft animated %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h5 class="sidebar__widget-title mb-30">',
        'after_title'   => '</h5>',
    ] );
  
    /**
     * Product sidebar 
     */
    register_sidebar( [
        'name'          => esc_html__( 'Product Sidebar', 'routex' ),
        'id'            => 'product-sidebar',
        'before_widget' => '<div id="%1$s" class="tp-shop-widget mb-35 %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="tp-shop-widget-title no-border">',
        'after_title'   => '</h3>',
    ] );
 
    /**  
     * Visa sidebar
     */
    if(class_exists("RR_Core")) :
    register_sidebar( [
        'name'          => esc_html__( 'Visa Sidebar', 'routex' ),
        'id'            => 'rr-visa-sidebar',
        'before_widget' => '<div id="%1$s" class="visa-details__links-visa wow fadeInLeft animated %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h5 class="service-details-title">',
        'after_title'   => '</h5>',
    ] );
    endif;
    

    
    /**  
     * Coaching sidebar
     */
    if(class_exists("RR_Core")) :
    register_sidebar( [
        'name'          => esc_html__( 'Coaching Sidebar', 'routex' ),
        'id'            => 'rr-coaching-sidebar',
        'before_widget' => '<div id="%1$s" class="coaching-details__category %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h5 class="service-details-title">',
        'after_title'   => '</h5>',
    ] );
    endif;
    
        /**  
     * Visa sidebar 
     */
    if(class_exists("RR_Core")) :
        register_sidebar( [
            'name'          => esc_html__( 'Countrie Sidebar', 'routex' ),
            'id'            => 'rr-countries-sidebar',
            'before_widget' => '<div id="%1$s" class="visa-details__links-visa wow fadeInLeft animated %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h5 class="service-details-title">',
            'after_title'   => '</h5>',
        ] );
        endif;
    
    $footer_widgets = get_theme_mod( 'footer_widget_number', 4 );

    // footer default
    for ( $num = 1; $num <= $footer_widgets; $num++ ) {
        register_sidebar( [
            'name'          => sprintf( esc_html__( 'Footer %1$s', 'routex' ), $num ),
            'id'            => 'footer-' . $num,
            'description'   => sprintf( esc_html__( 'Footer Column %1$s', 'routex' ), $num ),
            'before_widget' => '<div id="%1$s" class="footer__widget footer__widget-item-'.$num.' %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<div class="footer__widget-title footer__widget-title-2"><h4>',
            'after_title'   => '</h4></div>',
        ] );
    }

    // footer 2 
    if ( $footer_style_2_switch ) {
        for ( $num = 1; $num <= $footer_widgets; $num++ ) {

            register_sidebar( [
                'name'          => sprintf( esc_html__( 'Footer Style 2 : %1$s', 'routex' ), $num ),
                'id'            => 'footer-2-' . $num,
                'description'   => sprintf( esc_html__( 'Footer Style 2 : %1$s', 'routex' ), $num ),
                'before_widget' => '<div id="%1$s" class="footer__widget wow fadeInLeft animated footer__widget-item-2-'.$num.' %2$s">',
                'after_widget'  => '</div>',
                'before_title'  => '<div class="footer__widget-title footer2__title"><h4>',
                'after_title'   => '</h4></div>',
            ] );
        }
    }      
    // footer 3
    if ( $footer_style_3_switch ) {
        for ( $num = 1; $num <= $footer_widgets; $num++ ) {
            register_sidebar( [
                'name'          => sprintf( esc_html__( 'Footer Style 3 : %1$s', 'routex' ), $num ),
                'id'            => 'footer-3-' . $num,
                'description'   => sprintf( esc_html__( 'Footer Style 3 : %1$s', 'routex' ), $num ),
                'before_widget' => '<div id="%1$s" class="footer__widget wow fadeInLeft animated mt-md-50 mt-sm-40 mt-xs-35 footer__widget-item-3-'.$num.' %2$s">',
                'after_widget'  => '</div>',
                'before_title'  => '<div class="footer__widget-title"><h4>',
                'after_title'   => '</h4></div>',
            ] );
        }
    }         
    // footer 4
    if ( $footer_style_4_switch ) {
        for ( $num = 1; $num <= $footer_widgets; $num++ ) {
            register_sidebar( [
                'name'          => sprintf( esc_html__( 'Footer Style 4 : %1$s', 'routex' ), $num ),
                'id'            => 'footer-4-' . $num,
                'description'   => sprintf( esc_html__( 'Footer Style 4 : %1$s', 'routex' ), $num ),
                'before_widget' => '<div id="%1$s" class=" footer__widget footer-4__widget wow fadeInLeft footer-4__widget-left animated footer__widget-item-'.$num.' %2$s">',
                'after_widget'  => '</div>',
                'before_title'  => '<div class="footer__widget-title footer__widget-title-2"><h4>',
                'after_title'   => '</h4></div>',
            ] );
        }
    }   
           
} 
add_action( 'widgets_init', 'routex_widgets_init' );  
