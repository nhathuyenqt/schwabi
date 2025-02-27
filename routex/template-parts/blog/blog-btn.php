<?php

/**
 * Template part for displaying post btn
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package routex
 */

$routex_blog_btn = get_theme_mod( 'routex_blog_btn', 'Read More' );
$routex_blog_btn_switch = get_theme_mod( 'routex_blog_btn_switch', true );

?>
<?php if ( !empty( $routex_blog_btn_switch ) ): ?>
<a href="<?php the_permalink();?>" class="rr-btn mt-40 wow fadeInLeft animated" data-wow-delay="1s"><?php print esc_html( $routex_blog_btn );?>
    <svg width="15" height="10" viewBox="0 0 15 10" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path
            d="M13.7266 5.37891L10.2266 8.87891C9.89844 9.23438 9.32422 9.23438 8.99609 8.87891C8.64062 8.55078 8.64062 7.97656 8.99609 7.64844L10.9922 5.625H0.875C0.382812 5.625 0 5.24219 0 4.75C0 4.23047 0.382812 3.875 0.875 3.875H10.9922L8.99609 1.87891C8.64062 1.55078 8.64062 0.976562 8.99609 0.648438C9.32422 0.292969 9.89844 0.292969 10.2266 0.648438L13.7266 4.14844C14.082 4.47656 14.082 5.05078 13.7266 5.37891Z"
            fill="white" />
    </svg>
</a>
<?php endif;?>