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
                    <input type="hidden" name="berkas_dibuat" class="form-control" value="<?php echo ucfirst($this->session->userdata('username')); ?>">
                    <label for="company">Nomor Pemberkasan
                    </label>
                    <input type="text" name="berkas_id" class="form-control" value="<?php echo $id ?>" readonly>
                    <label for="company">Nama
                    </label>
                    <input type="text" name="berkas_nama" class="form-control"placeholder="Nama" autofocus >
                    <label for="company">Nomor KTP
                    </label>
                    <input type="text" name="berkas_noktp" class="form-control"placeholder="Nomor KTP">
                    <label for="company">Tempat Lahir
                    </label>
                    <input type="text" name="berkas_tempat_lahir" class="form-control"placeholder="Tempat Lahir">
                    <label for="company">Tanggal Lahir
                    </label>
                    <input type="date" name="berkas_tgl_lahir" class="form-control">
                    <label for="company">Pekerjaan
                    </label>
                    <input type="text" name="berkas_pekerjaan" class="form-control"placeholder="Pekerjaan">
                    <label for="company">Alamat
                    </label>
                    <textarea name="berkas_alamat" class="form-control"placeholder="Alamat"></textarea>
                    <label for="company">Type Rumah
                    </label>
                    <select name="berkas_rumah_id" class="form-control" >
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
                          <input type="file" name="berkas_foto" accept="image/*"  />
                        </span>
                        <a href="#" class="btn btn-danger fileupload-exists" data-dismiss="fileupload">Remove
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-lg-12"> 
                    <div class="card">
                      <div class="card-header">
                        <span class="fa fa-file">&nbsp;Berkas
                        </span>
                      </div>
                      <div class="card-body">
                        <div class="row">
                          <div class="col-lg-6">
                            <div class="form-group row">
                              <label class="col-md-4 col-form-label" for="file-input">KTP Suami
                              </label>
                              <div class="col-md-8">
                                <input name="berkas_ktp_suami" type="file" accept="image/*" required>
                              </div>
                            </div>
                            <div class="form-group row">
                              <label class="col-md-4 col-form-label" for="file-input">KTP Istri
                              </label>
                              <div class="col-md-8">
                                <input name="berkas_ktp_istri" type="file" accept="image/*" required>
                              </div>
                            </div>
                            <div class="form-group row">
                              <label class="col-md-4 col-form-label" for="file-input">Kartu Keluarga
                              </label>
                              <div class="col-md-8">
                                <input name="berkas_kk" type="file" accept="image/*" required>
                              </div>
                            </div>
                            <div class="form-group row">
                              <label class="col-md-4 col-form-label" for="file-input">Akta Nikah
                              </label>
                              <div class="col-md-8">
                                <input name="berkas_akta_nikah" type="file" accept="image/*" required>
                              </div>
                            </div>
                          </div>
                          <div class="col-lg-6">
                            <div class="form-group row">
                              <label class="col-md-4 col-form-label" for="file-input">Rekening BTN
                              </label>
                              <div class="col-md-8">
                                <input name="berkas_btn" type="file" accept="image/*" required>
                              </div>
                            </div>
                            <div class="form-group row">
                              <label class="col-md-4 col-form-label" for="file-input">NPWP
                              </label>
                              <div class="col-md-8">
                                <input name="berkas_npwp" type="file" accept="image/*" required>
                              </div>
                            </div>
                            <div class="form-group row">
                              <label class="col-md-4 col-form-label" for="file-input">SPT
                              </label>
                              <div class="col-md-8">
                                <input name="berkas_spt" type="file" accept="image/*" required>
                              </div>
                            </div>
                            <div class="form-group row">
                              <label class="col-md-4 col-form-label" for="file-input">Surat Ket. Tidak Memiliki Rumah
                              </label>
                              <div class="col-md-8">
                                <input name="berkas_srt_ket_tidak_ada_rumah" type="file" accept="image/*" required>
                              </div>
                            </div>
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
