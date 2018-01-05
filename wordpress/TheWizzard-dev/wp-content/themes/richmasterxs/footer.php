	<footer id="site-footer">
		<?php
			if (
				is_active_sidebar( 'first-footer-widget-area' )  ||
				is_active_sidebar( 'second-footer-widget-area' ) ||
				is_active_sidebar( 'third-footer-widget-area' )  ||
				is_active_sidebar( 'fourth-footer-widget-area' )
			) :
		?>
		<div id="footer-widget-area">
			<div class="row">
				<?php if ( is_active_sidebar( 'first-footer-widget-area' ) ) : ?>
					<div id="first-footer-widget-area" class="medium-3 columns widget-area footer-widget-area" role="complementary">
						<?php dynamic_sidebar( 'first-footer-widget-area' ); ?>
					</div><!-- #first-footer-widget-area -->
				<?php endif; ?>
				<?php if ( is_active_sidebar( 'second-footer-widget-area' ) ) : ?>
					<div id="second-footer-widget-area" class="medium-3 columns widget-area footer-widget-area" role="complementary">
						<?php dynamic_sidebar( 'second-footer-widget-area' ); ?>
					</div><!-- #second-footer-widget-area -->
				<?php endif; ?>	
				<?php if ( is_active_sidebar( 'third-footer-widget-area' ) ) : ?>
					<div id="third-footer-widget-area" class="medium-3 columns widget-area footer-widget-area" role="complementary">
						<?php dynamic_sidebar( 'third-footer-widget-area' ); ?>
					</div><!-- #third-footer-widget-area -->
				<?php endif; ?>	
				<?php if ( is_active_sidebar( 'fourth-footer-widget-area' ) ) : ?>
					<div id="fourth-footer-widget-area" class="medium-3 columns widget-area footer-widget-area" role="complementary">
						<?php dynamic_sidebar( 'fourth-footer-widget-area' ); ?>
					</div><!-- #fourth-footer-widget-area -->
				<?php endif; ?>		
			</div>
		</div><!-- .footer-widget-areas -->
		<?php endif; ?>

		<div id="copyright" class="row">
			<div class="columns">
				<?php echo ('&copy;&nbsp;'); 
					  echo date_i18n( esc_html__( 'Y', 'richmasterxs' ) ); 
					  echo ('&nbsp;'); ?>
					  <a href="<?php echo esc_url(home_url( '/' )); ?>" title="<?php bloginfo( 'name', 'display' );?> - <?php bloginfo( 'description' ); ?>">
					  <?php echo esc_html(richmasterxs_themeoptions('copyright')); ?>
					  </a>
			</div>
		</div><!-- #copyright -->
		
		<?php if ( has_nav_menu( 'footer' ) ) : ?> 
			<div id="footermenu" class="row">
				<div class="columns">
					<?php wp_nav_menu( array('menu_id' => 'footer-navigation', 'fallback_cb' => false, 'depth' => -1, 'container_class' => 'menu 	footernav', 'theme_location' => 'footer' ) ); ?>
				</div>
			</div><!-- #footernav -->
		<?php endif; ?>
		
		<?php if ( is_active_sidebar( 'bottom-widget-area' ) ) : ?>
	      <div id="bottom-widget-area" class="widget-area" role="complementary">
	        <?php dynamic_sidebar( 'bottom-widget-area' ); ?>
	      </div><!-- .bottom-widget-area -->
	    <?php endif; ?>
	    	
	</footer>

	<?php wp_footer(); ?>

  </body>
</html>