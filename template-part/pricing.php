<?php
  function pricing_team($atts, $content=null){ 
?>

 <!-- Pricing section Start --> 
    <section id="pricing" class="section-padding">
      <div class="container">
        <div class="section-header text-center">          
          <h2 class="section-title wow fadeInDown" data-wow-delay="0.3s">Pricing</h2>
          <div class="shape wow fadeInDown" data-wow-delay="0.3s"></div>
        </div>
        <div class="row">
          <div class="col-lg-4 col-md-6 col-xs-12">
            <div class="table wow fadeInLeft" data-wow-delay="1.2s">
              <div class="icon-box">
                <i class="lni-package"></i>
              </div>
              <div class="pricing-header">
                <p class="price-value">$10<span> /mo</span></p>
              </div>
              <div class="title">
                <h3>Pro</h3>
              </div>
              <ul class="description">
                <li>1 user</li>
                <li>10 GB storage</li>
                <li>Email support</li>
                <li>Lifetime updates</li>
              </ul>
              <button class="btn btn-common">Buy Now</button>
            </div> 
          </div>
          <div class="col-lg-4 col-md-6 col-xs-12 active">
            <div class="table wow fadeInUp" id="active-tb" data-wow-delay="1.2s">
              <div class="icon-box">
                <i class="lni-drop"></i>
              </div>
              <div class="pricing-header">
                <p class="price-value">$35<span> /mo</span></p>
              </div>
              <div class="title">
                <h3>Plus</h3>
              </div>
              <ul class="description">
                <li>10 user</li>
                <li>30 GB storage</li>
                <li>Priority email support</li>
                <li>Lifetime updates</li>
              </ul>
              <button class="btn btn-common">Buy Now</button>
           </div> 
          </div>
          <div class="col-lg-4 col-md-6 col-xs-12">
            <div class="table wow fadeInRight" data-wow-delay="1.2s">
              <div class="icon-box">
                <i class="lni-star"></i>
              </div>
              <div class="pricing-header">
                <p class="price-value">$150<span> /mo</span></p>
              </div>
              <div class="title">
                <h3>Premium</h3>
              </div>
              <ul class="description">
                <li>Unlimited users</li>
                <li>Unlimited storage</li>
                <li>24/7 support</li>
                <li>Lifetime updates</li>
              </ul>
              <button class="btn btn-common">Buy Now</button>
            </div> 
          </div>
        </div>
      </div>
    </section>
    <!-- Pricing Table Section End -->

<?php  
}
add_shortcode('pricing', 'pricing_team');
    ?>