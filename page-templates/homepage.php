<?php
/**
 * The Home Page Template
 * Template Name: Homepage
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

 get_header(); ?>

<?php $backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>


<div class="hero" style="background-image: url('<?php echo $backgroundImg[0]; ?>')">
<div class="video-holder">
  <div class="row">
    <div class="small-12 columns text-center">
      <div class="centered-content">
        
        <img src="<?php the_field('hero_logo'); ?>" alt="">
        <div class="button hollow video-button" data-videoid="ZpJ_RxsCCEs">Watch Video</div>

      </div>
    </div>
  </div>
</div>
</div>
<main id="mainContent">

  <div class="expanded row hp-touts">
    <div class="small-12 medium-4 columns left">
    <div class="hp-tout-overlay"></div>
      <div class="centered-content">
        <h2><?php the_field('the_route_header'); ?></h2>
      </div>
      <div class="hover-content">
        <p><?php the_field('the_route_hover_content'); ?></p>
      </div>
      <div class="tout-btn">
        <a href="<?php echo get_permalink(9); ?>" class="button white-btn">View Cider Route</a>
      </div>
    </div>
    <div class="small-12 medium-4 columns middle">
    <div class="hp-tout-overlay"></div>
      <div class="centered-content">
        <h2><?php the_field('the_cideries_header'); ?></h2>
      </div>
      <div class="hover-content">
        <p><?php the_field('the_cideries_hover_content'); ?></p>
      </div>
      <div class="tout-btn">
        <a href="<?php echo get_permalink(7); ?>" class="button white-btn">View Cideries</a>
      </div>
    </div>
    <div class="small-12 medium-4 columns right">
    <div class="hp-tout-overlay"></div>
      <div class="centered-content">
        <h2><?php the_field('the_society_header'); ?></h2>
      </div>
      <div class="hover-content">
        <p><?php the_field('the_society_hover_content'); ?></p>
      </div>
      <div class="tout-btn">
        <a href="<?php echo get_permalink(5); ?>" class="button white-btn">About Cider Society</a>
      </div>
    </div>
  </div>

  <div class="row home-foot-tout">
    <div class="small-12 columns text-center">
      <h3><?php the_field('event_tout'); ?></h3>
      <a href="<?php the_field('event_link'); ?>" class="button hollow"><?php the_field('event_cta'); ?></a>
    </div>
  </div>

</main>

 <?php get_footer();
