<?php get_header(); ?>

<div id="container" class="row">
  <div id="primary" class="large-8 medium-8 small-12 <?php if ( !is_active_sidebar( 'sidebar-1' )  ) : echo 'medium-centered'; endif; ?> columns">
  	<article <?php post_class('articlebox'); ?> itemscope="itemscope" itemtype="http://schema.org/BlogPosting" itemprop="blogPost">
	<?php	
		while ( have_posts() ) : the_post(); ?>
			<header class="entry-header">
				<h2 class="entry-title" itemprop="headline">
					<?php if ( has_post_format( 'audio' )) : ?>
						  <span class="icon-volume-up-1"></span>
						<?php elseif ( has_post_format( 'video' )) : ?>
						  <span class="icon-play-circled2"></span>
						<?php elseif  ( has_post_format( 'image' )) : ?>
						  <span class="icon-picture-2"></span>
						<?php elseif ( has_post_format( 'gallery' )) : ?>
						  <span class="icon-picture"></span>
						<?php elseif ( has_post_format( 'link' )) : ?>
						  <span class="icon-link-1"></span>
						<?php elseif ( has_post_format( 'quote' )) : ?>
						  <span class="icon-quote"></span>
						<?php elseif ( has_post_format( 'status' )) : ?>
						  <span class="icon-child"></span>
						<?php elseif ( has_post_format( 'chat' )) : ?>
						  <span class="icon-link-1"></span>
						 <?php elseif ( has_post_format( 'aside' )) : ?>
						  <span class="icon-heart-empty"></span>
						<?php endif; ?>
					<?php the_title(); ?>
				</h2>
				<?php echo richmasterxs_date(); ?>
			</header>
			<div class="entry-content">
				<?php the_content(); 

				wp_link_pages( array(
					'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'richmasterxs' ) . '</span>',
					'after'       => '</div>',
					'link_before' => '<span>',
					'link_after'  => '</span>',
				) ); ?>
			</div><!-- .entry-content -->

			
			<?php // Author Bio
			if ( get_the_author_meta( 'description' ) ) :
				get_template_part( 'author-bio' );
			endif;

			// Tags
			if( has_tag() ) { 

	        $tags = get_the_tags();
	        $html = '<div id="tags">';
	        foreach ($tags as $tag){
	            $tag_link = get_tag_link($tag->term_id);
	            $html .= "<a href='{$tag_link}' title='{$tag->name} ". __( 'Tag', 'richmasterxs' ). "' class='medium button'>";
	            $html .= "{$tag->name}</a> ";
	        }
	        $html .= '</div>';
	        echo $html;
        
        } 

        // Above Comments Widget Area
        if ( is_active_sidebar( 'above-comments-widget-area' ) ) : ?>
            <div id="above-comments-widget-area" class="widget-area" role="complementary">
              <?php dynamic_sidebar( 'above-comments-widget-area' ); ?>
            </div><!-- #above-comments-posts-widget-area -->
        <?php endif;

		// Comments
			if ( comments_open() || get_comments_number() ) :
			comments_template();
			endif;
		endwhile;?>
	    
    </article>

    	<?php // Above Related Posts Widget Area
    		if ( is_active_sidebar( 'above-related-posts-widget-area' ) ) : ?>
            <div id="above-related-posts-widget-area" class="widget-area" role="complementary">
              <?php dynamic_sidebar( 'above-related-posts-widget-area' ); ?>
            </div><!-- #above-related-posts-widget-area -->
        <?php endif; 

        // Related Posts
        $displayrelatedposts = richmasterxs_themeoptions('displayrelatedposts'); 
        	if(!empty($displayrelatedposts)) : 
        		get_template_part( 'single-related' ); 
        	endif;?>

    </div><!-- #primary -->
          
              <?php get_sidebar(); ?>          

</div> <!-- #container -->

<?php get_footer(); ?>