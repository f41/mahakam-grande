<!-- Footer -->
  <footer class="footer">
    <div class="container">
      <div class="row">
        
        <!-- Footer About -->

        <div class="col-lg-4 footer_col">
          <div class="footer_col_title">
            <div class="logo_container">
              <a href="#">
                <div class="logo">
                  <img src="<?php echo base_url('assets/');?>images/logo.png" alt="">
                  <span>mahakam grande</span>
                </div>
              </a>
            </div>
          </div>
          <div class="footer_social">
            <ul class="footer_social_list">
              <li class="footer_social_item"><a href="#"><i class="fab fa-pinterest"></i></a></li>
              <li class="footer_social_item"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
              <li class="footer_social_item"><a href="#"><i class="fab fa-twitter"></i></a></li>
              <li class="footer_social_item"><a href="#"><i class="fab fa-dribbble"></i></a></li>
              <li class="footer_social_item"><a href="#"><i class="fab fa-behance"></i></a></li>
            </ul>
          </div>
          <div class="footer_about">
            <p><?php echo $kontak['kontak_about'];?></p>
          </div>
        </div>
        
        <!-- Footer Contact Form -->
        <div class="col-lg-4 footer_col">
          <div class="footer_col_title">pertanyaan?</div>
          <div class="footer_contact_form_container">
            <form class="footer_contact_form" action="<?php echo base_url('kontak/kirim_pesan')?>" method="post">
              <input class="input_field contact_form_name" type="text" name="pesan_nama" placeholder="*Nama" required>
              <input class="input_field contact_form_email" type="text" name="pesan_nohp" placeholder="*No Handphone" required>
              <input class="input_field contact_form_email" type="email" name="pesan_email" placeholder="E-mail">
              <textarea class="text_field contact_form_message" name="pesan_isi" placeholder="*Isi Pesan" required></textarea>
              <button type="submit" class="contact_send_btn trans_200" value="Submit">send</button>
            </form>
          </div>
        </div>

        <!-- Footer Contact Info -->

        <div class="col-lg-4 footer_col">
          <div class="footer_col_title">contact info</div>
          <ul class="contact_info_list">
            <li class="contact_info_item d-flex flex-row">
              <div><div class="contact_info_icon"><img src="<?php echo base_url('assets/');?>images/placeholder.svg" alt=""></div></div>
              <div class="contact_info_text"><?php echo $kontak['kontak_alamatkantor'];?></div>
            </li>
            <li class="contact_info_item d-flex flex-row">
              <div><div class="contact_info_icon"><img src="<?php echo base_url('assets/');?>images/phone-call.svg" alt=""></div></div>
              <div class="contact_info_text"><?php echo $kontak['kontak_nohp'];?></div>
            </li>
            <li class="contact_info_item d-flex flex-row">
              <div><div class="contact_info_icon"><img src="<?php echo base_url('assets/');?>images/message.svg" alt=""></div></div>
              <div class="contact_info_text"><a href="mailto:<?php echo $kontak['kontak_email'];?>?Subject=Hello" target="_top"><?php echo $kontak['kontak_email'];?></a></div>
            </li>
          </ul>
        </div>

      </div>
    </div>
  </footer>

  <!-- Credits -->

  <div class="credits">
    <span><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></span>
  </div>

</div>

<script src="<?php echo base_url('assets/');?>js/jquery-3.2.1.min.js"></script>
<script src="<?php echo base_url('assets/');?>styles/bootstrap4/popper.js"></script>
<script src="<?php echo base_url('assets/');?>styles/bootstrap4/bootstrap.min.js"></script>
<script src="<?php echo base_url('assets/');?>plugins/greensock/TweenMax.min.js"></script>
<script src="<?php echo base_url('assets/');?>plugins/greensock/TimelineMax.min.js"></script>
<script src="<?php echo base_url('assets/');?>plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="<?php echo base_url('assets/');?>plugins/greensock/animation.gsap.min.js"></script>
<script src="<?php echo base_url('assets/');?>plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="<?php echo base_url('assets/');?>plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="<?php echo base_url('assets/');?>plugins/scrollTo/jquery.scrollTo.min.js"></script>
<script src="<?php echo base_url('assets/');?>plugins/easing/easing.js"></script>
<script src="<?php echo base_url('assets/');?>js/custom.js"></script>
<script src="<?php echo base_url('assets/');?>js/listings_single_custom.js"></script>

<script src="<?php echo base_url('assets/');?>js/sweetalert.js"></script>

<?php echo $this->session->flashdata('notif'); ?>
  
</script>

<script type="text/javascript">window.PixleeAsyncInit = function() {Pixlee.init({apiKey:'pnkjaeA1gfew6ErTjw5G'});Pixlee.addSimpleWidget({widgetId:'6424'});};</script><script src="//instafeed.assets.pixlee.com/assets/pixlee_widget_1_0_0.js"></script>
</body>

</html>