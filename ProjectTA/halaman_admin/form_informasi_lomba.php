
<center>
<h1>Form Informasi Lomba</h1>
<?php 
$timezone = new DateTimeZone('Asia/Jakarta');
$date = new DateTime();
$date->setTimeZone($timezone);
 ?>

<?php 
    $id=isset($_GET['id'])?$_GET['id']:"";
    $data=mysqli_fetch_array(mysqli_query($GLOBALS["___mysqli_ston"], "SELECT * FROM informasi_lomba WHERE no_urut_informasi='$id'"));
?>

<form action="proses/aksi_informasi_lomba.php?act=<?php if(empty($id)){echo"simpan";}else echo"ubah&id=$data[no_urut_informasi]";?>" method="post" enctype="multipart/form-data" onsubmit="return validasi();">



<table style="color:#000000;">
		<tr>
		<td>Ekstrakulikuler</td>
		<td>:</td>
		<td><?php 
        	$query=mysqli_query($GLOBALS["___mysqli_ston"], "SELECT * FROM kategori_ekskul");?>
        <select name="id_kategori" style="height:40px; margin-top:10px;" required oninvalid="this.setCustomValidity('Data harus dipilih')" oninput="setCustomValidity('')">
		<option value=""hidden>Pilih Kategori</option>			
                <?php
                  while ($k=mysqli_fetch_array($query)){
                    echo "<option value='$k[id_kategori]'>$k[kat_ekskul]</option>";}
                ?>
            </select>
	</td>
	</tr>
<input type="hidden" name="tgl_post_info" value="<?php echo date ('d-m-Y') ?>" />
<input type="hidden" name="jam_post_info" value="<?php echo $date->format('H:i:s') ?>" />
	<tr>
		<td>Tanggal Lomba</td>
		<td>:</td>
		<td><input type="text" name="tgl_lomba" value="<?php if(!empty($id)) {echo"$data[tgl_lomba]";}?>" required oninvalid="this.setCustomValidity('Tanggal Lomba Harus diisi')" oninput="setCustomValidity('')"></td>
	</tr>

	<tr>
		<td>Keterangan Lomba</td>
		<td>:</td>
		<td><input type="text" name="keterangan_lomba" style="height:90px; width:280px;" value="<?php if(!empty($id)) {echo"$data[keterangan_lomba]";}?>" required oninvalid="this.setCustomValidity('Keterangan Lomba Harus diisi')" oninput="setCustomValidity('')"></td>
	</tr>

	<tr>
		<td>Foto</td>
		<td>:</td>
		<td><input type="file" name="foto" value="<?php if(!empty($id)) {echo"$data[foto]";}?>" required oninvalid="this.setCustomValidity('Foto harus diupload')" oninput="setCustomValidity('')"></td>
	</tr>

	<tr>
		<td><input type="submit" name="simpan" value="Simpan" style='border-radius: 20px 20px 20px 20px ;background-color:#FF6633; border:0; width:90px; height:35px; margin-top:20px; margin-left:200px;'></td>
		<td><input type="reset" name="batal" value="Batal" style='border-radius: 20px 20px 20px 20px ;background-color:#FF6633; border:0; width:90px; height:35px; margin-top:20px; margin-left:50px'></td>
	</tr>

</table>
</form>

</center>