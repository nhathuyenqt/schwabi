<?php 

/**
 * Template part for displaying footer layout one
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package routex
*/
$routex_footer_bg = get_template_directory_uri() . '/assets/imgs/footer/footer1-bg-img.png';
$footer_bg_img = get_theme_mod( 'routex_footer_bg' );
$routex_footer_bg_url_from_page = function_exists( 'tpmeta_field' ) ? tpmeta_field( 'routex_footer_bg' ) : '';
// bg image
$bg_img = !empty( $routex_footer_bg_url_from_page['url'] ) ? $routex_footer_bg_url_from_page['url'] : $footer_bg_img;

// col
$rr_footer_top_menu = get_theme_mod( 'footer_menu_switch', false );
$routex_footer_menu_col = $rr_footer_top_menu ? 'col-xxl-6 col-lg-6 col-md-12 col-12 p-0' : 'col-xxl-12 col-lg-12 col-md-12  col-12 text-center';

// footer_columns
$footer_columns = 0;
$footer_widgets = get_theme_mod( 'footer_widget_number', 4 );

for ( $num = 1; $num <= $footer_widgets; $num++ ) {
    if ( is_active_sidebar( 'footer-' . $num ) ) {
        $footer_columns++;
    }
} 

switch ( $footer_columns ) { 
case '1':
    $footer_class[1] = 'col-lg-12';
    break;
case '2':
    $footer_class[1] = 'col-lg-6 col-md-6'; 
    $footer_class[2] = 'col-lg-6 col-md-6';
    break;
case '3':
    $footer_class[1] = 'col-xl-4 col-lg-6 col-md-5';
    $footer_class[2] = 'col-xl-4 col-lg-6 col-md-7';
    $footer_class[3] = 'col-xl-4 col-lg-6';
    break;
case '4':
    $footer_class[1] = 'col-xl-3 col-lg-3 col-md-6 col-sm-6 col-6';
    $footer_class[2] = 'col-xl-3 col-lg-3 col-md-6 col-sm-6 col-6';
    $footer_class[3] = 'col-xl-3 col-lg-3 col-md-6 col-sm-6 col-6';
    $footer_class[4] = 'col-xl-3 col-lg-3 col-md-6 col-sm-6 col-6';
    break;
default:
    $footer_class = 'col-lg-3 col-6';
    break;
}

?>
    <section class="footer__area-common dark-green overflow-hidden position-relative z-1" 
        data-background="<?php print esc_url($bg_img);?>">
        <?php if ( is_active_sidebar('footer-1') OR is_active_sidebar('footer-2') OR is_active_sidebar('footer-3') OR is_active_sidebar('footer-4') ): ?>
        <div class="container">
            <div class="row mb-minus-40 footer-wrap">
                <?php
                    if ( $footer_columns < 5 ) {
                        print '<div class="col-lg-3 col-md-6 col-sm-6">';
                        dynamic_sidebar( 'footer-1' );
                        print '</div>';

                        print '<div class="col-lg-3 col-md-6 col-sm-6">';
                        dynamic_sidebar( 'footer-2' );
                        print '</div>';

                        print '<div class="col-lg-3 col-md-6 col-sm-6">';
                        dynamic_sidebar( 'footer-3' );
                        print '</div>';

                        print '<div class="col-lg-3 col-md-6 col-sm-6">';
                        dynamic_sidebar( 'footer-4' );
                        print '</div>';
                    } else {
                        for ( $num = 1; $num <= $footer_columns; $num++ ) {
                            if ( !is_active_sidebar( 'footer-col-' . $num ) ) {
                                continue;
                            }
                            print '<div class="' . esc_attr( $footer_class[$num] ) . '">';
                            dynamic_sidebar( 'footer-col-' . $num );
                            print '</div>';
                        }
                    }
                ?>
            </div>

        </div>
        <?php endif; ?>
        <div class="footer__bottom-wrapper">
            <div class="container">
                <div class="row ">
                    <div class="<?php echo esc_attr($routex_footer_menu_col); ?>">
                        <div class="footer__copyright">
                            <p><?php print routex_copyright_text(); ?></p>
                        </div>
                    </div>
                    <?php if(!empty($rr_footer_top_menu)) : ?>
                    <div class="col-xxl-6 col-lg-6 col-md-12 col-12 p-0">
                        <div class="footer__copyright-menu text-end">
                            <?php routex_footer_bottom_menu(); ?>
                        </div>
                    </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>
