<?php
  function fusion_testimonial($atts, $content=null){ 
    ob_start();
?>

<!-- Testimonial Section Start -->
    <section id="testimonial" class="testimonial section-padding">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div id="testimonials" class="owl-carousel wow fadeInUp" data-wow-delay="1.2s">
              <div class="item">
                <div class="testimonial-item">
                  <div class="img-thumb">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/testimonial/img1.jpg" alt="">
                  </div>
                  <div class="info">
                    <h2><a href="#">David Smith</a></h2>
                    <h3><a href="#">Creative Head</a></h3>
                  </div>
                  <div class="content">
                    <p class="description">Praesent cursus nulla non arcu tempor, ut egestas elit tempus. In ac ex fermentum, gravida felis nec, tincidunt ligula.</p>
                    <div class="star-icon mt-3">
                      <span><i class="lni-star-filled"></i></span>
                      <span><i class="lni-star-filled"></i></span>
                      <span><i class="lni-star-filled"></i></span>
                      <span><i class="lni-star-filled"></i></span>
                      <span><i class="lni-star-half"></i></span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimonial-item">
                  <div class="img-thumb">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/testimonial/img2.jpg" alt="">
                  </div>
                  <div class="info">
                    <h2><a href="#">Domeni GEsson</a></h2>
                    <h3><a href="#">Awesome Technology co.</a></h3>
                  </div>
                  <div class="content">
                    <p class="description">Praesent cursus nulla non arcu tempor, ut egestas elit tempus. In ac ex fermentum, gravida felis nec, tincidunt ligula.</p>
                    <div class="star-icon mt-3">
                      <span><i class="lni-star-filled"></i></span>
                      <span><i class="lni-star-filled"></i></span>
                      <span><i class="lni-star-filled"></i></span>
                      <span><i class="lni-star-half"></i></span>
                      <span><i class="lni-star-half"></i></span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimonial-item">
                  <div class="img-thumb">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/testimonial/img3.jpg" alt="">
                  </div>
                  <div class="info">
                    <h2><a href="#">Dommini Albert</a></h2>
                    <h3><a href="#">Nesnal Design co.</a></h3>
                  </div>
                  <div class="content">
                    <p class="description">Praesent cursus nulla non arcu tempor, ut egestas elit tempus. In ac ex fermentum, gravida felis nec, tincidunt ligula.</p>
                    <div class="star-icon mt-3">
                      <span><i class="lni-star-filled"></i></span>
                      <span><i class="lni-star-filled"></i></span>
                      <span><i class="lni-star-filled"></i></span>
                      <span><i class="lni-star-filled"></i></span>
                      <span><i class="lni-star-half"></i></span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimonial-item">
                  <div class="img-thumb">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/testimonial/img4.jpg" alt="">
                  </div>
                  <div class="info">
                    <h2><a href="#">Fernanda Anaya</a></h2>
                    <h3><a href="#">Developer</a></h3>
                  </div>
                  <div class="content">
                    <p class="description">Praesent cursus nulla non arcu tempor, ut egestas elit tempus. In ac ex fermentum, gravida felis nec, tincidunt ligula.</p>
                    <div class="star-icon mt-3">
                      <span><i class="lni-star-filled"></i></span>
                      <span><i class="lni-star-filled"></i></span>
                      <span><i class="lni-star-half"></i></span>
                      <span><i class="lni-star-half"></i></span>
                      <span><i class="lni-star-half"></i></span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Testimonial Section End -->
<?php 
return ob_get_clean(); 
}
add_shortcode('testimonial', 'fusion_testimonial');
    ?>