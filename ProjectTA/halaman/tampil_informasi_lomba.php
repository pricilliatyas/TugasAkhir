<div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Informasi Lomba Ekstrakulikuler</h6>
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
        <td style="color:#FFFFFF">Tanggal Posting</td>
        <td style="color:#FFFFFF">Jam Posting</td>
        <td style="color:#FFFFFF">Tanggal Lomba</td>
        <td style="color:#FFFFFF">Keterangan Lomba</td>
        <td style="color:#FFFFFF">Foto</td>
        <td style="color:#FFFFFF">Aksi</td>
    </tr>
<?php 
$tampil=mysqli_query($GLOBALS["___mysqli_ston"], "select * from informasi_lomba");
 $no=1;
 while($data=mysqli_fetch_array($tampil))
    { echo "
   <tr style='height:40px;'>
        <td align='center'>$no</td>
        <td>$data[id_kategori]</td>
        <td>$data[tgl_post_info]</td>
		    <td>$data[jam_post_info]</td>
        <td>$data[tgl_lomba]</td>
        <td>$data[keterangan_lomba]</td>
        <td>$data[foto]</td>
        ";?>
      <td  align="center"><a href="<?php echo "proses/aksi_informasi_lomba.php?act=hapus&id=$data[no_urut_informasi]";?>" onClick="return confirm('Apakah anda yakin akan menghapus data ini?')">Hapus</a> || 
   <a href="<?php echo"?hal=form_informasi_lomba&act=ubah&id=$data[no_urut_informasi]";?>">Ubah</a></td>  </tr>
    <?php
    $no++;}?>
</table>
              </div>
            </div>
          </div>
