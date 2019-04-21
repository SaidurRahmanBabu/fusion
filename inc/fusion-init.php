<?php
	if( ! function_exists('fusion_init')):

		function fusion_init(){
			//Nav Menu
			register_nav_menus(array(
				'main-menu' 		=> __('Main Menu', 'fusion'),
				'footer-menu'		=> __('Footer Menu', 'fusion'),
				'footer-menu2' 	=> __('Footer Menu2', 'fusion')
			));

	//menu class
		function add_menuclass($ulclass) {
		   return preg_replace('/<a /', '<a class="nav-link"', $ulclass);
			}
		add_filter('wp_nav_menu','add_menuclass');

		function add_liclass($liclass) {
		   return preg_replace('/<li /', '<li class="nav-item"', $liclass);
			}
		add_filter('wp_nav_menu','add_liclass');


		}
		add_action('init', 'fusion_init');

	endif;