<div class="super_container">
  
  <!-- Home -->
  <div class="home">
    
    <!-- Home Slider -->
    <div class="home_slider_container">
      <div class="owl-carousel owl-theme home_slider">

        <?php foreach ($slider as $list) { ?>
        <!-- Home Slider Item -->
        <div class="owl-item home_slider_item">
          <!-- Image by https://unsplash.com/@aahubs -->
          <div class="home_slider_background" style="background-image:url(<?php echo base_url('assets/images/slider/');?><?php echo $list['slider_gambar']?>)"></div>
          <div class="home_slider_content_container text-center">
            <div class="home_slider_content">
              <h1 data-animation-in="flipInX" data-animation-out="animate-out fadeOut">find your home</h1>
            </div>
          </div>
        </div>
      <?php } ?>
    </div>
        
      
      <!-- Home Slider Nav -->
      <div class="home_slider_nav_left home_slider_nav d-flex flex-row align-items-center justify-content-end">
        <img src="<?php echo base_url('assets/');?>images/nav_left.png" alt="">
      </div>

    </div>

  </div>