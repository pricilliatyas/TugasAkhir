\
      <?php
include "proses/koneksi.php";
$id= $_GET['id'];
	$data=mysqli_fetch_array(mysqli_query($GLOBALS["___mysqli_ston"],"SELECT*FROM pembina_ekskul INNER JOIN kategori_ekskul on pembina_ekskul.id_kategori=kategori_ekskul.id_kategori WHERE no_urut_profil='$id'"));

echo "
<h1>PEMBINA $data[kat_ekskul]</h1>
 <table style='color:#000; margin-left:180px;'>
<tr>
 <td rowspan='7'><img src='gambar/$data[foto_pembina]' alt='#' style='width:300px; height:350px'/></td>

</tr> 
<tr>
 <td><p style='margin-left:50px;margin-bottom:-10px;float:left'>Nip Pembina</p></td>
 <td><p style='margin-left:20px;margin-bottom:-10px;'>:</p></td>
 <td><p style='margin-left:20px;margin-bottom:-10px;float:left'>$data[nip_guru]</p></td>
 </tr>
<tr>
 <td><p style='margin-left:50px; margin-top:-25px;float:left'>Nama Pembina</p></td>
 <td><p style='margin-left:20px; margin-top:-25px;'>:</p></td>
 <td><p style='margin-left:20px;margin-top:-25px;float:left'>$data[nama_guru]</p></td>
 </tr>
<tr>
 <td><p style='margin-left:50px; margin-top:-25px;float:left'>Alamat Pembina</p></td>
 <td><p style='margin-left:20px; margin-top:-25px;'>:</p></td>
 <td><p style='margin-left:20px;margin-top:-25px;float:left'>$data[alamat_guru]</p></td>
 </tr>
<tr>
 <td><p style='margin-left:50px; margin-top:-25px;float:left'>TTL Pembina</p></td>
 <td><p style='margin-left:20px; margin-top:-25px;'>:</p></td>
 <td><p style='margin-left:20px;margin-top:-25px;float:left'>$data[ttl_guru]</p></td>
 </tr>
<tr>
 <td><p style='margin-left:50px; margin-top:-25px;float:left'>No Telp Pembina</p></td>
 <td><p style='margin-left:20px; margin-top:-25px;'>:</p></td>
 <td><p style='margin-left:20px;margin-top:-25px;float:left'>$data[no_telp_guru]</p></td>
 </tr>
</table>";?>
