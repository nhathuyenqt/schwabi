 <?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package routex
 */

$gallery_images = function_exists('tpmeta_gallery_field')? tpmeta_gallery_field('routex_post_gallery') : '';
$routex_singleblog_social = get_theme_mod( 'routex_singleblog_social', false );
  
$social_shear_col= $routex_singleblog_social ? "col-xl-6 col-lg-6 col-md-6 col-12" : "col-xl-12 col-md-12 col-lg-12";
if ( is_single() ): ?>
 <article id="post-<?php the_ID();?>" <?php post_class( 'blog-details__content format-video' );?>>
 <?php if ( !empty( $gallery_images ) ): ?>
     <div class="postbox__thumb-slider p-relative overflow-hidden">
         <div class="swiper-container postbox__thumb-slider-active mb-10">
             <div class="swiper-wrapper">
                 <?php foreach ( $gallery_images as $key => $image ): ?>
                 <div class="swiper-slide">
                     <div class="blog__content-thumb">
                         <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>">
                     </div>
                 </div>
                 <?php endforeach;?>
             </div>
         </div>
         <div class="postbox__slider-arrow-wrap d-none d-sm-block">
             <button class="postbox-arrow-prev">
                 <i class="fa-sharp fa-regular fa-arrow-left"></i>
             </button>
             <button class="postbox-arrow-next">
                 <i class="fa-sharp fa-regular fa-arrow-right"></i>
             </button>
         </div>
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

 <?php else: 
    $categories = get_the_terms( $post->ID, 'category' );    
    $routex_blog_cat = get_theme_mod( 'routex_blog_cat', false );
?>
 <article id="post-<?php the_ID();?>" <?php post_class( 'blog__content mb-80 format-gallery mb-60' );?>>
     <?php if ( !empty( $gallery_images ) ): ?>
     <div class="postbox__thumb-slider p-relative overflow-hidden">
         <div class="swiper-container postbox__thumb-slider-active mb-10">
             <div class="swiper-wrapper">
                 <?php foreach ( $gallery_images as $key => $image ): ?>
                 <div class="swiper-slide">
                     <div class="blog__content-thumb">
                         <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>">
                     </div>
                 </div>
                 <?php endforeach;?>
             </div>
         </div>
         <div class="postbox__slider-arrow-wrap d-none d-sm-block">
             <button class="postbox-arrow-prev">
                 <i class="fa-sharp fa-regular fa-arrow-left"></i>
             </button>
             <button class="postbox-arrow-next">
                 <i class="fa-sharp fa-regular fa-arrow-right"></i>
             </button>
         </div>
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
 <?php
endif;?>