<?php
	$id=isset($_GET['id'])?$_GET['id']:"";
	$data=mysqli_fetch_array(mysqli_query($GLOBALS["___mysqli_ston"],"SELECT*FROM data_siswa WHERE no_data_siswa='$id'"));
?>

<form action="proses/aksi_data_siswa.php?act=<?php if (empty($id)){echo"simpan";} else "ubah&id=$data[no_data_siswa]";?>" method="post"entype="multipart/form-data">


<table>
	
	<tr>
		<td>NISN Siswa</td>
		<td>:</td>
		<td><input type="text" name="nisn_siswa" value="<?php if(!empty($id)) {echo"$data[nisn_siswa]";}?>"></td>
	</tr>

	<tr>
		<td>Nama Siswa</td>
		<td>:</td>
		<td><input type="text" name="nama_siswa" value="<?php if(!empty($id)) {echo"$data[nama_siswa]";}?>"  required oninvalid="this.setCustomValidity('Data harus dipilih')" oninput="setCustomValidity('')"></td>
	</tr>

	<tr>
		<td>Tempat Tanggal Lahir Siswa</td>
		<td>:</td>
		<td><input type="text" name="ttl_siswa" value="<?php if(!empty($id)) {echo"$data[nisn_siswa]";}?>"></td>
	</tr>

	<tr>
		<td>No. Handphone Siswa</td>
		<td>:</td>
		<td><input type="text" name="no_hp_siswa" value="<?php if(!empty($id)) {echo"$data[no_hp_siswa]";}?>"></td>
	</tr>

	<tr>
		<td>Kelas</td>
		<td>:</td>
		<td><input type="text" name="kelas" value="<?php if(!empty($id)) {echo"$data[kelas]";}?>"></td>
	</tr>

	<tr>
		<td><input type="submit" name="simpan"></td>
		<td><input type="reset" name="batal"></td>
	</tr>

</table>
</form>

<?php include "halaman/tampil_data_siswa.php";?>