<?php
error_reporting(0);	   
   	include "koneksi.php";
	$id=$_GET['id']; 
    $act=$_GET['act'];
    
    $nip     =$_POST['nip'];
	$password=md5($_POST['password']);
    $level         =$_POST['level'];
    
    
    if($act=="simpan")
    {
        mysqli_query($GLOBALS["___mysqli_ston"], "INSERT INTO login VALUES('','$username','$password','$level')");  
		echo "<script>alert('Database Berhasil Disimpan'); 
        window.location='../index.php? al=beranda'; </script>";
    }

    else if($act=="simpan_reset")
    {
        mysqli_query($GLOBALS["___mysqli_ston"], "UPDATE pengguna SET password='$password' WHERE no_induk_pengguna='$nip'") or die (mysqli_error($GLOBALS["___mysqli_ston"]));  
		unlink("../gambar/$data[foto]");
			unlink("../gambar/$data[foto2]");
       echo"<script> alert ('Password Berhasil diubah Silahkan Login'); 
        window.location='../index.php?hal=frm_login';
        </script> ";}



?> 