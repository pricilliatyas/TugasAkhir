<center>
<H1>Form Input Berita Ekstrakulikuler</H1>
<?php 
$timezone = new DateTimeZone('Asia/Jakarta');
$date = new DateTime();
$date->setTimeZone($timezone);
 ?>
<?php 
    $id=isset($_GET['id'])?$_GET['id']:"";
    $data=mysqli_fetch_array(mysqli_query($GLOBALS["___mysqli_ston"], "SELECT * FROM berita_ekskul WHERE no_berita='$id'"));
?>

<form action="proses/aksi_berita_ekskul.php?act=<?php if(empty($id)){echo"simpan";}else echo"ubah&id=$data[no_berita]";?>" method="post" enctype="multipart/form-data" onsubmit="return validasi();">

<table style="color:#000000;">
	
	<tr>
		<td>Kategori Ekskul</td>
		<td>:</td>
		<td><?php 
        $query=mysqli_query($GLOBALS["___mysqli_ston"], "SELECT * FROM kategori_ekskul");?>
        <select name="id_kategori" style="height:40px; margin-top:10px;" required oninvalid="this.setCustomValidity('Data harus dipilih')" oninput="setCustomValidity('')">
		<option value=""hidden>Pilih Kategori</option>			
		<option><?php if(!empty($id)){echo"$data[id_kategori]";}?></option>
                <?php
                  while ($k=mysqli_fetch_array($query)){
                    echo "<option value='$k[id_kategori]'>$k[kat_ekskul]</option>";}
                ?>
            </select>
		</td>
	</tr>

	<tr>
		<td>Deskripsi Berita</td>
		<td>:</td>
		<td><input type="text" name="deskripsi_berita" value="<?php if(!empty($id)) {echo"$data[deskripsi_berita]";}?>" required oninvalid="this.setCustomValidity('Deskripsi Tidak Boleh Kosong')" oninput="setCustomValidity('')"></td>
	</tr>
<input type="hidden" name="tgl_posting_berita" value="<?php echo date ('d-m-Y') ?>" />
<input type="hidden" name="jam_posting_berita" value="<?php echo $date->format('H:i:s') ?>" />

	

	<tr>
		<td>Foto</td>
		<td>:</td>
		<td><input type="file" name="foto" value="<?php if(!empty($id)) {echo"$data[foto]";}?>" required oninvalid="this.setCustomValidity('Foto Tidak Boleh Kosong')" oninput="setCustomValidity('')"></td>
	</tr>

	<tr>
		<td>Foto</td>
		<td>:</td>
		<td><input type="file" name="foto2" value="<?php if(!empty($id)) {echo"$data[foto]";}?>" required oninvalid="this.setCustomValidity('Foto Tidak Boleh Kosong')" oninput="setCustomValidity('')"></td>
	</tr>

	<tr>
		<td><input type="submit" name="simpan" value="Simpan" style='border-radius: 20px 20px 20px 20px ;background-color:#FF6633; border:0; width:90px; height:35px; margin-top:20px; margin-left:200px;'></td>
		<td><input type="reset" name="batal" value="Batal" style='border-radius: 20px 20px 20px 20px ;background-color:#FF6633; border:0; width:90px; height:35px; margin-top:20px; margin-left:50px'></td>
	</tr>

</table>
</form>
</center>