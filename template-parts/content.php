<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?>

<div class="row blog-post">
	<div id="post-<?php the_ID(); ?>" <?php post_class('blogpost-entry'); ?>>
		<div class="small-12 medium-6 columns blog-image">
			<img src="http://placehold.it/1060x750">
		</div>
		<div class="small-12 medium-6 columns">
			<div class="post-content">
				<header>
					<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
					<ul class="menu simple blog-meta">
						<li><?php echo get_the_date(__('m/d/y')); ?></li>
						<li>-</li>
						<li>
							<?php   $categories = get_the_category();
								if( ! empty( $categories ) ) {
									echo '<a href="'. esc_url( get_category_link( $categories[0]->term_id ) ) .'">' . esc_html( $categories[0]->name ) .'</a>';
								}
							?>						
						</li>
						<li>-</li>
						<li><a href="<?php get_author_posts_url( get_the_author_meta( 'ID' ) ) ?>" rel="author" class="fn"><?php the_author(); ?></a></li>
					</ul>		
					

					
				</header>
				<div class="entry-content">
					<?php the_excerpt(); ?>
					<a href="<?php the_permalink(); ?>" class="button hollow">Read More</a>
				</div>
				<footer>
					<?php $tag = get_the_tags(); if ( $tag ) { ?><p><?php the_tags(); ?></p><?php } ?>
				</footer>
			</div>
		</div>
	</div>
</div>

<hr />
