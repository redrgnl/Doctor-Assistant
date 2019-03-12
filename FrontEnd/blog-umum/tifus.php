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
            <h1 class="mb-3 bread">Penyakit Tifus</h1>
          </div>
        </div>
      </div>
    </div>
	
	<section class="ftco-section-2">
      <div class="container-fluid d-flex">
        <div class="section-2-blocks-wrapper row no-gutters">
          <div class="img col-sm-12 col-lg-6" style="background-image: url('../blog-umum/tifus.jpg');">
          </div>
          <div class="text col-lg-6 ftco-animate">
            <div class="text-inner align-self-start">
              
              <h3>Penyebab, Gejala, dan Pengobatan yang Ampuh</h3>
              <p>Tifus atau demam tifoid, atau yang sering disebut tipes, adalah salah satu penyakit yang sering dialami oleh masyarakat Indonesia.</p>

              <p>Tifus adalah infeksi yang disebabkan oleh beberapa jenis bakteri Rickettsia typhi atau R. prowazekii. Bakteri ini bisa dibawa oleh ektoparasit seperti kutu, tungau dan caplak, kemudian menginfeksi manusia.</p>
			  <p> Ektoparasit sering ditemukan pada hewan seperti tikus, kucing, dan tupai. Beberapa orang juga bisa membawanya dari pakaian, sprei, kulit, atau rambut mereka. </p>
            </div>
          </div>
        </div>
      </div>
    </section>
	
    <section class="ftco-section ftco-degree-bg">
      <div class="container">
        <div class="row">
          <div class="col-md-8 ftco-animate">
            <h2 class="mb-3">Bagaimana bakteri bisa menyebabkan penyakit tifus?</h2>
			<p>Bakteri penyebab tifus endemik yaitu Rickettsia prowazekki ditularkan oleh kutu rambut manusia. Bakteri dapat tumbuh dalam perut dan usus kutu. Anda dapat terinfeksi bakteri penyebab tifus apabila menggaruk atau menyentuh luka setelah digigit oleh kutu. Risiko infeksi epidemik thypus lebih mudah ditularkan di tempat pengungsian yang padat penduduk dan tingkat kebersihan yang buruk.</p>
			<p>Tak hanya itu saja, infeksi ini juga lebih retan dialami pada musim hujan dan ketika pakaian yang dipenuhi kotoran kutu tidak dicuci dan digunaan secara bergantian. Hal tersebut merupakan kondisi yang optimal untuk penyebaran penyakit.</p>
			<p>Pada kasus endemik yang disebabkan oleh bakteri Rickettsia typhi, penularan penyakit ini terjadi ketika ketika Anda menghirup udara yang terinfeksi bakteri penyebab tifus. Misalnya saat Anda membersihkan gedung lama yang berdebu dan banyak dihuni oleh tikus yang terinfeksi kutu.</p>
			<h2 class="mb-3">Apa saja gejala tifus yang harus diwaspadai?</h2>
			<p>Gejala tifus biasanya berkembang 1-2 minggu setelah paparan dan bisa berkembang dari mulai yang ringan hinga berat. Gejala tifus paling umum di antaranya demam tinggi, biasanya sekitar 40 derajat celcius, sakit kepala, mual atau muntah, diare atau sembelit, batuk kering, sakit perut, nyeri sendi dan otot, sakit punggung, merasa tidak enak badan.</p>
			<p>Gejala tifus lainnya mungkin juga akan muncul ruam serta bintik-bintik berwarna gelap seperti gejala kudis/scabies di area tubuh yang digigit oleh kutu. Ruam ini juga mungkin menyebar ke seluruh tubuh seperti wajah, telapak tangan, atau kaki.</p>
			<p>Jika Anda memiliki tanda atau gejala tifus sepeti yang tercantum di atas atau apabila ada hal lain yang ingin ditanyakan terkait penyakit ini, jangan ragu untuk melakukan konsultasi ke dokter. Setiap tubuh berfungi berbeda satu sama lain. Selalu diskusikan dengan dokter untuk mendapatkan solusi terbaik bagi kondisi Anda.</p>
			<h2 class="mb-3">Bagaimana cara mendiagnosis penyakit tifus?</h2>
			<p>Gejala tifus seringkali mirip dengan gejala penyakit lainnya. Tak jarang, hal ini membuat penyakit ini sulit untuk diagnosis. Namun dokter biasanya akan melakukan tes darah atau biopsi kulit untuk menentukan jenis bakteri penyebab tifus. Diagnosis juga dapat dilakukan dengan tes darah menggunakan metode serologi yang diambil dua minggu secara terpisah. Tes darah ini berfungsi untuk mendeteksi respon sistem kekebalan tubuh pasien terhadap pasiennya.</p>
			<p>Terkadang, dokter juga dapat menduga seseorang memunculkan gejala tifus yang khas apabila dari sesi konsultasi diketahui jika pasien baru saja berpergian ke daerah endemik atau berisiko tinggi. Terutama jika dokter juga menemukan riwayat gigitan dari kutu, tungau, atau caplak di tubuh pasien.</p>
			<h2 class="mb-3">Apa saja obat tifus?</h2>
			<p>Penyakit ini bisa diatasi dengan antibiotik. Salah satu obat tifus yang sering diresepkan dokter adalah antibiotik tetracycline seperti doxycycline. Pengobatan menggunakan antibiotik ini biasanya sudah dimulai sebelum hasil tes darah atau biopsi diketahui.</p>
			<p>Obat tifus ini bekerja dengan cara menghentikan pertumbuhan bakteri penyebab infeksi. Obat ini tidak bekerja untuk infeksi virus (seperti pilek, flu). Penggunaan antibiotik yang tidak tepat, berlebihan, atau tidak diperlukan dapat memengaruhi efektivitas obat.</p>
			<p>Minum obat tifus sesuai anjuran dokter, biasanya sekali sehari dengan atau tanpa makanan. Minum banyak air saat menggunakan obat tifus kecuali bila anjuran dokter berbeda.</p>
			<h2 class="mb-3">Apa saja komplikasi yang mungkin terjadi?</h2>
			<p>Sama seperti penyakit lainnya, penyakit ini membutuhkan perawatan yang cepat dan tepat. Ketika seseorang yang terinfeksi dibiarkan berlarut tanpa penanganan medis yang memadai, komplikasi serius bisa muncul ke permukaan. Beberapa komplikasi yang mungkin terjadi termasuk hepatitis alias peradangan hati, perdarahan saluran cerna, hipovolemia atau penurunan volume cairan darah</p>
			<h2 class="mb-3">Bagaimana cara mencegah penyakit tifus?</h2>
			<p>Jika penyakit tipes bisa dicegah dengan pemberian vaksinasi, lain ceritanya dengan penyakit satu ini. Setelah perang dunia kedua berakhir, vaksinasi untuk penyakit ini sudah tidak diproduksi lagi. Meski begitu, Anda jangan khawatir. Ada beberapa cara sederhana yang dapat Anda lakukan untuk mengurangi risiko terkena infeksi penyakit ini, di antaranya:</p>
			<h5>Pakai obat pembasmi serangga</h5>
			<p>Selalu sediakan obat pembasmi serangga setiap kali Anda ingin berpergian ke tempat-tempat terbuka, seperti berkemah, naik gunung, dan lain sebagainya. Bila perlu, gunakan baju lengan panjang dan celana panjang. Hal ini dilakukan untuk mengurangi risiko gigitan kutu dan tungau.</p>
			<h5>Cuci tangan</h5>
			<p> Rajin cuci tangan setiap kali ingin memulai aktivitas atau setelah beraktivtitas. Gunakan sabun antiseptik untuk memastikan kebersihan tangan Anda.</p>
			<h5>Cuci semua pakaian dan sprei tempat tidur.</h5>
			<p>Gunakanlah air panas dan sabun untuk mencuci semua pakaian, handuk, dan sprei, atau jika perlu direbus untuk membunuh tungau yang masih tertinggal.</p>
			<h5>Biarkan tungau mati kelaparan.</h5>
			<p>Untuk benda-benda yang tidak dapat dicuci, Anda dapat memasukkan benda-benda tersebut ke dalam plastik tertutup dan letakkan di tempat yang jarang dijangkau selama beberapa minggu. Tungau akan mati dalam beberapa hari ketika dibiarkan tanpa makanan.</p>
			<h5>Konsultasi ke Dokter</h5>
			<p>Segera cek kesehatan setelah berkunjung ke daerah endemik di mana penyakit ini sedang mewabah. Meski Anda tidak memunculkan gejala tifus, sebaiknya tetap lakukan pemeriksaan. Pasalnya dalam banyak kasus, gejala tifus baru muncul setelah beberapa minggu terinfeksi.</p>
		
            
            
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