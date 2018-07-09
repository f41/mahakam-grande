<main class="main">
  <!-- Breadcrumb-->
  <ol class="breadcrumb">
    <li class="breadcrumb-item">Admin
    </li>
    <li class="breadcrumb-item active">Pemberkasan
    </li>
  </ol>
  <div class="container-fluid">
    <div class="animated fadeIn">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              Pemberkasan
              <div class="card-header-actions">
                <a href="<?php echo base_url('admin/pemberkasan/tambah')?>" class="card-header-action btn btn-lg">
                  <i class="icon-plus">
                  </i> Tambah Pemberkasan
                </a>
              </div>
            </div>
            <div class="card-body">
              <table id="datatable" class="table table-responsive-sm table-hover table-outline mb-0">
                <thead class="thead-light text-center">
                  <tr>
                    <th class="text-center">
                      <i class="icon-user">
                      </i> Nama
                    </th>
                    <th>
                      <i class="icon-home">
                      </i> Tipe Rumah
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
                    <th>
                      Pernyataan
                    </th>
                    <th>
                    </th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach ($pemberkasan as $list) { ?>
                  <tr>
                    <td>
                      <?php echo $list['pemberkasan_nama']?>
                    </td>
                    <td>
                      <?php echo $list['rumah_nama']?>
                    </td>
                    <td>
                      <?php echo $list['nama_user']?>
                    </td>
                    <td>
                      <?php echo $list['pemberkasan_tglbuat']?>
                    </td>
                    <td class="text-center">
                      <?php
                        $status = $list['pemberkasan_status'];
                        if ($status == '') {
                        echo "Proses";
                        }
                        elseif ($status == 0) {
                        echo "Reject";
                        }
                        elseif ($status == 1) {
                        echo "Accept";
                        }
                        ?>
                    </td>
                    <td class="text-center">
                      <?php
                        $surat = $list['pemberkasan_surat_pernyataan'];
                        if ($surat == null) { 
                      ?>
                      <div class="btn-group btn-group-sm" role="group" aria-label="Small button group">
                        <button type="button" class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="Upload Berkas">
                          <span class="fa fa-upload">
                          </span>
                        </button>
                        <a href="<?php echo base_url('admin/pemberkasan/pernyataan')?>" target="_BLANK" type="button" class="btn btn-dark" data-toggle="tooltip" data-placement="top" title="Cetak Surat Pernyataan">
                          <span class="fa fa-print">
                          </span>
                        </a>
                      </div>
                      <?php 
                      }else { ?>
                      <span class="badge badge-pill badge-success">Complete
                      </span>
                      <?php } ?>
                    </td>
                    <td class="text-center">
                      <?php
                        $status = $list['pemberkasan_status'];
                        if ($status == null) { 
                      ?>
                      <div class="btn-group btn-group-sm" role="group" aria-label="Small button group">
                        <button type="button" class="btn btn-warning" data-toggle="tooltip" data-placement="top" title="Detail">
                          <span class="fa fa-eye">
                          </span>
                        </button>
                        <button type="button" class="btn btn-info" data-toggle="tooltip" data-placement="top" title="Accept">
                          <span class="fa fa-check">
                          </span>
                        </button>
                        <button type="button" class="btn btn-danger" data-toggle="tooltip" data-placement="top" title="Ignore">
                          <span class="fa fa-close">
                          </span>
                        </button>
                      </div>
                      <?php 
                      }else { ?>
                      <div class="btn-group btn-group-sm" role="group" aria-label="Small button group">
                        <button type="button" class="btn btn-warning" data-toggle="tooltip" data-placement="top" title="Detail">
                          <span class="fa fa-eye">
                          </span>
                        </button>
                      </div>
                      <?php } ?>
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
