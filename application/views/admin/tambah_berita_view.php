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
          <form action="<?php echo base_url('admin/berita/tambah');?>" method="POST" enctype="multipart/form-data">
            <div class="card">
              <?php echo $error ?>
              <div class="card-header">
                <span class="fa fa-home">&nbsp;Tambah Perumahan
                </span>
              </div>
              <div class="card-body">
                <div class="row">
                  <div class="form-group col-lg">
                    <label for="company">Judul Berita
                    </label>
                    <input type="text" name="berita_judul" class="form-control"placeholder="Judul Berita" autofocus required>
                    <label for="company">Status
                    </label>
                    <select name="berita_status" class="form-control" required>
                      <option value="0">Please select</option>
                      <option value="POST">POST</option>
                      <option value="DRAFT">DRAFT</option>
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
                          <input type="file" name="berita_gambar" accept="image/*" required />
                        </span>
                        <a href="#" class="btn btn-danger fileupload-exists" data-dismiss="fileupload">Remove
                        </a>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="form-group col-lg">
                    <label for="company">Isi Berita
                    </label>
                    <textarea name="berita_isi" required>
                    </textarea>
                  </div>
                </div>
                <input type="hidden" name="berita_dibuat" value="<?php echo ucfirst($this->session->userdata('username')); ?>">  
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