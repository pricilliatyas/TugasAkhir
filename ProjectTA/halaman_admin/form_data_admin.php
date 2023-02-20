<h1 align="center" style="margin-top:30px;">Data Admin</h1>
<?php 
    $id=isset($_GET['id'])?$_GET['id']:"";
    $data=mysqli_fetch_array(mysqli_query($GLOBALS["___mysqli_ston"], "SELECT * FROM pengguna WHERE no_pengguna='$id'"));
?>

<form action="proses/aksi_data_siswa.php?act=<?php if(empty($id)){echo"simpan_admin";}else echo"ubah_admin&id=$data[no_pengguna]";?>" method="post" enctype="multipart/form-data" onsubmit="return validasi();">


<center>
<table style="color:#000000;">
	<tr>
		<td>NISN</td>
		<td>:</td>
		<td><input type="text" name="nisn" value="<?php if(!empty($id)) {echo"$data[no_induk_pengguna]";}?>"  required oninvalid="this.setCustomValidity('Nisn Tidak Boleh Kosong')" oninput="setCustomValidity('')"></td>
	</tr>

	<tr>
		<td>Nama Lengkap</td>
		<td>:</td>
		<td><input type="text" name="nama" value="<?php if(!empty($id)) {echo"$data[nama_lengkap]";}?>" required oninvalid="this.setCustomValidity('Nama Tidak Boleh Kosong')" oninput="setCustomValidity('')"></td>
	</tr>

	<tr>
		<td>Jenis Kelamin</td>
		<td>:</td>
		<td><input type="radio" name="jekel" value="Perempuan">Perempuan
			<input type="radio" name="jekel" value="Laki-Laki">Laki-Laki</td>
	</tr>
	<tr>
		<td>Tempat Tanggal Lahir </td>
		<td>:</td>
		<td><input type="text" name="ttl" value="<?php if(!empty($id)) {echo"$data[ttl_pengguna]";}?>" required oninvalid="this.setCustomValidity('Tanggal Lahir Tidak Boleh Kosong')" oninput="setCustomValidity('')"></td>
	</tr>

	<tr>
		<td>No. Handphone </td>
		<td>:</td>
		<td><input type="text" name="no_hp" value="<?php if(!empty($id)) {echo"$data[no_telp]";}?>" required oninvalid="this.setCustomValidity('No Telpon Tidak Boleh Kosong')" oninput="setCustomValidity('')"></td>
	</tr>

	<tr>
		<td>Foto</td>
		<td>:</td>
		<td><input type="file" name="foto" value="<?php if(!empty($id)) {echo"$data[foto]";}?>" required oninvalid="this.setCustomValidity('Foto Tidak Boleh Kosong')" oninput="setCustomValidity('')"></td>
	</tr>
	<tr>
		<td>Username</td>
		<td>:</td>
		<td><input type="text" name="username" value="<?php if(!empty($id)) {echo"$data[username]";}?>" required oninvalid="this.setCustomValidity('Username Tidak Boleh Kosong')" oninput="setCustomValidity('')"></td>
	</tr>
	<tr>
		<td>Password</td>
		<td>:</td>
		<td><input type="text" name="password" value="<?php if(!empty($id)) {echo"$data[password]";}?>" required oninvalid="this.setCustomValidity('Password Tidak Boleh Kosong')" oninput="setCustomValidity('')"></td>
	</tr>
<input type="hidden" name="level" value="admin">
	<tr>
		<td><input type="submit" name="simpan" value="Simpan" style='border-radius: 20px 20px 20px 20px ;background-color:#FF6633; border:0; width:90px; height:35px; margin-top:20px; margin-left:200px;'></td>
		<td><input type="reset" name="batal" value="Batal" style='border-radius: 20px 20px 20px 20px ;background-color:#FF6633; border:0; width:90px; height:35px; margin-top:20px; margin-left:50px'></td>
	</tr>

</table>
</form>
</center>
