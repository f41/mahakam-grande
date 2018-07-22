<div class="app-body">
      <div class="sidebar">
        <nav class="sidebar-nav">
          <ul class="nav">
            <?php if ($this->session->userdata('level') == '1') { ?>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url('admin/dashboard');?>">
                <i class="nav-icon icon-speedometer"></i> Dashboard
              </a>
            </li>
            <li class="nav-title">Menu</li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url('admin/rumah');?>">
                <i class="nav-icon icon-home"></i> Perumahan
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url('admin/berita')?>">
                <i class="nav-icon fa fa-newspaper-o"></i> Berita
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url('admin/pemberkasan')?>">
                <i class="nav-icon icon-docs"></i> Pemberkasan
              </a>
            </li>
            <li class="nav-item nav-dropdown">
              <a class="nav-link nav-dropdown-toggle" href="#">
                <i class="nav-icon icon-doc"></i> Laporan</a>
              <ul class="nav-dropdown-items">
                <li class="nav-item">
                  <a class="nav-link" href="<?php echo base_url('admin/laporan/berkas_lengkap');?>">
                    <i class="nav-icon icon-doc"></i> Berkas Lengkap</a>
                </li>
              </ul>
              <ul class="nav-dropdown-items">
                <li class="nav-item">
                  <a class="nav-link" href="<?php echo base_url('admin/laporan/berkas_tidak_lengkap');?>">
                    <i class="nav-icon icon-doc icons"></i> Berkas Tidak Lengkap</a>
                </li>
              </ul>
            </li>
            <li class="nav-item nav-dropdown">
              <a class="nav-link nav-dropdown-toggle" href="#">
                <i class="nav-icon cui-settings icons"></i> Pengaturan</a>
              <ul class="nav-dropdown-items">
                <li class="nav-item">
                  <a class="nav-link" href="<?php echo base_url('admin/pengaturan/kontak');?>">
                    <i class="nav-icon icon-phone icons"></i> Kontak</a>
                </li>
              </ul>
            </li>
          </ul>
        <?php } else { ?>
          <li class="nav-item nav-dropdown">
              <a class="nav-link nav-dropdown-toggle" href="#">
                <i class="nav-icon icon-doc"></i> Laporan</a>
              <ul class="nav-dropdown-items">
                <li class="nav-item">
                  <a class="nav-link" href="<?php echo base_url('admin/laporan/berkas_lengkap');?>">
                    <i class="nav-icon icon-doc"></i> Berkas Lengkap</a>
                </li>
              </ul>
              <ul class="nav-dropdown-items">
                <li class="nav-item">
                  <a class="nav-link" href="<?php echo base_url('admin/laporan/berkas_tidak_lengkap');?>">
                    <i class="nav-icon icon-doc icons"></i> Berkas Tidak Lengkap</a>
                </li>
              </ul>
            </li>
          <?php } ?>
        </nav>
        <button class="sidebar-minimizer brand-minimizer" type="button"></button>
      </div>
