<?php 

/**
 * Theme Customizer Data
 * 
 *
 * @author 		Alispx
 * @license 	license.txt
 * @since 		1.0
 */

/* =====================================================================================================*
 *  Define Global variable Needed 								 												*
 * =====================================================================================================*/
	

	$colors 	= array();
	$sections 	= array();

/* =====================================================================================================*
 *  General Color 										 												*
 * =====================================================================================================*/

	$colors[] = array( 
		'slug'		=> 'joglo_header_background', 
		'default'	=> '#250D07', 
		'priority'	=> 1, 
		'label'		=> 'Header Background',
		'section'	=> 'colors',
		'selector'	=> '.site-header',
		'property'	=> 'background',
		'transport'	=> 'postMessage',
		'type' 		=> 'color'
	);

/* =====================================================================================================*
 *  Woocommerce Color 										 											*
 * =====================================================================================================*/

	$sections[] = array(
		'slug'		=> 'joglo_woocommerce_color',
		'label'		=> 'Woocommerce Colors',
		'priority'	=> 60,
	);

		$colors[] = array( 
			'slug'		=> 'joglo_woo_primary', 
			'default'	=> '#250D07', 
			'priority'	=> 1, 
			'label'		=> 'Primary Color',
			'section'	=> 'joglo_woocommerce_color',
			'selector'	=> '.latest-header',
			'property'	=> 'background',
			'transport'	=> 'postMessage',
			'type' 		=> 'color'
		);

/* =====================================================================================================*
 *  Widget Color 										 												*
 * =====================================================================================================*/

	$sections[] = array(
		'slug'		=> 'joglo_widget_color',
		'label'		=> 'Widget Colors',
		'priority'	=> 70,
	);

		$colors[] = array( 
			'slug'		=> 'joglo_widget_background', 
			'default'	=> '#250D07', 
			'priority'	=> 1, 
			'label'		=> 'Widget Background',
			'section'	=> 'joglo_widget_color',
			'selector'	=> '#kopet',
			'property'	=> 'background',
			'transport'	=> 'postMessage',
			'type' 		=> 'color'
		);

/* =====================================================================================================*
 *  General Typography										 												*
 * =====================================================================================================*/

	$sections[] = array(
		'slug'		=> 'joglo_genaral_typography',
		'label'		=> 'General Typography',
		'priority'	=> 75,
	);

		$colors[] = array( 
			'slug'		=> 'joglo_body_font', 
			'default'	=> 0, 
			'priority'	=> 1, 
			'label'		=> 'Body Font',
			'section'	=> 'joglo_genaral_typography',
			'selector'	=> '#celi',
			'property'	=> 'background',
			'transport'	=> 'postMessage',
			'type' 		=> 'font'
		);

	