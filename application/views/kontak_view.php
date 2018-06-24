<!-- Contact -->
<div class="contact">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 contact_col">
        <div class="estate_contact_form">
          <div class="contact_title">say hello
          </div>
          <div class="estate_contact_form_container">
            <form id="estate_contact_form" class="estate_contact_form" action="post">
              <input id="estate_contact_form_name" class="estate_input_field estate_contact_form_name" type="text" placeholder="Name" required="required" data-error="Name is required.">
              <input id="estate_contact_form_email" class="estate_input_field estate_contact_form_email" type="email" placeholder="E-mail" required="required" data-error="Valid email is required.">
              <input id="estate_contact_form_subject" class="estate_input_field estate_contact_form_subject" type="email" placeholder="Subject" required="required" data-error="Subject is required.">
              <textarea id="estate_contact_form_message" class="estate_text_field estate_contact_form_message" name="message" placeholder="Message" required="required" data-error="Please, write us a message.">
              </textarea>
              <button id="estate_contact_send_btn" type="submit" class="estate_contact_send_btn trans_200" value="Submit">send
              </button>
            </form>
          </div>
        </div>
      </div>
      <div class="col-lg-3 contact_col">
        <div class="contact_title">contact info
        </div>
        <ul class="contact_info_list estate_contact">
          <li class="contact_info_item d-flex flex-row">
            <div>
              <div class="contact_info_icon">
                <img src="<?php echo base_url('assets/');?>images/placeholder.svg" alt="">
              </div>
            </div>
            <div class="contact_info_text"><?php echo $kontak['kontak_alamatkantor'];?>
            </div>
          </li>
          <li class="contact_info_item d-flex flex-row">
            <div>
              <div class="contact_info_icon">
                <img src="<?php echo base_url('assets/');?>images/phone-call.svg" alt="">
              </div>
            </div>
            <div class="contact_info_text"><?php echo $kontak['kontak_nohp'];?>
            </div>
          </li>
          <li class="contact_info_item d-flex flex-row">
            <div>
              <div class="contact_info_icon">
                <img src="<?php echo base_url('assets/');?>images/message.svg" alt="">
              </div>
            </div>
            <div class="contact_info_text">
              <a href="mailto:<?php echo $kontak['kontak_email'];?>?Subject=Hello" target="_top"><?php echo $kontak['kontak_email'];?>
              </a>
            </div>
          </li>
        </ul>
        <div class="estate_social">
          <ul class="estate_social_list">
            <li class="estate_social_item">
              <a href="#">
                <i class="fab fa-pinterest">
                </i>
              </a>
            </li>
            <li class="estate_social_item">
              <a href="#">
                <i class="fab fa-facebook-f">
                </i>
              </a>
            </li>
            <li class="estate_social_item">
              <a href="#">
                <i class="fab fa-twitter">
                </i>
              </a>
            </li>
            <li class="estate_social_item">
              <a href="#">
                <i class="fab fa-dribbble">
                </i>
              </a>
            </li>
            <li class="estate_social_item">
              <a href="#">
                <i class="fab fa-behance">
                </i>
              </a>
            </li>
          </ul>
        </div>
      </div>
      <div class="col-lg-3 contact_col">
        <div class="contact_title">about
        </div>
        <div class="estate_about_text">
          <p><?php echo $kontak['kontak_about'];?>
          </p>
        </div>
      </div>
    </div>
  </div>
  <!-- Google Map -->
  <div class="estate_map">
    <div id="google_map" class="google_map">
      <div class="map_container">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.6713018253276!2d117.13287741416475!3d-0.4918678354127417!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2df67f1b1e9ab9b7%3A0x7b474ef3101bf9f1!2sMahakam+Grande+Marketing+Office!5e0!3m2!1sen!2sid!4v1521991149896" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen>
        </iframe>
      </div>
    </div>
  </div>
</div>
<!-- Newsletter -->
</div>