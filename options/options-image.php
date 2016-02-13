<?php
/**
 * Array definition for Posts default options
 *
 * @package ItalyStrap
 */

if ( ! defined( 'ITALYSTRAP_PLUGIN' ) or ! ITALYSTRAP_PLUGIN ) die();

/**
 * Definition array() with all the options connected to the
 * module which must be called by an include (setoptions).
 */
return array(

	/**
	 * Ids for the images to use.
	 */
	'ids'				=> array(
				'name'		=> __( 'Images ID', 'ItalyStrap' ),
				'desc'		=> __( 'Enter the media or post type ID.', 'ItalyStrap' ),
				'id'		=> 'ids',
				'type'		=> 'media_list',
				'class'		=> 'widefat ids',
				'default'	=> false,
				// 'validate'	=> 'numeric_comma',
				'filter'	=> 'sanitize_text_field',
				'section'	=> 'general',
				 ),

	/**
	 * Ids for the images to use.
	 */
	'image_title'			=> array(
				'name'		=> __( 'Image title', 'ItalyStrap' ),
				'desc'		=> __( 'Enter the image title.', 'ItalyStrap' ),
				'id'		=> 'image_title',
				'type'		=> 'text',
				'class'		=> 'widefat image_title',
				'default'	=> '',
				// 'validate'	=> 'numeric_comma',
				'filter'	=> 'sanitize_text_field',
				'section'	=> 'general',
				 ),

	/**
	 * Ids for the images to use.
	 */
	'caption'			=> array(
				'name'		=> __( 'Image caption', 'ItalyStrap' ),
				'desc'		=> __( 'Enter the image caption.', 'ItalyStrap' ),
				'id'		=> 'caption',
				'type'		=> 'textarea',
				'class'		=> 'widefat caption',
				'default'	=> '',
				// 'validate'	=> 'numeric_comma',
				'filter'	=> 'sanitize_text_field',
				'section'	=> 'general',
				 ),


	/**
	 * Alternative text.
	 */
	'alt'				=> array(
				'name'		=> __( 'Alternative text', 'ItalyStrap' ),
				'desc'		=> __( 'Enter the alternative text.', 'ItalyStrap' ),
				'id'		=> 'alt',
				'type'		=> 'text',
				'class'		=> 'widefat alt',
				'default'	=> '',
				// 'validate'	=> 'numeric_comma',
				'filter'	=> 'sanitize_text_field',
				'section'	=> 'general',
				 ),
	/**
	 * Ids for the images to use.
	 */
	'description'		=> array(
				'name'		=> __( 'Image description', 'ItalyStrap' ),
				'desc'		=> __( 'Enter the image description.', 'ItalyStrap' ),
				'id'		=> 'description',
				'type'		=> 'textarea',
				'class'		=> 'widefat description',
				'default'	=> '',
				// 'validate'	=> 'numeric_comma',
				'filter'	=> 'sanitize_text_field',
				'section'	=> 'general',
				 ),

	/**
	 * Size for image attachment. Accepted values: thumbnail, medium,
	 * large, full or own custom name added in add_image_size function.
	 * Default: full.
	 * @see wp_get_attachment_image_src() for further reference.
	 */
	'size'				=> array(
				'name'		=> __( 'Size for images', 'ItalyStrap' ),
				'desc'		=> __( '', 'ItalyStrap' ),
				'id'		=> 'size',
				'type'		=> 'select',
				'class'		=> 'widefat',
				'default'	=> 'full',
				'options'	=> ( ( isset( $image_size_media_array ) ) ? $image_size_media_array : '' ),
				'filter'	=> 'sanitize_text_field',
				'section'	=> 'general',
				 ),

	/**
	 * 
	 */
	'alignment'				=> array(
				'name'		=> __( 'Size for images', 'ItalyStrap' ),
				'desc'		=> __( '', 'ItalyStrap' ),
				'id'		=> 'alignment',
				'type'		=> 'select',
				'class'		=> 'widefat',
				'default'	=> 'none',
				'options'	=> array(
					'alignnone'		=> 'none',
					'aligncenter'	=> 'center',
					'alignleft'		=> 'left',
					'alignright'	=> 'right',
					),
				'filter'	=> 'sanitize_text_field',
				'section'	=> 'general',
				 ),

	/**
	 * Ids for the images to use.
	 */
	'image_css_class'		=> array(
				'name'		=> __( 'Image CSS class', 'ItalyStrap' ),
				'desc'		=> __( 'Enter the image css class (optional).', 'ItalyStrap' ),
				'id'		=> 'image_css_class',
				'type'		=> 'text',
				'class'		=> 'widefat image_css_class',
				'default'	=> '',
				// 'validate'	=> 'numeric_comma',
				'filter'	=> 'sanitize_text_field',
				'section'	=> 'general',
				 ),

);