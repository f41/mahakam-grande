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
              <table id="datatable" class="table table-responsive-sm table-hover table-outline mb-0">
                <thead class="thead-light text-center">
                  <tr>
                    <th class="text-center">
                      <i class="icon-user">
                      </i> No
                    </th>
                    <th class="text-center">
                      <i class="icon-user">
                      </i> Nama
                    </th>
                    <th>
                      <i class="icon-home">
                      </i> Pekerjaan
                    </th>
                    <th>
                      Belum Lengkap
                    <th>
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
              <?php $no++;} ?>
                  </tr>
                  
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