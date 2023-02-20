<div class="card shadow mb-4">
            <div class="card-header py-3">
            </div>
            <div class="card-body">
              <div class="table-responsive">
                
                <style>
    #border{border:0px}
</style>
<div id="border">
<h1>Aspirasi</h1>
<table align="center" width="1175px" border="1" style="margin-left:100px;"> 
    <tr bgcolor="#B22222" align="center" style="color:#000; height:50px;">
    <td style="color:#FFFFFF">No.</td>
        <td style="color:#FFFFFF">Tanggal Kirim</td>
        <td style="color:#FFFFFF">Isi Aspirasi</td>
        <td style="color:#FFFFFF">Aksi</td>
    </tr>
<?php 
$tampil=mysqli_query($GLOBALS["___mysqli_ston"], "select * from aspirasi");
 $no=1;
 while($data=mysqli_fetch_array($tampil))
    { echo "
   <tr style='height:40px;color:#000;'>
        <td align='center'>$no</td>
		    <td>$data[tgl_kirim]</td>
        <td>$data[isi_aspirasi]</td>
        ";?>
      <td  align="center"><a href="<?php echo "proses/aksi_aspirasi.php?act=hapus&id=$data[no_urut_aspirasi]";?>" onClick="return confirm('Apakah anda yakin akan menghapus data ini?')"><img src="images/icon_delete.png" width="35px" height="35px"></a></td>  </tr>
    <?php
    $no++;}?>
</table>
              </div>
            </div>
          </div>