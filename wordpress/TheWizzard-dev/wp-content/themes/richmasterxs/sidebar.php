<?php if ( ( is_active_sidebar( 'sidebar-1' )  ) || ( is_active_sidebar( 'sidebar-2' )  ) || ( is_active_sidebar( 'sidebar-3' ) ) ): ?>

			<div id="sidebar" class="large-4 medium-4 columns" data-sticky-container>

				<div id="widget-area" class=" widget-area sticky columns" data-sticky data-stick-to="bottom"  data-anchor="container" data-margin-top="2" role="complementary">
					<div class="sidebar-widget-area">

						<?php if ( is_active_sidebar( 'sidebar-1' )  ) : ?>
							<div class="row">
								<div class="large-12 medium-12 columns">
									<?php dynamic_sidebar( 'sidebar-1' ); ?>
								</div>
							</div>
						<?php endif; ?>

							<?php if ( ( is_active_sidebar( 'sidebar-2' )  ) || ( is_active_sidebar( 'sidebar-3' ) ) ): ?>
								<div class="row">
									<?php if ( is_active_sidebar( 'sidebar-2' )  ) : ?>
										<div class="large-6 columns ">
											<?php dynamic_sidebar( 'sidebar-2' ); ?>
										</div>
									<?php endif; ?>

									<?php if ( is_active_sidebar( 'sidebar-3' )  ) : ?>
										<div class="large-6 columns">
											<?php dynamic_sidebar( 'sidebar-3' ); ?>
										</div>
									<?php endif; ?>
								</div>
							<?php endif; ?>
					</div><!-- .sidebar-widget-area -->
				</div><!-- .widget-area -->
			 </div><!-- #sidebar -->

<?php endif; ?>

