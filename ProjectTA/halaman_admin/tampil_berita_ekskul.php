<div class="card shadow mb-4">
            <div class="card-header py-3">
            </div>
            <div class="card-body">
              <div class="table-responsive">
                
                <style>
    #border{border:0px}
</style>
<div id="border">
<br />

<h1>Berita Ekstrakulikuler</h1>
<table align="center" width="1175px" border="1" style="margin-left:100px;"> 
    <tr bgcolor="#B22222" align="center" style="color:#FFFFFF; height:50px;">
    <td style="color:#FFFFFF">No.</td>
        <td style="color:#FFFFFF">Kategori Ekskul</td>
        <td style="color:#FFFFFF">Deskripsi Berita</td>
        <td style="color:#FFFFFF">Tanggal Posting</td>
        <td style="color:#FFFFFF">Jam Posting</td>
        <td style="color:#FFFFFF">Foto</td>
        <td style="color:#FFFFFF">Foto</td>
     <td style="color:#FFFFFF">Aksi</td>
    </tr>
<?php 
$tampil=mysqli_query($GLOBALS["___mysqli_ston"], "SELECT * FROM berita_ekskul INNER JOIN kategori_ekskul ON berita_ekskul.id_kategori=kategori_ekskul.id_kategori" );
 $no=1;
 while($data=mysqli_fetch_array($tampil))
    { echo "
   <tr style='height:40px;'>
        <td align='center'>$no</td>
        <td>$data[kat_ekskul]</td>
		    <td>$data[deskripsi_berita]</td>
        <td>$data[tgl_posting_berita]</td>
        <td>$data[jam_posting_berita]</td>
        <td><img src='gambar/$data[foto]' style='width:60px; height:60px;'></td>
        <td><img src='gambar/$data[foto2]' style='width:60px; height:60px;'></td>
        ";?>
      <td  align="center"><a href="<?php echo "proses/aksi_berita_ekskul.php?act=hapus&id=$data[no_berita]";?>" onClick="return confirm('Apakah anda yakin akan menghapus data ini?')"><img src="images/icon_delete.png" width="35px" height="35px"></a> || 
   <a href="<?php echo"?hal=form_berita_ekskul&act=ubah&id=$data[no_berita]";?>"><img src="images/icon_edit.png" width="30px" height="30px"></a></td>  </tr>
    <?php
    $no++;}?>
</table>
              </div>
            </div>
          </div>