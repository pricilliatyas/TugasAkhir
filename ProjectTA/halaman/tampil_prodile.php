<div style="margin-top:100px;">  <?php
include "proses/koneksi.php";
	$data=mysqli_fetch_array(mysqli_query($GLOBALS["___mysqli_ston"],"SELECT*FROM pengguna WHERE no_pengguna='$login'"));

echo "
 <table style='color:#000; margin-left:180px;'>
 <tr rowspan='2'>
 <td><img src='gambar/$data[foto]' alt='#' style='width:300px; height:300px'/></td>
</tr>
<tr>
 <td align='center'> Nama</td>
 <td align='center'> :</td>
 <td align='center'> $data[nama_lengkap]</td>					 
</tr>
<tr>
 <td align='center'> Nama</td>
 <td align='center'> :</td>
 <td align='center'> $data[nama_lengkap]</td>					 
</tr>
<tr>
 <td align='center'> Nama</td>
 <td align='center'> :</td>
 <td align='center'> $data[nama_lengkap]</td>					 
</tr>
<tr>
 <td align='center'> Nama</td>
 <td align='center'> :</td>
 <td align='center'> $data[nama_lengkap]</td>					 
</tr>
<tr>
 <td align='center'> Nama</td>
 <td align='center'> :</td>
 <td align='center'> $data[nama_lengkap]</td>					 
</tr>
<tr>
 <td align='center'> Nama</td>
 <td align='center'> :</td>
 <td align='center'> $data[nama_lengkap]</td>					 
</tr>
<tr>
 <td align='center'> Nama</td>
 <td align='center'> :</td>
 <td align='center'> $data[nama_lengkap]</td>					 
</tr>
<tr>
 <td align='center'> Nama</td>
 <td align='center'> :</td>
 <td align='center'> $data[nama_lengkap]</td>					 
</tr>

 
</table>";?>
</div>