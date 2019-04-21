<?php
  function fusion_about($atts, $content=null){
    extract(shortcode_atts(array(
      'sub_title'   => '',
      'title'       => '',
      'button'      => '',
      'image'       => ''

    ), $atts));

    $content = wpb_js_remove_wpautop($content, true);

    ob_start();


    ?>

<!-- About Section start -->
    <div class="about-area section-padding bg-gray">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 col-md-12 col-xs-12 info">
            <div class="about-wrapper wow fadeInLeft" data-wow-delay="0.3s">
              <div>
                <div class="site-heading">
                  <p class="mb-3"><?php echo esc_html($sub_title); ?></p>
                  <h2 class="section-title"><?php echo esc_html($title); ?></h2>
                </div>
                <div class="content">
                  <p>
                    <?php echo $content; ?>
                  </p>
                  <a href="#" class="btn btn-common mt-3">
                    <?php echo esc_html($button); ?>
                  </a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-md-12 col-xs-12 wow fadeInRight" data-wow-delay="0.3s">

            <?php
              $image = wp_get_attachment_image_src($image, 'full');
              if($image):
            ?>
            <img class="img-fluid" src="<?php echo esc_url($image[0]); ?>">
          <?php endif; ?>

          </div>
        </div>
      </div>
    </div>
    <!-- About Section End -->


  <?php

  return ob_get_clean();
}
add_shortcode('about', 'fusion_about');