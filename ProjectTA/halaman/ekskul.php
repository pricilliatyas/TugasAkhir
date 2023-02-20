<?php 
	 $data2=mysqli_fetch_array(mysqli_query($GLOBALS["___mysqli_ston"], "SELECT * FROM daftar_ekskul WHERE no_pengguna='$login' && status='Disetujui'"));
 
if($data2['no_pengguna'] == "$login" ){
	echo "<script>window.location='?hal=tampil';</script>";

}

else{
	echo "<script>window.location='?hal=tampil_profile';</script>";
}
?>