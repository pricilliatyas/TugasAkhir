<!DOCTYPE html>
<html lang="en">
   <!-- Basic -->
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <!-- Mobile Metas -->
   <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
   <!-- Site Metas -->
   <title>E-Magazine Ekstrakulikuler</title>
   <meta name="keywords" content="">
   <meta name="description" content="">
   <meta name="author" content="">
   <!-- Site Icons -->
   <link rel="shortcut icon" href="" type="image/x-icon" />
   <link rel="apple-touch-icon" href="">
   <!-- Bootstrap CSS -->
   <link rel="stylesheet" href="css/bootstrap.min.css">
   <!-- Site CSS -->
   <link rel="stylesheet" href="style.css">
   <!-- Colors CSS -->
   <link rel="stylesheet" href="css/colors.css">
   <!-- ALL VERSION CSS -->	
   <link rel="stylesheet" href="css/versions.css">
   <!-- Responsive CSS -->
   <link rel="stylesheet" href="css/responsive.css">
   <!-- Custom CSS -->
   <link rel="stylesheet" href="css/custom.css">
   <!-- font family -->
   <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
   
   
   
   <!-- end font family -->
   <link rel="stylesheet" href="css/3dslider.css" />
   <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
   <link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
   <script src="js/3dslider.js"></script>
   
   </head>
   <body class="game_info" data-spy="scroll" data-target=".header" style="background-image:url('images/bg_body.jpg'); height:100%; background-position: center; background-repeat: no-repeat; background-size: cover;">
      <?php
	session_start();
	$login=isset($_SESSION['no_pengguna'])?$_SESSION['no_pengguna']:"";			
?>
      <!-- LOADER -->
      <div id="preloader">
         <img class="preloader" src="images/load.gif" alt="">
      </div>
      <!-- END LOADER -->
      <section id="top">
         <header>
		 
            <div class="container" style="background:url(images/header_pink.jpg); height:200px; width:1400px;">

               <div class="header-top">
                  <div class="row">
                     <div class="col-md-6">
                        <div class="full">
                           <div class="logo">
						    
                              <a href="index.php"><img src="images/kemendikbud.png" height="120px" width=" 120px" style="margin-top: 15px;" alt="#" /></a>
							  
  <?php include "proses/koneksi.php"; ?>  
							 <?php
					  		$data=mysqli_fetch_array(mysqli_query($GLOBALS["___mysqli_ston"],"SELECT*FROM pengguna WHERE no_pengguna='$login'"));

					   if(!empty($login)) {echo "<li style='color:#33FF00;font-weight:800; font-size:24px; margin-left:125px;'><h3 style='color:#FFF;font-weight:550;font-size:16px;margin-top:-35px; margin-left:15px;'>$data[nama_lengkap]";}?></h3></li>	 
							  	
                           </div>
						                 
                    
                           <div style="margin-top:50px;">
						  
                               <ul class="social-icons pull-left">
                               <?php if(empty($login)) {echo "<li><a class='facebook' href='https://www.facebook.com/SMA-1-Sungai-RayaSmansasera-116066658416608'><i class='fa fa-facebook'></i></a></li>";}?>
			                    <?php if(empty($login)) {echo "<li><a class='instagram' href='https://www.instagram.com/smansasera/?hl=id'><i class='fa fa-instagram'></i></a></li>";}?>
								 <?php if(!empty($login)) {echo "<li style='margin-left:-100px;'><a class='facebook' href='https://www.facebook.com/SMA-1-Sungai-RayaSmansasera-116066658416608'><i class='fa fa-facebook'></i></a></li>";}?>
			                    <?php if(!empty($login)) {echo "<li style='margin-left:-50px;'><a class='instagram' href='https://www.instagram.com/smansasera/?hl=id'><i class='fa fa-instagram'></i></a></li>";}?>
							  
							  
                           </ul>  
                     
                         </div>	
						 					
                        </div>
					
                     </div>

                     
					 <div class="col-md-6">
					 				
                        <div class="right_top_section" style="margin-top:120px;" "margin-right: 100px";>
                           <!-- social icon -->
                          		 

                           <!-- end social icon -->
                           <!-- button section -->
                          <ul class="login">
                              <li class="login-modal">
                      <li><a href="index.php"class='login'><i class='fa fa-user'></i>Beranda</a></li>
                              </li>
					         <li class="login-modal">
                      <?php if(empty($login)) {echo "<li><a href='?hal=frm_login'class='login'><i class='fa fa-user'></i>Login";}?></a></li>
                              </li>
						<li class="login-modal">
                      <?php if(!empty($login)) {echo "<li><a href='?hal=daftar'class='login'>Daftar Ekskul";}?></a></li>
                              </li>  
						<li class="login-modal">
                      <?php if(!empty($login)) {echo "<li><a href='?hal=ekskul'class='login'>Profile";}?></a></li>
                              </li>  
					  
					<li class="login-modal">
                      <?php if(!empty($login)) {echo "<li><a href='logout.php'class='login'>Keluar";}?></a></li>
                              </li>  		                           </ul>
                           <!-- end button section -->
                        </div>
                     </div>
                  </div>

               </div>

               <div class="header-bottom">
                  <div class="row">
                     <div class="col-md-12">
                        <div class="full">
					   </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </header>
		 			<br>
         <div class="full-slider">
            <div id="carousel-example-generic" class="carousel slide">
               <!-- Indicators -->
			   
               <!-- Wrapper for slides -->
               <div class="carousel-inner" role="listbox" style="background:transparent; margin-top:40px;">
                  <!-- First slide -->
                 <?php include "proses/koneksi.php"; ?>        
				 <?php include "proses/konten.php"; ?>
               </div>
			   <br><br><br>
               <!-- /.carousel-inner -->
               <!-- Controls -->
            </div>
            <!-- /.carousel -->
         </div>
      </section>
      <footer style="margin-bottom:200px;">
         <div class="footer-bottom">
            <div class="container">
			
               <p>Copyright © Edit By Pricillia Kusumaningtias A.R</p>
            </div>
         </div>
      </footer>
	  
      <a href="#home" data-scroll class="dmtop global-radius"><i class="fa fa-angle-up"></i></a>
   
   
      <!-- ALL JS FILES -->
      	  	 
	  <script src="js/all.js"></script>
	  
      <!-- ALL PLUGINS -->
      <script src="js/custom.js"></script>
	  
   </body>
</html>