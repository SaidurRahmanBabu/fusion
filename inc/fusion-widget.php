<?php
	function fustion_widget(){
		//footer widget
		register_sidebar(array(
		'name'          => __( 'Footer Menu', 'fusion' ),
		'id'            => 'fusion_footer_menu',
		'description'   => 'Footer Menu',
		'before_title'  => '<h3 class="footer-titel">',
		'after_title'   => '</h3>',
		'before_widget' => '<li id="%1$s" class="widget %2$s">',
		'after_widget'  => '</li>'
		));


	//custom widgets
	require_once('fusion-custom-widget.php' );

	}
	add_action('widgets_init', 'fustion_widget');