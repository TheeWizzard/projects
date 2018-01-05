<?php //Hero Images
      $herofeaturedimage = richmasterxs_themeoptions('herofeaturedimage');
      
      if (function_exists( 'is_woocommerce' )) :


          if (is_shop() && is_front_page()) : $headerimageshop = richmasterxs_themeoptions('headerimageshop'); if(!empty($headerimageshop)) : ?>

               <div id="herofeaturedimage" class="frontcoverimage" style="background-image: url('<?php echo esc_url( richmasterxs_themeoptions('headerimageshop')); ?>');">

                <?php if ( is_active_sidebar( 'woo-hero-image-widget-area' ) ) : ?>
                      <div id="woo-hero-image-widget-area" class="medium-12 columns widget-area" role="complementary">
                        <?php dynamic_sidebar( 'woo-hero-image-widget-area' ); ?>
                      </div><!-- #woo-hero-image-widget-area -->
                  <?php endif; ?>
              </div>

            <?php  endif; 

             elseif (is_shop()) : $headerimageshop = richmasterxs_themeoptions('headerimageshop'); 
                  if(!empty($headerimageshop)) : ?>

                   <div id="herofeaturedimage" class="frontcoverimage" style="background-image: url('<?php echo esc_url( richmasterxs_themeoptions('headerimageshop')); ?>');">

                    <?php if ( is_active_sidebar( 'woo-hero-image-widget-area' ) ) : ?>
                          <div id="woo-hero-image-widget-area" class="medium-12 columns widget-area" role="complementary">
                            <?php dynamic_sidebar( 'woo-hero-image-widget-area' ); ?>
                          </div><!-- #woo-hero-image-widget-area -->
                      <?php endif; ?>
                   </div>

            <?php  endif; 
            elseif ((!empty($herofeaturedimage)) && (function_exists( 'is_woocommerce' )  && (!is_product()) ) && (is_single()) || (is_page()) ):  $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'richmasterxs_single-post-cover' ); ?> 
              <?php if (has_post_thumbnail( $post->ID ) ): ?>      
                <div id="herofeaturedimage" class="frontcoverimage" style="background-image: url('<?php echo esc_url($image[0]); ?>');">
                  <?php if ( is_active_sidebar( 'hero-image-widget-area' ) ) : ?>
                        <div id="hero-image-widget-area" class="medium-12 columns widget-area" role="complementary">
                          <?php dynamic_sidebar( 'hero-image-widget-area' ); ?>
                        </div><!-- #hero-image-widget-area -->
                    <?php endif; ?>
                </div>
              <?php endif; ?>

              <?php elseif (has_header_image() && ( is_front_page() || is_home() )) : ?>
              <div id="herofeaturedimage" class="frontcoverimage" style="background-image: url('<?php header_image(); ?>');">
                  <?php if ( is_active_sidebar( 'front-cover-widget-area' ) ) : ?>
                      <div id="front-cover-widget-area" class="medium-12 columns widget-area" role="complementary">
                        <?php dynamic_sidebar( 'front-cover-widget-area' ); ?>
                      </div><!-- #front-cover-widget-area -->
                  <?php endif; ?>
              </div>


             <?php 
              elseif ((!empty($herofeaturedimage)) && (!is_product()) && (is_single()) || (is_page())  && (has_post_thumbnail( $post->ID ) ) ):  $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'richmasterxs_single-post-cover' ); ?>       
              <div id="herofeaturedimage" class="frontcoverimage" style="background-image: url('<?php echo esc_url($image[0]); ?>');">
                <?php if ( is_active_sidebar( 'hero-image-widget-area' ) ) : ?>
                      <div id="hero-image-widget-area" class="medium-12 columns widget-area" role="complementary">
                        <?php dynamic_sidebar( 'hero-image-widget-area' ); ?>
                      </div><!-- #hero-image-widget-area -->
                  <?php endif; ?>
              </div>
          <?php endif; ?>

<?php elseif (has_header_image() && ( is_front_page() || is_home() )) : ?>
              <div id="herofeaturedimage" class="frontcoverimage" style="background-image: url('<?php header_image(); ?>');">
                  <?php if ( is_active_sidebar( 'front-cover-widget-area' ) ) : ?>
                      <div id="front-cover-widget-area" class="medium-12 columns widget-area" role="complementary">
                        <?php dynamic_sidebar( 'front-cover-widget-area' ); ?>
                      </div><!-- #front-cover-widget-area -->
                  <?php endif; ?>
              </div>


             <?php 
              elseif ((!empty($herofeaturedimage)) && (is_single()) || (is_page())  && (has_post_thumbnail( $post->ID ) ) ):  $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'richmasterxs_single-post-cover' ); ?>       
              <div id="herofeaturedimage" class="frontcoverimage" style="background-image: url('<?php echo esc_url($image[0]); ?>');">
                <?php if ( is_active_sidebar( 'hero-image-widget-area' ) ) : ?>
                      <div id="hero-image-widget-area" class="medium-12 columns widget-area" role="complementary">
                        <?php dynamic_sidebar( 'hero-image-widget-area' ); ?>
                      </div><!-- #hero-image-widget-area -->
                  <?php endif; ?>
              </div>

<?php endif; ?>