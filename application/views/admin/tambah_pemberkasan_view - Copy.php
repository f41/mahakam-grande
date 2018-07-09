<main class="main">
  <!-- Breadcrumb-->
  <ol class="breadcrumb">
    <li class="breadcrumb-item">Dashboard
    </li>
    <li class="breadcrumb-item">Pemberkasan
    </li>
    <li class="breadcrumb-item active">Tambah
    </li>
  </ol>
  <div class="container-fluid">
    <div class="animated fadeIn">
      <div class="row">
        <div class="col-lg">
          <form action="<?php echo base_url('admin/pemberkasan/tambah');?>" method="POST" enctype="multipart/form-data">
            <div class="card">
              <div class="card-header">
                <span class="fa fa-home">&nbsp;Tambah Pemberkasan
                </span>
              </div>
              <div class="card-body">
                <div class="row">
                  <div class="form-group col-lg-6">
                    <input type="text" name="pemberkasan_dibuat" class="form-control" value="<?php echo ucfirst($this->session->userdata('username')); ?>" readonly>
                    <label for="company">Nomor Pemberkasan
                    </label>
                    <input type="text" name="pemberkasan_id" class="form-control" value="<?php echo $id ?>" readonly>
                    
                    <label for="company">Nama
                    </label>
                    <input type="text" name="pemberkasan_nama" class="form-control"placeholder="Nama" autofocus >
                    <label for="company">Type Rumah
                    </label>
                    <select name="pemberkasan_rumah_id" class="form-control" >
                      <?php foreach ($rumah as $list) { ?>
                      <option value="<?php echo $list['rumah_id']?>">
                        <?php echo $list['rumah_nama']?>
                      </option>
                      <?php } ?>
                    </select>
                  </div>
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
                          <input type="file" name="berkas[0]" accept="image/*"  />
                        </span>
                        <a href="#" class="btn btn-danger fileupload-exists" data-dismiss="fileupload">Remove
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-lg-6"> 
                    <div class="card">
                      <div class="card-header">
                        <span class="fa fa-address-card-o">&nbsp;Data Diri
                        </span>
                      </div>
                      <div class="card-body">
                        <div class="form-group row">
                          <label class="col-md-4 col-form-label" for="file-input">KTP Suami
                          </label>
                          <div class="col-md-8">
                            <input name="berkas[1]" type="file" accept="image/*">
                          </div>
                        </div>
                        <div class="form-group row">
                          <label class="col-md-4 col-form-label" for="file-input">KTP Istri
                          </label>
                          <div class="col-md-8">
                            <input name="berkas[2]" type="file" accept="image/*">
                          </div>
                        </div>
                        <div class="form-group row">
                          <label class="col-md-4 col-form-label" for="file-input">Kartu Keluarga
                          </label>
                          <div class="col-md-8">
                            <input name="berkas[3]" type="file" accept="image/*" required>
                          </div>
                        </div>
                        <div class="form-group row">
                          <label class="col-md-4 col-form-label" for="file-input">Akta Nikah
                          </label>
                          <div class="col-md-8">
                            <input name="berkas[4]" type="file" accept="image/*">
                          </div>
                        </div>
                        <div class="form-group row">
                          <label class="col-md-4 col-form-label" for="file-input">NPWP
                          </label>
                          <div class="col-md-8">
                            <input name="berkas[5]" type="file" accept="image/*">
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-6"> 
                    <div class="card">
                      <div class="card-header">
                        <span class="fa fa-suitcase">&nbsp;Pekerjaan
                        </span>
                      </div>
                      <div class="card-body">
                        <div class="form-group row">
                          <label class="col-md-4 col-form-label" for="file-input">Keterangan Kerja
                          </label>
                          <div class="col-md-8">
                            <input name="file-input" type="file">
                          </div>
                        </div>
                        <div class="form-group row">
                          <label class="col-md-4 col-form-label" for="file-input">Slip Gaji
                          </label>
                          <div class="col-md-8">
                            <input name="file-input" type="file">
                          </div>
                        </div>
                        <div class="form-group row">
                          <label class="col-md-4 col-form-label" for="file-input">NPWP
                          </label>
                          <div class="col-md-8">
                            <input name="file-input" type="file">
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-6"> 
                    <div class="card">
                      <div class="card-header">
                        <span class="fa fa-home">&nbsp;Wiraswasta
                        </span>
                      </div>
                      <div class="card-body">
                        <div class="form-group row">
                          <label class="col-md-4 col-form-label" for="file-input">SITU
                          </label>
                          <div class="col-md-8">
                            <input name="file-input" type="file">
                          </div>
                        </div>
                        <div class="form-group row">
                          <label class="col-md-4 col-form-label" for="file-input">SIUP
                          </label>
                          <div class="col-md-8">
                            <input name="file-input" type="file">
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-6"> 
                    <div class="card">
                      <div class="card-header">
                        <span class="fa fa-bank">&nbsp;Tabungan
                        </span>
                      </div>
                      <div class="card-body">
                        <div class="form-group row">
                          <label class="col-md-4 col-form-label" for="file-input">Buku Tabungan
                          </label>
                          <div class="col-md-8">
                            <input name="file-input" type="file">
                          </div>
                        </div>
                        <div class="form-group row">
                          <label class="col-md-4 col-form-label" for="file-input">Tabungan 3 Bulan Terakhir
                          </label>
                          <div class="col-md-8">
                            <input name="file-input" type="file">
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
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