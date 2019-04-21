
<?php
  function fusion_service($atts){
    extract(shortcode_atts(array(
      'service_group' => '',
      'title'       => '',
      'icon'        => '',
      'sub_title'   => '',
      'text'     => '',
      'icon'        => ''

    ), $atts));

    ob_start();


    ?>

<!-- Services Section Start -->
    <section id="services" class="section-padding">
      <div class="container">
        <div class="section-header text-center">
          <h2 class="section-title wow fadeInDown" data-wow-delay="0.3s">

          <?php echo esc_html($title); ?>

        </h2>
          <div class="shape wow fadeInDown" data-wow-delay="0.3s"></div>
        </div>
        <div class="row">
          <!-- Services item -->
          <?php
            $services = vc_param_group_parse_atts($service_group);
            foreach($services as $service):
          ?>

          <div class="col-md-6 col-lg-4 col-xs-12">
            <div class="services-item wow fadeInRight" data-wow-delay="0.3s">
              <div class="icon">
                <i class="<?php echo esc_attr($service['icon']); ?>"></i>
              </div>
              <div class="services-content">
                <h3>
                  <a href="#"><?php echo esc_html($service['sub_title']); ?></a>
                </h3>
                <p><?php echo esc_html($service['text']); ?></p>
              </div>
            </div>
          </div>

        <?php endforeach; ?>

        </div>
      </div>
    </section>
    <!-- Services Section End -->


  <?php

  return ob_get_clean();
}
add_shortcode('service', 'fusion_service');