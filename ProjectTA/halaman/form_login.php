<center>
	<?php
	$id=isset($_GET['id'])?$_GET['id']:"";
	$data=mysqli_fetch_array(mysqli_query($GLOBALS["___mysqli_ston"],"SELECT*FROM pengguna WHERE 
		no_pengguna='$id'"));
?>
<form action="proses/aksi_login.php?act=<?php if(empty($id)){echo"simpan_reset";}else echo"ubah&id=$data[no_berita]";?>" method="post" enctype="multipart/form-data" onsubmit="return validasi();">


<table>

 	<tr>
		<td>Masukkan NISN</td>
		<td>:</td>
		<td><input type="text" name="nip" style='color:#000;'></td>
	</tr>
 
	<tr>
		<td>Masukkan Password Baru</td>
		<td>:</td>
		<td><input type="text" name="password" value="<?php if(!empty($id)) {echo"$data[password]";}?>" style='color:#000;'></td>
	</tr>

	<tr>
		<td><input type="submit" name="simpan" value="Simpan" style='border-radius: 20px 20px 20px 20px ;background-color:#FF6633; border:0; width:90px; height:35px; margin-top:20px; margin-left:200px; color:#000;'></td>
		<td><input type="reset" name="batal" value="Batal" style='border-radius: 20px 20px 20px 20px ;background-color:#FF6633; border:0; width:90px; height:35px; margin-top:20px; margin-left:50px; color:#000;'></td>
	</tr>

</table>
</form></center>