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
            <h1 class="mb-3 bread">Stroke</h1>
          </div>
        </div>
      </div>
    </div>
	
	<section class="ftco-section-2">
      <div class="container-fluid d-flex">
        <div class="section-2-blocks-wrapper row no-gutters">
          <div class="img col-sm-12 col-lg-6" style="background-image: url('../blog-fisioterapi/stroke.jpg');">
          </div>
          <div class="text col-lg-6 ftco-animate">
            <div class="text-inner align-self-start">
              
              <h3>Apa itu Stroke</h3>
              <p>Stroke adalah keadaan darurat medis karena sel otak dapat mati hanya dalam hitungan menit. Tindakan penanganan secara cepat dapat meminimalkan tingkat kerusakan otak dan kemungkinan munculnya komplikasi.</p>

              <p>Menurut riset kesehatan dasar yang diselenggarakan oleh Kementrian Kesehatan RI pada tahun 2013, di Indonesia terdapat lebih dari 2 juta penduduk, atau 12 dari 1000 penduduk, menderita stroke dengan persentase terbesar berasal dari provinsi Sulawesi Selatan.</p>
            </div>
          </div>
        </div>
      </div>
    </section>
	
    <section class="ftco-section ftco-degree-bg">
      <div class="container">
        <div class="row">
          <div class="col-md-8 ftco-animate">
              <p>Selain itu, stroke juga merupakan pembunuh nomor 1 di Indonesia, lebih dari 15% kematian di Indonesia disebabkan oleh stroke. Stroke iskemik memiliki kejadian yang lebih sering dibandingkan dengan stroke hemoragik, namun stroke hemoragik membunuh lebih sering dibandingkan dengan stroke iskemik.</p>
              <p>Hipertensi yang diikuti dengan diabetes dan kolesterol tinggi merupakan kondisi yang paling sering meningkatkan risiko terjadinya stroke di Indonesia.</p>
              <p>Penanganan khusus terhadap pasien stroke dilakukan oleh dokter saraf tergantung pada jenis stroke yang dialami pasien, apakah stroke disebabkan gumpalan darah yang menghambat aliran darah ke otak (stroke iskemik) atau disebabkan perdarahan di dalam atau di sekitar otak (stroke hemoragik).</p>
              <h3 class="mb-3">Jenis Dan Pengobatan Stroke</h3>
              <h5>Pengobatan Stroke Iskemik</h5>
              <p><strong>Penanganan awal stroke iskemik</strong> akan berfokus untuk menjaga jalan napas, mengontrol tekanan darah, dan mengembalikan aliran darah. Penanganan tersebut dapat dilakukan dengan cara:</p>
              <p>1. Penyuntikkan rtPA. Penyuntikan rtPA (recombinant tissue plasminogen activator)</p>
              <p>2. Obat antiplatelet. Untuk mencegah pembekuan darah, digunakan obat antiplatelet, seperti aspirin.</p>
              <p>3. Obat antikoagulan. Untuk mencegah pembekuan darah, pasien dapat diberikan obat-obatan antikoagulan</p>
              <p>4. Obat antihipertensi. Pada penderita stroke baru, biasanya tekanan darah tidak diturunkan terlalu rendah</p>
              <p>5. Statin. Dokter akan memberikan obat kolesterol golongan statin, seperti atorvastatin</p>
              <p>6. Endarterektomi karotis. Terkadang operasi diperlukan untuk mencegah berulangnya stroke iskemik</p>
              <p>7. Angioplasti. Selain endarterektomi karotis, arteri karotis juga dapat dilebarkan dengan teknik angioplasti.</p>
              <h5>Pengobatan Stroke Hemoragik</h5>
              <p><strong>Pada kasus stroke hemoragik</strong>, penanganan awal bertujuan untuk mengurangi tekanan pada otak dan mengontrol perdarahan. Ada beberapa bentuk pengobatan terhadap stroke hemoragik, antara lain:</p>
              <p>1. Obat-obatan. Dokter dapat memberikan obat untuk menurunkan tekanan di otak, menurunkan tekanan darah, dan mencegah kejang.</p>
              <p>2. Operasi. Selain dengan obat, stroke hemoragik juga bisa ditangani dengan operasi. </p>
              <h5>Pengobatan TIA (Transient Ischemic Attack)</h5>
              <p><strong>Pengobatan TIA</strong> bertujuan untuk mengendalikan faktor risiko yang dapat memicu timbulnya stroke, sehingga dapat mencegah stroke. Dokter akan memberikan obat yang meliputi obat antiplatelet atau obat antikoagulan, obat kolesterol, serta obat antihipertensi, tergantung dari faktor risiko yang dimiliki pasien. </p>
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