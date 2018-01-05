	<article id="post-<?php the_ID(); ?>" <?php post_class('row postbox'); ?> >
		<a href="<?php the_permalink() ?>" rel="bookmark">
			<?php if (has_post_thumbnail( $post->ID ) ): ?>
				<div class="medium-6 postlistthumb columns">
					<div class="postlistthumbwrap">
						<?php the_post_thumbnail( 'post-thumbnail' );?>
						<div class="viewpostdisplay">
							<?php _e( 'View Post', 'richmasterxs' ); ?> &rarr;
						</div>
					</div>
				</div>
			<?php endif;?>
			<div class="<?php if (has_post_thumbnail( $post->ID ) ): echo 'medium-6'; endif; ?> columns">
				<header class="entry-header">
					<h5 class="entry-title">
						<?php if (is_sticky()) : ?><span class="icon-star-empty"></span> 
						<?php elseif ( has_post_format( 'audio' )) : ?>
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
						<?php the_title();?>
					</h5>
				</header>
				 <?php if ("page" != get_post_type()) :
				 	 	echo richmasterxs_date(); 
				 	   endif; ?>
				<div class="show-for-medium entry-excerpt"><?php the_excerpt(); ?></div>
			</div>
		</a>
	</article>