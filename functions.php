<?php
	//theme scripts
	require_once(get_theme_file_path( 'inc/fusion-scripts.php' ));

	//theme after setup hook
	require_once(get_theme_file_path( 'inc/fusion-setup-theme.php' ));

	//theme widgets
	require_once(get_theme_file_path( 'inc/fusion-widget.php' ));

	//theme init hook
	require_once(get_theme_file_path( 'inc/fusion-init.php' ));


	//VC shorcodes
	require_once(get_theme_file_path('template-part/service.php'));
	require_once(get_theme_file_path('template-part/about.php'));
	require_once(get_theme_file_path('template-part/feature.php'));
	require_once(get_theme_file_path('template-part/team.php'));
	require_once(get_theme_file_path('template-part/pricing.php'));
	require_once(get_theme_file_path('template-part/testimonial.php'));
	require_once(get_theme_file_path('template-part/cta.php'));
	require_once(get_theme_file_path('template-part/contact.php'));


	//VC element file
	require_once(get_theme_file_path('inc/fusion-vc.php'));


	/*
		//back end form fucntion
		public function form($instance){ 
			$title = !empty($instance['title']) ? $instance['title'] : esc_html__('Title', 'hexa');

			?>
			<p>
				<label for="<?php echo esc_attr($this->get_field_id('title')); ?>">
					<?php echo esc_html__('Title', 'hexa'); ?>
				</label>
				<input 
					type="text"
					class="widefat"
					id="<?php echo esc_attr($this->get_field_id('title')); ?>" 
					name="<?php echo esc_attr($this->get_field_name('title')); ?>"
					value="<?php echo esc_attr($title); ?>" 
					>
			</p>

		<?php 
		}//end form function


		//function widget to show the Value in fornt end
		public function widget($args, $instance){
			$title = !empty($instance['title']) ? $instance['title'] : esc_html__('Title', 'hexa');

			echo $args['before_widget'];

			echo $args['before_title'] . $title . $args['after_title'];
			echo '<div class="text-center">' . get_avatar(get_the_author_meta('ID')) . '</div>';
			echo '<h3 class="text-center">' . get_the_author_meta('display_name') . '</h3>';
			echo get_the_author_meta('description');


			echo $args['after_widget'];
		}//end widget function

		//function update
		public function update($new_instance, $old_instance){
			$instance = [];
			$instance['title'] = !empty($new_instance['title']) ? $new_instance['title'] : '';

			return $instance;

		}//edn update function

	}//end class

