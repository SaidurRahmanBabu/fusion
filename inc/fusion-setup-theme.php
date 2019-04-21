<?php
	if(! function_exists('fusion_theme_setup')):
		function fusion_theme_setup(){
			//load text domain
			load_theme_textdomain( 'fusion', get_template_directory() . '/languages' );
			//theme supports
			require_once('fusion-theme-supports.php');
		}
		add_action('after_setup_theme', 'fusion_theme_setup');
	endif;