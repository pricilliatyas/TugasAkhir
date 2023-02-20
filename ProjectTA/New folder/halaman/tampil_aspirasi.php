<div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Data Aspirasi</h6>
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
        <td style="color:#FFFFFF">Nomor Siswa</td>
        <td style="color:#FFFFFF">Tanggal Kirim</td>
        <td style="color:#FFFFFF">Isi Aspirasi</td>
        <td style="color:#FFFFFF">Aksi</td>
    </tr>
<?php 
$tampil=mysqli_query($GLOBALS["___mysqli_ston"], "select * from aspirasi");
 $no=1;
 while($data=mysqli_fetch_array($tampil))
    { echo "
   <tr style='height:40px;'>
        <td align='center'>$no</td>
        <td>$data[no_data_siswa]</td>
		    <td>$data[tgl_kirim]</td>
        <td>$data[isi_aspirasi]</td>
        ";?>
      <td  align="center"><a href="<?php echo "proses/aksi_aspirasi.php?act=hapus&id=$data[no_urut_aspirasi]";?>" onClick="return confirm('Apakah anda yakin akan menghapus data ini?')">Hapus</a> || 
   <a href="<?php echo"?hal=form_aspirasi&act=ubah&id=$data[no_urut_aspirasi]";?>">Ubah</a></td>  </tr>
    <?php
    $no++;}?>
</table>
              </div>
            </div>
          </div>