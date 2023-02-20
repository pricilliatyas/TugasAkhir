<?php
	$id=isset($_GET['id'])?$_GET['id']:"";
	$data=mysqli_fetch_array(mysqli_query($GLOBALS["___mysqli_ston"],"SELECT*FROM informasi_lomba WHERE no_urut_informasi='$id'"));
?>

<form action="proses/aksi_informasi_lomba.php?act=<?php if (empty($id)){echo"simpan";} else "ubah&id=$data[no_urut_informasi]";?>" method="post"entype="multipart/form-data">


<table>
	
	<tr>
		<td>Kategori Ekskul</td>
		<td>:</td>
		<td><input type="text" name="id_kategori" value="<?php if(!empty($id)) {echo"$data[id_kategori]";}?>"></td>
	</tr>

	<tr>
		<td>Tanggal Posting</td>
		<td>:</td>
		<td><input type="text" name="tgl_post_info" value="<?php if(!empty($id)) {echo"$data[tgl_post_info]";}?>"></td>
	</tr>

	<tr>
		<td>Jam Posting</td>
		<td>:</td>
		<td><input type="text" name="jam_post_info" value="<?php if(!empty($id)) {echo"$data[jam_post_info]";}?>"></td>
	</tr>

	<tr>
		<td>Tanggal Lomba</td>
		<td>:</td>
		<td><input type="text" name="tgl_lomba" value="<?php if(!empty($id)) {echo"$data[tgl_lomba]";}?>"></td>
	</tr>

	<tr>
		<td>Keterangan Lomba</td>
		<td>:</td>
		<td><textarea name="keterangan_lomba"><?php if(!empty($id)) {echo"$data[keterangan_lomba]";}?></textarea></td>
	</tr>

	<tr>
		<td>Foto</td>
		<td>:</td>
		<td><input type="file" name="foto" value="<?php if(!empty($id)) {echo"$data[foto]";}?>"></td>
	</tr>

	<tr>
		<td><input type="submit" name="simpan"></td>
		<td><input type="reset" name="batal"></td>
	</tr>

</table>
</form>

<?php include "halaman/tampil_informasi_lomba.php";?>