<?php
	$id=isset($_GET['id'])?$_GET['id']:"";
	$data=mysqli_fetch_array(mysqli_query($GLOBALS["___mysqli_ston"],"SELECT*FROM daftar_ekskul WHERE no_urut_form='$id'"));
?>

<form action="proses/aksi_daftar_ekskul.php?act=<?php if (empty($id)){echo"simpan";} else "ubah&id=$data[no_urut_form]";?>" method="post"entype="multipart/form-data">


<table>
	
	<tr>
		<td>Kategori Ekskul</td>
		<td>:</td>
		<td><input type="text" name="id_kategori" value="<?php if(!empty($id)) {echo"$data[id_kategori]";}?>"></td>
	</tr>

	<tr>
		<td>Nama Siswa</td>
		<td>:</td>
		<td><input type="text" name="nama_siswa" value="<?php if(!empty($id)) {echo"$data[nama_siswa]";}?>"></td>
	</tr>

	<tr>
		<td>Kelas</td>
		<td>:</td>
		<td><input type="text" name="kelas_siswa" value="<?php if(!empty($id)) {echo"$data[kelas]";}?>"></td>
	</tr>

	<tr>
		<td>No. Handphone</td>
		<td>:</td>
		<td><input type="text" name="no_wa_siswa" value="<?php if(!empty($id)) {echo"$data[no_wa_siswa]";}?>"></td>
	</tr>

	<tr>
		<td>Alasan Mendaftar</td>
		<td>:</td>
		<td><textarea name="alasan_mendaftar"><?php if(!empty($id)) {echo"$data[isi_aspirasi]";}?></textarea></td>
	</tr>

	<tr>
		<td>Tanggal Daftar</td>
		<td>:</td>
		<td><input type="text" name="tgl_daftar" value="<?php if(!empty($id)) {echo"$data[tgl_daftar]";}?>"></td>
	</tr>

	<tr>
		<td>Foto 3x4</td>
		<td>:</td>
		<td><input type="file" name="foto" value="<?php if(!empty($id)) {echo"$data[foto]";}?>"></td>
	</tr>

	<tr>
		<td><input type="submit" name="simpan"></td>
		<td><input type="reset" name="batal"></td>
	</tr>

</table>
</form>

<?php include "halaman/tampil_daftar_ekskul.php";?>