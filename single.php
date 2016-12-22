<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

get_header(); ?>

<div id="" role="main">

<?php do_action( 'foundationpress_before_content' ); ?>
<?php while ( have_posts() ) : the_post(); ?>
	<article <?php post_class('main-content') ?> id="post-<?php the_ID(); ?>">
		<div class="row">
			<div class="small-12 columns">
				<header>
					<h1 class="entry-title"><?php the_title(); ?></h1>
					<?php foundationpress_entry_meta(); ?>
				</header>
			</div>
		</div>
		
		<?php do_action( 'foundationpress_post_before_entry_content' ); ?>
		<div class="entry-content">
		<?php $backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>
		<div class="row blog-featured">
			<div class="small-12 columns" style="background-image: url('<?php echo $backgroundImg[0]; ?>')">
				
			</div>			
		</div>
		
			<div id="mainContent">
				<div class="row">
					<div class="small-12 columns">
						<?php the_content(); ?>
						<?php edit_post_link( __( 'Edit', 'foundationpress' ), '<span class="edit-link">', '</span>' ); ?>
						</div>
						<footer>
							<?php wp_link_pages( array('before' => '<nav id="page-nav"><p>' . __( 'Pages:', 'foundationpress' ), 'after' => '</p></nav>' ) ); ?>
							<p><?php the_tags(); ?></p>
						</footer>
						<?php the_post_navigation(); ?>
						<?php do_action( 'foundationpress_post_before_comments' ); ?>
						<?php comments_template(); ?>
						<?php do_action( 'foundationpress_post_after_comments' ); ?>
				</div>
			</div>
		</div>
	</article>
<?php endwhile;?>

<?php do_action( 'foundationpress_after_content' ); ?>
<?php get_sidebar(); ?>
</div>
<?php get_footer();
