<?php
	function fusion_scripts(){
		//css files
		wp_enqueue_style( 'fusion-bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css','null','all');

		wp_enqueue_style( 'fusion-fontawesome', '//stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');

		wp_enqueue_style( 'fusion-line-icons', get_template_directory_uri() . '/assets/fonts/line-icons.css','null','all');

		wp_enqueue_style( 'fusion-carousel', get_template_directory_uri() . '/assets/css/owl.carousel.min.css','null','all');

		wp_enqueue_style( 'fusion-owl', get_template_directory_uri() . '/assets/css/owl.theme.css','null','all');

		wp_enqueue_style( 'fusion-animate', get_template_directory_uri() . '/assets/css/animate.css','null','all');

		wp_enqueue_style( 'fusion-main', get_template_directory_uri() . '/assets/css/main.css','null','all');

		wp_enqueue_style( 'fusion-responsive', get_template_directory_uri() . '/assets/css/responsive.css','null','all');

		wp_enqueue_style( 'theme-style', get_stylesheet_uri(), time(), 'all' );


		//js files
		wp_enqueue_script( 'fusion-popper', get_template_directory_uri() . '/assets/js/popper.min.js', array ( 'jquery' ), null, true);

		wp_enqueue_script( 'fusion-bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array ( 'jquery' ), null, true);

		wp_enqueue_script( 'fusion-carousel', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', array ( 'jquery' ), null, true);

		wp_enqueue_script( 'fusion-wow', get_template_directory_uri() . '/assets/js/wow.js', array ( 'jquery' ), null, true);

		wp_enqueue_script( 'fusion-jquery-nav', get_template_directory_uri() . '/assets/js/jquery.nav.js', array ( 'jquery' ), null, true);

		wp_enqueue_script( 'fusion-scrolling', get_template_directory_uri() . '/assets/js/scrolling-nav.js', array ( 'jquery' ), null, true);

		wp_enqueue_script( 'fusion-easing', get_template_directory_uri() . '/assets/js/jquery.easing.min.js', array ( 'jquery' ), null, true);

		wp_enqueue_script( 'fusion-main', get_template_directory_uri() . '/assets/js/main.js', array ( 'jquery' ), null, true);

		wp_enqueue_script( 'fusion-validator', get_template_directory_uri() . '/assets/js/form-validator.min.js', array ( 'jquery' ), null, true);

		wp_enqueue_script( 'fusion-contact-form', get_template_directory_uri() . '/assets/js/contact-form-script.min.js', array ( 'jquery' ), null, true);

	}
	add_action('wp_enqueue_scripts', 'fusion_scripts');
      