<?php get_header(); ?>

<div id="container" class="row">
  <div id="primary" class="large-8 medium-8 small-12 <?php if ( ( is_active_sidebar( 'sidebar-1' )  ) || ( is_active_sidebar( 'sidebar-2' )  ) || ( is_active_sidebar( 'sidebar-3' ) ) ): else: echo 'medium-centered'; endif; ?> columns">

        <?php if ( is_category() ) : ?>
          <h3 class="entry-title archive-title"><?php printf( single_cat_title( '', false )  );?></h3>
          <?php the_archive_description( '<div class="taxonomy-description">', '</div>' ); 
        elseif ( is_tag() ) : ?>
          <h3 class="entry-title archive-title"><?php printf( single_tag_title( '', false )  );?></h3>
          <?php the_archive_description( '<div class="taxonomy-description">', '</div>' ); 
        elseif ( is_author() ) : ?>
          
          <?php
         // Author bio.
          if ( get_the_author_meta( 'description' ) ) :
          get_template_part( 'author-bio' );
          else: ?>
          <h3 class="entry-title archive-title author-title"><?php echo get_the_author(); ?></h3>
         <?php endif; ?>
          
        <?php  elseif ( is_search() ) : ?>
          <h3 class="entry-title archive-title"><?php printf( __( 'Search for: %s', 'richmasterxs' ), '<i>' . get_search_query() . '</i>' ); ?></h3>
        <?php elseif ( is_day() ) : ?>
          <h3 class="entry-title archive-title"><?php printf( get_the_date() ); ?></h3>
        <?php elseif ( is_month() ) : ?>
          <h3 class="entry-title archive-title"><?php printf( get_the_date('F Y') ); ?></h3>
        <?php elseif ( is_year() ) : ?>
          <h3 class="entry-title archive-title"><?php printf( get_the_date('Y') ); ?></h3>
        <?php endif; ?>

    <?php if ( have_posts() ) : 
         while ( have_posts() ) : the_post(); 

        get_template_part( 'loop', get_post_format() );
        
    endwhile; ?>
   
    <?php // Pagination
          the_posts_pagination( array(
            'mid_size' => 2,
            'prev_text' => '<div class="icon-left-open-big"></div>',
            'next_text' => '<div class="icon-right-open-big"></div>',
          ) ); ?> 

        <?php else:
            if ( is_search() ) : ?>
                <h5 class="entry-title archive-title"><?php _e( 'Nothing matched your search criteria. Please try searching again:', 'richmasterxs' ); ?></h5>
                <p><?php get_search_form(); ?></p>
            <?php elseif (is_404() ) : ?>
                <h3 class="entry-title archive-title"><?php _e( '404 - Sorry, nothing was found!', 'richmasterxs' ); ?></h3>
            <?php else: ?>
                <h3 class="entry-title archive-title"><?php _e( 'Sorry, nothing was found!', 'richmasterxs' ); ?></h3>
            <?php endif; 
        endif; ?>


  </div><!-- #primary -->
              
              <?php get_sidebar(); ?>             
 
</div> <!-- #container -->

<?php get_footer(); ?>