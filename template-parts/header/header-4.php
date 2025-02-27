<?php 

	/**
	 * Template part for displaying header layout three
	 *
	 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
	 *
	 * @package routex
	*/ 
    $header_top_phone = get_theme_mod( 'header_phone', __( '+880190678956', 'routex' ) );
    $header_phone_label = get_theme_mod( 'header_phone_label', __( 'Need help?', 'routex' ) );
    $header_phone_url = get_theme_mod( 'header_phone_url', __( '+880190678956', 'routex' ) );
   // header right
   $routex_header_right = get_theme_mod( 'header_right_switch', false );
?>
<header>
    <div id="header-sticky" class="header__area header3 white-bg">
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
                        <div class="header__action action-3 d-flex align-items-center">
                            <div class="header-2-icon d-none d-sm-inline-flex">
                                <svg width="55" height="55" viewBox="0 0 55 55" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_3984_62)">
                                        <path d="M31.8535 30.2461H42.8705" stroke="#034833" stroke-width="2.57908"
                                            stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M31.8535 35.3555H42.8705" stroke="#034833" stroke-width="2.57908"
                                            stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M31.8535 40.4648H42.8705" stroke="#034833" stroke-width="2.57908"
                                            stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M12.041 12.0547H23.058" stroke="#034833" stroke-width="2.57908"
                                            stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M12.041 17.1641H23.058" stroke="#034833" stroke-width="2.57908"
                                            stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M12.041 22.2773H17.5495" stroke="#034833" stroke-width="2.57908"
                                            stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                        <mask id="mask0_3984_62" style="mask-type:luminance" maskUnits="userSpaceOnUse"
                                            x="0" y="0" width="55" height="55">
                                            <path d="M0 7.62939e-06H55V55H0V7.62939e-06Z" fill="white" />
                                        </mask>
                                        <g mask="url(#mask0_3984_62)">
                                            <path
                                                d="M37.3613 47.2486H42.27H44.6512C44.9039 47.2486 44.8766 47.2394 45.1019 47.3581L49.8704 49.8037C50.1292 49.898 50.251 49.8281 50.2388 49.5694L49.9618 44.4805C49.9557 44.441 49.9465 44.435 49.9739 44.4106C52.5501 42.2205 54.1943 38.9628 54.1943 35.34V34.8229C54.1943 28.2708 48.829 22.9112 42.27 22.9112H32.1939C25.6349 22.9112 20.2695 28.2708 20.2695 34.8229V35.34C20.2695 41.889 25.6349 47.2486 32.1939 47.2486H33.6403"
                                                stroke="#034833" stroke-width="2.57908" stroke-miterlimit="10"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                            <path
                                                d="M18.3959 5.15734H22.8021C29.3611 5.15734 34.7264 10.517 34.7264 17.069V17.583C34.7264 19.4963 34.2697 21.3063 33.4596 22.9124M21.5384 29.4947H12.7291H10.3478C10.0921 29.4947 10.1195 29.4856 9.89408 29.6012L5.12562 32.0499C4.86985 32.1442 4.74503 32.0741 4.76018 31.8126L5.03432 26.7267C5.04033 26.6841 5.04946 26.678 5.02207 26.6568C2.44599 24.4666 0.804688 21.2089 0.804688 17.583V17.069C0.804688 10.517 6.17009 5.15734 12.7291 5.15734H14.6749"
                                                stroke="#034833" stroke-width="2.57908" stroke-miterlimit="10"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                        </g>
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_3984_62">
                                            <rect width="55" height="55" fill="white" />
                                        </clipPath>
                                    </defs>
                                </svg>
                            </div>
                            <div class="text">
                                <span><?php echo esc_html( $header_phone_label );?></span>
                                <h4><a
                                        href="tel:<?php echo esc_attr($header_phone_url);?>"><?php echo esc_html( $header_top_phone );?></a>
                                </h4>
                            </div>
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
                    <?php endif; ?>
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
