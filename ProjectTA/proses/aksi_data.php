<?php
   
   	include "koneksi.php";
	$id=$_GET['id']; 
    $act=$_GET['act'];
    
    $nik           =$_POST['nik'];
    $nama          =$_POST['nama'];
    $tanggal_lahir =$_POST['tanggal_lahir'];
    $alamat        =$_POST['alamat'];
    
    
    if($act=="simpan")
    {
        mysqli_query($GLOBALS["___mysqli_ston"], "INSERT INTO latihan VALUES('','$nik','$nama','$tanggal_lahir','$alamat')");  
		echo "<script>alert('Database Berhasil Disimpan'); 
        window.location='../index.php? hal=beranda'; </script>";
    }

    else if($act=="hapus")
    {
        mysqli_query($GLOBALS["___mysqli_ston"], "DELETE FROM latihan where no_urut_data='$id'");
        echo "<scrip>alert ('Data Berhasil Dihapus');
        window.location='../index.php? hal=beranda';</scrip>";
    }


?> 