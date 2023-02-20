<?php 
 
 $data=mysqli_fetch_array(mysqli_query($GLOBALS["___mysqli_ston"], "SELECT * FROM daftar_ekskul WHERE no_pengguna='$login' && status='Disetujui'"));
 $data2=mysqli_fetch_array(mysqli_query($GLOBALS["___mysqli_ston"], "SELECT * FROM daftar_ekskul WHERE no_pengguna='$login' && status='menunggu'"));
 
if($data['no_pengguna'] == "$login" ){
	echo include 'halaman/status.php';
}
else if($data2['no_pengguna'] == "$login" ){
	echo include 'halaman/menunggu.php';
}
else{
	echo include 'halaman/form_daftar_ekskul.php';
}
?>

