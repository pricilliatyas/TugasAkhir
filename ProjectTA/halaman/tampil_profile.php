
<div style="margin-top:0px;">  <?php
	$data=mysqli_fetch_array(mysqli_query($GLOBALS["___mysqli_ston"],"SELECT*FROM pengguna WHERE no_pengguna='$login'"));

?>	
</div>
<h1 align="center" style="font-size:36px; margin-bottom:20px;">Data Diri Siswa</h1>
<table>
<tr>
<td><table style="margin-left:500px; color: #000000; font-size:18px; margin-top:0px;">	

	<tr style="height:30px;">
		<td style="width:200px;">Nama</td>
		<td>:</td>
		<td><?php echo"$data[nama_lengkap]";?></td>
	</tr>

	<tr style="height:30px;">
		<td style="width:200px;">Tempat Tanggal Lahir</td>
		<td>:</td>
		<td><?php echo"$data[ttl_pengguna]";?></td>
	</tr>
	<tr style="height:30px;">
		<td style="width:200px;">Jenis Kelamin</td>
		<td>:</td>
		<td><?php echo"$data[jenis_kelamin]";?></td>
	</tr>

	<tr style="height:30px;">
		<td style="width:200px;">No Telpon</td>
		<td>:</td>
		<td><?php echo"$data[no_telp]";?></td>
	</tr>
</table>
</td>
</tr>
<tr>
<td><p style="margin-left:-250px; margin-top:-200px;"><?php echo"<img src='gambar/$data[foto]' alt='#' style='width:300px; height:400px'/>";?></p>
</td></tr>
</table>
</p>
