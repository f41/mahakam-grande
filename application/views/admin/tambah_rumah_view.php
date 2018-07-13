<main class="main">
  <!-- Breadcrumb-->
  <ol class="breadcrumb">
    <li class="breadcrumb-item">Dashboard
    </li>
    <li class="breadcrumb-item">Perumahan
    </li>
    <li class="breadcrumb-item active">Tambah
    </li>
  </ol>
  <div class="container-fluid">
    <div class="animated fadeIn">
      <div class="row">
        <div class="col-lg">
          <form action="<?php echo base_url('admin/rumah/tambah');?>" method="POST" enctype="multipart/form-data">
            <div class="card">
              <div class="card-header">
                <span class="fa fa-home">&nbsp;Tambah Perumahan
                </span>
              </div>
              <div class="card-body">
                <div class="row">
                  <div class="form-group col-lg-6">
                    <label for="company">Nama Rumah
                    </label>
                    <input type="text" name="rumah_nama" class="form-control"placeholder="Nama Rumah" autofocus required>
                  </div>
                </div>
                <div class="row">
                  <div class="form-group col-sm">
                    <label for="ccmonth">Kamar Tidur
                    </label>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text">
                          <i class="fa fa-bed">
                          </i>
                        </span>
                      </div>
                      <input type="number" name="rumah_kamar_tidur" class="form-control" placeholder="Kamar Tidur" onkeypress="return isNumberKey(event)" required>
                    </div>
                  </div>
                  <div class="form-group col-sm">
                    <label for="ccyear">Kamar Mandi
                    </label>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text">
                          <i class="fa fa-shower">
                          </i>
                        </span>
                      </div>
                      <input type="number" name="rumah_kamar_mandi" class="form-control" placeholder="Kamar Mandi" onkeypress="return isNumberKey(event)" required>
                    </div>
                  </div>
                  <div class="col-sm">
                    <div class="form-group">
                      <label for="cvv">Lantai
                      </label>
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <span class="input-group-text">
                            <i class="fa fa-align-justify">
                            </i>
                          </span>
                        </div>
                        <input type="number" name="rumah_lantai" class="form-control" placeholder="Jumlah Lantai" onkeypress="return isNumberKey(event)" required>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm">
                    <div class="form-group">
                      <label for="cvv">Luas Tanah
                      </label>
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <span class="input-group-text">
                            <i class="fa fa-arrows-alt">
                            </i>
                          </span>
                        </div>
                        <input type="number" name="rumah_luas_tanah" class="form-control" placeholder="Luas Tanah" onkeypress="return isNumberKey(event)" required>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm">
                    <div class="form-group">
                      <label for="cvv">Luas Bangunan
                      </label>
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <span class="input-group-text">
                            <i class="fa fa-home">
                            </i>
                          </span>
                        </div>
                        <input type="number" name="rumah_luas_bangunan" class="form-control" placeholder="Luas Bangunan" onkeypress="return isNumberKey(event)" required>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="form-group col-lg">
                    <label for="company">Fasilitas
                    </label>
                    <input type="text" name="rumah_fasilitas" class="form-control" placeholder="Fasilitas" required>
                  </div>
                </div>
                <div class="row">
                  <div class="form-group col-lg">
                    <label for="company">Spesifikasi Bangunan
                    </label>
                    <textarea1 name="rumah_spesifikasi" required>
                    </textarea1>
                  </div>
                </div>
                <div class="row">
                  <div class="form-group col-lg">
                    <label for="company">Harga
                    </label>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text">
                          <i class="fa fa-money">
                          </i>
                        </span>
                      </div>
                      <input type="number" name="rumah_harga" class="form-control" placeholder="Harga" onkeypress="return isNumberKey(event)" required>
                    </div>
                  </div>
                  <div class="form-group col-lg">
                    <label for="company">Stok
                    </label>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text">
                          <i class="fa fa-home">
                          </i>
                        </span>
                      </div>
                      <input type="number" name="rumah_stok" class="form-control" placeholder="Stok Rumah" onkeypress="return isNumberKey(event)" required>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <?php for ($i=0; $i <=3 ; $i++) :?>
                  <div class="col-lg">
                    <div class="fileupload fileupload-new" data-provides="fileupload">
                      <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
                        <img src="<?php echo base_url('assets/admin/img/upload.jpg');?>" alt="" />
                      </div>
                      <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;">
                      </div>
                      <div>
                        <span class="btn btn-file btn-primary">
                          <span class="fileupload-new">Select image
                          </span>
                          <span class="fileupload-exists">Change
                          </span>
                          <input type="file" name="userfile[]" accept="image/*" required />
                        </span>
                        <a href="#" class="btn btn-danger fileupload-exists" data-dismiss="fileupload">Remove
                        </a>
                      </div>
                    </div>
                  </div>
<?php endfor?>
                </div>
              </div>
              <div class="card-footer">
                <button type="submit" class="btn btn-sm btn-primary">
                  <i class="fa fa-dot-circle-o">
                  </i> Submit
                </button>
                <button type="reset" class="btn btn-sm btn-danger">
                  <i class="fa fa-ban">
                  </i> Reset
                </button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</main>