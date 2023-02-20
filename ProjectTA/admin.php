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
            <div class="container" style="background:url(images/header_pink_admin.jpg); height:200px; width:100%;">
               <div class="header-top">
                  <div class="row">
                     <div class="col-md-6">
                        <div class="full">
                           <div class="logo">
                              <a href="index.html"><img src="images/kemendikbud.png" height="50px" width=" 50px" style="margin-left: 15px" alt="#" /></a>
                           </div>
                        </div>
                     </div>
                     <div class="col-md-6">
                        <div class="right_top_section">
                           <!-- social icon -->
                           <ul class="social-icons pull-left">
                              <li><a class="facebook" href="https://www.facebook.com/SMA-1-Sungai-RayaSmansasera-116066658416608"><i class="fa fa-facebook"></i></a></li>
                              <li><a class="instagram" href="https://www.instagram.com/smansasera/?hl=id"><i class="fa fa-instagram"></i></a></li>
                           </ul>
                           <!-- end social icon -->
                           <!-- button section -->
                           <ul class="login">
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
                           <div class="main-menu-section" >
                              <div class="menu" style='background-color:#B22222;'>
                                 <nav class="navbar navbar-inverse">
                                    <div class="navbar-header">
                                       <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".js-navbar-collapse">
                                       <span class="sr-only">Toggle navigation</span>
                                       <span class="icon-bar"></span>
                                       <span class="icon-bar"></span>
                                       <span class="icon-bar"></span>
                                       </button>
                                       <a class="navbar-brand" href="#">Menu</a>
                                    </div>
                                    <div class="collapse navbar-collapse js-navbar-collapse">
                                       <ul class="nav navbar-nav">                   
                      <li> <a href="?hal=kelolah_data" style="color:#FFD39A; font-weight:700;">Kelola Data</a></li>
                      <li> <a href="?hal=tampil_daftar_ekskul" style="color:#FFD39A; font-weight:700;">Data Pendaftar</a></li>
                      <li> <a href="?hal=tampil_daftar_ekskul_anggota" style="color:#FFD39A; font-weight:700;">Anggota Ekskul</a></li>
                      <li> <a href="?hal=tampil_aspirasi" style="color:#FFD39A; font-weight:700;">Aspirasi</a></li>
                      <li> <a href="?hal=tampil_slide" style="color:#FFD39A; font-weight:700;">Slide</a></li>
                   </ul>
                                    </div>
									
                                    <!-- /.nav-collapse -->
                                 </nav>
								 
                              </div>
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
             
			   <br><br><br><br><br><br><br>
               <!-- Wrapper for slides -->
               <div class="carousel-inner" role="listbox">
                  <!-- First slide -->
             <?php include "proses/koneksi.php"; ?>
        <?php include "proses/konten_admin.php"; ?>
          </div>
			   <br><br><br>
               <!-- /.carousel-inner -->
               <!-- Controls -->
            </div>
            <!-- /.carousel -->
         </div>
      </section>
      <footer id="footer" class="footer">
         <div class="footer-bottom">
            <div class="container">
			
               <p>Copyright © Edit By. Pricillia Kusumaningtias A.R.</p>
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