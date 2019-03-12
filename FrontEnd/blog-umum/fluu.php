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
            <h1 class="mb-3 bread">Penyakit Fluu</h1>
          </div>
        </div>
      </div>
    </div>
	
	<section class="ftco-section-2">
      <div class="container-fluid d-flex">
        <div class="section-2-blocks-wrapper row no-gutters">
          <div class="img col-sm-12 col-lg-6" style="background-image: url('../blog-umum/fluu.jpg');">
          </div>
          <div class="text col-lg-6 ftco-animate">
            <div class="text-inner align-self-start">
              
              <h3>Apa itu flu (influenza)?</h3>
              <p>Influenza atau flu adalah infeksi virus pada saluran pernapasan. Flu adalah kondisi yang datang secara tiba-tiba, biasanya berlangsung selama 7 sampai 10 hari. Flu bisa hilang begitu saja dan ada yang diobati menggunakan obat obatan alami atau obat resep. Kebanyakan kasus flu umumnya bisa sembuh sepenuhnya.</p>

              <p>Namun bagi orang tua, balita, dan orang yang daya tahan tubuhnya lemah, gejala flu bisa terasa lebih parah dan bahkan mengakibatkan kematian akibat komplikasinya. Tipe lain dari flu adalah flu babi (HIN1), flu burung (H5N1, H7N9), dan lain-lain.</p>
            </div>
          </div>
        </div>
      </div>
    </section>
	
    <section class="ftco-section ftco-degree-bg">
      <div class="container">
        <div class="row">
          <div class="col-md-8 ftco-animate">
            <h2 class="mb-3">Tanda-tanda & gejala</h2>
			<h5>Apa saja tanda-tanda dan gejala flu (influenza)?</h5>
			<p>Gejala influenza umumnya datang secara tiba-tiba. Tanda dan gejalanya biasanya mulai dari 24 sampai 48 jam setelah terpapar virus flu. Gejala dan demam terburuk biasanya berlangsung selama 3 sampai 5 hari. Tanda dan gejalanya seperti Demam tinggi (di atas 38ºC), panas dingin, nyeri otot, merasa sangat lemah atau lelah, sakit kepala, mata terasa sakit, batuk dan bersin.</p>
			<h5>Kapan saya harus ke dokter?</h5>
			<p>Kebanyakan orang yang terkena flu dapat mengobati dirinya sendiri di rumah dan biasanya tidak perlu ke dokter.</p>
			<p>Jika Anda menunjukkan gejala flu dan berisiko komplikasi, pergilah ke dokter segera. Mengonsumsi obat antivirus dalam 48 jam pertama setelah munculnya gejala utama dapat mengurangi lamanya Anda mengidap penyakit dan membantu mencegah masalah yang lebih serius.</p>
            <h2 class="mb-3">Penyebab</h2>
			<h5>Apa penyebab flu (influenza)?</h5>
			<p>Influenza atau flu adalah kondisi yang disebabkan oleh virus yang bisa dikaterogikan. Anda jenis flu dari  jenis A, B atau C. Jenis A adalah yang paling umum.</p>
			<p>Orang yang terkena virus penyebab influenza akibat menghirup udara yang sudah tercemar virus dari orang lain yang terinfeksi (misalnya melalui batuk atau bersin), atau dari menyentuh sesuatu yang sudah disentuh orang yang terinfeksi.</p>
			<p>Influenza bisa menyebar melalui kontak dengan hewan yang terinfeksi atau jika Anda memakan daging hewan tersebut.</p>
			<h2 class="mb-3">Pengobatan</h2>
			<h5>Apa saja pilihan pengobatan saya untuk flu (influenza)?</h5>
			<p>Flu adalah kondisi yang bisa diatasi. Pengobatan yang paling baik adalah istirahat. Untuk mengatasi gejala lainnya yang membuat tidak nyaman, Anda bisa minum obat pereda nyeri NSAID seperti paracetamol dan ibuprofen, hingga obat batuk pilek, atau dekongestan. Jangan memberikan aspirin kepada anak-anak berusia kurang dari 16 tahun karena akan sangat meningkatkan risiko terkena Reye�s Syndrome.</p>
			<p>Menghirup uap hangat dapat melegakan hidung yang tersumbat dan membantu mengencerkan sekret hidung (ingus). Tuangkan air panas ke dalam baskom lalu hirup uap hangat yang dihasilkan oleh air panas tersebut. Minyak esensial yang beraroma dapat ditambahkan. Anda dapat menggunakan selimut untuk membuat ruang tertutup bagi kepala Anda dan baskom agar uap air dapat terfokus ke hidung Anda. Tundukkan kepala Anda agar dapat mengarahkan uap air dengan lebih baik. Perbanyak minum air putih untuk mengencerkan ingus.</p>
			<h5>Tes apa yang paling umum untuk influenza?</h5>
			<p>Dokter akan membuat diagnosis dari gejala-gejala yang Anda alami. Dokter juga bisa melakukan tes untuk memastikan diagnosis tersebut. Tes tersebut bisa melibatkan sampel cairan dari ingus atau menggunakan sampel darah. Dokter juga bisa meminta x-ray untuk mengecek adanya pneumonia (komplikasi).</p>
			
			
		
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