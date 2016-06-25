<?php
/**
 * Various metaboxes for this plugin
 *
 * In this class I add soome metaboxes to use in various place of the plugin
 * It uses CMB2 for that functionality
 *
 * @since 2.0.0
 *
 * @package ItalyStrap
 */

namespace ItalyStrap\Admin;

if ( ! defined( 'ITALYSTRAP_PLUGIN' ) or ! ITALYSTRAP_PLUGIN ) {
	die();
}

/**
 * Add some metaboxes in admin area with CMB2
 */
class Register_Metaboxes {

	/**
	 * CMB prefix
	 *
	 * @var string
	 */
	private $prefix;

	/**
	 * CMB _prefix
	 *
	 * @var string
	 */
	private $_prefix;

	/**
	 * The plugin options
	 *
	 * @var array
	 */
	private $options = array();

	/**
	 * Init the constructor
	 *
	 * @param array $options The plugin options
	 */
	function __construct( array $options = array() ) {

		/**
		 * Start with an underscore to hide fields from custom fields list
		 *
		 * @var string
		 */
		$this->prefix = 'italystrap';

		$this->_prefix = '_' . $this->prefix;

	}

	/**
	 * Hook in and add a demo metabox. Can only happen on the 'cmb2_admin_init' or 'cmb2_init' hook.
	 */
	public function register_script_settings() {

		$script_settings_metabox_object_types = apply_filters( 'italystrap_script_settings_metabox_object_types', array( 'post', 'page' ) );

		/**
		 * Sample metabox to demonstrate each field type included
		 */
		$cmb = new_cmb2_box(
			array(
				'id'            => $this->prefix . '-script-settings-metabox',
				'title'         => __( 'CSS and JavaScript settings', 'italystrap' ),
				'object_types'  => $script_settings_metabox_object_types,
				'context'    	=> 'normal',
				'priority'   	=> 'high',
			)
		);

		$cmb->add_field(
			array(
				'name'			=> __( 'Custom CSS', 'italystrap' ),
				'desc'			=> __( 'This code will be included verbatim in style tag before </head> tag of your page or post', 'italystrap' ),
				'id'			=> $this->_prefix . '_custom_css_settings',
				'type'			=> 'textarea_code',
				'attributes'	=> array( 'placeholder' => 'body{background-color:#f2f2f2}' ),
			)
		);

		$cmb->add_field(
			array(
				'name'			=> __( 'Body Classes', 'italystrap' ),
				'desc'			=> __( 'These class names will be added to the body_class() function (provided your theme uses these functions), separate each one by comma.', 'italystrap' ),
				'id'			=> $this->_prefix . '_custom_body_class_settings',
				'type'			=> 'text',
				'attributes'	=> array( 'placeholder' => 'class1,class2,class3,otherclass' ),
			)
		);

		$cmb->add_field(
			array(
				'name'			=> __( 'Post Classes', 'italystrap' ),
				'desc'			=> __( 'These class names will be added to the post_class() function (provided your theme uses these functions), separate each one by comma.', 'italystrap' ),
				'id'			=> $this->_prefix . '_custom_post_class_settings',
				'type'			=> 'text',
				'attributes'	=> array( 'placeholder' => 'class1,class2,class3,otherclass' ),
			)
		);

		/**
		 * @todo Aggiungere selezione di script o stili già registrati che
		 *       si vuole aggiungere al post o pagine e anche globalmente
		 *       global $wp_scripts, $wp_styles;
		 */
	}

	/**
	 * Hook in and add a demo metabox. Can only happen on the 'cmb2_admin_init' or 'cmb2_init' hook.
	 */
	public function register_widget_areas_fields() {

		/**
		 * Sample metabox to demonstrate each field type included
		 */
		$cmb = new_cmb2_box(
			array(
				'id'            => $this->prefix . '-widget-areas-metabox',
				'title'         => __( 'Widget Area settings', 'italystrap' ),
				'object_types'  => array( 'sidebar' ),
				'context'    	=> 'normal',
				'priority'   	=> 'high',
			)
		);

	// 'footer-box-1'	=> array(
	// 	'name'				=> __( 'Footer Box 1', 'ItalyStrap' ),
	// 	'id'				=> 'footer-box-1',
	// 	'description'		=> __( 'Footer box 1 widget area.', 'ItalyStrap' ),
	// 	'before_widget'		=> '<div id="%1$s" class="widget %2$s">',
	// 	'after_widget' 		=> '</div>',
	// 	'before_title'		=> '<h3 class="widget-title">',
	// 	'after_title'		=> '</h3>',
	// ),

		// $cmb->add_field(
		// 	array(
		// 		'name'			=> __( 'Before Widget', 'italystrap' ),
		// 		'desc'			=> __( 'This code will be included verbatim in style tag before </head> tag of your page or post', 'italystrap' ),
		// 		'id'			=> $this->_prefix . '_before_widget',
		// 		'type'			=> 'text',
		// 		'attributes'	=> array( 'placeholder' => '' ),
		// 	)
		// );

		// $cmb->add_field(
		// 	array(
		// 		'name'			=> __( 'after_widget', 'italystrap' ),
		// 		'desc'			=> __( 'This code will be included verbatim in style tag before </head> tag of your page or post', 'italystrap' ),
		// 		'id'			=> $this->_prefix . '_after_widget',
		// 		'type'			=> 'text',
		// 		'attributes'	=> array( 'placeholder' => '' ),
		// 	)
		// );

		// $cmb->add_field(
		// 	array(
		// 		'name'			=> __( 'before_title', 'italystrap' ),
		// 		'desc'			=> __( 'This code will be included verbatim in style tag before </head> tag of your page or post', 'italystrap' ),
		// 		'id'			=> $this->_prefix . '_before_title',
		// 		'type'			=> 'text',
		// 		'attributes'	=> array( 'placeholder' => '' ),
		// 	)
		// );

		// $cmb->add_field(
		// 	array(
		// 		'name'			=> __( 'after_title', 'italystrap' ),
		// 		'desc'			=> __( 'This code will be included verbatim in style tag before </head> tag of your page or post', 'italystrap' ),
		// 		'id'			=> $this->_prefix . '_after_title',
		// 		'type'			=> 'text',
		// 		'attributes'	=> array( 'placeholder' => '' ),
		// 	)
		// );
		// 
		$options = array(
			'italystrap_content_header'	=> __( 'In the header', 'italystrap' ),
			'italystrap_before_main'	=> __( 'Before the Main Content', 'italystrap' ),
			'italystrap_before_loop'	=> __( 'Before the Loop', 'italystrap' ),
			'italystrap_after_loop'		=> __( 'After the Loop', 'italystrap' ),
			'italystrap_after_main'		=> __( 'After the Main Content', 'italystrap' ),
		);

		$options = apply_filters( 'italystrap_widget_area_position', $options );

		$cmb->add_field(
			array(
				'name'				=> __( 'Display on', 'italystrap' ),
				'desc'				=> __( 'Select the position to display this widget area.', 'italystrap' ),
				'id'				=> $this->_prefix . '_action',
				'type'				=> 'select',
				'show_option_none'	=> true,
				'options'			=> $options,
				'attributes'		=> array( 'placeholder' => '' ),
			)
		);

		$cmb->add_field(
			array(
				'name'				=> __( 'Priority', 'italystrap' ),
				'desc'				=> __( 'Type the priority you want to display this widget area, it must be a number, by default the priority is 10, you can choose a number between 1 and 99999, this is useful when you want to display more than one widget area in the same position but in different order.', 'italystrap' ),
				'id'				=> $this->_prefix . '_priority',
				'type'				=> 'text',
				'default'			=> 10,
				'attributes'		=> array( 'placeholder' => '' ),
			)
		);

	}
}
