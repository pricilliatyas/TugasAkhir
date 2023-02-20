<?php


	error_reporting(0);
       include "../fungsi/upload.php";
   	include "koneksi.php";
	$id=$_GET['id']; 
    $act=$_GET['act'];
	
    $nisn       =$_POST['nisn']; 
    $nama =$_POST['nama'];
    $ttl =$_POST['ttl'];
    $no_hp	=$_POST['no_hp'];
    $foto=data("foto");
	$username=$_POST['username'];
	$password=md5($_POST['password']);
	$level=$_POST['level'];
	$jekel=$_POST['jekel'];
    
    if($act=="simpan")
    {	
		 mysqli_query($GLOBALS["___mysqli_ston"], "INSERT INTO pengguna VALUES('','$nisn','$nama','$ttl','$jekel','$no_hp','$foto','$username','$password','member')");  
		echo"<script> alert ('Database berhasil disimpan'); 
        window.location='../admin.php?hal=tampil_pengguna';
        </script> ";
}

    else if($act=="hapus")
    {
        mysqli_query($GLOBALS["___mysqli_ston"], "DELETE FROM pengguna where no_pengguna='$id'");
        echo "<script>alert ('Data Berhasil Dihapus');
        window.location='../admin.php?hal=tampil_pengguna';</script>";
    }
	else if($act=="ubah")
    {
        mysqli_query($GLOBALS["___mysqli_ston"], "UPDATE pengguna SET no_induk_pengguna='$nisn',nama_lengkap='$nama',ttl_pengguna='$ttl' , jenis_kelamin='$jekel' , no_telp='$no_hp' , foto='$foto' , username='$username' , password='$password' , level='member' WHERE no_pengguna='$id'") or die (mysqli_error($GLOBALS["___mysqli_ston"]));  
		unlink("../gambar/$data[foto]");
			unlink("../gambar/$data[foto2]");
       echo"<script> alert ('Database berhasil diubah'); 
        window.location='../admin.php?hal=tampil_pengguna';</script>";
}

else if($act=="simpan_admin")
    {	
		 mysqli_query($GLOBALS["___mysqli_ston"], "INSERT INTO pengguna VALUES('','$nisn','$nama','$ttl','$jekel','$no_hp','$foto','$username','$password','admin')");  
		echo"<script> alert ('Database berhasil disimpan'); 
        window.location='../admin.php?hal=tampil_pengguna_admin';
        </script> ";
}

    else if($act=="hapus_admin")
    {
        mysqli_query($GLOBALS["___mysqli_ston"], "DELETE FROM pengguna where no_pengguna='$id'");
        echo "<script>alert ('Data Berhasil Dihapus');
        window.location='../admin.php?hal=tampil_pengguna_admin';</script>";
    }
	else if($act=="ubah_admin")
    {
        mysqli_query($GLOBALS["___mysqli_ston"], "UPDATE pengguna SET no_induk_pengguna='$nisn',nama_lengkap='$nama',ttl_pengguna='$ttl', jenis_kelamin='$jekel' , no_telp='$no_hp' , foto='$foto' , username='$username' , password='$password' , level='admin' WHERE no_pengguna='$id'") or die (mysqli_error($GLOBALS["___mysqli_ston"]));  
		unlink("../gambar/$data[foto]");
			unlink("../gambar/$data[foto2]");
       echo"<script> alert ('Database berhasil diubah'); 
        window.location='../admin.php?hal=tampil_pengguna_admin';</script>";
}

?> 