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
            <h1 class="mb-3 bread">Penyakit Demam Berdarah Dengue (DBD)</h1>
          </div>
        </div>
      </div>
    </div>
	
	<section class="ftco-section-2">
      <div class="container-fluid d-flex">
        <div class="section-2-blocks-wrapper row no-gutters">
          <div class="img col-sm-12 col-lg-6" style="background-image: url('../blog-umum/dbd.jpg');">
          </div>
          <div class="text col-lg-6 ftco-animate">
            <div class="text-inner align-self-start">
              
              <h3>Apa itu demam berdarah dengue (DBD)?</h3>
              <p>Demam berdarah dengue (DBD) adalah penyakit menular yang disebabkan oleh virus dengue yang dibawa oleh nyamuk. Demam berdarah DBD dulu disebut penyakit “break-bone” karena kadang menyebabkan nyeri sendi dan otot di mana tulang terasa retak.</p>

              <p>Demam berdarah ringan menyebabkan demam tinggi, ruam, dan nyeri otot dan sendi. Demam berdarah yang parah, atau juga dikenal sebagai dengue hemorrhagic fever, dapat menyebabkan perdarahan serius, penurunan tekanan darah yang tiba-tiba (shock), dan kematian.</p>
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
			<h5>Apa saja tanda-tanda dan gejala demam berdarah dengue (DBD)?</h5>
			<p>Terdapat tiga jenis demam dengue: demam berdarah klasik, dengue hemorrhagic fever, dan dengue shock syndrome. Masing-masing memiliki gejala yang berbeda.</p>
			<p>1. Gejala demam berdarah klasik</p>
			<p>Gejala dari demam berdarah klasik biasanya diawali dengan demam selama 4 hingga 7 hari setelah digigit oleh nyamuk yang terinfeksi, serta Demam tinggi, hingga 40 derajat C, sakit kepala parah, nyeri pada retro-orbital (bagian belakang mata), nyeri otot dan sendi parah, mual dan muntah, dan ruam</p>
			<p>Ruam mungkin muncul di seluruh tubuh 3 sampai 4 hari setelah demam, kemudian berkurang setelah 1 hingga 2 hari. Anda mungkin mengalami ruam kedua beberapa hari kemudian.</p>
			<h5>Gejala dengue hemorrhagic fever</h5>
			<p>Gejala dari dengue hemorrhagic fever meliputi semua gejala dari demam berdarah klasik, ditambah kerusakan pada pembuluh darah dan getah bening, perdarahan dari hidung, gusi, atau di bawah kulit, menyebabkan memar berwarna keunguan Jenis penyakit dengue ini dapat menyebabkan kematian.</p>
			<p>2. Gejala dengue shock syndrome</p>
			<p>Gejala dari dengue shock syndrome, jenis penyakit dengue yang paling parah, meliputi semua gejala demam berdarah klasik dan dengue hemorrhagic fever, ditambah kebocoran di luar pembuluh darah, perdarahan parah, shock (tekanan darah sangat rendah)Jenis penyakit ini biasanya terjadi pada anak-anak (dan beberapa orang dewasa) yang mengalami infeksi dengue kedua kalinya. Jenis penyakit ini sering kali fatal, terutama pada anak-anak dan dewasa muda. </p>
			<p>Kemungkinan ada tanda-tanda dan gejala yang tidak disebutkan di atas. Bila Anda memiliki kekhawatiran akan sebuah gejala tertentu, konsultasikanlah dengan dokter Anda.</p>
			<p>3. Kapan saya harus periksa ke dokter?<p>
			<p>Jika Anda memiliki tanda-tanda atau gejala-gejala di atas atau pertanyaan lainnya, konsultasikanlah dengan dokter Anda. Tubuh masing-masing orang berbeda. Selalu konsultasikan ke dokter untuk menangani kondisi kesehatan Anda.</p>
			<h2 class="mb-3">Penyebab</h2>
			<h5>Apa penyebab demam berdarah dengue?</h5>
			<p>Demam berdarah DBD disebabkan oleh virus yang disebarkan oleh gigitan nyamuk. Terdapat 4 virus dengue, yaitu virus DEN-1, DEN-2, DEN-3 dan DEN-4. Nyamuk yang berasal dari famili tertentu yaitu Aedes aegypti atau Aedes albopictus dapat membawa virus untuk menginfeksi darah manusia dengan gigitan dan mentransfer darah yang terinfeksi ke orang lain. Begitu Anda pulih dari demam berdarah, imunitas Anda akan terbentuk namun hanya sampai strain tertentu.</p>
			<p>Terdapat 4 strain virus tertentu, yang berarti Anda dapat terinfeksi lagi. Penting untuk mengidentifikasi tanda-tanda dan mendapatkan penanganan.</p>
			<h2 class="mb-3">Pengobatan</h2>
			<h5>Bagaimana mendiagnosis demam berdarah dengue?</h5>
			<p>Mendiagnosis demam berdarah mungkin sulit dilakukan, karena tanda-tanda dan gejalanya sulit dibedakan dengan penyakit lain seperti malaria, leptospirosis, dan tifus.</p>
			<p>Beberapa tes laboratorium dapat mendeteksi bukti virus dengue, namun hasil tes biasanya keluar agak lama untuk segera memberi keputusan pengobatan.</p>
			<h5>Bagaimana cara mengobati demam berdarah dengue?</h5>
			<p>Tidak ada penanganan spesifik untuk demam berdarah DBD, kebanyakan pasien pulih dalam 2 minggu. Penting untuk menangani gejala-gejala untuk menghindari komplikasi. Dokter biasanya merekomendasikan pilihan pengobatan berikut:</p>
			<p>1. Istirahat yang banyak di tempat tidur</p>
			<p>2. Minum banyak cairan</p>
			<p>3. Minum obat untuk menurunkan demam. Paracetamol (Tylenol®, Panadol®) dapat meringankan rasa sakit dan menurunkan demam.</p>
			<p>4. Hindari penghilang rasa sakit yang dapat meningkatkan komplikasi perdarahan, seperti aspirin, ibuprofen (Advil®, Motrin®) dan naproxen sodium (Aleve®).</p>
			<p>Untuk kasus yang lebih serius, demam berdarah dapat menyebabkan shock atau hemorrhagic fever yang memerlukan perhatian medis lebih.</p>
			
            
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