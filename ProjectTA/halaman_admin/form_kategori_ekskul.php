<center>
<h1 align="center">Form Kategori Ekskul</h1>

<?php 
    $id=isset($_GET['id'])?$_GET['id']:"";
    $data=mysqli_fetch_array(mysqli_query($GLOBALS["___mysqli_ston"], "SELECT * FROM kategori_ekskul WHERE id_kategori='$id'"));
?>

<form action="proses/aksi_kategori_ekskul.php?act=<?php if(empty($id)){echo"simpan";}else echo"ubah&id=$data[id_kategori]";?>" method="post" enctype="multipart/form-data" onsubmit="return validasi();">

<table style="color:#000000;">

	<tr>
		<td>Kategori Ekskul</td>
		<td>:</td>
		<td><input type="text" name="kat_ekskul" value="<?php if(!empty($id)) {echo"$data[kat_ekskul]";}?>"  required oninvalid="this.setCustomValidity('Kategori tidak boleh kosong')" oninput="setCustomValidity('')"></td>
	</tr>

	<tr>
		<td><input type="submit" name="simpan" value="Simpan" style='border-radius: 20px 20px 20px 20px ;background-color:#FF6633; border:0; width:90px; height:35px; margin-top:20px; margin-left:200px;'></td>
		<td><input type="reset" name="batal" value="Batal" style='border-radius: 20px 20px 20px 20px ;background-color:#FF6633; border:0; width:90px; height:35px; margin-top:20px; margin-left:50px'></td>
	</tr>
	
</table>
</form>
</center>