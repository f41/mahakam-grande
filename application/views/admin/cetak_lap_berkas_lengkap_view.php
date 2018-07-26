<html>
  <head>
    <title> Surat Pernyataan
    </title>
  </head>
  <body bgcolor="white" onload="window.print()">
    <font face="Arial" size="5"> 
      <p align="center"> 
        <u> 
          <b> LAPORAN BERKAS LENGKAP
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
              <?php $no++;} ?>
                  </tr>
                  
                </tbody>
              </table>
</body>
</html>
