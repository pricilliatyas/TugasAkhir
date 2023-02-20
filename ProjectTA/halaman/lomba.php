<center>
<h1 style="background-color:transparent; margin-top:0px;">INFORMASI PERLOMBAAN</h1>
<div id="upcoming" class="upcoming" style="margin-top:80px; margin-left:60px;">
  <div class="container-fluid padding_left3">
    <div class="row display_boxflex">
        <?php 
    $batas=9;
    $halaman=isset($_GET['halaman'])?$_GET['halaman']:"";
    if(empty($halaman))
    {
        $posisi=0;
        $halaman=1;    
    }
    else
    {$posisi=($halaman-1)*$batas;}
    $sql="SELECT * FROM informasi_lomba INNER JOIN kategori_ekskul ON informasi_lomba.id_kategori=kategori_ekskul.id_kategori limit $posisi, $batas";
    $hasil=mysqli_query($GLOBALS["___mysqli_ston"], $sql);
    
    $no=$posisi+1;
    while($data=mysqli_fetch_array($hasil))
    {
        echo "
               <div class='col-xl-3 col-lg-5 col-md-5 col-sm-12'>
			   	       <div class='box_text'>

                     <figure><img src='gambar/$data[foto]' style='height:300px;width:250px;'/></figure>
					 <h1>$data[kat_ekskul]</h1>
					 <a href='?hal=detail_lomba&id=$data[no_urut_informasi]' style='margin-left:0px; margin-top:1px;'><button style='border-radius: 20px 10px 20px 10px ;background-color:#FF6633; border:0; width:150px; height:50px'>Lihat Jadwal</button></a>

                  </div> </div>      ";    ?>
    <?php
    $no++;}
    echo "            
         </div></div></div>
		
</center>

    ";$file="lomba.php";
    $tampil2="select * from informasi_lomba";
    $hasil2=mysqli_query($GLOBALS["___mysqli_ston"], $tampil2);
    $jmldata=mysqli_num_rows($hasil2);
    $jmlhalaman=ceil($jmldata/$batas);
    ?>
	
    <center style='background-color:transparent; color:#000000;'>
    <?php 
    //Link ke halaman sebelumnya (Prev) 
    if ($halaman > 1){  
        $prev = $halaman - 1;  
        echo "<a href=?hal=lomba&halaman=$prev><< Prev </a>";  
    }  else {  
        echo "<< Prev";  
    }  
    //Tampilkan link halaman 1,2,3,...  
    for($i=1;$i<=$jmlhalaman;$i++){  
        if ($i != $halaman){  
            echo "<a href=?hal=lomba&halaman=$i>| $i | </a>";  
        }  else {  
            echo " $i ";  
        }  
    }  
  
    //Link ke halaman berikutnya (Next)  
    if ($halaman < $jmlhalaman){  
        $next = $halaman + 1;  
        echo "<a href=?hal=lomba&halaman=$next> | Next >></a>";  
    }else{  
        echo "Next >>";  
    }  
    ?></center>
