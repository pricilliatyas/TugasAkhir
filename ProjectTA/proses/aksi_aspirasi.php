<?php
   error_reporting(0);
   	include "koneksi.php";
	$id=$_GET['id']; 
    $act=$_GET['act'];
    
    $no_data_siswa  =$_POST['no_data_siswa'];
    $tgl_kirim      =$_POST['tgl_kirim'];
    $isi_aspirasi   =$_POST['isi_aspirasi'];
    
    
    if($act=="simpan")
    {
        mysqli_query($GLOBALS["___mysqli_ston"], "INSERT INTO aspirasi VALUES('','$tgl_kirim','$isi_aspirasi')");  
		echo "<script>alert('Database Berhasil Disimpan'); 
        window.location='../index.php'; </script>";
    }

    else if($act=="hapus")
    {
        mysqli_query($GLOBALS["___mysqli_ston"], "DELETE FROM aspirasi where no_urut_aspirasi='$id'");
        echo "<script>alert ('Data Berhasil Dihapus');
        window.location='../admin.php?hal=tampil_aspirasi';</script>";
    }

    else if($act=="ubah") 
      {
        echo "<script>alert('Silahkan Login dahulu'); 
        window.location='../index.php?hal=beranda'; </script>";
    }

?> 