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
<h1>Kategori Ekskul</h1>
<table align="center" width="1175px" border="1" style="margin-left:100px;"> 
    <tr bgcolor="#B22222" align="center" style="color:#FFFFFF; height:50px;">
    <td style="color:#FFFFFF">No.</td>
        <td style="color:#FFFFFF">Kategori Ekskul</td>
        <td style="color:#FFFFFF">Aksi</td>
    </tr>
<?php 
$tampil=mysqli_query($GLOBALS["___mysqli_ston"], "select * from kategori_ekskul");
 $no=1;
 while($data=mysqli_fetch_array($tampil))
    { echo "
   <tr style='height:40px;color:#000'>
        <td align='center'>$no</td>
        <td>$data[kat_ekskul]</td>
        ";?>
      <td  align="center"><a href="<?php echo "proses/aksi_kategori_ekskul.php?act=hapus&id=$data[id_kategori]";?>" onClick="return confirm('Apakah anda yakin akan menghapus data ini?')"><img src="images/icon_delete.png" width="35px" height="35px"></a> || 
   <a href="<?php echo"?hal=form_kategori_ekskul&act=ubah&id=$data[id_kategori]";?>"><img src="images/icon_edit.png" width="30px" height="30px"></a></td>  </tr>
    <?php
    $no++;}?>
</table>
              </div>
            </div>
          </div>
