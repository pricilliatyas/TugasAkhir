<div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Galeri Ekstrakulikuler</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                
                <style>
    #border{border:0px}
</style>
<div id="border">
<br />
<table align="center" width="100%" border="1">
    <tr bgcolor="#0066FF" align="center" style="color:#FFFFFF; height:50px;">
    <td style="color:#FFFFFF">No.</td>
        <td style="color:#FFFFFF">Kategori Ekskul</td>
        <td style="color:#FFFFFF">Foto</td>
        <td style="color:#FFFFFF">Keterangan Foto</td>
        <td style="color:#FFFFFF">Aksi</td>
    </tr>
<?php 
$tampil=mysqli_query($GLOBALS["___mysqli_ston"], "select * from galeri_ekskul");
 $no=1;
 while($data=mysqli_fetch_array($tampil))
    { echo "
   <tr style='height:40px;'>
        <td align='center'>$no</td>
        <td>$data[id_kategori]</td>
        <td>$data[foto]</td>
		    <td>$data[ket_foto]</td>
        ";?>
      <td  align="center"><a href="<?php echo "proses/aksi_galeri_ekskul.php?act=hapus&id=$data[no_id_galeri]";?>" onClick="return confirm('Apakah anda yakin akan menghapus data ini?')">Hapus</a> || 
   <a href="<?php echo"?hal=form_galeri_ekskul&act=ubah&id=$data[no_id_galeri]";?>">Ubah</a></td>  </tr>
    <?php
    $no++;}?>
</table>
              </div>
            </div>
          </div>
