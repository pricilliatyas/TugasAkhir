<?php
   
   		error_reporting(0);
       include "../fungsi/upload.php";
   	include "koneksi.php";
	$id=$_GET['id']; 
    $act=$_GET['act'];
    $id_kategori        =$_POST['id_kategori']; 
    $tgl_post_info      =$_POST['tgl_post_info'];
    $jam_post_info      =$_POST['jam_post_info'];
    $tgl_lomba          =$_POST['tgl_lomba'];
    $keterangan_lomba   =$_POST['keterangan_lomba'];
    $foto               =data("foto");
    
    if($act=="simpan")
    {
		
		mysqli_query($GLOBALS["___mysqli_ston"], "INSERT INTO informasi_lomba VALUES('','$tgl_post_info','$jam_post_info','$tgl_lomba','$keterangan_lomba','$foto','$id_kategori')");  
		echo"<script> alert ('Database berhasil disimpan'); 
        window.location='../admin.php?hal=tampil_informasi_lomba';
        </script> ";
    }

    else if($act=="hapus")
    {
        mysqli_query($GLOBALS["___mysqli_ston"], "DELETE FROM informasi_lomba where no_urut_informasi='$id'");
        echo "<script>alert ('Data Berhasil Dihapus');
        window.location='../admin.php?hal=tampil_informasi_lomba';</script>";
    }
		 else if($act=="ubah")
    {
        mysqli_query($GLOBALS["___mysqli_ston"], "UPDATE informasi_lomba SET tgl_post_info='$tgl_post_info',jam_post_info='$jam_post_info',tgl_lomba='$tgl_lomba',keterangan_lomba='$keterangan_lomba',foto='$foto',id_kategori='$id_kategori' WHERE no_urut_informasi='$id'") or die (mysqli_error($GLOBALS["___mysqli_ston"]));  
		unlink("../gambar/$data[foto]");
       echo"<script> alert ('Database berhasil diubah'); 
        window.location='../admin.php?hal=tampil_informasi_lomba';
        </script> ";}





?> 