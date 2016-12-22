<?php
/*
Template Name: About
*/
get_header(); ?>

<?php $backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>

<div class="half-hero" style="background: #8a8a8a url('<?php echo $backgroundImg[0]; ?>')no-repeat; background-size: cover; background-position: 50% 50%;">
	<div class="row">
		<div class="small-12 columns text-center">
			<div class="centered-content"><h1><?php the_title(); ?></h1></div>
		</div>
	</div>
</div>

<main id="mainContent" class="about-page">

	<div class="row">
		<div class="small-12 columns about-intro">
			<?php the_field('about_intro'); ?>
		</div>
	</div>
	
	<div class="row what-we-do">
		<div class="small-12 medium-7 medium-offset-1 medium-push-4 columns">
			
			<?php the_field('about_info'); ?>

			<ul class="menu follow-menu">
				<li><b><?php the_field('social_headline'); ?></b></li>
				<li><a href="<?php the_field('fb_link', 'option'); ?>"><span class="badge"><i class="socicon-facebook"></i></span></a></li>
				<li><a href="<?php the_field('tw_link', 'option'); ?>"><span class="badge"><i class="socicon-twitter"></i></span></a></li>
				<li><a href="<?php the_field('ig_link', 'option'); ?>"><span class="badge"><i class="socicon-instagram"></i></span></a></li>
				<li><a href="<?php the_field('yt_link', 'option'); ?>"><span class="badge"><i class="socicon-youtube"></i></span></a></li>
			</ul>

		</div>
		<div class="small-12 medium-4 medium-pull-8 columns text-center">
			<img src="<?php the_field('about_intro_image'); ?>">
		</div>
	</div>

	

	<div class="row contact-us">
		<div class="small-12 medium-7 columns">
			<h2><?php the_field('contact_header'); ?></h2>
			<p>FORM WILL GO HERE</p>
		</div>
		<div class="medium-4 columns show-for-medium">
			<img src="<?php the_field('about_contact_image'); ?>">
		</div>
	</div>

</main>


<?php get_footer();
