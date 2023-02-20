<?php session_start();
error_reporting(0);
($GLOBALS["___mysqli_ston"] = mysqli_connect("localhost", "root", "")) or die("Nggak bisa koneksi");

mysqli_select_db($GLOBALS["___mysqli_ston"], 'tugas_akhir_tyas'); //sesuaikan dengan nama database anda

$userid = $_POST['username'];

$pass =$_POST['password'];
$psw=md5($pass);

$op = $_GET['op'];

if($op=="in"){

$cek = mysqli_query($GLOBALS["___mysqli_ston"], "SELECT * FROM pengguna WHERE username='$userid' AND password='$psw'");

if(mysqli_num_rows($cek)==1){ //jika berhasil akan bernilai 1

$c = mysqli_fetch_array($cek);

$_SESSION['no_pengguna'] = $c['no_pengguna'];

$_SESSION['level'] = $c['level'];

if($c['level']=="admin" && "admin"){

header("location:admin.php");

}else if($c['level']=="member" && "member"){

header("location:index.php");

}

}else{

die("Password / Nama yang Anda masukan SALAH : <a href=\"javascript:history.back()\">Kembali</a>");

}

}else if($op=="out"){

unset($_SESSION['no_pengguna']);

unset($_SESSION['level']);

header('location:index.php');

}

?> 