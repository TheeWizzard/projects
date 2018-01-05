<!doctype html>
<html <?php language_attributes(); ?> class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
     <?php wp_head(); ?>
  </head>

  <body <?php body_class(); ?> itemscope="itemscope" itemtype="http://schema.org/WebPage">

<div class="title-bar" data-responsive-toggle="top-menu" data-hide-for="medium">
  <button class="icon-menu" type="button"  data-toggle></button>
    <div class="title-logo" itemscope="itemscope" itemtype="http://schema.org/WPHeader" role="banner">
        <?php if (function_exists( 'the_custom_logo' ) && has_custom_logo()) { 
            the_custom_logo();
          } else { ?>  
          <a href="<?php echo esc_url(home_url( '/' )); ?>" title="<?php bloginfo( 'name', 'display' ) ;?> - <?php bloginfo( 'description' ); ?>">
            <h1 id="sitetitle"><?php bloginfo( 'name', 'display' ) ;?></h1>
          </a>
        <?php } ?>
   </div>     
</div>

  <nav id="top-menu" class="top-bar" >
    <ul class="menu">
    <li class="topbar-title title-logo show-for-medium" itemscope="itemscope" itemtype="http://schema.org/WPHeader" role="banner">
          <?php if (function_exists( 'the_custom_logo' ) && has_custom_logo()) { 
              the_custom_logo();
          } else { ?> 
          <a href="<?php echo esc_url(home_url( '/' )); ?>" title="<?php bloginfo( 'name', 'display' );?> - <?php bloginfo( 'description' ); ?>">
            <h1 id="sitetitle"><?php bloginfo( 'name', 'display' );?></h1>
          </a>
        <?php } ?>  
    </li>
    </ul>
    <div class="top-bar-left" itemscope="itemscope" itemtype="http://schema.org/SiteNavigationElement" role="navigation">
      <?php
          wp_nav_menu(array(
              'container' => false,
              'menu' => __( 'Primary Menu', 'richmasterxs' ),
              'menu_class' => 'dropdown menu',
              'theme_location' => 'primary',
              'items_wrap'      => '<ul id="%1$s" class="vertical medium-horizontal menu" data-responsive-menu="accordion medium-dropdown">%3$s</ul>',
              'fallback_cb' => 'false',
              'walker' => new richmasterxs_F6_TOPBAR_MENU_WALKER(),
          ));
      ?>
     </div>

    <div class="top-bar-right">
      <ul id="iconmenu" class="menu">  
          <?php wp_nav_menu( array( 'container' => false, 'fallback_cb' => false, 'items_wrap' => '%3$s', 'menu_id' => 'iconmenu', 'menu_class' => '', 'theme_location' => 'iconmenu', 'depth' => -1 ) ); ?>
                    
          <li id="searchicon" class="icon-search menu-item">
            <a>
              <?php _e( 'Search', 'richmasterxs' ); ?>
            </a>
            
          </li>
      </ul>
    </div>
  </nav>

<div id="searchwrap">
  <div class= "row">
    <div class="columns small-12">
      <?php get_search_form(); ?>
    </div>
  </div>
</div>

<?php get_template_part( 'headerimages' ); ?>

<?php if (( is_active_sidebar( 'top-widget-area' ) ) && (!( 
      (class_exists('WooCommerce') && is_woocommerce()) ||
      (class_exists('WooCommerce') && is_cart()) ||
      (class_exists('WooCommerce') && is_checkout()) ||
      (class_exists('WooCommerce') && is_account_page()) ||
      (class_exists('WooCommerce') && is_wc_endpoint_url()) 
      ) ) )
      : ?>
      <div id="top-widget-area" class="widget-area" role="complementary">
        <?php dynamic_sidebar( 'top-widget-area' ); ?>
      </div><!-- .top-widget-area -->
<?php endif;  ?>