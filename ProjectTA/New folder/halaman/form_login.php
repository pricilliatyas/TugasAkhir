<?php
	$id=isset($_GET['id'])?$_GET['id']:"";
	$data=mysqli_fetch_array(mysqli_query($GLOBALS["___mysqli_ston"],"SELECT*FROM login WHERE 
		no_urut_login='$id'"));
?>

<form action="proses/aksi_login.php?act=<?php if (empty($id)){echo"simpan";} else "ubah&id=$data[no_urut_login]";?>" method="post"entype="multipart/form-data">

<table>

 	<tr>
		<td>Username</td>
		<td>:</td>
		<td><input type="text" name="username" value="<?php if(!empty($id)) {echo"$data[username]";}?>"></td>
	</tr>

	<tr>
		<td>Password</td>
		<td>:</td>
		<td><input type="text" name="password" value="<?php if(!empty($id)) {echo"$data[password]";}?>"></td>
	</tr>

	<tr>
		<td>Login Sebagai</td>
		<td>:</td>
		<td><select name="level">
			<option>Admin</option>
			<option>Siswa</option>
			<option>Guru</option></select></td>
	</tr>

	<tr>
		<td><input type="submit" name="simpan"></td>
		<td><input type="reset" name="batal"></td>
	</tr>

</table>
</form>

<?php include "halaman/tampil_login.php";?>