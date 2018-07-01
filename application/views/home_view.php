<!-- Featured Properties -->
<div class="featured">
  <div class="container">
    <div class="row">
      <div class="col">
        <div class="section_title text-center">
          <h3>featured properties
          </h3>
          <span class="section_subtitle">See our best offers
          </span>
        </div>
      </div>
    </div>
    <div class="row featured_row">
      <?php foreach ($rumah as $list) { ?>
      <div class="col-lg-4 featured_card_col">
        <div class="featured_card_container">
          <div class="card featured_card trans_300">
            <img class="card-img-top" src="<?php echo base_url('assets/images/rumah/')?><?php echo  $list['rumah_gambar1'] ?>">
            <div class="card-body">
              <div class="card-title">
                <a href="<?php echo base_url('rumah/detail/');?><?php echo $list['rumah_id'];?>">
                  <?php echo $list['rumah_nama'];?>
                </a>
              </div>
              <div class="rooms">
                <div class="room">
                  <span class="room_title">Kamar Tidur
                  </span>
                  <div class="room_content">
                    <div class="room_image">
                      <img src="<?php echo base_url('assets/');?>images/bedroom.png" alt="">
                    </div>
                    <span class="room_number">
                      <?php echo $list['rumah_kamar_tidur'] ?>
                    </span>
                  </div>
                </div>
                <div class="room">
                  <span class="room_title">Kamar Mandi
                  </span>
                  <div class="room_content">
                    <div class="room_image">
                      <img src="<?php echo base_url('assets/');?>images/shower.png" alt="">
                    </div>
                    <span class="room_number">
                      <?php echo $list['rumah_kamar_mandi'] ?>
                    </span>
                  </div>
                </div>
                <div class="room">
                  <span class="room_title">Luas Tanah
                  </span>
                  <div class="room_content">
                    <div class="room_image">
                      <img src="<?php echo base_url('assets/');?>images/area.png" >
                    </div>
                    <span class="room_number">
                      <?php echo $list['rumah_luas_tanah'] ?> m
                      <sup>2
                      </sup>
                    </span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="featured_card_box d-flex flex-row align-items-center trans_300">
            <img src="<?php echo base_url('assets/');?>images/tag.svg">
            <div class="featured_card_box_content">
              <div class="featured_card_price_title">Harga
              </div>
              <div class="featured_card_price">Rp. 
                <?php echo number_format($list['rumah_harga']) ?>
              </div>
            </div>
          </div>
        </div>
      </div>
      <?php } ?>
    </div>
  </div>
</div>
<!-- Testimonials -->
<div class="testimonials">
  <div class="testimonials_background_container prlx_parent">
    <div class="testimonials_background prlx" style="background-image:url(images/testimonials_background.jpg)">
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="col">
        <div class="section_title text-center">
          <h3>clients testimonials
          </h3>
          <span class="section_subtitle">See our best offers
          </span>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-10 offset-lg-1">
        <div class="testimonials_slider_container">
          <!-- Testimonials Slider -->
          <div class="owl-carousel owl-theme testimonials_slider">
            <!-- Testimonials Item -->
            <div class="owl-item">
              <div class="testimonials_item text-center">
                <p class="testimonials_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vitae neque libero. Vivamus vel interdum massa. Mauris ut felis vel diam pretium eleifend vel eu neque. Mauris a condimentum tortor. Cras nec molestie est. Nulla vel facilisis metus. Quisque tempus fermentum enim, in feugiat sem laoreet
                </p>
                <div class="testimonial_user">
                  <div class="testimonial_image mx-auto">
                    <img src="<?php echo base_url('assets/')?>images/testimoni/person.jpg" alt="https://unsplash.com/@remdesigns">
                  </div>
                  <div class="testimonial_name">natalie smith
                  </div>
                  <div class="testimonial_title">Client in California
                  </div>
                </div>
              </div>
            </div>
            <!-- Testimonials Item -->
            <div class="owl-item">
              <div class="testimonials_item text-center">
                <p class="testimonials_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vitae neque libero. Vivamus vel interdum massa. Mauris ut felis vel diam pretium eleifend vel eu neque. Mauris a condimentum tortor. Cras nec molestie est. Nulla vel facilisis metus. Quisque tempus fermentum enim, in feugiat sem laoreet
                </p>
                <div class="testimonial_user">
                  <div class="testimonial_image mx-auto">
                    <img src="<?php echo base_url('assets/')?>images/testimoni/person.jpg" alt="https://unsplash.com/@remdesigns">
                  </div>
                  <div class="testimonial_name">natalie smith
                  </div>
                  <div class="testimonial_title">Client in California
                  </div>
                </div>
              </div>
            </div>
            <!-- Testimonials Item -->
            <div class="owl-item">
              <div class="testimonials_item text-center">
                <p class="testimonials_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vitae neque libero. Vivamus vel interdum massa. Mauris ut felis vel diam pretium eleifend vel eu neque. Mauris a condimentum tortor. Cras nec molestie est. Nulla vel facilisis metus. Quisque tempus fermentum enim, in feugiat sem laoreet
                </p>
                <div class="testimonial_user">
                  <div class="testimonial_image mx-auto">
                    <img src="<?php echo base_url('assets/')?>images/testimoni/person.jpg" alt="https://unsplash.com/@remdesigns">
                  </div>
                  <div class="testimonial_name">natalie smith
                  </div>
                  <div class="testimonial_title">Client in California
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Workflow -->
<div class="workflow">
  <div class="container">
    <div class="row">
      <div class="col">
        <div class="section_title text-center">
          <h3>see how we operate
          </h3>
          <span class="section_subtitle">What you need to do
          </span>
        </div>
      </div>
    </div>
    <div class="row workflow_row">
      <div class="workflow_rocket">
        <img src="images/rocket.png" alt="">
      </div>
      <!-- Workflow Item -->
      <div class="col-lg-4 workflow_col">
        <div class="workflow_item">
          <div class="workflow_image_container d-flex flex-column align-items-center justify-content-center">
            <div class="workflow_image_background">
              <div class="workflow_circle_outer trans_200">
              </div>
              <div class="workflow_circle_inner trans_200">
              </div>
              <div class="workflow_num text-center trans_200">
                <span>01.
                </span>
              </div>
            </div>
            <div class="workflow_image">
              <img src="<?php echo base_url('assets/')?>images/workflow_1.png" alt="">
            </div>
          </div>
          <div class="workflow_item_content text-center">
            <div class="workflow_title">Choose a Location
            </div>
            <p class="workflow_text">Donec ullamcorper nulla non metus auctor fringi lla. Curabitur blandit tempus porttitor.
            </p>
          </div>
        </div>
      </div>
      <!-- Workflow Item -->
      <div class="col-lg-4 workflow_col">
        <div class="workflow_item">
          <div class="workflow_image_container d-flex flex-column align-items-center justify-content-center">
            <div class="workflow_image_background">
              <div class="workflow_circle_outer trans_200">
              </div>
              <div class="workflow_circle_inner trans_200">
              </div>
              <div class="workflow_num text-center trans_200">
                <span>02.
                </span>
              </div>
            </div>
            <div class="workflow_image">
              <img src="<?php echo base_url('assets/')?>images/workflow_2.png" alt="">
            </div>
          </div>
          <div class="workflow_item_content text-center">
            <div class="workflow_title">Find the Perfect Home
            </div>
            <p class="workflow_text">Donec ullamcorper nulla non metus auctor fringi lla. Curabitur blandit tempus porttitor.
            </p>
          </div>
        </div>
      </div>
      <!-- Workflow Item -->
      <div class="col-lg-4 workflow_col">
        <div class="workflow_item">
          <div class="workflow_image_container d-flex flex-column align-items-center justify-content-center">
            <div class="workflow_image_background">
              <div class="workflow_circle_outer trans_200">
              </div>
              <div class="workflow_circle_inner trans_200">
              </div>
              <div class="workflow_num text-center trans_200">
                <span>03.
                </span>
              </div>
            </div>
            <div class="workflow_image">
              <img src="<?php echo base_url('assets/')?>images/workflow_3.png" alt="">
            </div>
          </div>
          <div class="workflow_item_content text-center">
            <div class="workflow_title">Move in your new life
            </div>
            <p class="workflow_text">Donec ullamcorper nulla non metus auctor fringi lla. Curabitur blandit tempus porttitor.
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>