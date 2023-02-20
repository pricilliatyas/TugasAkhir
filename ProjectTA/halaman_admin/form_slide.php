<center>
<H1>Form Input Berita Ekstrakulikuler</H1>
<?php 
    $id=isset($_GET['id'])?$_GET['id']:"";
    $data=mysqli_fetch_array(mysqli_query($GLOBALS["___mysqli_ston"], "SELECT * FROM slide WHERE no_slide='$id'"));
?>

<form action="proses/aksi_berita_ekskul.php?act=<?php if(empty($id)){echo"simpan_slide";}else echo"ubah_slide&id=$data[no_slide]";?>" method="post" enctype="multipart/form-data" onsubmit="return validasi();">

<table style="color:#000000;">

	<tr>
		<td>Slide</td>
		<td>:</td>
		<td><input type="file" name="s1" value="<?php if(!empty($id)) {echo"$data[s1]";}?>"></td>
	</tr>

	<tr>
		<td>Slide 2</td>
		<td>:</td>
		<td><input type="file" name="s2" value="<?php if(!empty($id)) {echo"$data[s2]";}?>"></td>
	</tr>
		<tr>
		<td>Slide 3</td>
		<td>:</td>
		<td><input type="file" name="s3" value="<?php if(!empty($id)) {echo"$data[s3]";}?>"></td>
	</tr>

	<tr>
		<td>Slide 4</td>
		<td>:</td>
		<td><input type="file" name="s4" value="<?php if(!empty($id)) {echo"$data[s4]";}?>"></td>
	</tr>

	<tr>
		<td><input type="submit" name="simpan" value="Simpan" style='border-radius: 20px 20px 20px 20px ;background-color:#FF6633; border:0; width:90px; height:35px; margin-top:20px; margin-left:200px;'></td>
		<td><input type="reset" name="batal" value="Batal" style='border-radius: 20px 20px 20px 20px ;background-color:#FF6633; border:0; width:90px; height:35px; margin-top:20px; margin-left:50px'></td>
	</tr>

</table>
</form>
</center>