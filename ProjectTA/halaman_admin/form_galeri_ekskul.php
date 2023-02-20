<center>
<H1>Form Galeri Ekskul</H1>
<?php 
    $id=isset($_GET['id'])?$_GET['id']:"";
    $data=mysqli_fetch_array(mysqli_query($GLOBALS["___mysqli_ston"], "SELECT * FROM galeri_ekskul WHERE no_id_galeri='$id'"));
?>

<form action="proses/aksi_galeri_ekskul.php?act=<?php if(empty($id)){echo"simpan";}else echo"ubah&id=$data[no_id_galeri]";?>" method="post" enctype="multipart/form-data" onsubmit="return validasi();">

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

	<tr>
		<td>Foto</td>
		<td>:</td>
		<td><input type="file" name="foto" value="<?php if(!empty($id)) {echo"$data[foto]";}?>" required oninvalid="this.setCustomValidity('Foto Tidak Boleh Kosong')" oninput="setCustomValidity('')"></td>
	</tr>

	<tr>
		<td>Keterangan Foto</td>
		<td>:</td>
		<td><Input type="text" style="height:90px; width:280px;" name="ket_foto" value="<?php if(!empty($id)) {echo"$data[ket_foto]";}?>" required oninvalid="this.setCustomValidity('Keteranga Foto Tidak Boleh Kosong')" oninput="setCustomValidity('')"></td>
	</tr>

	<tr>
		<td><input type="submit" name="simpan" value="Simpan" style='border-radius: 20px 20px 20px 20px ;background-color:#FF6633; border:0; width:90px; height:35px; margin-top:20px; margin-left:200px;'></td>
		<td><input type="reset" name="batal" value="Batal" style='border-radius: 20px 20px 20px 20px ;background-color:#FF6633; border:0; width:90px; height:35px; margin-top:20px; margin-left:50px'></td>
	</tr>

</table>
</form>
</center>