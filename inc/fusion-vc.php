<?php
	function fusion_vc_element(){

		//Section hero
		vc_map(array(
			'name' 										=> __('service', 'fusion'),
			'description' 						=> __('service Area', 'fusion'),
			'base' 										=> 'service',
			'icon' 										=> '',
			'show_settings_on_create' => true,
			'category' 								=> __('Fusion Content', 'fusion'),
			'params' 									=> array(

				array(
					'param_name' 	=> 'title',
					'type' 				=> 'textfield',
					'heading' 		=> __('Title', 'fusion'),
					'description' => __('Service Section Title', 'fusion')
				),

				array(
					'param_name' => 'service_group',
					'type'			 => 'param_group',
					'heading'		 => __('Signle Service', 'fusion'),
					'params'		 => array(

					array(
						'param_name' 	=> 'icon',
						'type' 				=> 'iconpicker',
						'heading' 		=> __('Icon', 'fusion'),
						'description' => __('Service Icon', 'fusion')
					),

					array(
						'param_name' 	=> 'sub_title',
						'type' 				=> 'textfield',
						'heading' 		=> __('Title', 'fusion'),
						'description' => __('Element Title', 'fusion')
					),

					array(
						'param_name' 	=> 'text',
						'type' 				=> 'textarea',
						'heading' 		=> __('Text', 'fusion'),
						'description' => __('Section Description Text', 'fusion')
					),


				)),

			)
		));
		//end of hero Section 


		//Section about
		vc_map(array(
			'name' 										=> __('About', 'fusion'),
			'description' 						=> __('About Section', 'fusion'),
			'base' 										=> 'about',
			'icon' 										=> '',
			'show_settings_on_create' => true,
			'category' 								=> __('Fusion Content', 'fusion'),
			'params' 									=> array(

				array(
					'param_name' 	=> 'sub_title',
					'type' 				=> 'textfield',
					'heading' 		=> __('Title', 'fusion'),
					'description' => __('Sub Title', 'fusion')
				),

				array(
					'param_name' 	=> 'title',
					'type' 				=> 'textfield',
					'heading' 		=> __('Title', 'fusion'),
					'description' => __('About Section Title', 'fusion')
				),

				array(
					'param_name' 	=> 'button',
					'type' 				=> 'textfield',
					'heading' 		=> __('Button', 'fusion'),
					'description' => __('Button Text', 'fusion')
				),

				array(
					'param_name' 	=> 'content',
					'type' 				=> 'textarea_html',
					'heading' 		=> __('Text', 'fusion'),
					'description' => __('About Description Text', 'fusion')
				),

				array(
					'param_name' 	=> 'image',
					'type' 				=> 'attach_image',
					'heading' 		=> __('Image', 'fusion'),
					'description' => __('Upload Image', 'fusion')
				),

			)
		));
		//end of about Section 


		//Section Feature
		vc_map(array(
			'name' 										=> __('Feature', 'fusion'),
			'description' 						=> __('Feature Section', 'fusion'),
			'base' 										=> 'feature',
			'icon' 										=> '',
			'show_settings_on_create' => true,
			'category' 								=> __('Fusion Content', 'fusion'),
			'params' 									=> array(

				array(
					'param_name' 	=> 'section_title',
					'type' 				=> 'textfield',
					'heading' 		=> __('Title', 'fusion'),
					'description' => __('Feature Section Title', 'fusion')
				),

				array(
					'param_name' 	=> 'image',
					'type' 				=> 'attach_image',
					'heading' 		=> __('Image', 'fusion'),
					'description' => __('Upload Image', 'fusion')
				),
				//left side content
				array(
					'param_name' => 'feature_left_group',
					'type'			 => 'param_group',
					'heading'		 => __('Feature Left Side Content', 'fusion'),
					'params'		 => array(

					array(
						'param_name' 	=> 'icon',
						'type' 				=> 'iconpicker',
						'heading' 		=> __('Icon', 'fusion'),
						'description' => __('Feature Icon', 'fusion')
					),

					array(
						'param_name' 	=> 'title',
						'type' 				=> 'textfield',
						'heading' 		=> __('Title', 'fusion'),
						'description' => __('Element Title', 'fusion')
					),

					array(
						'param_name' 	=> 'text',
						'type' 				=> 'textarea',
						'heading' 		=> __('Text', 'fusion'),
						'description' => __('Section Description Text', 'fusion')
					),


				)),

				//Right side content
				array(
					'param_name' => 'feature_right_group',
					'type'			 => 'param_group',
					'heading'		 => __('Feature Left Side Content', 'fusion'),
					'params'		 => array(

					array(
						'param_name' 	=> 'icon2',
						'type' 				=> 'iconpicker',
						'heading' 		=> __('Icon', 'fusion'),
						'description' => __('Feature Icon', 'fusion')
					),

					array(
						'param_name' 	=> 'title2',
						'type' 				=> 'textfield',
						'heading' 		=> __('Title', 'fusion'),
						'description' => __('Element Title', 'fusion')
					),

					array(
						'param_name' 	=> 'text2',
						'type' 				=> 'textarea',
						'heading' 		=> __('Text', 'fusion'),
						'description' => __('Section Description Text', 'fusion')
					),


				)),

			)
		));
		//end of feature Section 


		//Section OUrTeam
		vc_map(array(
			'name' 										=> __('Team', 'fusion'),
			'description' 						=> __('Team Section', 'fusion'),
			'base' 										=> 'team',
			'icon' 										=> '',
			'show_settings_on_create' => true,
			'category' 								=> __('Fusion Content', 'fusion'),
			'params' 									=> array(

				array(
					'param_name' 	=> 'section_title',
					'type' 				=> 'textfield',
					'heading' 		=> __('Title', 'fusion'),
					'description' => __('Team Section Title', 'fusion')
				),
				//team details
				array(
					'param_name' => 'tema_group',
					'type'			 => 'param_group',
					'heading'		 => __('Team Content', 'fusion'),
					'params'		 => array(

					array(
						'param_name' 	=> 'image',
						'type' 				=> 'attach_image',
						'heading' 		=> __('Image', 'fusion'),
						'description' => __('Upload Image', 'fusion')
					),

					array(
						'param_name' 	=> 'name',
						'type' 				=> 'textfield',
						'heading' 		=> __('Name', 'fusion'),
						'description' => __('Name of the team member', 'fusion')
					),

					array(
						'param_name' 	=> 'designation',
						'type' 				=> 'textfield',
						'heading' 		=> __('Designation', 'fusion'),
						'description' => __('Designation of the team member', 'fusion')
					),

					array(
						'param_name' 	=> 'icon1',
						'type' 				=> 'vc_link',
						'heading' 		=> __('Link', 'fusion'),
						'description' => __('Social Contact Link', 'fusion')
					),

					array(
						'param_name' 	=> 'social1',
						'type' 				=> 'iconpicker',
						'heading' 		=> __('Icon', 'fusion'),
						'description' => __('Social Icon', 'fusion')
					),

					array(
						'param_name' 	=> 'icon2',
						'type' 				=> 'vc_link',
						'heading' 		=> __('Link', 'fusion'),
						'description' => __('Social Contact Link', 'fusion')
					),

					array(
						'param_name' 	=> 'social2',
						'type' 				=> 'iconpicker',
						'heading' 		=> __('Icon', 'fusion'),
						'description' => __('Social Icon', 'fusion')
					),

					array(
						'param_name' 	=> 'icon3',
						'type' 				=> 'vc_link',
						'heading' 		=> __('Link', 'fusion'),
						'description' => __('Social Contact Link', 'fusion')
					),

					array(
						'param_name' 	=> 'social3',
						'type' 				=> 'iconpicker',
						'heading' 		=> __('Icon', 'fusion'),
						'description' => __('Social Icon', 'fusion')
					),

					array(
						'param_name' 	=> 'content',
						'type' 				=> 'textarea_html',
						'heading' 		=> __('Text', 'fusion'),
						'description' => __('Details of the team member', 'fusion')
					),


				)),

			)
		));
		//end of out team Section 

		


	} //end functfusion fusion_vc_element
	add_action('vc_before_init', 'fusion_vc_element');