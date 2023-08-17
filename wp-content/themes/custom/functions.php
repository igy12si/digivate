<?php
//Add dynamic title tag
	function custom_theme_support(){
		add_theme_support('title-tag');
	}
	add_action('after_setup_theme', 'custom_theme_support');

//Add styles
	function custom_register_styles(){
		$version = wp_get_theme() -> get('Version');
		wp_enqueue_style('custom', get_template_directory_uri() . "/style.css", array('custom_bootstrap'), $version, 'all');
		wp_enqueue_style('custom_bootstrap', "https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css", array(), '5.3.1', 'all');

	}

	add_action('wp_enqueue_scripts', 'custom_register_styles');

//Add scripts
	function custom_register_scripts(){
		
		wp_enqueue_script('custom_bootstrap', "https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js", array(), '5.3.1', true);
		wp_enqueue_script('custom',  get_template_directory_uri() . "/assets/js/main.js", array(), '1.0', true);

	}

	add_action('wp_enqueue_scripts', 'custom_register_scripts');

//widget individuals
	function custom_init_widgets($id){
		register_sidebar(
			array(
				'name' => 'Box1',
				'id' => 'box1',
				'before_widget' => '<div class="box">',
				'after_widget' => '</div>',
				'before_title' => '<h3>',
				'before_title' => '<h3>',
			)
		);
		register_sidebar(array(
			'name' => 'Box2',
			'id' => 'box2',
			'before_widget' => '<div class="box">',
			'after_widget' => '</div>',
			'before_title' => '<h3>',
			'before_title' => '<h3>',
		));
		register_sidebar(array(
			'name' => 'Box3',
			'id' => 'box3',
			'before_widget' => '<div class="box">',
			'after_widget' => '</div>',
			'before_title' => '<h3>',
			'before_title' => '<h3>',
		));
	}


	add_action('widgets_init', 'custom_init_widgets');


	// Customizer

	function custom_customize_register($wp_customize){
		/* "Banner" */
		$wp_customize->add_section('banner', array(
		'title' => __('Banner', 'custom'),
		'description' => sprintf(__('Options for banner', 'custom')),
		'priority' => 1
		));
		// Title
		$wp_customize->add_setting('banner_heading', array(
			'default' => _x('Title of banner', 'custom'),
			'type' => 'theme_mod'
		));

		$wp_customize->add_control('banner_heading', array(
			'label' => __('Title', 'custom'),
			'section' => 'banner',
			'priority' => 1
		));
		// Image
		$wp_customize->add_setting('banner_image', array(
			'default' => get_template_directory_uri().'/assets/images/Rectangle1260.jpg', 
			'type' => 'theme_mod'
		));
		$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'banner_image', array(
			'label' => __('Banner image', 'custom'),
			'section' => 'banner',
			'settings' => 'banner_image',
			'priority' => 2
		)));
		// Text
		$wp_customize->add_setting('banner_text', array(
			'default' => _x('Text', 'custom'),
			'type' => 'theme_mod'
		));

		$wp_customize->add_control('banner_text', array(
			'label' => __('Text', 'custom'),
			'section' => 'banner',
			'priority' => 3
		));

		/* /Banner */

		/* Images with individual texts and buttons */

		$wp_customize->add_section('imageTextButton', array(
		'title' => __('Images with individual texts and buttons', 'custom'),
		'description' => sprintf(__('Options for images with individual texts and buttons', 'custom')),
		'priority' => 2
		));

		// Title
		$wp_customize->add_setting('imageTextButton_heading', array(
			'default' => _x('Title', 'custom'),
			'type' => 'theme_mod'
		));

		$wp_customize->add_control('imageTextButton_heading', array(
			'label' => __('Title', 'custom'),
			'section' => 'imageTextButton',
			'priority' => 1
		));

		// Text
		$wp_customize->add_setting('imageTextButton_text_top', array(
			'default' => _x('Text', 'custom'),
			'type' => 'theme_mod'
		));

		$wp_customize->add_control('imageTextButton_text_top', array(
			'label' => __('Text', 'custom'),
			'section' => 'imageTextButton',
			'priority' => 2
		));

		// Box1
		// Box1 image
		$wp_customize->add_setting('imageTextButton_image', array(
			'default' => get_template_directory_uri().'/assets/images/Rectangle 1286.png', 
			'type' => 'theme_mod'
		));
		$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'imageTextButton_image', array(
			'label' => __('Box 1 Image', 'custom'),
			'section' => 'imageTextButton',
			'settings' => 'imageTextButton_image',
			'priority' => 3
		)));
		// Box1 text
		$wp_customize->add_setting('imageTextButton_text', array(
			'default' => _x('Box 1 Text', 'custom'),
			'type' => 'theme_mod'
		));

		$wp_customize->add_control('imageTextButton_text', array(
			'label' => __('Box 1 Text', 'custom'),
			'section' => 'imageTextButton',
			'priority' => 4
		));

		// Box1 button url
		$wp_customize->add_setting('imageTextButton_button_url', array(
			'default' => _x('#', 'custom'),
			'type' => 'theme_mod'
		));

		$wp_customize->add_control('imageTextButton_button_url', array(
			'label' => __('Box 1 Button Url', 'custom'),
			'section' => 'imageTextButton',
			'priority' => 5
		));

		// Box1 button text
		$wp_customize->add_setting('imageTextButton_button_text', array(
			'default' => _x('Box 1 Button Text', 'custom'),
			'type' => 'theme_mod'
		));

		$wp_customize->add_control('imageTextButton_button_text', array(
			'label' => __('Box 1 Button Text', 'custom'),
			'section' => 'imageTextButton',
			'priority' => 6
		));

		// Box2
		// Box2 image
		$wp_customize->add_setting('imageTextButton_image2', array(
			'default' => get_template_directory_uri().'/assets/images/Rectangle 1286(1).png', 
			'type' => 'theme_mod'
		));
		$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'imageTextButton_image2', array(
			'label' => __('Box 2 Image', 'custom'),
			'section' => 'imageTextButton',
			'settings' => 'imageTextButton_image2',
			'priority' => 7
		)));
		// Box2 text
		$wp_customize->add_setting('imageTextButton_text2', array(
			'default' => _x('Box 2 Text', 'custom'),
			'type' => 'theme_mod'
		));

		$wp_customize->add_control('imageTextButton_text2', array(
			'label' => __('Box 2 Text', 'custom'),
			'section' => 'imageTextButton',
			'priority' => 8
		));

		// Box2 button url
		$wp_customize->add_setting('imageTextButton_button_url2', array(
			'default' => _x('#', 'custom'),
			'type' => 'theme_mod'
		));

		$wp_customize->add_control('imageTextButton_button_url2', array(
			'label' => __('Box 2 Button Url', 'custom'),
			'section' => 'imageTextButton',
			'priority' => 9
		));

		// Box2 button text
		$wp_customize->add_setting('imageTextButton_button_text2', array(
			'default' => _x('Box 2 Button Text', 'custom'),
			'type' => 'theme_mod'
		));

		$wp_customize->add_control('imageTextButton_button_text2', array(
			'label' => __('Box 2 Button Text', 'custom'),
			'section' => 'imageTextButton',
			'priority' => 10
		));

		// Box3
		// Box3 image
		$wp_customize->add_setting('imageTextButton_image3', array(
			'default' => get_template_directory_uri().'/assets/images/Rectangle 1286(2).png', 
			'type' => 'theme_mod'
		));
		$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'imageTextButton_image3', array(
			'label' => __('Box 3 Image', 'custom'),
			'section' => 'imageTextButton',
			'settings' => 'imageTextButton_image3',
			'priority' => 11
		)));
		// Box3 text
		$wp_customize->add_setting('imageTextButton_text3', array(
			'default' => _x('Box 3 Text', 'custom'),
			'type' => 'theme_mod'
		));

		$wp_customize->add_control('imageTextButton_text3', array(
			'label' => __('Box 3 Text', 'custom'),
			'section' => 'imageTextButton',
			'priority' => 12
		));

		// Box3 button url
		$wp_customize->add_setting('imageTextButton_button_url3', array(
			'default' => _x('#', 'custom'),
			'type' => 'theme_mod'
		));

		$wp_customize->add_control('imageTextButton_button_url3', array(
			'label' => __('Box 3 Button Url', 'custom'),
			'section' => 'imageTextButton',
			'priority' => 13
		));

		// Box3 button text
		$wp_customize->add_setting('imageTextButton_button_text3', array(
			'default' => _x('Box 3 Button Text', 'custom'),
			'type' => 'theme_mod'
		));

		$wp_customize->add_control('imageTextButton_button_text3', array(
			'label' => __('Box 3 Button Text', 'custom'),
			'section' => 'imageTextButton',
			'priority' => 14
		));

	}
	add_action('customize_register', 'custom_customize_register');
?>