<div style="margin-top:-200px;">

<?php
	$id=isset($_GET['id'])?$_GET['id']:"";

	$data=mysqli_fetch_array(mysqli_query($GLOBALS["___mysqli_ston"],"SELECT*FROM aspirasi WHERE no_urut_aspirasi='$id'"));
?>
<center>
<form action="proses/aksi_aspirasi.php?act=<?php if (empty($id)){echo"simpan";} else"ubah&id=$data[no_urut_aspirasi]";?>" method="post"entype="multipart/form-data">


<table>
	<tr>
		<td colspan="3" align="center" style="font-size:24px; color:#000000">TINGGALKAN KOMENTAR</td>
	</tr>
	
<input type="hidden" name="no_data_siswa" value="<?php if(empty($id)) {echo"$login";}?>">
<input type="hidden" name="tgl_kirim" value="<?php echo date ('m-d-Y')?>"></td>

	<tr>
		<td style="color:#000000;">Aspirasi</td>
		<td>:</td>
		<td><input type="text" name="isi_aspirasi" style="height:70px; width: 220px;" value="<?php if(!empty($id)) {echo"$data[isi_aspirasi]";}?>" required oninvalid="this.setCustomValidity('Aspirasi Tidak Boleh Kosong')" oninput="setCustomValidity('')"> </td>
	</tr>

	<tr>
		<td colspan="3" align="center" style="color:#FFF;"><input type="submit" name="simpan" value="Kirim" style='border-radius: 20px 20px 20px 20px ;background-color:#C21010; border:0; width:90px; height:35px; margin-top:20px; margin-left:200px;'></td>
	</tr>

</table>
</form>
</center>
</div>
