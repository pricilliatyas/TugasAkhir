<?php
	$id=isset($_GET['id'])?$_GET['id']:"";
	$data=mysqli_fetch_array(mysqli_query($GLOBALS["___mysqli_ston"],"SELECT*FROM aspirasi WHERE no_urut_aspirasi='$id'"));
?>

<form action="proses/aksi_aspirasi.php?act=<?php if (empty($id)){echo"simpan";} else"ubah&id=$data[no_urut_aspirasi]";?>" method="post"entype="multipart/form-data">


<table>
	
	<tr>
		<td>No. Data Siswa</td>
		<td>:</td>
		<td><input type="text" name="no_data_siswa" value="<?php if(!empty($id)) {echo"$data[no_data_siswa]";}?>"></td>
	</tr>

	<tr>
		<td>Tanggal Kirim</td>
		<td>:</td>
		<td><input type="text" name="tgl_kirim" value="<?php if(!empty($id)) {echo"$data[tgl_kirim]";}?>"></td>
	</tr>

	<tr>
		<td>Aspirasi</td>
		<td>:</td>
		<td><textarea name="isi_aspirasi"><?php if(!empty($id)) {echo"$data[isi_aspirasi]";}?></textarea></td>
	</tr>

	<tr>
		<td><input type="submit" name="simpan"></td>
		<td><input type="reset" name="batal"></td>
	</tr>

</table>
</form>

<?php include "halaman/tampil_aspirasi.php";?>