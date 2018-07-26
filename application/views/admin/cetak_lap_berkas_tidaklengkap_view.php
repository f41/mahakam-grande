<html>
  <head>
    <title> Surat Pernyataan
    </title>
  </head>
  <body bgcolor="white" onload="window.print()">
    <font face="Arial" size="5"> 
      <p align="center"> 
        <u> 
          <b> LAPORAN BERKAS TIDAK LENGKAP
          </b>
        </u>
    </font>
    <br>
    </p>
  </font>
<br>
<table class="table" width="100%" border="1">
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
</body>
</html>
