<div align="center" style="width:390px; height:1000px;"> 
<?php 
 $batas=100;
    $halaman=isset($_GET['halaman'])?$_GET['halaman']:"";
    if(empty($halaman))
    {
        $posisi=0;
        $halaman=1;    
    }
    else
    {$posisi=($halaman-1)*$batas;}
    $sql="SELECT * FROM aspirasi ORDER BY no_urut_aspirasi DESC limit $posisi, $batas";
    $hasil=mysqli_query($GLOBALS["___mysqli_ston"], $sql);
    
    $no=$posisi+1;
    while($data=mysqli_fetch_array($hasil))
    { echo "
<div style='width:390px;'><p style='color:#000; width:390px;'>$data[isi_aspirasi]</p>
<p style='color:#FF0000;font-size:12px;margin-top:10px;'>$data[tgl_kirim]</p></div>
<hr>   
        ";?>
    <?php
    $no++;}?>
</div>