<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "off-canvas-wrap" div and all content after.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?>

		</section>
		
<footer class="society-footer">
  <div class="row xlarge-collapse footer">
    <div class="small-12 medium-8 large-9 columns">
      
      <div class="row">
      <div class="small-12 medium-4 columns">  
        

        <h4>Social</h4>
          <div class="divider"></div>
        <div class="row small-up-4 medium-up-2 large-up-4 social-menu">
          <div class="column text-left medium-text-center large-text-left"><a href="<?php the_field('fb_link', 'option'); ?>"><span class="badge"><i class="socicon-facebook"></i></span></a></div>
          <div class="column text-left medium-text-center large-text-left"><a href="<?php the_field('tw_link', 'option'); ?>"><span class="badge"><i class="socicon-twitter"></i></span></a></div>
          <div class="column text-left medium-text-center large-text-left"><a href="<?php the_field('ig_link', 'option'); ?>"><span class="badge"><i class="socicon-instagram"></i></span></a></div>
          <div class="column text-left medium-text-center large-text-left"><a href="<?php the_field('yt_link', 'option'); ?>"><span class="badge"><i class="socicon-youtube"></i></span></a></div>
        </div>
        

        

        
      </div>
      <div class="small-12 medium-8 columns">
        
        <div class="f-left">
          <h4>Cideries</h4>
          <div class="divider"></div>
          <?php wp_nav_menu( array( 'theme_location' => 'footer-left', 'container' => 'ul', 'menu_class' => 'vertical menu f-left') ); ?>
        </div>
        <div class="f-right">
          <span class="show-for-large">&nbsp;</span>
          <?php wp_nav_menu( array( 'theme_location' => 'footer-right', 'container' => 'ul', 'menu_class' => 'vertical menu') ); ?>
        </div>
        
      </div>
    </div>

     
    </div>
    <div class="small-12 medium-4 large-3 columns text-center medium-text-right">
      <a href="<?php echo get_permalink(2); ?>"><img class="" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/footer-logo.png"></a>
    </div>
  </div>
</footer>

		<!-- <div id="footer-container">
			<footer id="footer">
				<?php do_action( 'foundationpress_before_footer' ); ?>
				<?php dynamic_sidebar( 'footer-widgets' ); ?>
				<?php do_action( 'foundationpress_after_footer' ); ?>
			</footer>
		</div> -->

		<?php do_action( 'foundationpress_layout_end' ); ?>

<?php if ( get_theme_mod( 'wpt_mobile_menu_layout' ) == 'offcanvas' ) : ?>
		</div><!-- Close off-canvas wrapper inner -->
	</div><!-- Close off-canvas wrapper -->
</div><!-- Close off-canvas content wrapper -->
<?php endif; ?>


<?php wp_footer(); ?>
<?php do_action( 'foundationpress_before_closing_body' ); ?>
</body>
</html>
