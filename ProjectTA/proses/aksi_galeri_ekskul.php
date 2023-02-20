<?php
   
   	include "koneksi.php";
    include "../fungsi/upload.php";
	$id=$_GET['id']; 
    $act=$_GET['act'];

    $id_kategori        =$_POST['id_kategori']; 
    $foto               =data("foto");
    $ket_foto           =$_POST['ket_foto'];
    
    if($act=="simpan")
    {

               mysqli_query($GLOBALS["___mysqli_ston"], "INSERT INTO galeri_ekskul VALUES('','$foto','$ket_foto','$id_kategori')");  
        echo"<script> alert ('Database berhasil disimpan'); 
        window.location='../admin.php?hal=tampil_galeri_ekskul';
        </script> ";

    }

    else if($act=="hapus")
    {
        mysqli_query($GLOBALS["___mysqli_ston"], "DELETE FROM galeri_ekskul where no_id_galeri='$id'");
        echo "<script>alert ('Data Berhasil Dihapus');
        window.location='../admin.php?hal=tampil_galeri_ekskul';</script>";
    }

	 else if($act=="ubah")
    {
        mysqli_query($GLOBALS["___mysqli_ston"], "UPDATE galeri_ekskul  SET foto='$foto',ket_foto='$ket_foto',id_kategori='$id_kategori' WHERE no_id_galeri='$id'") or die (mysqli_error($GLOBALS["___mysqli_ston"]));  
		unlink("../gambar/$data[foto]");
       echo"<script> alert ('Database berhasil diubah'); 
        window.location='../admin.php?hal=tampil_galeri_ekskul';
        </script> ";}


?>  