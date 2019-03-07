<?php
/**
 * Initialize the custom Meta Boxes. 
 */
add_action( 'admin_init', 'custom_meta_boxes' );

/**
 * Meta Boxes demo code.
 *
 * You can find all the available option types in demo-theme-options.php.
 *
 * @return    void
 * @since     2.0
 */
function custom_meta_boxes() {

  /**
   * Create a custom meta boxes array that we pass to 
   * the OptionTree Meta Box API Class.
   */

  $main_page = array(
  	'id'          => 'main_page_box',
  	'title'       => 'main page settings',
  	'desc'        => '',
  	'pages'       => array( 'page' ),
  	'context'     => 'normal',
  	'priority'    => 'high',
  	'fields'      => array(

      //slider start
  		array(
  			'label'       => 'Slider',
  			'id'          => 'main_slider_tab',
  			'type'        => 'tab'
  		),
  		array(
  			'label'       => 'Slider Enabled',
  			'id'          => 'main_slider_on_off',
  			'type'        => 'on-off',
  			'desc'        => 'Enable/Disable Main slider',
  			'std'         => 'off'
  		),
  		array(
  			'id'          => 'main_slider_list',
  			'label'       => 'Slider',
  			'desc'        => '',
  			'std'         => '',
  			'type'        => 'list-item',
  			'condition'   => 'main_slider_on_off:is(on)',
  			'operator'    => 'and',
  			'settings'    => array( 
  				array(
  					'id'          => 'main_slider_list_header',
  					'label'       => 'Title of slider',
  					'desc'        => '',
  					'type'        => 'text',
  				),
  				array(
  					'id'          => 'main_slider_list_under_header',
  					'label'       => 'Title under of slider',
  					'desc'        => '',
  					'type'        => 'text',
  				),
  				array(
  					'id'          => 'main_slider_list_upload',
  					'label'       => 'Upload your slider',
  					'desc'        => '',
  					'type'        => 'upload'
  				),
  			)
  		),
      //  Slider end

      //  About us start
  		array(
  			'label'       => 'About us',
  			'id'          => 'main_about_tab',
  			'type'        => 'tab'
  		),
  		array(
  			'id'          => 'main_about_header',
  			'label'       => 'Title of About us',
  			'desc'        => '',
  			'type'        => 'textarea',
  		),
  		array(
  			'id'          => 'main_about_desc',
  			'label'       => 'Description About us',
  			'desc'        => '',
  			'type'        => 'textarea',
  		),
  		array(
  			'label'       => 'Background Enabled',
  			'id'          => 'about_bg_on_off',
  			'type'        => 'on-off',
  			'desc'        => 'Enable/Disable About Us Background',
  			'std'         => 'off'
  		),
  		array(
  			'id'          => 'main_about_upload',
  			'label'       => 'Upload your background About us',
  			'desc'        => '',
  			'condition'   => 'about_bg_on_off:is(on)',
  			'type'        => 'upload'
  		),
      //  About us end

      //  Why choose us
  		array(
  			'label'       => 'Why choose us',
  			'id'          => 'main_choose_tab',
  			'type'        => 'tab'
  		),
  		array(
  			'id'          => 'main_choose_title',
  			'label'       => 'Title of Tab',
  			'desc'        => '',
  			'type'        => 'text',
  		),
  		array(
  			'id'          => 'main_choose_list',
  			'label'       => 'Why choose us items',
  			'desc'        => '',
  			'std'         => '',
  			'type'        => 'list-item',
  			'operator'    => 'and',
  			'settings'    => array(
  				array(
  					'id'          => 'main_choose_list_upload',
  					'label'       => 'Upload your icon here',
  					'desc'        => '',
  					'type'        => 'upload'
  				),
  				array(
  					'id'          => 'main_choose_list_title',
  					'label'       => 'Title under of icon',
  					'desc'        => '',
  					'type'        => 'text',
  				),
  			),
  		),
      //  Why choose us end

      //  Main product
  		array(
  			'label'       => 'Product Block',
  			'id'          => 'main_product_tab',
  			'type'        => 'tab'
  		),
  		array(
  			'id'          => 'main_product_title',
  			'label'       => 'Title of Product tab',
  			'desc'        => '',
  			'type'        => 'text',
  		),
  		array(
  			'id'          => 'main_product_desc',
  			'label'       => 'Description of Product tab',
  			'desc'        => '',
  			'type'        => 'textarea',
  		),
  		array(
  			'id'          => 'main_product_title_on',
  			'label'       => 'Title on Product',
  			'desc'        => '',
  			'type'        => 'text',
  		),
  		array(
  			'id'          => 'main_product_upload',
  			'label'       => 'Upload your Background image under Title of Product',
  			'desc'        => '',
  			'type'        => 'upload',
  		),

      //  Main product end

      //  Blog start
  		array(
  			'label'       => 'Blog ',
  			'id'          => 'main_post_tab',
  			'type'        => 'tab'
  		),
  		array(
  			'id'          => 'main_blog_list',
  			'label'       => 'Blog items',
  			'desc'        => '',
  			'std'         => '',
  			'type'        => 'list-item',
  			'operator'    => 'and',
  			'settings'    => array(
  				array(
  					'id'          => 'main_blog_select',
  					'label'       => 'Select Post',
  					'desc'        => '',
  					'type'        => 'custom-post-type-select',
  					'post_type'   => 'oakwood_post',
  					'operator'    => 'and',
  				),
  			),
  		),
      // Blog end
  	)
);

// Contact page edit start
$meta_box_contact = array(
	'id'          => 'contact_meta_box',
	'title'       => 'Contact settings',
	'desc'        => '',
	'pages'       => array( 'page' ),
	'context'     => 'normal',
	'priority'    => 'high',
	'fields'      => array(
		array(
			'id'          => 'contact_title',
			'label'       => 'Title',
			'type'        => 'tab',
		),
		array(
     'id'          => 'contact_title_title',
     'label'       => 'Contact title',
     'desc'        => '',
     'type'        => 'text',
   ),
		array(
			'id'          => 'contact_form',
			'label'       => 'Contact form',
			'type'        => 'tab',
		),
		array(
			'id'          => 'contact_form_shortcode',
			'label'       => 'Short Code',
			'type'        => 'text',
			'desc'        => ''
		),
		array(
			'id'          => 'contact_adress',
			'label'       => 'Office adress',
			'type'        => 'tab',
		),
		array(
     'id'          => 'contact_adress_title',
     'label'       => 'Adress title',
     'desc'        => '',
     'type'        => 'text',
   ),
    array(
     'id'          => 'contact_adress_desc',
     'label'       => 'Adress text',
     'desc'        => '',
     'type'        => 'textarea',
   ),
     array(
     'id'          => 'contact_contacts',
     'label'       => 'Contacts',
     'type'        => 'tab',
   ),
    array(
     'id'          => 'contact_contacts_title',
     'label'       => 'Contacts title',
     'desc'        => '',
     'type'        => 'text',
   ),
    array(
     'id'          => 'contact_contacts_desc',
     'label'       => 'Contacts text',
     'desc'        => '',
     'type'        => 'textarea',
   ),
    array(
     'id'          => 'contact_hours',
     'label'       => 'Hours',
     'type'        => 'tab',
   ),
    array(
     'id'          => 'contact_hours_title',
     'label'       => 'Hours title',
     'desc'        => '',
     'type'        => 'text',
   ),
    array(
     'id'          => 'contact_hours_desc',
     'label'       => 'Hours text',
     'desc'        => '',
     'type'        => 'textarea',
   ),
    array(
     'id'          => 'contact_map',
     'label'       => 'Map',
     'type'        => 'tab',
   ),
    array(
     'id'          => 'contact_map_maps',
     'label'       => 'Place your maps',
     'type'        => 'textarea',
     'desc'        => '',
   ),


  )
);
// Contact page edit end

// Blog edit page start
$meta_box_blog = array(
	'id'          => 'blog_meta_box',
	'title'       => 'Blog settings',
	'desc'        => '',
	'pages'       => array( 'oakwood_post' ),
	'context'     => 'normal',
	'priority'    => 'high',
	'fields'      => array(
		array(
			'id'          => 'post_title',
			'label'       => 'Title of Post',
			'desc'        => '',
			'type'        => 'text',
		),
	)
);
// Blog edit page end

// Product edit page start
$meta_box_product = array(
	'id'          => 'product_meta_box',
	'title'       => 'Product page settings',
	'desc'        => '',
	'pages'       => array( 'page' ),
	'context'     => 'normal',
	'priority'    => 'high',
	'fields'      => array(
		array(
			'id'          => 'product_page_title',
			'label'       => 'Title of Product page',
			'type'        => 'tab',
		),
		array(
			'id'          => 'product_page_title_title',
			'label'       => 'Here Write your title',
			'desc'        => '',
			'type'        => 'text',
		),
		array(
			'id'          => 'product_page_title_desc',
			'label'       => 'Here Write your text',
			'desc'        => '',
			'type'        => 'textarea',
		),
		array(
			'id'          => 'product_page_title_upload',
			'label'       => 'Set Your Image for background of first block',
			'desc'        => '',
			'type'        => 'upload',
		), 
		array(
			'id'          => 'product_thickness',
			'label'       => '- Thickness',
			'type'        => 'tab',
		),
		array(
     'id'          => 'product_thickness_title',
     'label'       => 'Enter Title',
     'desc'        => '',
     'type'        => 'text',
   ),
		array(
     'id'          => 'product_thickness_list',
     'label'       => 'label',
     'desc'        => '',
     'std'         => '',
     'type'        => 'list-item',
     'operator'    => 'and',
     'settings'    => array(
      array(
       'id'          => 'product_thickness_title_value',
       'label'       => 'Enter thickness value',
       'desc'        => '',
       'type'        => 'text',
     ),
      array(
       'id'          => 'product_thickness_upload',
       'label'       => 'Upload thickness image',
       'desc'        => '',
       'type'        => 'upload',
     ),
    ),
   ),
    array(
     'id'          => 'product_width',
     'label'       => '- Width',
     'type'        => 'tab',
   ),
    array(
     'id'          => 'product_width_title',
     'label'       => 'Enter Title',
     'desc'        => '',
     'type'        => 'text',
   ),
    array(
      'id'          => 'product_width_desc',
      'label'       => 'Enter description below',
      'desc'        => '',
      'type'        => 'textarea',
    ),
    array(
     'id'          => 'product_width_list',
     'label'       => '',
     'desc'        => '',
     'std'         => '',
     'type'        => 'list-item',
     'operator'    => 'and',
     'settings'    => array(
      array(
       'id'          => 'product_width_title_value',
       'label'       => 'Enter width value',
       'desc'        => '',
       'type'        => 'text',
     ),
      array(
       'id'          => 'product_width_upload',
       'label'       => 'Upload width image',
       'desc'        => '',
       'type'        => 'upload',
     ),


    ),

   ),
  		// Width end
  		// package start 
    array(
     'id'          => 'product_package',
     'label'       => '- Package',
     'type'        => 'tab',
   ),
    array(
     'id'          => 'product_package_title',
     'label'       => 'Enter Title',
     'desc'        => '',
     'type'        => 'text',
   ),
    array(
      'id'          => 'product_package_desc',
      'label'       => 'Enter description below',
      'desc'        => '',
      'type'        => 'textarea',
    ),
    array(
     'id'          => 'product_package_list',
     'label'       => '',
     'desc'        => '',
     'std'         => '',
     'type'        => 'list-item',
     'operator'    => 'and',
     'settings'    => array(
      array(
       'id'          => 'product_package_title_value',
       'label'       => 'Enter package value',
       'desc'        => '',
       'type'        => 'text',
     ),
      array(
       'id'          => 'product_package_upload',
       'label'       => 'Upload package image',
       'desc'        => '',
       'type'        => 'upload',
     ),
    ),
   ),
  		// package end
  		// quiality start 
    array(
     'id'          => 'product_quality',
     'label'       => '- Quality',
     'type'        => 'tab',
   ),
    array(
     'id'          => 'product_quality_title',
     'label'       => 'Enter Title',
     'desc'        => '',
     'type'        => 'text',
   ),
    array(
      'id'          => 'product_quality_desc',
      'label'       => 'Enter description below',
      'desc'        => '',
      'type'        => 'textarea',
    ),
    array(
     'id'          => 'product_quality_list',
     'label'       => '',
     'desc'        => '',
     'std'         => '',
     'type'        => 'list-item',
     'operator'    => 'and',
     'settings'    => array(
      array(
       'id'          => 'product_quality_title_value',
       'label'       => 'Enter quality value',
       'desc'        => '',
       'type'        => 'text',
     ),
      array(
       'id'          => 'product_quality_upload',
       'label'       => 'Upload quality image',
       'desc'        => '',
       'type'        => 'upload',
     ),
    ),
   ),
  		// quality end

		// contact form start
    array(
     'id'          => 'product_page_form',
     'label'       => 'Product form',
     'type'        => 'tab',
   ),
    array(
     'id'          => 'product_page_form_shortcode',
     'label'       => 'Paste your contact form shortcode here',
     'desc'        => '',
     'type'        => 'text',
   ),
		//contact form end
  )
);



$my_meta_box = array(
	'id'          => 'demo_meta_box',
	'title'       => __( 'Demo Meta Box', 'theme-text-domain' ),
	'desc'        => '',
	'pages'       => array( 'post' ),
	'context'     => 'normal',
	'priority'    => 'high',
	'fields'      => array(
		array(
			'label'       => __( 'Conditions', 'theme-text-domain' ),
			'id'          => 'demo_conditions',
			'type'        => 'tab'
		),
		array(
			'label'       => __( 'Show Gallery', 'theme-text-domain' ),
			'id'          => 'demo_show_gallery',
			'type'        => 'on-off',
			'desc'        => sprintf( __( 'Shows the Gallery when set to %s.', 'theme-text-domain' ), '<code>on</code>' ),
			'std'         => 'off'
		),
		array(
			'label'       => '',
			'id'          => 'demo_textblock',
			'type'        => 'textblock',
			'desc'        => __( 'Congratulations, you created a gallery!', 'theme-text-domain' ),
			'operator'    => 'and',
			'condition'   => 'demo_show_gallery:is(on),demo_gallery:not()'
		),
		array(
			'label'       => __( 'Gallery', 'theme-text-domain' ),
			'id'          => 'demo_gallery',
			'type'        => 'gallery',
			'desc'        => sprintf( __( 'This is a Gallery option type. It displays when %s.', 'theme-text-domain' ), '<code>demo_show_gallery:is(on)</code>' ),
			'condition'   => 'demo_show_gallery:is(on)'
		),
		array(
			'label'       => __( 'More Options', 'theme-text-domain' ),
			'id'          => 'demo_more_options',
			'type'        => 'tab'
		),
		array(
			'label'       => __( 'Text', 'theme-text-domain' ),
			'id'          => 'demo_text',
			'type'        => 'text',
			'desc'        => __( 'This is a demo Text field.', 'theme-text-domain' )
		),
		array(
			'label'       => __( 'Textarea', 'theme-text-domain' ),
			'id'          => 'demo_textarea',
			'type'        => 'textarea',
			'desc'        => __( 'This is a demo Textarea field.', 'theme-text-domain' )
		)
	)
);

  /**
   * Register our meta boxes using the 
   * ot_register_meta_box() function.
   */
  if ( function_exists( 'ot_register_meta_box' ) )
  	ot_register_meta_box( $meta_box_blog );
  ot_register_meta_box( $my_meta_box );
  $post_id = isset( $_GET['post'] ) ? $_GET['post'] : ( isset( $_POST['post_ID'] ) ? $_POST['post_ID'] : 0 );
  $template_file = get_post_meta($post_id, '_wp_page_template', TRUE);
  if ( $template_file == 'main-page.php' ){
    ot_register_meta_box( $main_page );
  }
  if ( $template_file == 'contact-page.php' ){
    ot_register_meta_box( $meta_box_contact );
  }
  if ( $template_file == 'product-page.php' ){
    ot_register_meta_box( $meta_box_product );
  }

}