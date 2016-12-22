<?php
/*
Template Name: Individual Cidery
*/
get_header(); ?>

<div class="row" style="padding-top: 30px;">
	<div class="small-12 columns">
		<a href="<?php echo get_permalink(7); ?>">&#8656; Back to Cideries</a>
	</div>
</div>
<main id="mainContent" class="individual-cidery">
	<div class="row cider-row">
		<div class="small-12 medium-6 columns cidery">
			<div class="hide-for-medium cidery-info">
				<h1><?php the_field('cidery_name'); ?></h1>
				<ul class="menu simple">
					<li><a href="<?php the_field('cidery_address_link'); ?>" target="_blank"><?php the_field('cidery_address'); ?></a></li>
					<li><a href="<?php the_field('cidery_website'); ?>" target="_blank">View Website</a></li>
				</ul>
			</div>
			<div class="cidery-image">
				<img src="<?php the_field('ind_cidery_image'); ?>">

				<div class="row small-up-4">
					
					<?php
					// vars	
					$features = get_field('ind_cidery_features');
					// check
					if( $features ): ?>
						<?php foreach( $features as $feature ): ?>
							<div class="column text-center">
							<i class="<?php echo $feature['value']; ?>"></i><br><span><?php echo $feature['label']; ?></span></div>
						<?php endforeach; ?>
					<?php endif; ?>
				</div>


			</div>
		</div>
		<div class="small-12 medium-6 columns cidery-info">
			<div class="show-for-medium">
				<h1><?php the_field('cidery_name'); ?></h1>
				<ul class="menu simple">
					<li><a href="<?php the_field('cidery_address_link'); ?>" target="_blank"><?php the_field('cidery_address'); ?></a></li>
					<li>|</li>
					<li><a href="<?php the_field('cidery_website'); ?>" target="_blank">View Website</a></li>
				</ul>			
				<div class="seperator"></div>
			</div>
			
			<p><?php the_field('cidery_description'); ?></p>
			<div class="row cidery-contact">

				<?php if( get_field('social_links_toggle')): ?>
				<div class="small-12 large-6 columns">
					<h5>Social</h5>
					<ul class="menu follow-menu">
					<?php if( get_field('facebook_link')): ?>
						<li><a href="<?php the_field('facebook_link'); ?>" target="_blank"><span class="badge"><i class="socicon-facebook"></i></span></a></li>
					<?php endif; ?>
					<?php if( get_field('instagram_link')): ?>
						<li><a href="<?php the_field('instagram_link'); ?>" target="_blank"><span class="badge"><i class="socicon-instagram"></i></span></a></li>
					<?php endif; ?>
					<?php if( get_field('twitter_link')): ?>
						<li><a href="<?php the_field('twitter_link'); ?>" target="_blank"><span class="badge"><i class="socicon-twitter"></i></span></a></li>
					<?php endif; ?>
					</ul>			
				</div>
				<?php endif; ?>
				<div class="small-12 large-6 columns">
					<h5>Contact</h5>
					<ul class="menu vertical">
						<li class=""><b>P:</b> <a href="tel:<?php the_field('phone_number'); ?>"><?php the_field('phone_number'); ?></a></li>
						<li><b>E:</b> <a href="mailto:<?php the_field('email_address'); ?>"><?php the_field('email_address'); ?></a></li>
					</ul>
				</div>
			</div>

			
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
