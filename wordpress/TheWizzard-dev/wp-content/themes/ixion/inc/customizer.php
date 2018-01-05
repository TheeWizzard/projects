<?php
/**
 * Ixion Theme Customizer.
 *
 * @package Ixion
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function ixion_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport		 = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	/**
	 * Add the Theme Options section
	 */
	$wp_customize->add_section( 'ixion_theme_options', array(
		'title' => esc_html__( 'Theme Options', 'ixion' ),
	) );

	$wp_customize->add_setting( 'ixion_button_text', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_text_field',
		'transport'         => 'postMessage',
	) );

	$wp_customize->add_control( 'ixion_button_text', array(
		'label'   => esc_html__( 'Call-to-Action Button Text', 'ixion' ),
		'section' => 'ixion_theme_options',
		'type'    => 'text',
	) );

	$wp_customize->add_setting( 'ixion_button_link', array(
		'default'           => '',
		'sanitize_callback' => 'esc_url_raw',
	) );

	$wp_customize->add_control( 'ixion_button_link', array(
		'label'   => esc_html__( 'Call-to-Action Button URL', 'ixion' ),
		'section' => 'ixion_theme_options',
		'type'    => 'text',
	) );

}
add_action( 'customize_register', 'ixion_customize_register' );

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function ixion_customize_preview_js() {
	wp_enqueue_script( 'ixion-customizer', get_template_directory_uri() . '/assets/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'ixion_customize_preview_js' );
