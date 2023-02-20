<?php
	$id=isset($_GET['id'])?$_GET['id']:"";
	$data=mysqli_fetch_array(mysqli_query($GLOBALS["___mysqli_ston"],"SELECT*FROM pembina_ekskul WHERE no_urut_profil='$id'"));
?>
<center>
<h1>Pembina Ekskul</h1>
<form action="proses/aksi_pembina_ekskul.php?act=<?php if(empty($id)){echo"simpan";}else echo"ubah&id=$data[no_urut_profil]";?>" method="post" enctype="multipart/form-data" onsubmit="return validasi();">

<table style="color:#000000;">
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
		<td>NIP Guru</td>
		<td>:</td>
		<td><input type="text" name="nip_guru" value="<?php if(!empty($id)) {echo"$data[nip_guru]";}?>" required oninvalid="this.setCustomValidity('NIP Guru Tidak Boleh Kosong')" oninput="setCustomValidity('')"></td>
	</tr>

	<tr>
		<td>Nama Guru</td>
		<td>:</td>
		<td><input type="text" name="nama_guru" value="<?php if(!empty($id)) {echo"$data[nama_guru]";}?>" required oninvalid="this.setCustomValidity('Nama Tidak Boleh Kosong')" oninput="setCustomValidity('')"></td>
	</tr>

	<tr>
		<td>Alamat Guru</td>
		<td>:</td>
		<td><input type="text" style="height:90px; width:280px;" name="alamat_guru" value="<?php if(!empty($id)) {echo"$data[alamat_guru]";}?>" required oninvalid="this.setCustomValidity('Alamat Tidak Boleh Kosong')" oninput="setCustomValidity('')"></td>
	</tr>

	<tr>
		<td>Tempat Tanggal Lahir Guru</td>
		<td>:</td>
		<td><input type="text" name="ttl_guru" value="<?php if(!empty($id)) {echo"$data[ttl_guru]";}?>" required oninvalid="this.setCustomValidity('Tanggal Lahir Tidak Boleh Kosong')" oninput="setCustomValidity('')"></td>
	</tr>

	<tr>
		<td>No. Handphone Guru</td>
		<td>:</td>
		<td><input type="text" name="no_telp_guru" value="<?php if(!empty($id)) {echo"$data[no_telp_guru]";}?>" required oninvalid="this.setCustomValidity('No Telpon Tidak Boleh Kosong')" oninput="setCustomValidity('')"></td>
	</tr>

	<tr>
		<td>Upload Foto</td>
		<td>:</td>
		<td><input type="file" name="foto" value="<?php if(!empty($id)) {echo"$data[foto_pembina]";}?>" required oninvalid="this.setCustomValidity('Upload Tidak Boleh Kosong')" oninput="setCustomValidity('')"></td>
	</tr>

	<tr>
		<td><input type="submit" name="simpan" value="Simpan" style='border-radius: 20px 20px 20px 20px ;background-color:#FF6633; border:0; width:90px; height:35px; margin-top:20px; margin-left:200px;'></td>
		<td><input type="reset" name="batal" value="Batal" style='border-radius: 20px 20px 20px 20px ;background-color:#FF6633; border:0; width:90px; height:35px; margin-top:20px; margin-left:50px'></td>
	</tr>
	
</table>
</form>
</table>
