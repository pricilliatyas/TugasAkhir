<div class="card shadow mb-4">
            <div class="card-header py-3">
            </div>
            <div class="card-body">
              <div class="table-responsive">
                
                <style>
    #border{border:0px}
</style>
<div id="border">
<h1>Tabel Pendaftar Ekstrakulikuler</h1>

<table align="center" width="1175px" border="1" style="margin-left:100px;"> 
    <tr bgcolor="#B22222" align="center" style="color:#FFFFFF; height:50px;">
    <td style="color:#FFFFFF">No.</td>
        <td style="color:#FFFFFF">NIP</td>
        <td style="color:#FFFFFF">Kategori Ekskul</td>
        <td style="color:#FFFFFF">Nama Siswa</td>
        <td style="color:#FFFFFF">no. HP</td>
        <td style="color:#FFFFFF">Alasan Mendaftar</td>
        <td style="color:#FFFFFF">Tanggal Daftar</td>
        <td style="color:#FFFFFF">Foto</td>
        <td style="color:#FFFFFF" colspan="2">Aksi</td>

    </tr>
<?php 
$tampil=mysqli_query($GLOBALS["___mysqli_ston"], "select * from daftar_ekskul INNER JOIN pengguna ON daftar_ekskul.no_pengguna=pengguna.no_pengguna INNER JOIN kategori_ekskul ON daftar_ekskul.id_kategori=kategori_ekskul.id_kategori WHERE status='menunggu'");
 $no=1;
 while($data=mysqli_fetch_array($tampil))
    { echo "
   <tr style='height:40px;'>
        <td align='center'>$no</td>
        <td>$data[no_induk_pengguna]</td>
        <td>$data[kat_ekskul]</td>
		<td>$data[nama_lengkap]</td>
        <td>$data[no_telp]</td>
        <td>$data[alasan_mendaftar]</td>
        <td>$data[tgl_daftar]</td>
        <td><img src='gambar/$data[foto]' style='width:60px; height:60px;'></td>
        
        ";?>
      <td  align="center"><a href="<?php echo "proses/aksi_daftar_ekskul.php?act=hapus&id=$data[no_urut_form]";?>" onClick="return confirm('Apakah anda yakin akan menghapus data ini?')">Hapus</a></td>
	  <?php
	$id=isset($_GET['id'])?$_GET['id']:"";
	$data2=mysqli_fetch_array(mysqli_query($GLOBALS["___mysqli_ston"],"SELECT*FROM daftar_ekskul WHERE no_urut_form='$id'"));
	?>
<form action="proses/aksi_daftar_ekskul.php?act=<?php if (empty($id)){echo"setuju";} else "setuju&id=$data2[no_urut_form]";?>" method="post"entype="multipart/form-data">
		<input type="hidden" name="status" value="<?php echo"$data[no_urut_form]"; ?>" />
	   <td  align="center"><button style="border-radius:20px 30px 20px 30px; background-color:#FF3E3E; color:#000000; border:0; height:50px; width:180px;"> Setujui Pemohonan</button></td>  </tr>
	  </form>
    <?php
    $no++;}?>
</table>
              </div>
            </div>
          </div>