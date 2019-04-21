<?php
  function fusion_feature($atts){
    extract(shortcode_atts(array(
      'section_title' => '',
      'image'         => '',
      //left side content
      'feature_left_group' => '',
      'icon'                => '',
      'title'               => '',
      'text'                => '',
      //right side content
      'feature_right_group'  => '',
      'icon2'                => '',
      'title2'               => '',
      'text2'                => '',

    ), $atts));

    // $content = wpb_js_remove_wpautop($content, true);

    ob_start();


    ?>


<!-- Features Section Start -->
    <section id="features" class="section-padding">
      <div class="container">
        <div class="section-header text-center">          
          <h2 class="section-title wow fadeInDown" data-wow-delay="0.3s">
            <?php echo esc_html($section_title); ?>
          </h2>
          <div class="shape wow fadeInDown" data-wow-delay="0.3s"></div>
        </div>
        <div class="row">

          <!-- left side content -->

          <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">

          <?php
            $feature_left = vc_param_group_parse_atts($feature_left_group);
            foreach($feature_left as $left):
          ?>
            <div class="content-left">
              <div class="box-item wow fadeInLeft" data-wow-delay="0.3s">
                <span class="icon">
                  <i class="<?php echo esc_attr($left['icon']); ?>"></i>
                </span>
                <div class="text">
                  <h4><?php echo esc_attr($left['title']); ?></h4>
                  <p><?php echo esc_attr($left['text']); ?></p>
                </div>
              </div>
            </div>

        <?php endforeach; ?>

          </div>

        <!-- middle content image -->
          <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
            <div class="show-box wow fadeInUp" data-wow-delay="0.3s">

              <?php
                $image = wp_get_attachment_image_src($image, 'full');
                if($image):
              ?>
              <img src="<?php echo esc_url($image[0]); ?>" alt="">
            <?php endif; ?>

            </div>
          </div>

        <!-- right side content -->

          <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">

          <?php
            $feature_right = vc_param_group_parse_atts($feature_right_group);
            foreach($feature_right as $right):
          ?>

            <div class="content-right">
              <div class="box-item wow fadeInRight" data-wow-delay="0.3s">
                <span class="icon">
                  <i class="<?php echo esc_attr($right['icon2']); ?>"></i>
                </span>
                <div class="text">
                  <h4><?php echo esc_html($right['title2']); ?></h4>
                  <p><?php echo esc_html($right['text2']); ?></p>
                </div>
              </div>
            </div>
          
        <?php endforeach; ?>
        
          </div>
        </div>
      </div>
    </section>
    <!-- Features Section End --> 


  <?php

  return ob_get_clean();
}
add_shortcode('feature', 'fusion_feature');