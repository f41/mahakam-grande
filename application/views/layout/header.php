<?php if ($menu != 'home') : ?>
<div class="super_container">
  
  <!-- Home -->
  <div class="home">
    <!-- Image by: https://unsplash.com/@breather -->
    <div class="home_background" style="background-image:url(<?php echo base_url('assets/');?>images/contact.jpg)"></div>
    
    <div class="container">
      <div class="row">
        <div class="col">
          <div class="home_content">
            <div class="home_title">
              <h2><?php echo $title ?></h2>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
<?php endif; ?>
 <!-- Header -->

  <header class="header trans_300">
    <div class="container">
      <div class="row">
        <div class="col">
          <div class="header_container d-flex flex-row align-items-center trans_300">

            <!-- Logo -->

            <div class="logo_container">
              <a href="#">
                <div class="logo">
                  <img src="<?php echo base_url('assets/');?>images/logo.png" alt="">
                  <span>MAHAKAM GRANDE</span>
                </div>
              </a>
            </div>
            
            <!-- Main Navigation -->

            <nav class="main_nav">
              <ul class="main_nav_list">
                <li class="main_nav_item"><a href="<?php echo base_url();?>">home</a></li>
                <li class="main_nav_item"><a href="#">about us</a></li>
                <li class="main_nav_item"><a href="#">berita</a></li>
                <li class="main_nav_item"><a href="<?php echo base_url('kontak');?>">contact</a></li>
              </ul>
            </nav>
            
            <!-- Phone Home -->

            <div class="phone_home text-center">
              <span><?php echo $kontak['kontak_nohp'];?></span>
            </div>
            
            <!-- Hamburger -->

            <div class="hamburger_container menu_mm">
              <div class="hamburger menu_mm">
                <i class="fas fa-bars trans_200 menu_mm"></i>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>

    <!-- Menu -->

    <div class="menu menu_mm">
      <ul class="menu_list">
        <li class="menu_item">
          <div class="container">
            <div class="row">
              <div class="col">
                <a href="#">home</a>
              </div>
            </div>
          </div>
        </li>
        <li class="menu_item">
          <div class="container">
            <div class="row">
              <div class="col">
                <a href="about.html">about us</a>
              </div>
            </div>
          </div>
        </li>
        <li class="menu_item">
          <div class="container">
            <div class="row">
              <div class="col">
                <a href="listings.html">listings</a>
              </div>
            </div>
          </div>
        </li>
        <li class="menu_item">
          <div class="container">
            <div class="row">
              <div class="col">
                <a href="news.html">news</a>
              </div>
            </div>
          </div>
        </li>
        <li class="menu_item">
          <div class="container">
            <div class="row">
              <div class="col">
                <a href="contact.html">contact</a>
              </div>
            </div>
          </div>
        </li>
      </ul>
    </div>

  </header>
  