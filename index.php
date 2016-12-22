<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * e.g., it puts together the home page when no home.php file exists.
 *
 * Learn more: {@link https://codex.wordpress.org/Template_Hierarchy}
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

get_header(); ?>

<?php $backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id(get_option('page_for_posts')), 'full' );?>

<div class="half-hero" style="background: #8a8a8a url('<?php echo $backgroundImg[0]; ?>')no-repeat; background-size: cover; background-position: 50% 50%;">
	<div class="row">
		<div class="small-12 columns text-center">
			<div class="centered-content"><h1><?php wp_title(''); ?></h1></div>
		</div>
	</div>
</div>
<div id="mainContent" class="blog-index" role="main">
	<article class="main-content">
	<?php if ( have_posts() ) : ?>
		<?php /* Start the Loop */ ?>
		<?php while ( have_posts() ) : the_post(); ?>
			<?php get_template_part( 'template-parts/content', get_post_format() ); ?>
		<?php endwhile; ?>

		<?php else : ?>
			<?php get_template_part( 'template-parts/content', 'none' ); ?>
	<?php endif; // End have_posts() check. ?>

		<?php /* Display navigation to next/previous pages when applicable */ ?>
		<?php /* if ( function_exists( 'foundationpress_pagination' ) ) { foundationpress_pagination(); } else if ( is_paged() ) { ?>
			<nav id="post-nav">
				<div class="post-previous"></div>
				<div class="post-next"></div>
			</nav>
		<?php } */ ?>
		<div class="row page-change">
		<div class="small-12 columns">
			<div class="float-left">
				<?php previous_posts_link( __( '&lArr; Newer posts', 'foundationpress' ) ); ?>
			</div>
			<div class="float-right">
				<?php next_posts_link( __( 'Older posts &rArr;', 'foundationpress' ) ); ?>
			</div>
		</div>
	</div>

	</article>
	<?php get_sidebar(); ?>

</div>

<?php get_footer();
