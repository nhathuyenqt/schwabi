<?php 
	/**
	 * Template part for displaying header layout one
	 *
	 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
	 *
	 * @package routex
	*/
// header right

$routex_header_right = get_theme_mod( 'header_right_switch', false );
$header_top_button_text = get_theme_mod( 'header_button_text', __( 'Book Now', 'routex' ) );
$header_top_button_link = get_theme_mod( 'header_button_link', __( '#', 'routex' ) );

?>
<header>
<div id="header-sticky" class="header__area header-1">
        <div class="header-container">
            <div class="mega__menu-wrapper p-relative">
                <div class="header__main">
                    <div class="header__left">
                        <div class="header__logo">
                            <?php routex_header_logo(); ?>
                        </div>
                    </div>
                    <div class="header__middle">
                        <div class="mean__menu-wrapper d-none d-xl-block">
                            <div class="main-menu">
                                <nav id="mobile-menu">
                                    <?php routex_header_menu(); ?>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <?php if(!empty($routex_header_right)) : ?>
                    <div class="header__right">
                        <div class="header__action d-flex align-items-center">
                            <?php if ( class_exists( 'WooCommerce' ) ) : ?>
                                <div class="tp-header-right-shop p-relative">
                                    <a href="<?php echo wc_get_cart_url(); ?>">
                                    <i class="fa-sharp fa-solid fa-cart-minus"></i>
                                        <span id="tp-cart-item" class="cart__count"><?php echo esc_html(WC()->cart->cart_contents_count); ?></span>
                                    </a>
                                    <div class="mini_shopping_cart_box"><?php woocommerce_mini_cart(); ?></div>
                                </div>
                            <?php endif; ?>
                            <?php  if ( !empty( $header_top_button_text ) ): ?>
                            <div class="header__btn-wrap d-none d-sm-inline-flex">
                                <a href="<?php echo esc_url( $header_top_button_link ); ?>"
                                    class="rr-btn"><?php echo esc_html( $header_top_button_text ); ?> <i
                                        class="fa-solid fa-arrow-right"></i></a>
                            </div>
                            <?php endif;  ?>
                            <div class="header__hamburger ml-20 d-xl-none">
                                <div class="sidebar__toggle">
                                    <button class="bar-icon">
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endif;  ?>
                    <?php if(empty($routex_header_right)) : ?>
                        <div class="header__hamburger ml-20 d-xl-none">
                                <div class="sidebar__toggle">
                                    <button class="bar-icon">
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                    </button>
                                </div>
                            </div>
                     <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</header>

<?php get_template_part( 'template-parts/header/header-side-info' ); ?>