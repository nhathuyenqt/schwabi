<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
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
                <div class="blog__details-content">
                    <?php
							while ( have_posts() ):
							the_post();

							get_template_part( 'template-parts/content', get_post_format() );

	    					?>

                    <?php if ( get_previous_post_link() AND get_next_post_link() ): ?>

                    <div class="blog-details-border d-none">
                        <div class="row align-items-center">
                            <?php
	    									if ( get_previous_post_link() ): ?>
                            <div class="col-lg-6 col-md-6">
                                <div class="blog__content-pagination-social text-center">
                                    <span><?php print esc_html__( 'Prev Post', 'routex' );?></span>
                                    <h4><?php print get_previous_post_link( '%link ', '%title' );?></h4>
                                </div>
                            </div>
                            <?php
											endif;?>

                            <?php
										if ( get_next_post_link() ): ?>
                            <div class="col-xl-4">
                                <div class="sidebar">
                                    <span><?php print esc_html__( 'Next Post', 'routex' );?></span>
                                    <h4><?php print get_next_post_link( '%link ', '%title' );?></h4>
                                </div>
                            </div>
                            <?php
										endif;?>

                        </div>
                    </div>

                    <?php endif;?>

                    <?php

								get_template_part( 'template-parts/biography' );

								// If comments are open or we have at least one comment, load up the comment template.
								if ( comments_open() || get_comments_number() ):
									comments_template();
								endif;

								endwhile; // End of the loop.
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