<?php
$hal=isset($_GET['hal'])?$_GET['hal']:"";
$file="";
if(empty($hal))
{
	$file="halaman/beranda.php";
}
	else
	{
		$file="halaman/$hal.php";
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