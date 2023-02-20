<div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Data Kategori</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
              
                    <div class="input-group-append">
                     <a href=""> <button class="btn btn-primary" type="button">
                        Tambah Kategori
                      </button></a>
                    </div>
                
                <style>
    #border{border:0px}
</style>
<div id="border">
<br />
<table align="center" width="100%" border="1">
        <tr bgcolor="#0066FF" align="center" style="color:#FFFFFF; height:50px;">
        <td style="color:#FFFFFF">No.</td>
        <td style="color:#FFFFFF">Kategori</td>
        <td style="color:#FFFFFF">Aksi</td>
        </tr>
<?php 
$tampil=mysqli_query($GLOBALS["___mysqli_ston"], "select * from nama tabel");
 $no=1;
 while($data=mysqli_fetch_array($tampil))
    { echo "
   <tr style='height:40px;'>
        <td align='center'>$no</td>
        <td>$data[field]</td>
        <td>$data[field2]</td>
        <td>$data[field3]</td>
        ";?>
      <td  align="center"><a href="<?php echo "proses/#?act=hapus&id=$data[primary key]";?>" onClick="return confirm('Apakah anda yakin akan menghapus data ini?')"><img src="img/del.png" style="width:20px; height:20px;"></a> || 
      <a href="<?php echo"?hal=#&act=ubah&id=$data[primary key]";?>"><img src="img/edit.png" style="width:20px; height:20px;"></a></td>  </tr>
    <?php
    $no++;}?>
</table>
              </div>
            </div>
          </div>