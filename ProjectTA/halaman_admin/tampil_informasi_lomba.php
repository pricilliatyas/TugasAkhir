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
<h1>Informasi Lomba</h1>
<table align="center" width="1175px" border="1" style="margin-left:100px;"> 
    <tr bgcolor="#B22222" align="center" style="color:#FFFFFF; height:50px;">
    <td style="color:#FFFFFF">No.</td>
        <td style="color:#FFFFFF">Kategori Ekskul</td>
        <td style="color:#FFFFFF">Tanggal Posting</td>
        <td style="color:#FFFFFF">Jam Posting</td>
        <td style="color:#FFFFFF">Tanggal Lomba</td>
        <td style="color:#FFFFFF">Keterangan Lomba</td>
        <td style="color:#FFFFFF">Foto</td>
        <td style="color:#FFFFFF">Aksi</td>
    </tr>
<?php 
$tampil=mysqli_query($GLOBALS["___mysqli_ston"], "SELECT * FROM informasi_lomba INNER JOIN kategori_ekskul ON informasi_lomba.id_kategori=kategori_ekskul.id_kategori");
 $no=1;
 while($data=mysqli_fetch_array($tampil))
    { echo "
   <tr style='height:40px;'>
        <td align='center'>$no</td>
        <td>$data[kat_ekskul]</td>
        <td>$data[tgl_post_info]</td>
		    <td>$data[jam_post_info]</td>
        <td>$data[tgl_lomba]</td>
        <td>$data[keterangan_lomba]</td>
        <td><img src='gambar/$data[foto]' width='90px' height='90px'></td>
        ";?>
      <td  align="center"><a href="<?php echo "proses/aksi_informasi_lomba.php?act=hapus&id=$data[no_urut_informasi]";?>" onClick="return confirm('Apakah anda yakin akan menghapus data ini?')"><img src="images/icon_delete.png" width="35px" height="35px"></a> || 
   <a href="<?php echo"?hal=form_informasi_lomba&act=ubah&id=$data[no_urut_informasi]";?>"><img src="images/icon_edit.png" width="30px" height="30px"></a></td>  </tr>
    <?php
    $no++;}?>
</table>
              </div>
            </div>
          </div>
