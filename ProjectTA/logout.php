<?php
	session_start();
	session_destroy();
	echo "Berhasil Keluar";
	header('location:index.php');
?>