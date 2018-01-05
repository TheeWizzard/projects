<?php /* Template Name: Content Width - No Sidebar */ ?>
<?php get_header(); ?>

<div id="container" class="row">
    <div id="primary" class="large-8 medium-8 small-12 medium-centered columns">
      	<article <?php post_class('articlebox'); ?>>
    	<?php	
    		while ( have_posts() ) : the_post(); ?>
    			<header class="entry-header">
                    <h2 class="entry-title"><?php the_title(); ?></h2>
                </header>
                <div class="entry-content">
    			     <?php the_content(); ?>
                </div><!-- .entry-content -->
            <?php endwhile; ?>
        </article>
    </div><!-- #primary -->           
</div> <!-- #container -->

<?php get_footer(); ?>