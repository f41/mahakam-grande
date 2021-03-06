<div class="listing">
  <div class="container">
    <div class="row">
      <div class="col-lg-8">
        <!-- Listing Title -->
        <div class="listing_title_container">
          <div class="listing_title"><?php echo $rumah['rumah_nama'];?>
          </div>
        </div>
      </div>
      <!-- Listing Price -->
      <div class="col-lg-4 listing_price_col clearfix">
        <div class="featured_card_box d-flex flex-row align-items-center trans_300 float-lg-right">
          <img src="<?php echo base_url('assets/');?>images/tag.svg">
          <div class="featured_card_box_content">
            <div class="featured_card_price_title trans_300">Harga
            </div>
            <div class="featured_card_price trans_300">Rp. 142,000,000
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col">
        
          <!-- Listing Image Slider -->

          <div class="listing_slider_container">
            <div class="owl-carousel owl-theme listing_slider">
              
              <!-- Listing Slider Item -->
              <div class="owl-item listing_slider_item">
                <img src="<?php echo base_url('assets/images/rumah/')?><?php echo $rumah['rumah_gambar1']?>" width="100%" height="577px">
              </div>

              <!-- Listing Slider Item -->
              <div class="owl-item listing_slider_item">
                <img src="<?php echo base_url('assets/images/rumah/')?><?php echo $rumah['rumah_gambar2']?>" width="100%" height="577px">
              </div>

              <!-- Listing Slider Item -->
              <div class="owl-item listing_slider_item">
                <img src="<?php echo base_url('assets/images/rumah/')?><?php echo $rumah['rumah_gambar3']?>" width="100%" height="577px">
              </div>

              <!-- Listing Slider Item -->
              <div class="owl-item listing_slider_item">
                <img src="<?php echo base_url('assets/images/rumah/')?><?php echo $rumah['rumah_gambar4']?>" width="100%" height="577px">
              </div>
            </div>

            <div class="listing_slider_nav listing_slider_prev d-flex flex-row align-items-center justify-content-center trans_200">
              <img src="<?php echo base_url('assets/images/nav_left.png')?>" alt="">
            </div>

            <div class="listing_slider_nav listing_slider_next d-flex flex-row align-items-center justify-content-center trans_200">
              <img src="<?php echo base_url('assets/images/nav_right.png')?>" alt="">
            </div>

          </div>

      </div>
    </div>
    <div class="row listing_content_row">
      <!-- Listing -->
      <div class="col-lg-12 listing_col">
        <div class="listing_details">
          <div class="listing_subtitle">Fasilitas
          </div>
          <p class="listing_details_text"><?php echo $rumah['rumah_fasilitas'];?>
          </p>
          <div class="rooms">
            <div class="room">
              <span class="room_title">Kamar Tidur
              </span>
              <div class="room_content">
                <div class="room_image">
                  <img src="<?php echo base_url('assets/');?>images/bedroom.png" alt="">
                </div>
                <span class="room_number"><?php echo $rumah['rumah_kamar_tidur'];?>
                </span>
              </div>
            </div>
            <div class="room">
              <span class="room_title">Kamar Mandi
              </span>
              <div class="room_content">
                <div class="room_image">
                  <img src="<?php echo base_url('assets/');?>images/shower.png">
                </div>
                <span class="room_number"><?php echo $rumah['rumah_kamar_mandi'];?>
                </span>
              </div>
            </div>
            <div class="room">
              <span class="room_title">Luas Tanah
              </span>
              <div class="room_content">
                <div class="room_image">
                  <img src="<?php echo base_url('assets/');?>images/area.png" alt="">
                </div>
                <span class="room_number"><?php echo $rumah['rumah_luas_tanah'];?> m<sup>2
                </span>
              </div>
            </div>
            <div class="room">
              <span class="room_title">Luas Bangunan
              </span>
              <div class="room_content">
                <div class="room_image">
                  <img src="<?php echo base_url('assets/');?>images/area.png" alt="">
                </div>
                <span class="room_number"><?php echo $rumah['rumah_luas_bangunan'];?> m<sup>2
                </span>
              </div>
            </div>
          </div>
        </div>
        <!-- Listing Additional Details -->
        <div class="listing_additional_details">
          <div class="listing_subtitle">Spesifikasi Bangunan
          </div>
          <ul class="additional_details_list">
            <li class="additional_detail">
              <span><b><?php echo $rumah['rumah_spesifikasi']?></b></span>
            </li>
          </ul>
        </div>

        <!-- Listing Map -->
        <div class="listing_map">
          <div class="listing_subtitle">Property on map
          </div>
          <div id="google_map">
            <div class="map_container">
              <?php echo $rumah['rumah_gmap']?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
