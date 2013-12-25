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
		'slug'		=> 'joglo_contoh_color_1', 
		'default'	=> '#250D07', 
		'priority'	=> 1, 
		'label'		=> 'Contoh Color',
		'section'	=> 'colors',
		'selector'	=> '.site-header',
		'property'	=> 'background',
		'transport'	=> 'postMessage',
		'type' 		=> 'color'
	);

	$colors[] = array( 
		'slug'		=> 'joglo_contoh_text', 
		'default'	=> 'Text Tes', 
		'priority'	=> 2, 
		'label'		=> 'Contoh Text',
		'section'	=> 'colors',
		'selector'	=> '.site-header',
		'property'	=> 'background',
		'transport'	=> 'postMessage',
		'type' 		=> 'text'
	);

	$colors[] = array( 
		'slug'		=> 'joglo_contoh_image', 
		'default'	=> '#250D07', 
		'priority'	=> 3, 
		'label'		=> 'Contoh Images',
		'section'	=> 'colors',
		'selector'	=> '.site-header',
		'property'	=> 'background',
		'transport'	=> 'postMessage',
		'type' 		=> 'images'
	);



/* =====================================================================================================*
 *  General Typography										 												*
 * =====================================================================================================*/
	require_once( CF_DIR . '/googlefont-control.php' );  
	$fetch_font = new Google_Font_Dropdown_Custom_Control();

	$fonts = $fetch_font->get_fonts();

	foreach ( $fonts as $key => $value ) {
		$gfont[$value->family] = $value->family;
	}

	$sections[] = array(
		'slug'		=> 'joglo_genaral_typography',
		'label'		=> 'General Typography',
		'priority'	=> 75,
	);

		$colors[] = array( 
			'slug'		=> 'joglo_body_font', 
			'default'	=> 'Arial', 
			'priority'	=> 1, 
			'label'		=> 'Body Font',
			'section'	=> 'joglo_genaral_typography',
			'selector'	=> '#celi',
			'property'	=> 'background',
			'transport'	=> 'postMessage',
			'choices'	=> $gfont,
			'type' 		=> 'select_font'
		);

	