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
    <link rel="stylesheet" href="../css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="../css/animate.css">
    <link rel="stylesheet" href="../css/owl.carousel.min.css">
    <link rel="stylesheet" href="../css/owl.theme.default.min.css">
    <link rel="stylesheet" href="../css/magnific-popup.css">
    <link rel="stylesheet" href="../css/aos.css">
    <link rel="stylesheet" href="../css/ionicons.min.css">
    <link rel="stylesheet" href="../css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="../css/jquery.timepicker.css">
    <link rel="stylesheet" href="../css/flaticon.css">
    <link rel="stylesheet" href="../css/icomoon.css">
    <link rel="stylesheet" href="../css/style.css">
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
          <li class="nav-item"><a href="../index.php" class="nav-link">Beranda</a></li>
          <li class="nav-item"><a href="../index.php#huhu" class="nav-link">Departemen</a></li>
          <li class="nav-item"><a href="../index.php#haha" class="nav-link">Kontak</a></li>
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
    
    <div class="hero-wrap" style="background-image: url('../images/bg_6.jpg'); background-attachment:fixed;">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
          <div class="col-md-8 ftco-animate text-center">
            <h1 class="mb-3 bread">Penyakit Maag</h1>
          </div>
        </div>
      </div>
    </div>
	
	<section class="ftco-section-2">
      <div class="container-fluid d-flex">
        <div class="section-2-blocks-wrapper row no-gutters">
          <div class="img col-sm-12 col-lg-6" style="background-image: url('../blog-umum/maag.jpg');">
          </div>
          <div class="text col-lg-6 ftco-animate">
            <div class="text-inner align-self-start">
              
              <h3>Sebenarnya Apa Itu Maag, dan Benarkah Semua Orang Punya Penyakit Ini?</h3>
              <p>Maag adalah kasus yang cukup banyak ditemui dalam masyarakat. Bahkan menurut data yang dicatat oleh Badan Kesehatan Dunia (WHO) pada 2012, tingkat kejadian penyakit maag di Indonesia mencapai 40,8 persen. Akan tetapi, banyak orang masih belum memahami sepenuhnya apa itu penyakit maag.</p>

              <p>Anda mungkin masih sering dengar mitos bahwa semua orang itu pasti punya maag, masalahnya hanya apakah maag tersebut akan kambuh jadi penyakit. Benarkah demikian? Yuk, cari tahu lebih lanjut seputar maag dalam ulasan berikut ini.</p>
            </div>
          </div>
        </div>
      </div>
    </section>
	
    <section class="ftco-section ftco-degree-bg">
      <div class="container">
        <div class="row">
          <div class="col-md-8 ftco-animate">
            <h2 class="mb-3">Apa itu penyakit maag?</h2>
			<p>Sebenarnya, tak ada istilah penyakit maag dalam dunia medis. Maag hanyalah istilah yang digunakan masyarakat awam untuk menggambarkan keluhan-keluhan yang disebabkan oleh gangguan pencernaan (indigestion). Misalnya keluhan sakit perut, mual, muntah, dada terasa nyeri seperti terbakar, kembung, begah, dan mulut terasa asam. Maka, maag sendiri sebenarnya bukan penyakit, melainkan gejala yang menandakan adanya penyakit tertentu.</p>
			<h2 class="mb-3">Penyakit apa saja yang ditandai dengan maag?</h2>
			<p>Salah satu penyebab maag adalah penyakit asam lambung (GERD atau refluks asam lambung). Penyakit ini terjadi saat isi lambung, termasuk asam lambung, naik menuju kerongkongan sehingga Anda merasa mual, muntah, dan nyeri dada.  </p>
			<p>Penyakit lain yang mungkin menimbulkan maag antara lain tukak lambung (peradangan lambung, usus, atau kerongkongan), infeksi perut, dan penyakit irritable bowel syndrome. Pada beberapa kasus langka, maag bisa menandakan kanker perut.</p>
			<h2 class="mb-3">Benarkah semua orang punya maag?</h2>
			<p>Anggapan bahwa semua orang punya maag itu keliru. Maag bukanlah jaringan atau organ tubuh manusia. Maag juga bukan kondisi yang pasti muncul dan dialami oleh setiap orang. Hanya orang yang memiliki penyakit tertentu seperti penyakit asam lambung dan tukak lambung yang akan menunjukkan gejala yaitu maag.</p>
			<p>Namun, banyak orang salah paham dan mengira bahwa maag itu sama dengan asam lambung. Ini karena pada kebanyakan kasus, keluhan maag disebabkan oleh gangguan asam lambung. Asam lambung sendiri adalah enzim yang diproduksi tubuh secara alami. Gunanya adalah mencerna makanan. Kalau Anda kebanyakan asam lambung atau bila asam lambung naik ke kerongkongan, ini akan menyebabkan gejala-gejala yang lebih dikenal dengan sebutan maag.</p>
			<p>Jadi, sebetulnya tidak semua orang punya maag. Sederhananya, mengatakan semua orang punya maag itu sama saja dengan mengatakan bahwa semua orang punya diabetes. Hal ini tentu tidak benar. Semua orang memang punya asam lambung seperti halnya semua orang punya kadar gula dalam darahnya. Akan tetapi, asam lambung tidak akan menjadi penyakit maag kalau tidak dipicu oleh faktor risiko.</p>
			<h2 class="mb-3">Apa yang membuat seseorang rentan terkena penyakit maag?</h2>
			<p>Ada beberapa hal yang bisa memicu maag atau penyakit yang menyebabkan maag. Berikut adalah faktor-faktor risiko yang mungkin membuat Anda rentan penyakit maag.</p>
			<p>1. Pola makan tidak teratur</p>
			<p>2. Sering mengonsumsi makanan pedas atau yang kadar lemaknya tinggi seperti gorengan</p>
			<p>3. Gaya hidup tidak sehat seperti merokok atau kebanyakan minum minuman beralkohol</p>
			<p>4. Kelebihan berat badan atau obesitas</p>
			<p>5. Sedang menjalani pengobatan tertentu seperti antibiotik, aspirin, steroid, dan pil KB</p>
			<p>6. Stres atau kelelahan</p>
		
            
            <div class="pt-5 mt-5"> 
              <div class="comment-form-wrap pt-5"> 
              </div>
            </div>
          </div> <!-- .col-md-8 -->
          <div class="col-md-4 sidebar ftco-animate">
            <div class="sidebar-box">
            </div>
            <div class="sidebar-box ftco-animate">
            </div>

            <div class="sidebar-box ftco-animate">
              <h3>Blog</h3>
              <div class="block-21 mb-4 d-flex">
                <a class="blog-img mr-4" style="background-image: url(../images/gigi-sensitif.png);"></a>
                <div class="text">
					<h3 class="heading"><a href="../dental.php">Sakit gigi adalah kondisi ketika muncul rasa nyeri di dalam atau . . .</a></h3>
                </div>
              </div>
              <div class="block-21 mb-4 d-flex">
                <a class="blog-img mr-4" style="background-image: url(../images/fisio-01.jpg);"></a>
                <div class="text">
                  <h3 class="heading"><a href="../physiotherapy.php">Fisioterapi adalah perawatan yang dilakukan untuk . . .</a></h3>
                </div>
              </div>
              <div class="block-21 mb-4 d-flex">
                <a class="blog-img mr-4" style="background-image: url(../images/image_6.jpg);"></a>
                <div class="text">
                  <h3 class="heading"><a href="../general.php">Penyakit adalah suatu keadaan abnormal dari tubuh atau pikiran. . .</a></h3>
                </div>
              </div>
            </div> 
          </div>
        </div>
      </div>
    </section> <!-- .section -->

		
    <footer id="haha" class="ftco-footer ftco-bg-dark ftco-section img" style="../background-image: url(images/bg_5.jpg);">
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
    

  <script src="../js/jquery.min.js"></script>
  <script src="../js/jquery-migrate-3.0.1.min.js"></script>
  <script src="../js/popper.min.js"></script>
  <script src="../js/bootstrap.min.js"></script>
  <script src="../js/jquery.easing.1.3.js"></script>
  <script src="../js/jquery.waypoints.min.js"></script>
  <script src="../js/jquery.stellar.min.js"></script>
  <script src="../js/owl.carousel.min.js"></script>
  <script src="../js/jquery.magnific-popup.min.js"></script>
  <script src="../js/aos.js"></script>
  <script src="../js/jquery.animateNumber.min.js"></script>
  <script src="../js/bootstrap-datepicker.js"></script>
  <script src="../js/jquery.timepicker.min.js"></script>
  <script src="../js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="../js/google-map.js"></script>
  <script src="../js/main.js"></script>
    
  </body>
</html>