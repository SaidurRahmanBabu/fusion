<?php
  function fusion_team($atts, $content=null){
    extract(shortcode_atts(array(
      'section_title' => '',
      //team param group
      'tema_group'   => '',
      'image'        => '',
      'name'         => '',
      'designation'  => '',
      'content'      => '',
      'icon1'        => '',
      'icon2'        => '',
      'icon3'        => '',
      'social1'      => '',
      'social2'      => '',
      'social3'      => '',

    ), $atts));

    ob_start();


    ?>

<!-- Team Section Start -->
    <section id="team" class="section-padding bg-gray">
      <div class="container">
        <div class="section-header text-center">          
          <h2 class="section-title wow fadeInDown" data-wow-delay="0.3s">
            <?php echo esc_html($section_title); ?>
          </h2>
          <div class="shape wow fadeInDown" data-wow-delay="0.3s"></div>
        </div>
        <div class="row">

          <?php
            $tema_groups = vc_param_group_parse_atts($tema_group);
            foreach($tema_groups as $team):
          ?>

          <div class="col-lg-6 col-md-12 col-xs-12">
            <!-- Team Item Starts -->
            <div class="team-item wow fadeInRight" data-wow-delay="0.2s">
              <div class="team-img">

              <?php
                $image = wp_get_attachment_image_src($team['image'], 'full');
                if($image):
              ?>
              <img class="img-fluid" src="<?php echo esc_url($image[0]); ?>" alt="">
            <?php endif; ?>

              </div>

              <div class="contetn">
                <div class="info-text">

                  <h3><a href="#"><?php echo esc_html($team['name']); ?></a></h3>
                  <p><?php echo esc_html($team['designation']); ?></p>

                </div>
                <p>
                  <?php
                    $content = wpb_js_remove_wpautop($team['content'], true);
                      echo $content;
                  ?>
                </p>
                <ul class="social-icons">

                  <?php
                    $icon1 = vc_build_link($team['icon1']);
                    $icon2 = vc_build_link($team['icon2']);
                    $icon3 = vc_build_link($team['icon3']);
                  ?>

                  <li>
                    <a href="<?php echo esc_url($icon1['url']); ?>">
                      <i class="<?php echo esc_attr($team['social1']); ?>" aria-hidden="true"></i>
                    </a>
                  </li>
                  
                  <li>
                    <a href="<?php echo esc_url($icon2['url']); ?>">
                      <i class="<?php echo esc_attr($team['social2']); ?>" aria-hidden="true"></i>
                    </a>
                  </li>
                  
                  <li>
                    <a href="<?php echo esc_url($icon3['url']); ?>">
                      <i class="<?php echo esc_attr($team['social3']); ?>" aria-hidden="true"></i>
                    </a>
                  </li>

                </ul>
              </div>
            </div>
            <!-- Team Item Ends -->
          </div>

        <?php endforeach; ?>

        </div>
      </div>
    </section>
    <!-- Team Section End -->


  <?php

  return ob_get_clean();
}
add_shortcode('team', 'fusion_team');

