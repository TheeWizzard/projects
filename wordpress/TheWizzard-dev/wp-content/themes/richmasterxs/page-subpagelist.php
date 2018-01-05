<?php /* Template Name: Subpage List */ ?>
<?php get_header(); ?>

<div id="container" class="row">
	<div id="primary" class="large-8 medium-8 small-12 columns <?php if ( ( is_active_sidebar( 'sidebar-1' )  ) || ( is_active_sidebar( 'sidebar-2' )  ) || ( is_active_sidebar( 'sidebar-3' ) ) ): else: echo 'medium-centered'; endif; ?>">
	  	<article <?php post_class('articlebox'); ?>>
		<?php	
			while ( have_posts() ) : the_post(); ?>
				<header class="entry-header">
					<h2 class="entry-title"><?php the_title(); ?></h2>
				</header>
				<div class="entry-content">
					<?php the_content(); ?>
				</div><!-- .entry-content -->
			<?php endwhile;?>
	    </article>
	    <aside>
	    <?php
			// Query Subpages
			$page = (get_query_var('paged')) ? get_query_var('paged') : 1;
			query_posts("post_type=page&post_parent=".$post->ID."&paged=$page&orderby=menu_order&order=ASC");
			if ( have_posts() ) :  while ( have_posts() ) : the_post();
			
				get_template_part( 'loop', get_post_format() );
			
			endwhile; endif;
				
		  // Pagination
          the_posts_pagination( array(
            'mid_size' => 2,
            'prev_text' => '<div class="icon-left-open-big"></div>',
            'next_text' => '<div class="icon-right-open-big"></div>',
          ) ); 
			
			 wp_reset_query(); ?>
		</aside>	 
	</div><!-- #primary -->
          
              <?php get_sidebar(); ?>             

</div> <!-- #container -->

<?php get_footer(); ?>