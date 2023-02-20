<?php
	$id=isset($_GET['id'])?$_GET['id']:"";
	$data=mysqli_fetch_array(mysqli_query($GLOBALS["___mysqli_ston"],"SELECT*FROM galeri_ekskul WHERE no_id_galeri='$id'"));
?>

<form action="proses/aksi_galeri_ekskul.php?act=<?php if (empty($id)){echo"simpan";} else "ubah&id=$data[no_id_galeri]";?>" method="post"entype="multipart/form-data">


<table>
	
	<tr>
		<td>Kategori Ekskul</td>
		<td>:</td>
		<td><input type="text" name="id_kategori" value="<?php if(!empty($id)) {echo"$data[id_kategori]";}?>"></td>
	</tr>

	<tr>
		<td>Foto</td>
		<td>:</td>
		<td><input type="file" name="foto" value="<?php if(!empty($id)) {echo"$data[foto]";}?>"></td>
	</tr>

	<tr>
		<td>Keterangan Foto</td>
		<td>:</td>
		<td><textarea name="ket_foto"><?php if(!empty($id)) {echo"$data[ket_foto]";}?></textarea></td>
	</tr>

	<tr>
		<td><input type="submit" name="simpan"></td>
		<td><input type="reset" name="batal"></td>
	</tr>

</table>
</form>

<?php include "halaman/tampil_galeri_ekskul.php";?>