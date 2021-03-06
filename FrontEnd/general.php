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
            <h1 class="mb-3 bread">Penyakit Umum</h1>
          </div>
        </div>
      </div>
    </div>
	
	

    <section class="ftco-section ftco-degree-bg">
      <div class="container">
        <div class="row">
          <div class="col-md-8 ftco-animate">
            <h2 class="mb-3">Penyakit</h2>
            <p>Penyakit adalah suatu keadaan abnormal dari tubuh atau pikiran yang menyebabkan ketidaknyamanan, disfungsi atau kesukaran terhadap orang yang dipengaruhinya. Untuk menyembuhkan penyakit, orang-orang biasa berkonsultasi dengan seorang dokter.</p>
            <p>
            <div class="about-author d-flex p-5 bg-light">
              <div class="bio align-self-md-center mr-5">
                <img src="blog-umum/tifus.jpg" style="width:700px;" alt="Image placeholder" class="img-fluid mb-4">
              </div>
              <div class="desc align-self-md-center">
			  <div style='text-align:justify;'>
                <h3>Penyakit Tifus?</h3>
                <p>Tifus atau demam tifoid adalah penyakit yang bisa menyebar melalui makanan, air, atau ditularkan dari orang yang terinfeksi (melalui fesesnya). Tipes disebabkan oleh bakteri Salmonella typhi.</p>
              </div>
			  <p><a href="blog-umum/tifus.php" class="btn btn-primary">Selengkapnya</a></p>
			  </div>
            </div>
			
			<div class="about-author d-flex p-5 bg-light">
              <div class="bio align-self-md-center mr-5">
                <img src="blog-umum/dbd.jpg" style="width:700px;" alt="Image placeholder" class="img-fluid mb-4">
              </div>
              <div class="desc align-self-md-center">
			  <div style='text-align:justify;'>
                <h3>Demam Berdarah Dengue (DBD)?</h3>
                <p>Penyakit menular yang disebabkan oleh virus dengue yang dibawa oleh nyamuk. Demam berdarah DBD dulu disebut penyakit “break-bone” karena kadang menyebabkan nyeri sendi dan otot di mana tulang terasa retak.</p>
              </div>
			  <p><a href="blog-umum/dbd.php" class="btn btn-primary">Selengkapnya</a></p>
			  </div>
            </div>
			
						<div class="about-author d-flex p-5 bg-light">
              <div class="bio align-self-md-center mr-5">
                <img src="blog-umum/kulit.jpg" style="width:700px;" alt="Image placeholder" class="img-fluid mb-4">
              </div>
              <div class="desc align-self-md-center">
			  <div style='text-align:justify;'>
                <h3>Penyakit Kulit</h3>
                <p>Di negara tropis seperti Indonesia, ada beberapa jenis penyakit kulit menular yang sering terjadi. Penyakit kulit menular ini bisa disebarkan melalui udara, kontak langsung kulit dengan kulit, atau juga benda yang habis digunakan orang yang terinfeksi.</p>
              </div>
			  <p><a href="blog-umum/kulit.php" class="btn btn-primary">Selengkapnya</a></p>
			  </div>
            </div>
			
						<div class="about-author d-flex p-5 bg-light">
              <div class="bio align-self-md-center mr-5">
                <img src="blog-umum/maag.jpg" style="width:700px;" alt="Image placeholder" class="img-fluid mb-4">
              </div>
              <div class="desc align-self-md-center">
			  <div style='text-align:justify;'>
                <h3>Penyakit Maag</h3>
                <p>Sakit maag atau dispepsia adalah gejala penyakit berupa rasa nyeri dan panas pada lambung yang terjadi akibat sejumlah kondisi. Di antaranya adalah luka terbuka pada lapisan dalam lambung (tukak lambung).</p>
              </div>
			  <p><a href="blog-umum/maag.php" class="btn btn-primary">Selengkapnya</a></p>
			  </div>
            </div>
			
						<div class="about-author d-flex p-5 bg-light">
              <div class="bio align-self-md-center mr-5">
                <img src="blog-umum/fluu.jpg" style="width:700px;" alt="Image placeholder" class="img-fluid mb-4">
              </div>
              <div class="desc align-self-md-center">
			  <div style='text-align:justify;'>
                <h3>Penyakit Fluu</h3>
                <p>Influenza atau flu dapat disebabkan oleh tiga jenis virus flu, yaitu influenza A, influenza B, adn inluenza C. Berbeda dengan pilek yang dapat terjadi sepanjang tahun, untuk kasus flu biasanya lebih musiman dan banyak disebabkan oleh influenza tipe A dan B.</p>
              </div>
			  <p><a href="blog-umum/fluu.php" class="btn btn-primary">Selengkapnya</a></p>
			  </div>
            </div>	
          </div> <!-- .col-md-8 -->
          <div class="col-md-4 sidebar ftco-animate">
            
             <div class="sidebar-box ftco-animate">
              <h3>Blog</h3>
              <div class="block-21 mb-4 d-flex">
                <a class="blog-img mr-4" style="background-image: url(images/gigi-sensitif.png);"></a>
                <div class="text">
                  <h3 class="heading"><a href="dental.php">Sakit gigi adalah kondisi ketika muncul rasa nyeri di dalam atau . . .</a></h3>
                </div>
              </div>
              <div class="block-21 mb-4 d-flex">
                <a class="blog-img mr-4" style="background-image: url(images/fisio-01.jpg   );"></a>
                <div class="text">
                  <h3 class="heading"><a href="physiotherapy.php">Fisioterapi adalah perawatan yang dilakukan untuk . . .</a></h3>
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