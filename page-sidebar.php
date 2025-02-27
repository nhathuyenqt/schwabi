<?php

/**
 * Template Name: Page Sidebar
 * @package routex
 */

get_header();

$blog_column = 'col-xl-8';
if(is_active_sidebar('blog-sidebar') ){ 
  	$blog_column = 'col-xl-8 col-lg-12 col-12';
}
?>
<div class="blog-4 section-space">
    <div class="container">
        <div class="row gx-30">
        <div class="<?php echo esc_attr($blog_column) ?> blog-post-items blog-padding">
                <div class="routex-page-content">
                    <?php
						if ( have_posts() ):
							while ( have_posts() ): the_post();
								get_template_part( 'template-parts/content', 'page' );
							endwhile;
						else:
						get_template_part( 'template-parts/content', 'none' );
						endif;
					?>
                </div>
            </div>
            <?php if ( is_active_sidebar( 'blog-sidebar' ) ): ?>
                <div class="col-xl-4">
                    <div class="sidebar sidebar-rr-sticky">
                    <?php get_sidebar();?>
                </div>
            </div>
            <?php endif;?>
        </div>
    </div>
</div>

<?php
get_footer();