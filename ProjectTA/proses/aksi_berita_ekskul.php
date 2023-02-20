<?php
	error_reporting(0);
       include "../fungsi/upload.php";
   	include "koneksi.php";
	$id=$_GET['id']; 
    $act=$_GET['act'];
    
    $id_kategori          =$_POST['id_kategori'];
    $deskripsi_berita     =$_POST['deskripsi_berita'];
    $tgl_posting_berita   =$_POST['tgl_posting_berita'];
    $jam_posting_berita   =$_POST['jam_posting_berita'];
    $foto                 =data("foto");
    $foto2                =data("foto2");
    $s1                =data("s1");
    $s2 				=data("s2");
    $s3					=data("s3");
    $s4                =data("s4");
    

    
    if($act=="simpan")
    {
        mysqli_query($GLOBALS["___mysqli_ston"], "INSERT INTO berita_ekskul VALUES('','$id_kategori','$deskripsi_berita','$tgl_posting_berita','$jam_posting_berita','$foto','$foto2')");  
		echo"<script> alert ('Database berhasil disimpan'); 
        window.location='../admin.php?hal=tampil_berita_ekskul';
        </script> ";
    }
	
	else if($act=="simpan_slide")
    {
        mysqli_query($GLOBALS["___mysqli_ston"], "INSERT INTO slide VALUES('','$s1','$s2','$s3','$s4')");  
		echo"<script> alert ('Slide Berhasil Ditambahkan'); 
        window.location='../admin.php?hal=tampil_slide';
        </script> ";
    }


    else if($act=="hapus")
    {
        mysqli_query($GLOBALS["___mysqli_ston"], "DELETE FROM berita_ekskul where no_berita='$id'");
        echo "<script>alert ('Data Berhasil Dihapus');
        window.location='../admin.php?hal=tampil_berita_ekskul';</script>";
    }
	  else if($act=="hapus_slide")
    {
        mysqli_query($GLOBALS["___mysqli_ston"], "DELETE FROM slide where no_slide='$id'");
        echo "<script>alert ('Slide Dihapus');
        window.location='../admin.php?hal=tampil_slide';</script>";
    }
	 else if($act=="ubah")
    {
        mysqli_query($GLOBALS["___mysqli_ston"], "UPDATE berita_ekskul SET id_kategori='$id_kategori',deskripsi_berita='$deskripsi_berita',tgl_posting_berita='$tgl_posting_berita',jam_posting_berita='$jam_posting_berita',foto='$foto',foto2='$foto2' WHERE no_berita='$id'") or die (mysqli_error($GLOBALS["___mysqli_ston"]));  
		unlink("../gambar/$data[foto]");
			unlink("../gambar/$data[foto2]");
       echo"<script> alert ('Database berhasil diubah'); 
        window.location='../admin.php?hal=tampil_berita_ekskul';
        </script> ";}

	 else if($act=="ubah_slide")
    {
        mysqli_query($GLOBALS["___mysqli_ston"], "UPDATE slide SET s1='$s1',s2='$s2',s3='$s3',s4='$s4' WHERE no_slide='$id'") or die (mysqli_error($GLOBALS["___mysqli_ston"]));  
		unlink("../gambar/$data[s1]");
			unlink("../gambar/$data[s2]");
			unlink("../gambar/$data[s3]");
			unlink("../gambar/$data[s4]");
       echo"<script> alert ('Slider berhasil diubah'); 
        window.location='../admin.php?hal=tampil_slide';
        </script> ";}


?> 