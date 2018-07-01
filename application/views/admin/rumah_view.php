<main class="main">
  <!-- Breadcrumb-->
  <ol class="breadcrumb">
    <li class="breadcrumb-item">Dashboard
    </li>
    <li class="breadcrumb-item active">Perumahan
    </li>

              <!-- Breadcrumb Menu-->
          <li class="breadcrumb-menu d-md-down-none">
              <a href="<?php echo base_url('admin/rumah/tambah');?>" class="btn btn-lg">
<i class="icon-plus"></i>&nbsp;Tambah Perumahan</a>
            
          </li>
  </ol>
  <div class="container-fluid">
    <div class="animated fadeIn">
      <div class="row">
        <?php foreach ($rumah as $list) { ?>
        <div class="col-lg-4">
          <div class="card">
            <div class="card-header">
              <b>
                <?php echo $list['rumah_nama'];?>
              </b>
              <div class="card-header-actions">
                <a href="<?php echo base_url('rumah/detail/')?><?php echo $list['rumah_id']?>" target="blank_" class="card-header-action">
                  <i class="icon-eye">
                  </i>
                </a>
                <a href="#" class="card-header-action">
                  <i class="icon-trash">
                  </i>
                </a>
              </div>
            </div>
            <img class="img" src="<?php echo base_url('assets/images/rumah/')?><?php echo  $list['rumah_gambar1'] ?>" height="200" >
            <div class="card-body row justify-content-md-center">
              <div class="col-lg">
                <i class="fa fa-bed fa-lg mt-4">
                &nbsp;<?php echo $list['rumah_kamar_tidur'];?></i>
                <br>Kamar Tidur
              </div>
              <div class="col-lg">
                <i class="fa fa-shower fa-lg mt-4">
                &nbsp;<?php echo $list['rumah_kamar_mandi'];?></i>
                <br>Kamar Mandi
              </div>
              <div class="col-lg">
                <i class="fa fa-arrows fa-lg mt-4">
                &nbsp;<?php echo $list['rumah_luas_bangunan'];?></i>
                <br>Luas Bangunan
              </div>
            </div>
            <div class="card-footer">
              <h4>Rp. 
                <?php echo number_format($list['rumah_harga']);?>
              </h4>
            </div>
          </div>
        </div>
        <?php } ?>
      </div>
    </div>
  </div>
</main>
