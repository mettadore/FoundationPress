<?php
/*
Template Name: Cideries
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

<main id="mainContent" class="cideries-page">
	
	<div class="row">
		<div class="small-12 columns intro">
			<?php the_field('cideries_intro'); ?>
		</div>
	</div>

	<div class="row cidery-key">
		<div class="small-12 columns">
			<div class="row small-up-4 hide-for-medium">
				<div class="column text-center"><a href="#">
				<i class="icon-restaurant text-center"></i> <span>Food</span></a></div>
				<div class="column text-center"><a href="#">
				<i class="icon-beer"></i> <span>Drink</span></a></div>
				<div class="column text-center"><a href="#">
				<i class="icon-user"></i> <span>Kid Friendly</span></a></div>
				<div class="column text-center"><a href="#">
				<i class="icon-music"></i> <span>Live Music</span></a></div>
				<div class="column text-center"><a href="#">
				<i class="icon-garden"></i> <span>U-Pick</span></a></div>
				<div class="column text-center"><a href="#">
				<i class="icon-guide-dog"></i> <span>Dog Friendly</span></a></div>
				<div class="column text-center"><a href="#">
				<i class="icon-address"></i> <span>Cidery Tours</span></a></div>
			</div>
			<ul class="menu show-for-medium expanded icon-top">
				<li><a href=#><i class="icon-restaurant"></i> <span>Food</span></a></li>
				<li><a href=#><i class="icon-beer"></i> <span>Drink</span></a></li>
				<li><a href=#><i class="icon-user"></i> <span>Kid Friendly</span></a></li>
				<li><a href=#><i class="icon-music"></i> <span>Live Music</span></a></li>
				<li><a href=#><i class="icon-garden"></i> <span>U-Pick</span></a></li>
				<li><a href=#><i class="icon-guide-dog"></i> <span>Dog Friendly</span></a></li>
				<li><a href=#><i class="icon-address"></i> <span>Cidery Tours</span></a></li>
			</ul>
		</div>
	</div>
	
	<!-- Get the cideries -->
	<?php if( have_rows('cidery_listing') ): ?>
	
		<div class="row collapse small-up-2 medium-up-3 large-up-4 cidery-list-holder" data-equalizer data-equalize-on="medium">
			<!-- Assign vars to cidery name and image -->	
			<?php while( have_rows('cidery_listing') ): the_row(); 
				// vars
				$cname = get_sub_field('cidery_name');
				$cimage = get_sub_field('cidery_image');
				$clink = get_sub_field('cidery_link');
			?> <!-- -->
			<div class="column text-center cidery-listing">
				<div class="listing">
				<a href="<?php echo $clink; ?>">	
				<h2 data-equalizer-watch><?php echo $cname; ?></h2>
				
				<!-- Get cidery features, and list them -->
				<?php 
				//vars
				$cfeatures = get_sub_field('cidery_features');
				//check
				if( $cfeatures ) : ?>
				<!-- Cidery features list -->
				<div class="menu-centered">
				<?php echo "<ul class='menu'><li><i class='" . implode("'></i></li><li><i class='", $cfeatures) . "'></i></li></ul>"; ?>
				</div>
				<?php endif; ?>
				<!-- Cidery Image -->
				<img src="<?php echo $cimage; ?>" alt="">
				</a>
				</div>
			</div>
		<?php endwhile; ?>
		</div>

	<?php endif; ?>

</main>


<?php get_footer();
