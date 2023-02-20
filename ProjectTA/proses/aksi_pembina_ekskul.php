<?php
   error_reporting(0);
   	include "koneksi.php";
    include "../fungsi/upload.php";
	$id=$_GET['id']; 
    $act=$_GET['act'];

    $id_kategori     =$_POST['id_kategori']; 
    $nip_guru        =$_POST['nip_guru'];
    $nama_guru       =$_POST['nama_guru'];
    $alamat_guru     =$_POST['alamat_guru'];
    $ttl_guru        =$_POST['ttl_guru'];
    $no_telp_guru    =$_POST['no_telp_guru'];
    $foto            =data("foto");

    
    if($act=="simpan")
    {
        mysqli_query($GLOBALS["___mysqli_ston"], "INSERT INTO pembina_ekskul VALUES('','$nip_guru','$nama_guru','$alamat_guru','$ttl_guru','$no_telp_guru','$foto','$id_kategori')");  
		echo "<script>alert('Database Berhasil Disimpan'); 
        window.location='../admin.php?hal=tampil_pembina_ekskul'; </script>";
    }

    else if($act=="hapus")
    {
        mysqli_query($GLOBALS["___mysqli_ston"], "DELETE FROM pembina_ekskul where no_urut_profil='$id'");
        echo "<script>alert ('Data Berhasil Dihapus');
        window.location='../admin.php?hal=tampil_pembina_ekskul';</script>";
    }

     else if($act=="ubah")
    {
        mysqli_query($GLOBALS["___mysqli_ston"], "UPDATE pembina_ekskul SET nip_guru='$nip_guru',nama_guru='$nama_guru',alamat_guru='$alamat_guru',ttl_guru='$ttl_guru',no_telp_guru='$no_telp_guru',foto_pembina='$foto',id_kategori='$id_kategori' WHERE no_urut_profil='$id'") or die (mysqli_error($GLOBALS["___mysqli_ston"]));  
        unlink("../gambar/$data[foto]");
       echo"<script> alert ('Database berhasil diubah'); 
        window.location='../admin.php?hal=tampil_pembina_ekskul';
        </script> ";
    }

?> 