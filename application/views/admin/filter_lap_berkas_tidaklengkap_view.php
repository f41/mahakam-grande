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
              Laporan Pemberkasan Lengkap
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col-lg-6">
                  <form action="<?php echo base_url('admin/laporan/filter_berkas_tidak_lengkap')?>" method="post">
                  <div class="form-group row">
                    <label class="col-md-2 col-form-label" for="hf-email">Filter
                    </label>
                    <div class="col-md-8">
                      <div class="input-group">
                        <span class="input-group-prepend">
                          <span class="input-group-text">
                            <i class="fa fa-calendar">
                            </i>
                          </span>
                        </span>
                        <input name="datefilter" class="form-control" type="text">
                      </div>
                    </div>
                    <div class="col-md-2">
                      <button type="submit" class="btn btn-primary">
                        <span class="fa fa-filter">
                        </span> Filter
                      </button>
                    </div>
                  </div>
                  </form>
                </div>
                <div class="col-lg-6">
                  <button type="button" class="btn btn-primary">
                    <span class="fa fa-print">
                    </span> Cetak
                  </button>
                  <label class="col-md-6 col-form-label" for="hf-email">Periode: <?php echo $start ?> - <?php echo $end ?>
                  </label>
                  <input name="start" class="form-control" type="hidden" value="<?php echo $start ?>">
                  <input name="end" class="form-control" type="hidden" value="<?php echo $end ?>">
                </div>
              </div>
              <table class="table table-responsive-sm table-hover table-outline mb-0">
                <thead class="thead-light text-center">
                  <tr>
                    <th class="text-center">
                  </i> No
                  </th>
                <th class="text-center">
                  <i class="icon-user">
                  </i> Nama
                </th>
                <th>
                </i> Pekerjaan
              </th>
            <th>
              Belum Lengkap
            </th>
            </tr>
          </thead>
        <tbody>
          <?php $no=1;foreach ($lengkap as $list) { ?>
          <tr>
            <td>
              <?php echo $no ?>
            </td>
            <td>
              <?php echo $list['pemberkasan_nama']?>
            </td>
            <td>
              <?php echo $list['pemberkasan_pekerjaan']?>
            </td>
            <td>
              <?php
$pernyataan = $list['pemberkasan_surat_pernyataan'];
$kerja = $list['pemberkasan_keterangan_kerja'];
$usaha = $list['pemberkasan_situ'];
if ($pernyataan == null and $kerja == null) {
echo "Surat Pernyataan, Keterangan Kerja, Slip Gaji";
}
elseif ($pernyataan == null and $usaha == null) {
echo "Surat Pernyataan, SITU, SIUP";
}
elseif ($pernyataan == null) {
echo "Surat Pernyataan";
}
elseif ($kerja == null) {
echo "Keterangan Kerja, Slip Gaji";
}
elseif ($usaha == null) {
echo "SITU, SIUP";
}
?>
            </td>
          </tr>
          <?php $no++;} ?>
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
