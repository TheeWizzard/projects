<?php get_header(); ?>

<div id="container" class="row">
	<div id="primary" class="large-8 medium-8 small-12 <?php if ( ( is_active_sidebar( 'sidebar-1' )  ) || ( is_active_sidebar( 'sidebar-2' )  ) || ( is_active_sidebar( 'sidebar-3' ) ) ): else: echo 'medium-centered'; endif; ?> columns">
	  	<article <?php post_class('articlebox'); ?>>
		<?php	
			while ( have_posts() ) : the_post(); ?>

				<header class="entry-header">
					<h2 class="entry-title"><?php the_title(); ?></h2>
				</header>
				<div class="entry-content">
					<?php the_content(); ?>
				</div><!-- .entry-content -->
			<?php
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;
			endwhile;
		?>
	    </article>
	</div><!-- #primary -->
          
              <?php get_sidebar(); ?>             

</div> <!-- #container -->

<?php get_footer(); ?>