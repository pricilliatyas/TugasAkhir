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
<h1>Pembina Ekstrakulikuler</h1>
<table align="center" width="1175px" border="1" style="margin-left:100px;"> 
    <tr bgcolor="#B22222" align="center" style="color:#FFFFFF; height:50px;">
    <td style="color:#FFFFFF">No.</td>
        <td style="color:#FFFFFF">Kategori Ekskul</td>
        <td style="color:#FFFFFF">NIP Guru</td>
        <td style="color:#FFFFFF">Nama Guru</td>
        <td style="color:#FFFFFF">Alamat</td>
        <td style="color:#FFFFFF">Tempat Tanggal Lahir</td>
        <td style="color:#FFFFFF">No. HP</td>
        <td style="color:#FFFFFF">Foto</td>
        <td style="color:#FFFFFF">Aksi</td>
    </tr>
<?php 
$tampil=mysqli_query($GLOBALS["___mysqli_ston"], "select * from pembina_ekskul inner join kategori_ekskul on pembina_ekskul.id_kategori=kategori_ekskul.id_kategori");
 $no=1;
 while($data=mysqli_fetch_array($tampil))
    { echo "
   <tr style='height:40px;'>
        <td align='center'>$no</td>
        <td>$data[kat_ekskul]</td>
        <td>$data[nip_guru]</td>
		<td>$data[nama_guru]</td>
        <td>$data[alamat_guru]</td>
        <td>$data[ttl_guru]</td>
        <td>$data[no_telp_guru]</td>
        <td><img src='gambar/$data[foto_pembina]' width='90px' height='90px'></td>
        ";?>
      <td  align="center"><a href="<?php echo "proses/aksi_pembina_ekskul.php?act=hapus&id=$data[no_urut_profil]";?>" onClick="return confirm('Apakah anda yakin akan menghapus data ini?')"><img src="images/icon_delete.png" width="35px" height="35px"></a> || 
   <a href="<?php echo"?hal=form_pembina_ekskul&act=ubah&id=$data[no_urut_profil]";?>"><img src="images/icon_edit.png" width="30px" height="30px"></a></td>  </tr>
    <?php
    $no++;}?>
</table>
              </div>
            </div>
          </div>
