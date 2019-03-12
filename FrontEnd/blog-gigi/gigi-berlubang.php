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
            <h1 class="mb-3 bread">Gigi Berlubang</h1>
          </div>
        </div>
      </div>
    </div>
	
	<section class="ftco-section-2">
      <div class="container-fluid d-flex">
        <div class="section-2-blocks-wrapper row no-gutters">
          <div class="img col-sm-12 col-lg-6" style="background-image: url('../images/tooth.jpg');">
          </div>
          <div class="text col-lg-6 ftco-animate">
            <div class="text-inner align-self-start">
              
              <h3>Masalah dari Gigi Berlubang</h3>
              <p>Gigi berlubang menjadi masalah pada gigi yang paling umum ditemui di Indonesia. Seperti diungkapkan oleh drg. Sri Angky Soekanto, DDS, PhD., praktisi kesehatan gigi dan pakar biologi oral Universitas Indonesia, penderita gigi berlubang ini sangat tinggi di Indonesia.</p>

              <p> Penyebabnya adalah kesadaran penduduk Indonesia akan kesehatan gigi masih sangat minim. Itu juga yang mendasari adanya program-program edukasi kebersihan mulut ke sekolah-sekolah, sebab membangun kebiasaan memang harus dilakukan dari kecil. Ketika kesadaran ini tidak ditumbuhkan, maka risiko terkena gigi berlubang pun akan bertambah.</p>
            </div>
          </div>
        </div>
      </div>
    </section>
	
    <section class="ftco-section ftco-degree-bg">
      <div class="container">
        <div class="row">
          <div class="col-md-8 ftco-animate">
            <h2 class="mb-3">Penyebab Gigi Berlubang</h2>
            <p>Gigi yang berlubang tentunya terdapat dari tindakan atau pun hal yang memicunya tumbuh bakteri jahat. Penyebab gigi berlubang pun bukan karna malas menggosok gigi secara teratur, gigi yang kurang perawatan pun berakibat gigi berlubang dan kuning. Oleh maka itu rajinlah melakukan perawatan pada gigi sebelum terjadi gigi berlubang. Naah ada pun caranya yang harus di hindari oleh kalian semua yaitu sebagai berikut ini.</p>
          
            <h3 class="mb-1 mt-2">Frekuensi yang jarang</h3>
            <p>Sudah tahukah anda menggosok gigi yang baik berapa kali dalam sehari? Yaa tepat sekali sehari dua kali minimal melakukan sikat gigi. Bila jarang melakukan sikat gigi mka agigi akan mudah rapuh dan juga akan mudah bakteri menyerang. Oleh sebab itu juga untuk dapatkan gigi yang lebih sehat maksimal, jadi frekuensinya sikat gigi degnan lebih sering akan meminimalisir pertumbuhan bakteri pada gigi anda.</p>
            <h3 class="mb-1 mt-2">Terlalu banyak konsumsi makanan manis</h3>
            <p>Masalah yang di sebabkan makanan manis cukuplah jahat bagi keseatan gigi, menagapa bisa jahat makanan manis untuk kesehatan gigi? Kandungan zat yang terdapat pada gula iyalah akan menjadi pemicu gigi mudah berlubang. Jadi untuk itu jika anda mengkonsumsi makanan atau minuman yang manis, perlu anda ingin untuk menggosok gigi atau berkumur agar sisa makanan di sea sela gigi tidak tertinggal.</p>
            <h3 class="mb-1 mt-2">Penggunaan alat yang salah</h3>
			<p>Gigi geraham iyalah gigi yang terletak dibagia belang, gigi geraham ini juga bagian gigi yang paling sering mendapat masalah kerna letaknya di bagian belakang sehingga sulit untuk di bersihkan. Terlebih lagi jika sikat gigi yang di gunakan tidak cocok degan rongga mulut sehingga menjadikan sulit bersih dan menjadi sarangnya bakteri.</p>
            <h3 class="mb-1 mt-2">Menyikat gigi dengan cara yang salah</h3>
			<p>Menyikat gigi memang terlihat mudah dan biasa saja, tapi kebanyakan orang masih mengalami yang namanya masalah pada gigi. Sebuah penelitan menyatakan bahwa menyikat gigi yang benar dan biak iyalah selama 1-2 menit. Sehingga dalam menyikat gigi kitapun harus berada di depan cermin dan melakukannya dengan cara memutar mutar agar bersih merata.</p>
            <p>
              <img src="../images/image_8.jpg" alt="" class="img-fluid">
            </p>
			<h3 class="mb-1 mt-2">Cara Mengatasi Gigi Berlubang Secara Alami:</h3>
			<h5>1. Menyikat Gigi</h5>
			<p>Penyikatan gigi yang benar yakni dengan cara memutar-mutar. Namun, masyarakat seringkali melakukan penyikatan dengan dua arah dan terlalu keras. Hal ini apabila terus dilakukan akan menyebabkan kerusakan pada gigi. Awalnya timbul lubang yang kecil, tapi dalam jangka waktu yang lama lubang itu akan semakin membesar.</p>
            <h5>2. Memilih Sikat Gigi</h5>
			<p>Dalam proses penyikatan gigi, belum tentu semua bagian gigi bisa tertangani dengan baik. Pilihlah sikat gigi yang flexible yang bisa mengikuti kontur mulut anda dan jangan memakai sikat gigi yang kepalanya terlalu besar, karena hal itu akan menyulitkan anda pada saat menyikat gigi. Makin ke dalam letak gigi, akan makan sempit ruang gerak benda yang masuk.</p>
			<h5>3. Jeruk Nipis</h5>
			<p>Jeruk nipis ternyata bisa digunakan untuk meredakan sakit yang ditimbulkan oleh gigi yang berlubang. Vitamin C yang terkandung di dalamnya sangat ampuh untuk meredakan rasa sakit tersebut. Hal ini akan membantu anda mengurangi rasa sakit karena gigi yang berlubang. Disarankan untuk rutin melakukan cara ini beberapa hari sampai rasa sakit benar-benar hilang, sehingga akan dapat membantu anda meringankan kondisi tersebut.</p>
			
			
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
        <div class="row mb-2">
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