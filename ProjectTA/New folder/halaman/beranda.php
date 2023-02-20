<?php 
    $id=isset($_GET['id'])?$_GET['id']:"";
    $data=mysqli_fetch_array(mysqli_query($GLOBALS["___mysqli_ston"], "SELECT * FROM latihan WHERE NO_urut_data='$id'"));
?>

<form action="proses/aksi_data.php?act=<?php if (empty($id)){echo"simpan";} else "ubah&id=$data[NO_urut_data]";?>" method="post"entype="multipart/form-data">

<h1 align="center">DAFTAR</h1>
<table align="center">
	<tr>
		<td>NIK </td>
		<td><input type="text" name="nik"></td>
	</tr>

	<tr>
		<td>Nama </td>
		<td><input type="text" name="nama"></td>
	</tr>

	<tr>
		<td>Tanggal Lahir </td>
		<td><input type="text" name="tanggal_lahir"></td>
	</tr>

	<tr>
		<td>Alamat </td>
		<td><textarea name="alamat"> </textarea> </td>
	</tr>

	<tr>
		<td colspan="2" align="center"><input type="submit" name="Simpan" value="Simpan" style="margin-right: 40px;"><input type="reset" name="Batal" value="Batal"></td>
	</tr>
</table>
</form>