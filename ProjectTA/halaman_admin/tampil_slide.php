<center>
<H1>Form Slider</H1>
<?php 
    $id=isset($_GET['id'])?$_GET['id']:"";
    $data=mysqli_fetch_array(mysqli_query($GLOBALS["___mysqli_ston"], "SELECT * FROM slide WHERE no_slide='$id'"));
?>

<form action="proses/aksi_berita_ekskul.php?act=<?php if(empty($id)){echo"simpan_slide";}else echo"ubah_slide&id=$data[no_slide]";?>" method="post" enctype="multipart/form-data" onsubmit="return validasi();">

<table style="color:#000000;">

	<tr>
		<td>Slide</td>
		<td>:</td>
		<td><input type="file" name="s1" value="<?php if(!empty($id)) {echo"$data[s1]";}?>" required oninvalid="this.setCustomValidity('Foto Tidak Boleh Kosong')" oninput="setCustomValidity('')"></td>
	</tr>

	<tr>
		<td>Slide 2</td>
		<td>:</td>
		<td><input type="file" name="s2" value="<?php if(!empty($id)) {echo"$data[s2]";}?>" required oninvalid="this.setCustomValidity('Foto Tidak Boleh Kosong')" oninput="setCustomValidity('')"></td>
	</tr>
		<tr>
		<td>Slide 3</td>
		<td>:</td>
		<td><input type="file" name="s3" value="<?php if(!empty($id)) {echo"$data[s3]";}?>" required oninvalid="this.setCustomValidity('Foto Tidak Boleh Kosong')" oninput="setCustomValidity('')"></td>
	</tr>

	<tr>
		<td>Slide 4</td>
		<td>:</td>
		<td><input type="file" name="s4" value="<?php if(!empty($id)) {echo"$data[s4]";}?>" required oninvalid="this.setCustomValidity('Foto Tidak Boleh Kosong')" oninput="setCustomValidity('')"></td>
	</tr>
	<tr>
    <td><input type="submit" name="simpan" value="Simpan" style='border-radius: 20px 20px 20px 20px ;background-color:#FF6633; border:0; width:90px; height:35px; margin-top:20px; margin-left:150px;'></td>
    <td><input type="reset" name="batal" value="Batal" style='border-radius: 20px 20px 20px 20px ;background-color:#FF6633; border:0; width:90px; height:35px; margin-top:20px; margin-left:50px'></td>
  </tr>



</table>
</form>
</center><div class="card shadow mb-4">
            <div class="card-header py-3">
            </div>
            <div class="card-body">
              <div class="table-responsive">
                
                <style>
    #border{border:0px}
</style>
<div id="border">
<br />

<table align="center" width="1175px" border="1" style="margin-left:100px;"> 
    <tr bgcolor="#B22222" align="center" style="color:#000; height:50px;">
    <td style="color:#FFFFFF">No.</td>
        <td style="color:#FFFFFF">Slide 1</td>
        <td style="color:#FFFFFF">Slide 2</td>
        <td style="color:#FFFFFF">Slide 3</td>
        <td style="color:#FFFFFF">Slide 4</td>
     <td style="color:#FFFFFF">Aksi</td>
    </tr>
<?php 
$tampil=mysqli_query($GLOBALS["___mysqli_ston"], "SELECT * FROM slide" );
 $no=1;
 while($data=mysqli_fetch_array($tampil))
    { echo "
   <tr style='height:40px;'>
        <td align='center'>$no</td>
        <td><img src='gambar/$data[s1]' style='width:60px; height:60px;'></td>
        <td><img src='gambar/$data[s2]' style='width:60px; height:60px;'></td>
        <td><img src='gambar/$data[s3]' style='width:60px; height:60px;'></td>
        <td><img src='gambar/$data[s4]' style='width:60px; height:60px;'></td>
        ";?>
      <td  align="center"><a href="<?php echo "proses/aksi_berita_ekskul.php?act=hapus_slide&id=$data[no_slide]";?>" onClick="return confirm('Apakah anda yakin akan menghapus data ini?')"><img src="images/icon_delete.png" width="35px" height="35px"></a>  
   <a href="<?php echo"?hal=tampil_slide&act=ubah_slide&id=$data[no_slide]";?>"><img src="images/icon_edit.png" width="30px" height="30px"></a></td>  </tr>
    <?php
    $no++;}?>
</table>
              </div>
            </div>
          </div>