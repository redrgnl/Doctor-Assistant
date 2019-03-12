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
            <h1 class="mb-3 bread">Gigi Sensitif</h1>
          </div>
        </div>
      </div>
    </div>
	
	<section class="ftco-section-2">
      <div class="container-fluid d-flex">
        <div class="section-2-blocks-wrapper row no-gutters">
          <div class="img col-sm-12 col-lg-6" style="background-image: url('../images/gigi-sensitif.png');">
          </div>
          <div class="text col-lg-6 ftco-animate">
            <div class="text-inner align-self-start">
              
              <h3>Bahan Alami untuk mengatasi Gigi Sensitif </h3>
              <p>Gigi sensitif sering terasa saat kita makan makanan yang panas, dingin, manis ataupun asam. Rasa sakitnya yang tajam sampa kadang terasa menusuk sampai ke ujung saraf gigi.</p>
			  <p> Ketika kita berada dirumah, tentunya kita tak semptat untk pergi membeli obat untuk gigi sensitif ini.</p>
			  <p>Maka dari itu didalam artikel ini terdapat beberapa bahan alami yang bisa kita gunakan untuk mencegah gigi sensitif</p>
            </div>
          </div>
        </div>
      </div>
    </section>
	
    <section class="ftco-section ftco-degree-bg">
      <div class="container">
        <div class="row">
          <div class="col-md-8 ftco-animate">
            <h2 class="mb-3">Bahan alami untuk mencegah gigi sensitif</h2>
			<h5>1. Minyak Kelapa</h5>
            <p>Tidak hanya dapat digunakan untuk menghilangkan bakteri, meningkatkan kesehatan gigi dan gusi, dan membantu mengurangi rasa sakit gigi sensitif, minyak kelapa juga membuat gigi menjadi lebih putih dan lebih cerah. </p>
			<p>Minyak bisa menembus plak dan mengeluarkan racun dan bakteri dari gusi. Caranya cukup dengan mengoleskan minyak kelapa disekitar mulut dalam beberapa menit. Selanjutnya kumur dengan air hangat, namun jangan sampai ikut tertelan. Setelah itu, gosok gigi seperti biasanya agar mulut benar benar bersih dan lakukanlah sehari satu kali dipagi hari.</p>
            <h5>2. Air Garam</h5>
			<p> Air garam juga bisa membantu meredakan sensitivitas gigi dengan cepat. Ini tidak hanya memperbaiki keseimbangan pH, mulut untuk menciptakan lingkungan yang lebih basa dimana bakteri berbahaya tidak dapat bertahan, antiseptik alami untuk mengurangi penumpukan plak, memberikan apa yang mungkin anda sebut kesepakatan khusus dua lawan satu. Caranya dengan melarutkan 2 sendok teh garam pada segelas air. Gunakan untuk berkumur setiap pagi dan malam hari untuk mengurangi sensitivitas dan rasa sakit.</p>
		    <h5>3. Minyak Esensial Cengkeh</h5>
			<p>Minyak esensial cengkeh berkhasiat untuk menghilangkan kuman, menyembuhkan rasa sakit, sekaligus menjaga gigi dan gusi tetap sehat. Cengkeh telah banyak digunakan dalam kedokteran gigi untuk sifat anti-inflamasi, anestesi dan antibakteri mereka yang membantu mengurangi nyeri gigi dan melawan infeksi. Cara menggunakannya cukup dengan meneteskan minyak cengkeh pada gigi.</p>
			<h5>4. Daun Jambu Biji</h5>
			<p>Daun jambu biji mengandung flavonoid seperti quercetin, kaempferol, dan memiliki sifat anti-inflamasi, analgesik dan anti radikal bebas yang membantu meringankan sensitivitas gigi dan sakit gigi. Cara yang digunakan dengan merebus 4 sampai 5 daun jambu biji ke dalam secangkir air saat dingin, kemudian tambahkan garam dan gunakan untuk obat kumur.</p>
            <h5>5. Bawang Putih</h5>
			<p>Bawang putih mengandung senyawa yang bermanfaat untuk kesehatan mulut, termasuk allicin, agen antibakteri yang kuat dan anestesi alami. Hal ini dapat membantu meringankan rasa sakit akibat sensitivitas gigi. Cara menggunakannya adalah haluskan satu siung bawang putih, tambahkan 2 sampai 3 tetes air dan setengah sendok teh garam. Oleskan langsung pada gigi yang sensitif, biarkan beberapa menit dan kumur dengan air garam. dan ulangi secara rutin setiap dua kali dalam sehari.</p>
            
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