<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
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
    <div class="container ">
        <div class="row gx-30">
        <div class="<?php echo esc_attr($blog_column) ?> blog-post-items blog-padding">
                <div class="postbox__wrapper tp-blog__wrapper mb-50">
                    <?php
                    
						if ( have_posts() ):
					?>
                    <div class="result-bar page-header d-none">
                        <h1 class="page-title"><?php esc_html_e( 'Search Results For:', 'routex' );?>
                            <?php print get_search_query();?></h1>
                    </div>
                    <?php
						while ( have_posts() ): the_post();
							get_template_part( 'template-parts/content', 'search' );
						endwhile;
					?>
              <div class="blog__content-pagination-social text-center">
              <?php routex_pagination( '<i class="fa-regular fa-angles-left"></i>', '<i class="fa-regular fa-angles-right"></i>', '', ['class' => ''] );?>
                    </div>
                    <?php
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