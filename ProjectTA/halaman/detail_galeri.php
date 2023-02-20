      <?php
include "proses/koneksi.php";
$id= $_GET['id'];
	$data=mysqli_fetch_array(mysqli_query($GLOBALS["___mysqli_ston"],"SELECT*FROM galeri_ekskul INNER JOIN kategori_ekskul ON galeri_ekskul.id_kategori=kategori_ekskul.id_kategori WHERE no_id_galeri='$id'"));

echo "
 <table style='color:#000; margin-left:185px;'>
 <tr>
 <td rowspan='8'><img src='gambar/$data[foto]' alt='#' style='width:400px; height:300px'/></td>
</tr>
<tr>
 <td align='center' width='650px'><h2 style='font-size:36px;margin-top:-150px; margin-left:0px;'>$data[kat_ekskul]</h2>
 <p style='margin-top:-10px; font-size:18px;margin-left:0px;'>$data[ket_foto]</p></td>

</tr>

 
</table>";?>
