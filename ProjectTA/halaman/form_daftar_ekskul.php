<div style="margin-top:50px;">
<?php
	$id=isset($_GET['id'])?$_GET['id']:"";
	$data=mysqli_fetch_array(mysqli_query($GLOBALS["___mysqli_ston"],"SELECT*FROM daftar_ekskul WHERE no_urut_form='$id'"));
	$data2=mysqli_fetch_array(mysqli_query($GLOBALS["___mysqli_ston"],"SELECT*FROM pengguna WHERE no_pengguna='$login'"));?>
<center> 
<h1 style="font-size:36px; margin-bottom:30px">Form Pendaftaran Ekstrakulikuler</h1>
<form action="proses/aksi_daftar_ekskul.php?act=<?php if (empty($id)){echo"simpan";} else "ubah&id=$data[no_urut_form]";?>" method="post"entype="multipart/form-data">
<table style="color:#000000; font-size:16px">
	<tr>
		<td >Tanggal Daftar</td>
		<td>:</td>
		<td><input type="text" disabled="disabled" name="tgl_daftar" value="<?php echo date ('d-m-Y');?>">
			<input type="hidden" name="tgl_daftar" value="<?php echo date ('d-m-Y');?>"></td>
			<input type="hidden" name="status" value="menunggu"></td>
	</tr>
	
	<tr>
		<td>Nama</td>
		<td>:</td>
		<td><input type="text" disabled name="tgl_daftar" value="<?php if(!empty($login)) {echo"$data2[nama_lengkap]";}?>"></td>
	</tr>

		<tr>
		<td>Ekstrakul yang diminati</td>
		<td>:</td>
		<td><?php 
        	$query=mysqli_query($GLOBALS["___mysqli_ston"], "SELECT * FROM kategori_ekskul");?>
        <select name="id_kategori" style="height:40px; margin-top:10px;" required oninvalid="this.setCustomValidity('Data harus dipilih')" oninput="setCustomValidity('')">
		<option value=""hidden>Pilih Kategori</option>			
                <?php
                  while ($k=mysqli_fetch_array($query)){
                    echo "<option value='$k[id_kategori]'>$k[kat_ekskul]</option>";}
                ?>
            </select> <span style="color:#FF0000; font-size:16px;">* Wajib Dipilih</span>
	</td>
	</tr>
	<tr>
		<td>Ekstrakul yang Pernah Diikuti</td>
		<td>:</td>
		<td><?php 
        	$query=mysqli_query($GLOBALS["___mysqli_ston"], "SELECT * FROM kategori_ekskul");?>
        <select name="ikuti" style="height:40px; margin-top:10px;" required oninvalid="this.setCustomValidity('Data harus dipilih')" oninput="setCustomValidity('')">
		<option value=""hidden>Pilih Kategori</option>			
                <?php
                  while ($k=mysqli_fetch_array($query)){
                    echo "<option value='$k[kat_ekskul]'>$k[kat_ekskul]</option>";}
                ?>
            </select> <span style="color:#FF0000; font-size:16px;">* Wajib Dipilih</span>
	</td>
	</tr>
	<tr>
		<td>Golongan Darah</td>
		<td>:</td>
		<td> <input type="radio" name="goldar" value="A" />A
			 <input type="radio" name="goldar" value="B" />B
			 <input type="radio" name="goldar" value="AB" />AB
			 <input type="radio" name="goldar" value="O" />O  <span style="color:#FF0000; font-size:16px;">* Wajib Dipilih</span> 
		</td> 
	</tr>
	
	<tr>
		<td>Tinggi Badan</td>
		<td>:</td>
		<td><input type="text" name="t_badan" value="<?php if(!empty($id)) {echo"$data[nama_siswa]";}?>"  required oninvalid="this.setCustomValidity('Tinggi badan tidak boleh kosong')" oninput="setCustomValidity('')"></td>
	</tr>
	
	<tr>
		<td>Berat Badan</td>
		<td>:</td>
		<td><input type="text" name="b_badan" value="<?php if(!empty($id)) {echo"$data[nama_siswa]";}?>"  required oninvalid="this.setCustomValidity('Berat Badan tidak boleh kosong')" oninput="setCustomValidity('')"></td>
	</tr>
	
<input type="hidden" name="pengguna" value="<?php echo"$login"; ?>" />

	<tr>
		<td>Riwayat Sakit</td>
		<td>:</td>
		<td><input type="text" name="riwayat" style="height:90px; width:280px;" value="<?php if(!empty($id)) {echo"$data[nama_siswa]";}?>"  required oninvalid="this.setCustomValidity('Riwayat tidak boleh kosong')" oninput="setCustomValidity('')"> <span style="color:#FF0000; font-size:16px;">* Wajib Di Isi</span></td>
	</tr>
	
		<tr>
		<td>Hobi</td>
		<td>:</td>
		<td><input type="text" name="hobi" style="height:90px; width:280px;" value="<?php if(!empty($id)) {echo"$data[nama_siswa]";}?>"  required oninvalid="this.setCustomValidity('Hobi tidak boleh kosong')" oninput="setCustomValidity('')"></td>
	</tr>
	
		<tr>
		<td>Motivasi</td>
		<td>:</td>
		<td><input type="text" name="motiv" style="height:90px; width:280px;" value="<?php if(!empty($id)) {echo"$data[nama_siswa]";}?>"  required oninvalid="this.setCustomValidity('Motivasi tidak boleh kosong')" oninput="setCustomValidity('')"></td>
	</tr>



	<tr>
		<td>Alasan Mendaftar</td>
		<td>:</td>
		<td><input type="text" name="alasan" style="height:90px; width:280px;" value="<?php if(!empty($id)) {echo"$data[nama_siswa]";}?>"  required oninvalid="this.setCustomValidity('Alasan tidak boleh kosong')" oninput="setCustomValidity('')"> <span style="color:#FF0000; font-size:16px;">* Wajib Di Isi</span></td>
	</tr>
	<tr>
		<td><input type="submit" name="simpan" value="Simpan" style='border-radius: 20px 20px 20px 20px ;background-color:#FF6633; border:0; width:90px; height:35px; margin-top:20px; margin-left:200px;'></td>
		<td><input type="reset" name="batal" value="Batal" style='border-radius: 20px 20px 20px 20px ;background-color:#FF6633; border:0; width:90px; height:35px; margin-top:20px; margin-left:50px'></td>
	</tr>

</table>
</form>
</center>
</div>