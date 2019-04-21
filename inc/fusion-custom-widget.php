<?php

	class fusion_footer_one extends WP_Widget {

		public function __construct(){
			parent::__construct(
				'fusion_footer_one',
				esc_html__('Fusion Footer 1', 'fusion' ),
				array(
					'description' => esc_html('Footer with logo img and texts', 'fusion')
				)
			);
		} //end of parent construct


		//Create fields for the widget element
		public function form($instance){ //all field values are stored in $instance
			$title = !empty($instance['title']) ? $instance['title'] : esc_html__('Title', 'fusion');

			$textare = $instance['textare'];

			$image 	 = $instance['image'];

			?>
			<!-- title filed -->
			<p>
				<label for="<?php echo esc_attr($this->get_field_id('title')); ?>">
					<?php echo esc_html__('Title', 'fusion'); ?>
				</label>
				<input 
					type="text"
					class="widefat"
					id="<?php echo esc_attr($this->get_field_id('title')); ?>" 
					name="<?php echo esc_attr($this->get_field_name('title')); ?>"
					value="<?php echo esc_attr($title); ?>" 
					>
			</p>
			
			<!-- textarea -->
			<p>
				<label for="<?php echo esc_attr($this->get_field_id('textare')); ?>">
					<?php echo esc_html__('Description', 'fusion'); ?>
				</label>
					<textarea 
						type="editor"
						name="<?php echo esc_attr($this->get_field_name('textare')); ?>" 
						class="widefat"
						id="<?php echo esc_attr($this->get_field_id('textare')); ?>" 
						rows="5" 
						value="<?php echo esc_attr($textare); ?>"

					>
						
					</textarea>
			</p>
			
			<!-- Image Upload -->
			<p>
				<label for="<?php echo esc_attr($this->get_field_id('image')); ?>">
					<?php echo esc_html__('Image Upload', 'fusion'); ?>
				</label>
					<input 
						type="file"
						name="<?php echo esc_attr($this->get_field_name('image')); ?>" 
						class="button select-media not-selected"
						id="<?php echo esc_attr($this->get_field_id('image')); ?>" 
						value="<?php echo esc_attr($image); ?>"

					>
			</p>

		<?php 

		}//end fucntion form


	} //end of class

	register_widget('fusion_footer_one');
