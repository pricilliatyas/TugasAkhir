<center><table width="1000px">
<tr>
	<td><?php include "halaman/slide.php"; ?>
</td>
</tr>
</table>
</center>
<center>

<table align="center">
<tr>
<td bgcolor="#6E85B2" rowspan="3" width="400px" style="margin-top:-800px;">
<h1 style="margin-top:-500px;"><?php include "halaman/form_aspirasi.php"; ?></h1>
<br><br>
<marquee direction="up" scrollamount="3"><?php include "halaman/tampil_aspirasi.php"; ?></marquee></td>	

<td bgcolor="#ECB365" width="300px" height="300px;" align="center"><a href="?hal=lomba"><img src="gambar/info_lomba.png" style="width:200px; height:200px;margin-top:20px; border-radius: 50%;" />
	<p style="font-size:36px; margin-top:20px;">Info lomba</p></td></a>
	
<td bgcolor="#EC994B" width="300px" align="center"><a href="?hal=galeri"><img src="gambar/galeri_ekskul.png" style="width:200px; height:200px; border-radius: 50%; margin-top:20px;" />
	<p style="font-size:36px; margin-top:20px;">Galeri Ekskul</p></td></a>
</td>
</tr>

<tr>
<td bgcolor="#A64B2A" width="300px" height="300px" align="center"><a href="?hal=tampil_berita_ekskul"><img src="gambar/berita_ekskul.png" style="width:200px; height:200px; border-radius: 50%; margin-top:20px;" />
	<p style="font-size:36px; margin-top:30px;">Berita Ekskul</p></td></a>

  <?php if(!empty($login)) {echo "<td bgcolor='#87431D' width='300px' align='center'><a href='?hal=pembina'><img src='images/pembina.png' style='width:200px; height:200px; border-radius: 50%; margin-top:20px;' />
	<p style='font-size:36px; margin-top:20px;'>Pembina</p></td></a>";}?>
</tr>
</table>
</center>