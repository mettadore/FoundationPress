<?php
/*
Template Name: Cider Route
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

<main id="mainContent" class="cider-route">
	
	<div class="row">
		<div class="small-12 columns intro">
			<p><?php the_field('cider_route_intro'); ?></p>
		</div>
	</div>

	<div class="row cider-map">
		<div class="small-12 columns">
			<iframe src="https://www.google.com/maps/d/u/0/embed?mid=1FCGnkKnxamj0UZsGFx61evb_tzc" width="100%" height="480"></iframe>
		</div>
	</div>

	<div class="row large-collapse two-wide-tout" data-equalizer data-equalize-on="medium">
		<div class="small-12 medium-6 medium-push-6 columns tout-content" data-equalizer-watch>
			<div class="text-center medium-text-left">
				<h2><?php the_field('bottom_tout_title'); ?></h2>
				<p><?php the_field('bottom_tout_content'); ?></p>
				<a href="<?php the_field('bottom_tout_link'); ?>" class="button hollow"><?php the_field('bottom_tout_cta'); ?></a>
			</div>
		</div>
		<div class="small-12 medium-6 medium-pull-6 columns">
			<div data-equalizer-watch class="two-wide-bg" style="background-image: url('<?php the_field('bottom_tout_image'); ?>'); background-size: cover;">
				<img src="<?php the_field('bottom_tout_image'); ?>" class="hide-for-medium">
			</div>
		</div>
	</div>

</main>


<?php get_footer();
