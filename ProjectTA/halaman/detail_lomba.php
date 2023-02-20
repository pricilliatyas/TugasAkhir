<div style="margin-top:0px;">      <?php
include "proses/koneksi.php";
$id= $_GET['id'];
	$data=mysqli_fetch_array(mysqli_query($GLOBALS["___mysqli_ston"],"SELECT*FROM informasi_lomba INNER JOIN kategori_ekskul ON informasi_lomba.id_kategori=kategori_ekskul.id_kategori WHERE no_urut_informasi='$id'"));

echo "
 <table style='color:#000; margin-left:185px;'>
 <tr>
 <td rowspan='8'><img src='gambar/$data[foto]' alt='#' style='width:300px; height:300px'/>
 <br>
  Waktu Posting :$data[tgl_post_info], $data[jam_post_info]</td>
</tr>
<tr>
 <td align='center' width='650px'><h2 style='font-size:36px;margin-left:250px;margin-top:-50px;'>$data[kat_ekskul]</h2>
 <p style='margin-top:50px; font-size:18px;margin-left:-350px;' align='left'>Tanggal Lomba: $data[tgl_lomba]</p>
 <p style='margin-top:10px; font-size:18px;margin-left:-200px;'>Tanggal Lomba: $data[keterangan_lomba]</p>
 </td>

</tr>
 
</table>";?>
</div>
