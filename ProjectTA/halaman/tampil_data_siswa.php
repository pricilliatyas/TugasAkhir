<div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Data Siswa</h6>
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
        <td style="color:#FFFFFF">NISN Siswa</td>
        <td style="color:#FFFFFF">Nama Siswa</td>
        <td style="color:#FFFFFF">Tempat Tanggal Lahir</td>
        <td style="color:#FFFFFF">No. HP</td>
        <td style="color:#FFFFFF">Kelas</td>
        <td style="color:#FFFFFF">Aksi</td>
    </tr>
<?php 
$tampil=mysqli_query($GLOBALS["___mysqli_ston"], "select * from data_siswa");
 $no=1;
 while($data=mysqli_fetch_array($tampil))
    { echo "
   <tr style='height:40px;'>
        <td align='center'>$no</td>
        <td>$data[nisn_siswa]</td>
		    <td>$data[nama_siswa]</td>
        <td>$data[ttl_siswa]</td>
        <td>$data[no_telp_siswa]</td>
        <td>$data[kelas]</td>
        ";?>
      <td  align="center"><a href="<?php echo "proses/aksi_data_siswa.php?act=hapus&id=$data[no_data_siswa]";?>" onClick="return confirm('Apakah anda yakin akan menghapus data ini?')">Hapus</a> || 
   <a href="<?php echo"?hal=form_data_siswa&act=ubah&id=$data[no_data_siswa]";?>">Ubah</a></td>  </tr>
    <?php
    $no++;}?>
</table>
              </div>
            </div>
          </div>