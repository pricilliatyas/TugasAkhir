<?php
   error_reporting(0);
   	include "koneksi.php";
	$id=$_GET['id']; 
    $act=$_GET['act'];

    $kat_ekskul  =$_POST['kat_ekskul'];  
    
    if($act=="simpan")
    {
        mysqli_query($GLOBALS["___mysqli_ston"], "INSERT INTO kategori_ekskul VALUES('','$kat_ekskul')");  
		echo "<script>alert('Database Berhasil Disimpan'); 
        window.location='../admin.php?hal=tampil_kategori_ekskul'; </script>";
    }

    else if($act=="hapus")
    {
        mysqli_query($GLOBALS["___mysqli_ston"], "DELETE FROM kategori_ekskul where id_kategori='$id'");
        echo "<script>alert ('Data Berhasil Dihapus');
        window.location='../admin.php?hal=tampil_kategori_ekskul';</script>";
    }

	else if($act=="ubah")
    {
        mysqli_query($GLOBALS["___mysqli_ston"], "UPDATE kategori_ekskul SET kat_ekskul='$kat_ekskul' WHERE id_kategori='$id'") or die (mysqli_error($GLOBALS["___mysqli_ston"]));  
       echo"<script> alert ('Database berhasil diubah'); 
        window.location='../admin.php?hal=tampil_kategori_ekskul';
        </script> ";}


?> 