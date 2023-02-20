<?php
   error_reporting(0);
   	include "koneksi.php";
    include "../fungsi/upload.php";
	$id=$_GET['id']; 
    $act=$_GET['act'];

    $id_kategori        =$_POST['id_kategori']; 
    $pengguna        =$_POST['pengguna'];
    $alasan_mendaftar   =$_POST['alasan'];
    $tgl_daftar         =$_POST['tgl_daftar'];
    $status         =$_POST['status'];
    $ikuti         =$_POST['ikuti'];
        $goldar  =$_POST['goldar'];
        $t_badan  =$_POST['t_badan'];
        $b_badan  =$_POST['b_badan'];
        $riwayat  =$_POST['riwayat'];
        $hobi  =$_POST['hobi'];
        $motiv  =$_POST['motiv'];		
		
    if($act=="simpan")
    {
        mysqli_query($GLOBALS["___mysqli_ston"], "INSERT INTO daftar_ekskul VALUES('','$pengguna','$id_kategori','$alasan_mendaftar','$tgl_daftar','$ikuti','$goldar','$t_badan','$b_badan','$riwayat','$hobi','$motiv','$status')");  
		echo "<script>alert('Berhasil Daftar Ektrakulikuler'); 
        window.location='../index.php?hal=daftar';</script>";
    }

    else if($act=="hapus")
    {
        mysqli_query($GLOBALS["___mysqli_ston"], "DELETE FROM daftar_ekskul where no_urut_form='$id'");
        echo "<script>alert ('Data Berhasil Dihapus');
        window.location='../admin.php?hal=tampil_daftar_ekskul';</script>";
    }
	else if($act=="setuju")
    {
        mysqli_query($GLOBALS["___mysqli_ston"], "UPDATE daftar_ekskul SET status='Disetujui' WHERE no_urut_form='$status'") or die (mysqli_error($GLOBALS["___mysqli_ston"]));  
       echo"<script> alert ('Pemohon berhasil disetujui'); 
        window.location='../admin.php?hal=tampil_daftar_ekskul';
        </script> ";}



?> 