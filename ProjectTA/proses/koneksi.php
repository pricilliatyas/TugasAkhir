 <?php
    $koneksi=($GLOBALS["___mysqli_ston"] = mysqli_connect('localhost', 'root', ''))or die("Database tidak dapat ditemukan");
    $tampil=mysqli_select_db($koneksi, 'tugas_akhir_tyas')or die("Gagal Koneksi dengan Database");
?> 