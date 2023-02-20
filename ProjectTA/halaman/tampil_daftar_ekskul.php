<div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Data Daftar Ekstrakulikuler</h6>
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
        <td style="color:#FFFFFF">Nama Siswa</td>
        <td style="color:#FFFFFF">Kelas</td>
        <td style="color:#FFFFFF">no. HP</td>
        <td style="color:#FFFFFF">Alasan Mendaftar</td>
        <td style="color:#FFFFFF">Tanggal Daftar</td>
        <td style="color:#FFFFFF">Foto</td>
        <td style="color:#FFFFFF">Aksi</td>

    </tr>
<?php 
$tampil=mysqli_query($GLOBALS["___mysqli_ston"], "select * from daftar_ekskul");
 $no=1;
 while($data=mysqli_fetch_array($tampil))
    { echo "
   <tr style='height:40px;'>
        <td align='center'>$no</td>
        <td>$data[id_kategori]</td>
		    <td>$data[nama_siswa]</td>
        <td>$data[kelas_siswa]</td>
        <td>$data[no_wa_siswa]</td>
        <td>$data[alasan_mendaftar]</td>
        <td>$data[tgl_daftar]</td>
        <td>$data[foto]</td>
        ";?>
      <td  align="center"><a href="<?php echo "proses/aksi_daftar_ekskul.php?act=hapus&id=$data[no_urut_form]";?>" onClick="return confirm('Apakah anda yakin akan menghapus data ini?')">Hapus</a> || 
   <a href="<?php echo"?hal=form_daftar_ekskul&act=ubah&id=$data[no_urut_form]";?>">Ubah</a></td>  </tr>
    <?php
    $no++;}?>
</table>
              </div>
            </div>
          </div>