<main class="main">
  <!-- Breadcrumb-->
  <ol class="breadcrumb">
    <li class="breadcrumb-item">Admin
    </li>
    <li class="breadcrumb-item active">Berita
    </li>
  </ol>
  <div class="container-fluid">
    <div class="animated fadeIn">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              Berita
              <div class="card-header-actions">
                <a href="<?php echo base_url('admin/berita/tambah')?>" class="card-header-action btn btn-lg">
                <i class="icon-plus"></i> Tambah Berita
                </a>
              </div>
            </div>
            <div class="card-body">
              <table id="datatable" class="table table-responsive-sm table-hover table-outline mb-0">
                <thead class="thead-light">
                  <tr>
                    <th class="text-center">
                      <i class="icon-picture">
                      </i>
                    </th>
                    <th>Judul
                    </th>
                    <th class="text-center">
                      <i class="icon-user">
                      </i> Dibuat
                    </th>
                    <th>
                      <i class="icon-calendar">
                      </i> Tanggal
                    </th>
                    <th class="text-center">Status
                    </th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach ($berita as $list) { ?>
                  <tr>
                    <td class="text-center">
                      <div class="avatar">
                        <img src="<?php echo base_url('assets/images/berita/')?><?php echo $list['berita_gambar']?>" class="img-avatar">
                      </div>
                    </td>
                    <td>
                      <div><?php echo $list['berita_judul']?>
                      </div>
                      <div class="small text-muted"> 
                        <a class="icon-eye" href="<?php echo base_url('berita/detail/')?><?php echo $list['berita_id']?>"> View
                        </a> | 
                        <a class="icon-trash" href="<?php echo base_url('admin/berita/hapus/')?><?php echo $list['berita_id']?>"> Delete
                        </a>
                      </div>
                    </td>
                    <td class="text-center">
                      <?php echo $list['nama_user']?>
                    </td>
                    <td>
                      <?php 
                        $date = strtotime($list['berita_tglbuat']);
                        echo date("d M Y g:i A", $date);
                      ?>
                    </td>
                    <td class="text-center">
                      <?php echo $list['berita_status']?>
                    </td>
                  </tr>
                  <?php } ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
        <!--/.col-->
      </div>
      <!--/.row-->
    </div>
  </div>
</main>
