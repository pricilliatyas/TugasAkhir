
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
<h1>Data Admini</h1>
<table align="center" width="1175px" border="1" style="margin-left:100px;"> 
    <tr bgcolor="#B22222" align="center" style="color:#FFFFFF; height:50px;">
    <td style="color:#FFFFFF">No.</td>
        <td style="color:#FFFFFF">NISN</td>
        <td style="color:#FFFFFF">Nama Lengkap</td>
        <td style="color:#FFFFFF">Tempat Tanggal Lahir</td>
        <td style="color:#FFFFFF">No. HP</td>
        <td style="color:#FFFFFF">Foto</td>
        <td style="color:#FFFFFF">Username</td>
        <td style="color:#FFFFFF">Level</td>
        <td style="color:#FFFFFF">Aksi</td>
    </tr>
<?php 
$tampil=mysqli_query($GLOBALS["___mysqli_ston"], "SELECT * FROM pengguna WHERE level='admin'");
 $no=1;
 while($data=mysqli_fetch_array($tampil))
    { echo "
   <tr style='height:40px;'>
        <td align='center'>$no</td>
        <td>$data[no_induk_pengguna]</td>
		<td>$data[nama_lengkap]</td>
        <td>$data[ttl_pengguna]</td>
        <td>$data[no_telp]</td>
        <td><img src='gambar/$data[foto]' style='width:60px; height:60px;'></td>
        <td>$data[username]</td>
        <td>$data[level]</td>
        ";?>
      <td  align="center"><a href="<?php echo "proses/aksi_data_siswa.php?act=hapus_admin&id=$data[no_pengguna]";?>" onClick="return confirm('Apakah anda yakin akan menghapus data ini?')"><img src="images/icon_delete.png" width="35px" height="35px"></a> || 
   <a href="<?php echo"?hal=form_data_admin&act=ubah_admin&id=$data[no_pengguna]";?>"><img src="images/icon_edit.png" width="30px" height="30px"></a></td>  </tr>
    <?php
    $no++;}?>
</table>
              </div>
            </div>
          </div>