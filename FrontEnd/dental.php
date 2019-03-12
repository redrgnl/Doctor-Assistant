<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Doctor Assistant</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="css/ionicons.min.css">
    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" type="image/png" href="../BackEnd/dist/img/logo.png">
  </head>
  <body>
    
  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
        <a class="navbar-brand" href="index.php"><span>Doctor Assistant</span></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="oi oi-menu"></span> Menu
      </button>

      <div class="collapse navbar-collapse" id="ftco-nav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item"><a href="index.php" class="nav-link">Beranda</a></li>
          <li class="nav-item"><a href="index.php#huhu" class="nav-link">Departemen</a></li>
          <li class="nav-item"><a href="index.php#haha" class="nav-link">Kontak</a></li>
          <?php if(isset($_SESSION['nik'])){ ?>
            <li class="nav-item cta"><a href="../BackEnd/pasien/pasien.php" class="nav-link"><span>Profil</span></a></li>
          <?php }else{ ?>
            <li class="nav-item cta"><a href="../BackEnd/login/login.php" class="nav-link"><span>LOGIN</span></a></li>
          <?php } ?>                
        </ul>
      </div>
    </div>
  </nav>
    <!-- END nav -->
    
    <div class="hero-wrap" style="background-image: url('images/bg_6.jpg'); background-attachment:fixed;">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
          <div class="col-md-8 ftco-animate text-center">
            <h1 class="mb-3 bread">Kesehatan Gigi</h1>
          </div>
        </div>
      </div>
    </div>
	
	

    <section class="ftco-section ftco-degree-bg">
      <div class="container">
        <div class="row">
          <div class="col-md-8 ftco-animate">
            <h2 class="mb-3">Gangguan Gigi dan Gusi</h2>
            <p>Gangguan pada gigi dan gusi merupakan salah satu hal yang paling buruk yang dapat terjadi. Kalau kata lagu, lebih baik sakit hati daripada sakit gigi, karena memang yang dirasakan ketika sakit gigi bisa mengganggu kehidupan seseorang, tidak terkecuali menimbulkan keluhan lain seperti demam, bahkan tekanan darah yang meningkat. Rasa sakit dan ngilu pada gigi dan gusi dapat disebabkan oleh beberapa masalah yang terjadi. Mari kita bahas satu per satu.</p>
            <p>
            <div class="about-author d-flex p-5 bg-light">
              <div class="bio align-self-md-center mr-5">
                <img src="images/gigi-lubang.jpg" alt="Image placeholder" class="img-fluid mb-4">
              </div>
              <div class="desc align-self-md-center">
			  <div style='text-align:justify;'>
                <h3>Gigi Berlubang</h3>
                <p>&nbsp; &nbsp; Timbunan plak atau sisa-sisa makanan yang mengundang bakteri dapat menghancurkan email atau lapisan terluar gigi sehingga menimbulkan gigi berlubang.</p>
              </div>
			  <p><a href="blog-gigi/gigi-berlubang.php" class="btn btn-primary">Selengkapnya</a></p>
			  </div>
            </div>
			
			<div class="about-author d-flex p-5 bg-light">
              <div class="bio align-self-md-center mr-5">
                <img src="images/gigi-sensitif.png" alt="Image placeholder" class="img-fluid mb-4">
              </div>
              <div class="desc align-self-md-center">
			  <div style='text-align:justify;'>
                <h3>Gigi Sensitif</h3>
                <p>&nbsp; &nbsp; Gigi sensitif disebabkan oleh penipisan pada lapisan terluar gigi yang disebut dengan email. Penipisan itu membuat lapisan tengah gigi menjadi terbuka dan terpapar.</p>
              </div>
			  <p><a href="blog-gigi/gigi-sensitif.php" class="btn btn-primary">Selengkapnya</a></p>
			  </div>
            </div>
			
			<div class="about-author d-flex p-5 bg-light">
              <div class="bio align-self-md-center mr-5">
                <img src="images/tumor-gigi.jpg" alt="Image placeholder" class="img-fluid mb-4">
              </div>
              <div class="desc align-self-md-center">
			  <div style='text-align:justify;'>
                <h3>Tumor Gigi</h3>
                <p>Tumor gigi adalah pembengkakan yang berlangsung pada mulut yg tidak disebabkan oleh infeksi. Tumor gigi ini amatlah beresiko serta bisa mengakibatkan kematian. </p>
              </div>
			  <p><a href="blog-gigi/tumor-gigi.php" class="btn btn-primary">Selengkapnya</a></p>
			  </div>
            </div>
			
			<div class="about-author d-flex p-5 bg-light">
              <div class="bio align-self-md-center mr-5">
                <img src="images/gigi-ngilu.jpg" alt="Image placeholder" class="img-fluid mb-4">
              </div>
              <div class="desc align-self-md-center">
			  <div style='text-align:justify;'>
                <h3>Gigi Ngilu</h3>
                <p>Gigi terasa ngilu atau gigi sensitif umumnya disebabkan karena terkikisnya lapisan pelindung gigi yang disebut email atau karena terpaparnya akar gigi. </p>
			  </div>
			  <p><a href="blog-gigi/gigi-ngilu.php" class="btn btn-primary">Selengkapnya</a></p>
			  </div>
            </div>
			
			<div class="about-author d-flex p-5 bg-light">
              <div class="bio align-self-md-center mr-5">
                <img src="images/gangguan-gusi.jpg" alt="Image placeholder" class="img-fluid mb-4">
              </div>
              <div class="desc align-self-md-center">
			  <div style='text-align:justify;'>
                <h3>Gangguan Pada Gusi</h3>
                <p>Gusi berdarah atau radang gusi adalah bagian dari mekanisme pertahanan tubuh. Ketika daerah gusi kotor, tubuh akan menganggapnya sebagai iritan yang perlu dibasmi dengan mengeluarkan darah.</p>
              </div>
			  <p><a href="blog-gigi/gangguan-gusi.php" class="btn btn-primary">Selengkapnya</a></p>
			  </div>
            </div>
          </div> <!-- .col-md-8 -->
          <div class="col-md-4 sidebar ftco-animate">

            
			
            <div class="sidebar-box ftco-animate">
              <h3>Blog</h3>
              <div class="block-21 mb-4 d-flex">
                <a class="blog-img mr-4" style="background-image: url(images/fisio-01.jpg);"></a>
                <div class="text">
                  <h3 class="heading"><a href="physiotherapy.php">Fisioterapi adalah perawatan yang dilakukan untuk . . .</a></h3>
                </div>
              </div>
              <div class="block-21 mb-4 d-flex">
                <a class="blog-img mr-4" style="background-image: url(images/image_6.jpg);"></a>
                <div class="text">
                  <h3 class="heading"><a href="general.php">Penyakit adalah suatu keadaan abnormal dari tubuh atau pikiran. . .</a></h3>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
    </section> <!-- .section -->

    <footer id="haha" class="ftco-footer ftco-bg-dark ftco-section img" style="background-image: url(images/bg_5.jpg);">
    	<div class="overlay"></div>
      <div class="container">
        <div class="row mb-5">
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
			 <h2 class="ftco-heading-2">Contact Us</h2>
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
              <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
         
          
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
				<h2 class="ftco-heading-2"></h2>
            	
            	<div class="block-23 mb-3">
	              <ul>
	                <li><span class="icon icon-map-marker"></span><span class="text">Jl Mastrip 04 Sumbersari Jember, Jawa Timur 68124</span></li>
	                <li><a href="#"><span class="icon icon-phone"></span><span class="text">+2 392 3929 210</span></a></li>
	                <li><a href="#"><span class="icon icon-envelope"></span><span class="text">Doctorasistant.com</span></a></li>
	              </ul>
	            </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">

            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Doctor Asistant</p>
          </div>
        </div>
      </div>
    </footer>
    


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/jquery.timepicker.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
    
  </body>
</html>