<?php
$hal=isset($_GET['hal'])?$_GET['hal']:"";
$file="";
if(empty($hal))
{
	$file="halaman_admin/kelolah_data.php";
}
	else
	{
		$file="halaman_admin/$hal.php";
	}
	if(file_exists($file))
	{
		include "$file";
	}
	else
	{
		echo"Yahh Halaman Tidak Ditemukan:(";
	}
?>