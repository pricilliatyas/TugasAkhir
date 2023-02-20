<center>
<h1>Pembina Ekstrakulikuler</h1>
<div id="upcoming" class="upcoming" style="margin-left:180px;">
  <div class="container-fluid padding_left3" >
    <div class="row display_boxflex">
        <?php 
    $batas=8;
    $halaman=isset($_GET['halaman'])?$_GET['halaman']:"";
    if(empty($halaman))
    {
        $posisi=0;
        $halaman=1;    
    }
    else
    {$posisi=($halaman-1)*$batas;}
    $sql="SELECT * FROM pembina_ekskul limit $posisi, $batas";
    $hasil=mysqli_query($GLOBALS["___mysqli_ston"], $sql);
    
    $no=$posisi+1;
    while($data=mysqli_fetch_array($hasil))
    {
        echo "
               <div class='col-xl-3 col-lg-3 col-md-1 col-sm-5'>
			   	       <div class='box_text'>

                     <figure style='margin-left:-100px;'><img src='gambar/$data[foto_pembina]' style='height:300px;width:300px;'/></figure>
                     <h3 align='center' style='margin-left:-80px; font-size:16px;'>$data[nama_guru]</h3>
					 <a href='?hal=detail_pembina&id=$data[no_urut_profil]' style='margin-left:0px; margin-top:1px;'><button style='border-radius: 20px 10px 20px 10px ;background-color:#FF6633; border:0; width:150px; height:50px; margin-left:-100px;'>Lihat Profil</button></a>
                  </div> </div>      ";    ?>
    <?php
    $no++;}
    echo "            
         </div></div></div>
		
</center>

    ";$file="pembina.php";
    $tampil2="select * from pembina_ekskul";
    $hasil2=mysqli_query($GLOBALS["___mysqli_ston"], $tampil2);
    $jmldata=mysqli_num_rows($hasil2);
    $jmlhalaman=ceil($jmldata/$batas);
    ?>
	
    <center style='background-color:#FFFFFF;'>
    <?php 
    //Link ke halaman sebelumnya (Prev) 
    if ($halaman > 1){  
        $prev = $halaman - 1;  
        echo "<a href=?hal=pembina&halaman=$prev><< Prev </a>";  
    }  else {  
        echo "<< Prev";  
    }  
    //Tampilkan link halaman 1,2,3,...  
    for($i=1;$i<=$jmlhalaman;$i++){  
        if ($i != $halaman){  
            echo "<a href=?hal=pembina&halaman=$i>| $i | </a>";  
        }  else {  
            echo " $i ";  
        }  
    }  
  
    //Link ke halaman berikutnya (Next)  
    if ($halaman < $jmlhalaman){  
        $next = $halaman + 1;  
        echo "<a href=?hal=pembina&halaman=$next> | Next >></a>";  
    }else{  
        echo "Next >>";  
    }  
    ?></center>
