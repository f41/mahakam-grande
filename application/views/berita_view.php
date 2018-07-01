  <!-- News -->

  <div class="news">
    <div class="container">
      <div class="row">

        <div class="col-lg-12 news_content_col">
          <?php foreach ($berita as $list) { ?>
          <!-- News Post -->
          <div class="news_post">
            <div class="news_post_date"><?php echo $list['berita_tglbuat']?></div>
            <div class="news_post_title"><a href="#"><?php echo $list['berita_judul']?></a></div>
            <div class="news_post_meta">
              <ul>
                <li class="news_post_meta_item">
                  <div class="news_post_meta_icon">
                    <img src="<?php echo base_url('assets/')?>images/profile.svg" alt="https://www.flaticon.com/authors/lucy-g">
                  </div>
                  <span><a href="#"><?php echo $list['nama_user']?></a></span>
                </li>
              </ul>
            </div>
            <div class="news_post_image">
              <img src="<?php echo base_url('assets/images/berita/')?><?php echo $list['berita_gambar']?>">
            </div>
            <div class="news_post_text">
              <p><?php echo $list['berita_isi']?></p>
            </div>
            <!--<div class="button news_post_button"><a href="#">read more</a></div> -->
          </div>
          <?php } ?>

        </div>

        

      </div>
    </div>
  </div>
