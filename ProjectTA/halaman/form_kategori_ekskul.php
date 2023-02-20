<?php
	$id=isset($_GET['id'])?$_GET['id']:"";
	$data=mysqli_fetch_array(mysqli_query($GLOBALS["___mysqli_ston"],"SELECT*FROM kategori_ekskul WHERE id_kategori='$id'"));
?>

<form action="proses/aksi_kategori_ekskul.php?act=<?php if (empty($id)){echo"simpan";} else "ubah&id=$data[id_kategori]";?>" method="post"entype="multipart/form-data">


<table>

	<tr>
		<td>Kategori Ekskul</td>
		<td>:</td>
		<td><input type="text" name="kat_ekskul" value="<?php if(!empty($id)) {echo"$data[kat_ekskul]";}?>"></td>
	</tr>

	<tr>
		<td><input type="submit" name="simpan"></td>
		<td><input type="reset" name="batal"></td>
	</tr>
	
</table>
</form>

<?php include "halaman/tampil_kategori_ekskul.php";?>