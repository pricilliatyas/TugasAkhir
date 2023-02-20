  <?php
include "proses/koneksi.php";
$id= $_GET['id'];
	$data=mysqli_fetch_array(mysqli_query($GLOBALS["___mysqli_ston"],"SELECT*FROM berita_ekskul INNER JOIN kategori_ekskul ON berita_ekskul.id_kategori=kategori_ekskul.id_kategori INNER JOIN pembina_ekskul ON kategori_ekskul.id_kategori=pembina_ekskul.id_kategori WHERE no_berita='$id'"));

echo "
 <table style='color:#000; margin-left:180px;'>
 <tr>
 
 <td rowspan='8'><img src='gambar/$data[foto]' alt='#' style='width:300px; height:300px'/>

 	<p style='margin-top:30px;'><img src='gambar/$data[foto2]' alt='#' style='width:300px; height:300px'/></p>
 					<br>
 					Waktu Posting: $data[tgl_posting_berita], $data[jam_posting_berita]</td>
</tr>
<tr>
 <td align='center' width='650px'><h2 style='font-size:36px;margin-top:-300px; margin-left:-0px;'>$data[kat_ekskul]</h2>
 <p>$data[nama_guru]</p>
 <p style='margin-top:50px; font-size:18px;margin-left:-100px;'>$data[deskripsi_berita]</p>
</td>
					 
</tr>

 
</table>";?>
