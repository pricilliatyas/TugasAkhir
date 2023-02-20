<?php
$tampil=mysqli_query($GLOBALS["___mysqli_ston"], "SELECT * FROM pesanan WHERE id_anggota='$login' && status_pesanan='Belum Bayar'");
$data=mysqli_num_rows($tampil);
?>

<?php
$k=mysqli_query($GLOBALS["___mysqli_ston"], "SELECT * FROM pesanan WHERE id_anggota='$login' && status_pesanan='Proses Cek'");
 $b=mysqli_num_rows($k);
?>
	
<?php
$jml=mysqli_query($GLOBALS["___mysqli_ston"], "SELECT * FROM resi_kiriman INNER JOIN pesanan ON resi_kiriman.no_pesanan=pesanan.no_pesanan WHERE id_anggota='$login'  && status_pesanan='Sedang Dikirim'");
 $data1=mysqli_num_rows($jml);
?>
 	</b></p>
<div class="card shadow mb-4" align="center">
            <div class="card-body">
              <div class="table-responsive">
<a href="" class='btn-primary mt-3'style="background-color:darkred;">Belum Bayar <?php echo $data; ?></a>
<a href="" class='btn-primary mt-3'style="background-color:darkred;">Dikemas <?php echo $b; ?></a>
<a href="" class='btn-primary mt-3'style="background-color:darkred;">Dikirim <?php echo $data1; ?></a>              
              </div>
            </div>
          </div>