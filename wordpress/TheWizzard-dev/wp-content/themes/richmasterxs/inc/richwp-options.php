<?php
// Options Page

	if ( ! function_exists( 'richmasterxs' ) ) :

		function richmasterxs_themeoptions( $name ) {
			$default_theme_options = array(
				'logo' => '',
				'colorhd' => '#333333',
				'colorhdfont' => '#FFFFFF',
				'colorhdfonthover' => '#b7b7b7',
				'color1' => '#e91e63',
				'color2' => '#c2185b',
				'colorfontbuttons' => '#FFFFFF',
				'displayrelatedposts' => '1',
				'copyright' =>  get_bloginfo( 'name' ),
				'herofeaturedimage' => '',
				'headerimageshop' => '',
				);
		
			$options = wp_parse_args( get_option( 'richmasterxs' ), $default_theme_options );

			return $options[$name];
		}
	endif;

add_action( 'customize_register', 'richmasterxs_customize_register' );
function richmasterxs_customize_register( $wp_customize ) {
	
			
	$wp_customize->add_section( 'richmasterxs_colors', array(
		'title' => __( 'Colors', 'richmasterxs' ),
		'priority' => 100,
	) );
	
	$wp_customize->add_setting( 'richmasterxs[colorhd]', array(
		'default' => richmasterxs_themeoptions( 'colorhd' ),
		'sanitize_callback' => 'sanitize_hex_color',
		'type' => 'option',
		'capability' => 'edit_theme_options',
	) );
		
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'colorhd', array(
		'label'   => __( 'Header Color', 'richmasterxs' ),
		'section' => 'richmasterxs_colors',
		'settings'   => 'richmasterxs[colorhd]',
		'priority' => 5,
	) ) );
	
	$wp_customize->add_setting( 'richmasterxs[colorhdfont]', array(
		'default' => richmasterxs_themeoptions( 'colorhdfont' ),
		'sanitize_callback' => 'sanitize_hex_color',
		'type' => 'option',
		'capability' => 'edit_theme_options',
	) );
		
		
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'colorhdfont', array(
		'label'   => __( 'Header Font Color', 'richmasterxs' ),
		'section' => 'richmasterxs_colors',
		'settings'   => 'richmasterxs[colorhdfont]',
		'priority' => 10,
	) ) );

	$wp_customize->add_setting( 'richmasterxs[colorhdfonthover]', array(
		'default' => richmasterxs_themeoptions( 'colorhdfonthover' ),
		'sanitize_callback' => 'sanitize_hex_color',
		'type' => 'option',
		'capability' => 'edit_theme_options',
	) );
		
		
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'colorhdfonthover', array(
		'label'   => __( 'Header Font Hover Color', 'richmasterxs' ),
		'section' => 'richmasterxs_colors',
		'settings'   => 'richmasterxs[colorhdfonthover]',
		'priority' => 10,
	) ) );

	$wp_customize->add_setting( 'richmasterxs[color1]', array(
		'default' => richmasterxs_themeoptions( 'color1' ),
		'sanitize_callback' => 'sanitize_hex_color',
		'type' => 'option',
		'capability' => 'edit_theme_options',
	) );
		
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'color1', array(
		'label'   => __( 'Lead Color', 'richmasterxs' ),
		'section' => 'richmasterxs_colors',
		'settings'   => 'richmasterxs[color1]',
		'priority' => 20,
	) ) );
	
	$wp_customize->add_setting( 'richmasterxs[color2]', array(
		'default' => richmasterxs_themeoptions( 'color2' ),
		'sanitize_callback' => 'sanitize_hex_color',
		'type' => 'option',
		'capability' => 'edit_theme_options',
	) );
		
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'color2', array(
		'label'   => __( '2. Lead Color', 'richmasterxs' ),
		'section' => 'richmasterxs_colors',
		'settings'   => 'richmasterxs[color2]',
		'priority' => 30,
	) ) );
	
	$wp_customize->add_setting( 'richmasterxs[colorfontbuttons]', array(
		'default' => richmasterxs_themeoptions( 'colorfontbuttons' ),
		'sanitize_callback' => 'sanitize_hex_color',
		'type' => 'option',
		'capability' => 'edit_theme_options',
	) );
		
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'colorfontbuttons', array(
		'label'   => __( 'Button Font Color', 'richmasterxs' ),
		'section' => 'richmasterxs_colors',
		'settings'   => 'richmasterxs[colorfontbuttons]',
		'priority' => 40,
	) ) );

	$wp_customize->add_setting( 'richmasterxs[herofeaturedimage]', array(
		'default' => richmasterxs_themeoptions( 'herofeaturedimage' ),
		'sanitize_callback' => 'richmasterxs_sanitize_checkbox',
		'type' => 'option',
		'capability' => 'edit_theme_options',
	) );
	
	$wp_customize->add_control( 'richmasterxs[herofeaturedimage]', array(
		'settings' => 'richmasterxs[herofeaturedimage]',
		'label'    => __( 'Featured Image as Hero Image on Single Post View', 'richmasterxs' ),
		'section'  => 'header_image',
		'type'     => 'checkbox',
		'priority' => 70,
	) );

	$wp_customize->add_setting( 'richmasterxs[headerimageshop]', array(
		'default' => richmasterxs_themeoptions( 'headerimageshop' ),
		'sanitize_callback' => 'esc_url_raw',
		'type' => 'option',
		'capability' => 'edit_theme_options',
	) );

	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'headerimageshop', array(
		'label'   => __( 'WooCommerce Product Archive Hero Image', 'richmasterxs' ),
		'section' => 'header_image',
		'settings'   => 'richmasterxs[headerimageshop]',
		'priority' => 80,
	) ) );

    $wp_customize->add_section( 'richmasterxs_misc', array(
		'title' => __( 'Misc.', 'richmasterxs' ),
		'priority' => 120,
	) );

	$wp_customize->add_setting( 'richmasterxs[displayrelatedposts]', array(
		'default' => richmasterxs_themeoptions( 'displayrelatedposts' ),
		'sanitize_callback' => 'richmasterxs_sanitize_checkbox',
		'type' => 'option',
		'capability' => 'edit_theme_options',
	) );
	
	$wp_customize->add_control( 'richmasterxs[displayrelatedposts]', array(
		'settings' => 'richmasterxs[displayrelatedposts]',
		'label'    => __( 'Display Related Posts', 'richmasterxs' ),
		'section'  => 'richmasterxs_misc',
		'type'     => 'checkbox',
		'priority' => 20,
	) );
	
	$wp_customize->add_setting( 'richmasterxs[copyright]', array(
		'default' => richmasterxs_themeoptions( 'copyright' ),
		'sanitize_callback' => 'richmasterxs_sanitize_text_html',
		'type' => 'option',
		'capability' => 'edit_theme_options',
	) );

	$wp_customize->add_control( 'copyright', array(
		'label' => __( 'Copyright Notice in Footer', 'richmasterxs' ),
		'section' => 'richmasterxs_misc',
		'settings' => 'richmasterxs[copyright]',
		'priority' => 30,
	) );
	
} 

function richmasterxs_sanitize_text_html( $input ) {
    return wp_kses_post( force_balance_tags( $input ) );
}

function richmasterxs_sanitize_checkbox( $input ) {
    if ( $input == 1 ) {
        return 1;
    } else {
        return '';
    }
}

/* Add CSS */
function richmasterxs_add_styles() {
  if ( ! function_exists( 'get_richicon_font' ) ) {
    $richicon_font = array(
        'base' => get_template_directory_uri()."/font/richicons",
        'version' => '13409116');
  } else {
    $richicon_font = get_richicon_font();
  }
 ?>
<style type="text/css">
@font-face {
  font-family: 'richicons';
  src: url('<?php echo $richicon_font['base'].".eot?".$richicon_font['version']; ?>');
  src: url('<?php echo $richicon_font['base'].".eot?".$richicon_font['version']."#iefix"; ?>') format('embedded-opentype'),
    url('<?php echo $richicon_font['base'].".woff?".$richicon_font['version']; ?>') format('woff'),
    url('<?php echo $richicon_font['base'].".ttf?".$richicon_font['version']; ?>') format('truetype'),
    url('<?php echo $richicon_font['base'].".svg?".$richicon_font['version']."#richicons"; ?>') format('svg');
    font-weight: normal;
    font-style: normal;
  }

#top-menu,
.title-bar,
ul.submenu {
	background-color:<?php echo esc_attr( richmasterxs_themeoptions('colorhd'));?>;
}

.top-bar, 
.is-dropdown-submenu, 
.title-bar, 
#searchwrap {
	<?php 
		if (richmasterxs_themeoptions('colorhd') == "#ffffff") {
			echo 'border-bottom: 1px solid #CACACA;';
		} else { 
			echo 'border:none;'; }; ?>
}

<?php if (richmasterxs_themeoptions('colorhd') == "#ffffff") { ?>.menushop .is-dropdown-submenu a:hover {background: rgba(0,0,0,0.05);}<?php } ?>

.title-bar,
a #sitetitle,
.top-bar a,
.icon-menu,
#iconmenu li:before,
.menushop .is-dropdown-submenu a ,
.menushop .is-dropdown-submenu a:hover{
	color:<?php echo esc_attr( richmasterxs_themeoptions('colorhdfont'));?>;
}
.top-bar-left .dropdown.menu > li.is-dropdown-submenu-parent.opens-right > a:after,
.top-bar-left .is-dropdown-submenu .is-dropdown-submenu-parent.opens-right > a::after,
.top-bar-left .is-accordion-submenu-parent a::after{
  border-color: <?php echo esc_attr( richmasterxs_themeoptions('colorhdfont'));?> transparent transparent;
}
.top-bar-left .is-dropdown-submenu .is-dropdown-submenu-parent.opens-right > a::after {
	border-color: transparent transparent transparent <?php echo esc_attr( richmasterxs_themeoptions('colorhdfont'));?>;
}
.top-bar-left .is-dropdown-submenu .is-dropdown-submenu-parent.opens-left > a::after {
	border-color: transparent <?php echo esc_attr( richmasterxs_themeoptions('colorhdfont'));?> transparent;
}
.top-bar a:hover,
.top-bar .current-menu-item a,
.dropdown.menu > li.is-dropdown-submenu-parent > a:hover:after,
#iconmenu li:hover:before{
	color:<?php echo esc_attr( richmasterxs_themeoptions('colorhdfonthover'));?>;
}
.top-bar-left .dropdown.menu > li.is-dropdown-submenu-parent.opens-right > a:hover:after,
.top-bar-left .is-dropdown-submenu .is-dropdown-submenu-parent.opens-right > a:hover:after,
.top-bar-left .is-accordion-submenu-parent a:hover:after{
  border-color: <?php echo esc_attr( richmasterxs_themeoptions('colorhdfonthover'));?> transparent transparent;
}
.top-bar-left .is-dropdown-submenu .is-dropdown-submenu-parent.opens-right > a:hover:after {
	border-color: transparent transparent transparent <?php echo esc_attr( richmasterxs_themeoptions('colorhdfonthover'));?>;
}
.top-bar-left .is-dropdown-submenu .is-dropdown-submenu-parent.opens-left > a:hover:after {
	border-color: transparent <?php echo esc_attr( richmasterxs_themeoptions('colorhdfonthover'));?> transparent;
}
a,
a:hover,
.postbox a:hover .entry-title,
#sidebar a:hover,
#copyright a:hover,
#footermenu a:hover,
#footer-widget-area a:hover, 
#top-widget-area a:hover,
.pagination .prev:hover, 
.pagination .next:hover,
.comment-metadata a:hover, 
.fn a:hover
<?php if ( function_exists( 'is_woocommerce' ) ) {
		if ( is_woocommerce() || is_cart() ||  is_checkout() ) { ?>						
		, .woocommerce .woocommerce-info::before<?php } }?>
	{
	color:<?php echo esc_attr( richmasterxs_themeoptions('color1'));?>;
}
.none
<?php if ( function_exists( 'is_woocommerce' ) ) {
		if ( is_woocommerce() || is_cart() ||  is_checkout() ) { ?>, 
		.woocommerce-cart .wc-proceed-to-checkout a.checkout-button,
		.woocommerce #payment #place_order,
		.woocommerce-page #payment #place_order,
		.woocommerce #respond input#submit.alt:hover,
		.woocommerce button.button,
		.woocommerce button.button:hover,
		.woocommerce a.button.alt:hover,
		.woocommerce button.button.alt:hover,
		.woocommerce input.button.alt:hover,
		.woocommerce input.button,
		.woocommerce-cart a.button,
		.woocommerce-cart a.button:hover,
		.add_to_cart_button:hover,
		.woocommerce #respond input#submit.alt,
		.woocommerce a.button.alt,
		.woocommerce button.button.alt,
		.woocommerce input.button.alt<?php } } ?>
	{
	background:<?php echo esc_attr( richmasterxs_themeoptions('color1'));?>;
}
.button,
.button:hover, 
.button:focus,
.add_to_cart_button:hover,
.add_to_cart_button:focus,
.comment-list .reply a,
.comment-list .reply a:hover
<?php if ( function_exists( 'is_woocommerce' ) ) {
		if ( is_woocommerce() || is_cart() ||  is_checkout() ) { ?>,
		.woocommerce ul.products li.product .button,
		.woocommerce input.button:hover,
		.woocommerce span.onsale<?php } } ?>
{
	background-color:<?php echo esc_attr( richmasterxs_themeoptions('color2'));?>;
	color: <?php echo esc_attr( richmasterxs_themeoptions('colorfontbuttons'));?>;
}
<?php if ( function_exists( 'is_woocommerce' ) ) {
		if ( is_woocommerce() || is_cart() ||  is_checkout() ) { ?>
			.woocommerce a.added_to_cart:before{
				color:<?php echo esc_attr( richmasterxs_themeoptions('color2'));?>;
			} 
		
			.woocommerce .woocommerce-info{
				border-top-color: <?php echo esc_attr( richmasterxs_themeoptions('color2'));?>;
			} 
<?php 	} } ?>
.entry-content a.more-link,
.button,
.comment-list .reply a,
.comment-list .reply a:hover,
.add_to_cart_button
<?php if ( function_exists( 'is_woocommerce' ) ) {
		if ( is_woocommerce() || is_cart() ||  is_checkout() ) { ?>
		.woocommerce ul.products li.product .button,
		.woocommerce input.button,
		.woocommerce input.button:hover,
		.woocommerce button.button,
		.woocommerce button.button:hover,
		.woocommerce-cart a.button,
		.woocommerce-cart a.button:hover,
		.woocommerce span.onsale<?php } } ?>
	{
	color:<?php echo esc_attr( richmasterxs_themeoptions('colorfontbuttons'));?>;
}
</style>
<?php } add_action('wp_head', 'richmasterxs_add_styles'); ?>