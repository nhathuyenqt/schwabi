 <?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package routex
 */
$categories = get_the_terms( $post->ID, 'category' );
$routex_blog_cat = get_theme_mod( 'routex_blog_cat', false );
$routex_singleblog_social = get_theme_mod( 'routex_singleblog_social', false );
  
$social_shear_col= $routex_singleblog_social ? "col-xl-6 col-lg-6 col-md-6 col-12" : "col-xl-12 col-md-12 col-lg-12";

if ( is_single() ) : ?>
 <article id="post-<?php the_ID();?>" <?php post_class( 'blog-details__content format-standard' );?>>
     <?php if ( has_post_thumbnail() ): ?>
     <div class="blog-details__content-thumb">
         <?php the_post_thumbnail( 'full', ['class' => 'img-responsive'] );?>
     </div>
     <?php endif; ?>
     <?php get_template_part( 'template-parts/blog/blog-meta-details' ); ?>

     <div class="blog-details__content-text mt-20 mb-40">
         <h2 class="blog-details__content-text-title mb-20 wow fadeInLeft animated" data-wow-delay=".3s">
             <?php the_title();?></h2>
         <?php the_content();?>
         <?php
                wp_link_pages( [
                    'before'      => '<div class="page-links">' . esc_html__( 'Pages:', 'routex' ),
                    'after'       => '</div>',
                    'link_before' => '<span class="page-number">',
                    'link_after'  => '</span>',
                ] );
            ?>
     </div>
     <div class="blog-details__social d-flex justify-content-between">
         <?php echo routex_get_tag(); ?>
         <?php routex_blog_social_share() ?>

     </div>
 </article>

 <?php else: ?>

 <article id="post-<?php the_ID();?>" <?php post_class( 'blog__content mb-80 format-standard mb-60' );?>>
     <?php if ( has_post_thumbnail() ): ?>
     <div class="blog__content-thumb">
         <?php the_post_thumbnail( 'full', ['class' => 'img-responsive'] );?>
     </div>
     <?php endif; ?>
     <?php get_template_part( 'template-parts/blog/blog-meta' ); ?>
     <div class="blog__content-text mt-20">
         <h2 class="blog__content-text-title wow fadeInLeft animated" data-wow-delay=".5s"><a
                 href="<?php the_permalink();?>"><?php the_title();?></a></h2>
         <?php the_excerpt();?>
         <!-- blog btn -->
         <?php get_template_part( 'template-parts/blog/blog-btn' ); ?>
     </div>
 </article>

 <?php endif;?>