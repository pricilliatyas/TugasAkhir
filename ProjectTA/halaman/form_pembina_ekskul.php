<?php
	$id=isset($_GET['id'])?$_GET['id']:"";
	$data=mysqli_fetch_array(mysqli_query($GLOBALS["___mysqli_ston"],"SELECT*FROM pembina_ekskul WHERE no_urut_profil='$id'"));
?>

<form action="proses/aksi_pembina_ekskul.php?act=<?php if (empty($id)){echo"simpan";} else "ubah&id=$data[no_urut_profil]";?>" method="post"entype="multipart/form-data">


<table>

	<tr>
		<td>Kategori Ekskul</td>
		<td>:</td>
		<td><input type="text" name="id_kategori" value="<?php if(!empty($id)) {echo"$data[id_kategori]";}?>"></td>
	</tr>

	<tr>
		<td>NIP Guru</td>
		<td>:</td>
		<td><input type="text" name="nip_guru" value="<?php if(!empty($id)) {echo"$data[nip_guru]";}?>"></td>
	</tr>

	<tr>
		<td>Nama Guru</td>
		<td>:</td>
		<td><input type="text" name="nama_guru" value="<?php if(!empty($id)) {echo"$data[nama_guru]";}?>"></td>
	</tr>

	<tr>
		<td>Alamat Guru</td>
		<td>:</td>
		<td><textarea name="alamat_guru"><?php if(!empty($id)) {echo"$data[alamat_guru]";}?></textarea></td>
	</tr>

	<tr>
		<td>Tempat Tanggal Lahir Guru</td>
		<td>:</td>
		<td><input type="text" name="ttl_guru" value="<?php if(!empty($id)) {echo"$data[ttl_guru]";}?>"></td>
	</tr>

	<tr>
		<td>No. Handphone Guru</td>
		<td>:</td>
		<td><input type="text" name="no_telp_guru" value="<?php if(!empty($id)) {echo"$data[no_telp_guru]";}?>"></td>
	</tr>

	<tr>
		<td>Upload Foto</td>
		<td>:</td>
		<td><input type="file" name="foto" value="<?php if(!empty($id)) {echo"$data[foto]";}?>"></td>
	</tr>

	<tr>
		<td><input type="submit" name="simpan"></td>
		<td><input type="reset" name="batal"></td>
	</tr>
	
</table>
</form>

<?php include "halaman/tampil_pembina_ekskul.php";?>