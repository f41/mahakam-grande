<main class="main">
  <!-- Breadcrumb-->
  <ol class="breadcrumb">
    <li class="breadcrumb-item">Dashboard
    </li>
    <li class="breadcrumb-item">Pengaturan
    </li>
    <li class="breadcrumb-item active">Kontak
    </li>
  </ol>
  <div class="container-fluid">
    <div class="animated fadeIn">
      <div class="row">
        <div class="col col-lg">
          <div class="card">
            <div class="card-body p-3 d-flex align-items-center">
              <i class="fa fa-map-marker bg-primary p-3 font-2xl mr-3">
              </i>
              <div>
                <div class="text-value-sm text-primary">
                  <?php echo $kontak['kontak_alamatkantor'];?>
                </div>
              </div>
            </div>
            <div class="card-footer px-3 py-2">
              <a class="btn-block text-muted d-flex justify-content-between align-items-center" data-toggle="modal" data-target="#alamatModal" href="#">
                <span class="small font-weight-bold">Ubah
                </span>
                <i class="fa fa-pencil">
                </i>
              </a>
            </div>
          </div>
        </div>
        <div class="col col-lg">
          <div class="card">
            <div class="card-body p-3 d-flex align-items-center">
              <i class="fa fa-phone bg-primary p-3 font-2xl mr-3">
              </i>
              <div>
                <div class="text-value-sm text-primary">
                  <?php echo $kontak['kontak_nohp'];?>
                </div>
              </div>
            </div>
            <div class="card-footer px-3 py-2">
              <a class="btn-block text-muted d-flex justify-content-between align-items-center" data-toggle="modal" data-target="#phoneModal" href="#">
                <span class="small font-weight-bold">Ubah
                </span>
                <i class="fa fa-pencil">
                </i>
              </a>
            </div>
          </div>
        </div>
        <div class="col col-lg">
          <div class="card">
            <div class="card-body p-3 d-flex align-items-center">
              <i class="fa fa-envelope bg-primary p-3 font-2xl mr-3">
              </i>
              <div>
                <div class="text-value-sm text-primary">
                  <?php echo $kontak['kontak_email'];?>
                </div>
              </div>
            </div>
            <div class="card-footer px-3 py-2">
              <a class="btn-block text-muted d-flex justify-content-between align-items-center" data-toggle="modal" data-target="#emailModal" href="#">
                <span class="small font-weight-bold">Ubah
                </span>
                <i class="fa fa-pencil">
                </i>
              </a>
            </div>
          </div>
        </div>
      </div>
      <!--/.row-->
      <div class="row">
        <div class="col col-lg">
          <div class="card">
            <div class="card-header">
              <i class="icon-map">
              </i>Google Maps
              <div class="card-header-actions">
                <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#gmapModal">
                  <span class="fa fa-pencil"> Ubah
                  </span>
                </button>
              </div>
            </div>
            <div class="card-body">
              <?php echo $kontak['kontak_gmap'];?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>
<!-- MODAL ALAMAT -->
<div class="modal fade" id="alamatModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-success" role="document">
  <form action="<?php echo base_url('admin/pengaturan/ubah_alamatkantor')?>" method="post">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Ubah Alamat
        </h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×
          </span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-group row">
          <div class="col-md-12">
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text">
                  <i class="fa fa-map-marker">
                  </i>
                </span>
              </div>
              <input type="text" name="kontak_alamatkantor" class="form-control" placeholder="Alamat" value="<?php echo $kontak['kontak_alamatkantor'];?>">
            </div>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal
        </button>
        <button type="submit" class="btn btn-success">Simpan
        </button>
      </div>
    </div>
  </form>
  </div>
</div>
<!-- MODAL NO HP -->
<div class="modal fade" id="phoneModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-success modal-sm" role="document">
  <form action="<?php echo base_url('admin/pengaturan/ubah_nohp')?>" method="post">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Ubah Nomor HP
        </h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×
          </span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-group row">
          <div class="col-md-12">
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text">
                  <i class="fa fa-phone">
                  </i>
                </span>
              </div>
              <input type="text" name="kontak_nohp" class="form-control" placeholder="Alamat" value="<?php echo $kontak['kontak_nohp'];?>">
            </div>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal
        </button>
        <button type="submit" class="btn btn-success">Simpan
        </button>
      </div>
    </div>
  </form>
  </div>
</div>
<!-- MODAL EMAIL -->
<div class="modal fade" id="emailModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-success modal-sm" role="document">
  <form action="<?php echo base_url('admin/pengaturan/ubah_email')?>" method="post">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Ubah E-mail
        </h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×
          </span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-group row">
          <div class="col-md-12">
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text">
                  <i class="fa fa-envelope">
                  </i>
                </span>
              </div>
              <input type="email" name="kontak_email" class="form-control" placeholder="Alamat" value="<?php echo $kontak['kontak_email'];?>">
            </div>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal
        </button>
        <button type="button" class="btn btn-success">Simpan
        </button>
      </div>
    </div>
  </form>
  </div>
</div>
<!-- MODAL GMAP -->
<div class="modal fade" id="gmapModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-success modal-sm" role="document">
  <form action="<?php echo base_url('admin/pengaturan/ubah_gmap')?>" method="post">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Ubah Google Map
        </h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×
          </span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-group row">
          <div class="col-md-12">
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text">
                  <i class="fa fa-envelope">
                  </i>
                </span>
              </div>
              <input type="email" name="kontak_email" class="form-control" placeholder="Alamat" value="<?php echo $kontak['kontak_gmap'];?>">
            </div>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal
        </button>
        <button type="button" class="btn btn-success">Simpan
        </button>
      </div>
    </div>
  </form>
  </div>
</div>
