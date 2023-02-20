<?php
	$id=isset($_GET['id'])?$_GET['id']:"";
	$data=mysqli_fetch_array(mysqli_query($GLOBALS["___mysqli_ston"],"SELECT*FROM berita_ekskul WHERE  no_berita='$id'"));
?>

<form action="proses/aksi_berita_ekskul.php?act=<?php if (empty($id)){echo"simpan";} else "ubah&id=$data[no_berita]";?>" method="post"entype="multipart/form-data">


<table>
	
	<tr>
		<td>Kategori Ekskul</td>
		<td>:</td>
		<td><input type="text" name="id_kategori" value="<?php if(!empty($id)) {echo"$data[id_kategori]";}?>"></td>
	</tr>

	<tr>
		<td>Deskripsi Berita</td>
		<td>:</td>
		<td><input type="text" name="deskripsi_berita" value="<?php if(!empty($id)) {echo"$data[deskripsi_berita]";}?>"></td>
	</tr>

	<tr>
		<td>Tanggal Posting</td>
		<td>:</td>
		<td><input type="text" name="tgl_posting_berita" value="<?php if(!empty($id)) {echo"$data[tgl_posting_berita]";}?>"></td>
	</tr>

	<tr>
		<td>Jam Posting</td>
		<td>:</td>
		<td><input type="text" name="jam_posting_berita" value="<?php if(!empty($id)) {echo"$data[jam_posting_berita]";}?>"></td>
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

<?php include "halaman/tampil_berita_ekskul.php";?>