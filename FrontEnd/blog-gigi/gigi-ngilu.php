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
            <h1 class="mb-3 bread">Gigi Ngilu</h1>
          </div>
        </div>
      </div>
    </div>
	
	<section class="ftco-section-2">
      <div class="container-fluid d-flex">
        <div class="section-2-blocks-wrapper row no-gutters">
          <div class="img col-sm-12 col-lg-6" style="background-image: url('../blog-gigi/gigi-ngilu.jpg');">
          </div>
          <div class="text col-lg-6 ftco-animate">
            <div class="text-inner align-self-start">
              
              <h3>Berbagai Penyebab Gigi Ngilu dan Cara Mengatasinya Sampai Tuntas</h3>
              <p>Apakah minum minuman dingin es bikin gigi tidak nyaman? Atau Anda meringis saat sikat gigi atau membersihkan mulut? Jika ya, gigi Anda mengalami hal yang dikenal sebagai gigi sensitif yang dapat menimbulkan rasa ngilu pada gigi. Gigi menjadi sensitif ketika lapisan gigi yang disebut dentin terekspos ke bagian luar gigi, misalnya karena kerusakan enamel. Dentin terhubung dengan saluran yang berisi serabut-serabut saraf. Jadi, ketika dentin terpapar dingin, panas, atau makanan, otomatis serabut saraf juga terpapar dan membuat gigi ngilu.</p>

            </div>
          </div>
        </div>
      </div>
    </section>
	
    <section class="ftco-section ftco-degree-bg">
      <div class="container">
        <div class="row">
          <div class="col-md-8 ftco-animate">
            <h2 class="mb-3">Penyebab Gigi Ngilu</h2>
			<h5>1. Kurang hati-hati saat sikat gigi</h5>
            <p>Saat menyikat gigi, ada banyak yang harus Anda perhatikan. Ini agar gigi tidak ngilu karena kerusakan pada email gigi. Biasanya kesalahan yang dapat menyebabkan gigi ngilu adalah menyikat terlalu kencang dan terlalu ditekan. Faktor pemilihan sikat gigi pun juga menjadi penyebabnya. Menggunakan bulu sikat yang kasar dan keras dapat membuat gusi luka dan berakibat pada gigi ngilu. Hal ini lambat laun akan menyebabkan pengikisan lapisan gigi. Akibatnya, gigi jadi ngilu dan sensitif. Solusi paling sederhana adalah beralih ke sikat gigi dengan bulu yang lebih lembut dan menyikat gigi dengan lebih pelan.</p>
            <h5>2. Makanan yang dikonsumsi</h5> 
            <p>Mungkin Anda tidak terlalu memperhatikan makanan yang Anda makan dapat mengganggu kesehatan gigi atau tidak. Namun, mengonsumsi makanan dan minuman yang terlalu asam, panas, atau dingin dapat memengaruhi kondisi gigi Anda. Terkadang, Anda tidak menyadari kondisi suhu minuman atau makanan yang Anda konsumsi. Ada beberapa yang tidak sadar bahwa bahaya minum es atau minuman yang terlalu dingin atau terlalu panas juga dapat menyebabkan pengikisan pada lapisan gigi. Inilah yang membuat gigi ngilu. Selain itu, kebiasaan makan makanan panas lalu langsung minum dingin atau sebaliknya juga merupakan salah satu kebiasaan buruk yang dapat menyebabkan pengikisan gigi.Jika jalur saraf Anda terpapar makanan asam seperti saus tomat, lemon, kiwi, dan acar, Anda juga bisa merasakan gigi ngilu. Dengan menghindari makanan atau minuman seperti ini bisa membantu Anda untuk menghindari sakit  gigi.</p>	
			<h5>3. Menggunakan pasta gigi dengan pemutih</h5> 
            <p>Anda mungkin menggunakan pasta gigi yang mengandung bahan kimia untuk memutihkan gigi. Bahan kimia ini kadang terlalu keras sehingga dapat merusak permukaan gigi dan berujung pada gigi yang sensitif. Jika pasta gigi Anda mengandung zat pemutih, pertimbangkan untuk beralih ke pasta gigi yang biasa atau yang khusus untuk gigi sensitif. </p>	
			<h5>4. Hobi kumur-kumur dengan obat</h5> 
            <p>Seperti pasta gigi pemutih, beberapa obat kumur mengandung alkohol dan bahan kimia lainnya yang dapat membuat gigi Anda lebih peka, terutama jika dentin Anda terbuka. Dentin terhubung ke pusat saraf dalam gigi. Jadi bila tidak terlindungi, pusat saraf akan rentan terhadap rasa sakit. Sebagai gantinya, coba membersihkan gigi dengan menggunakan benang gigi untuk membersihkan sisa-sisa maknan yang menyelip di antara gigi dan tidak dapat dijangkau oleh sikat gigi.</p>	
			<h5>5. Penyakit gusi</h5> 
            <p>Seiring bertambahnya usia (terutama jika Anda tidak menjaga kesehatan gigi Anda), Anda bisa mengalami berbagai penyakit gusi. Penyakit gusi dapat menyebabkan sensitivitas pada gigi sehingga gigi terasa ngilu.  Jika penyakit gusi atau radang gusi adalah masalahnya, dokter gigi Anda akan menawarkan perawatan yang tepat untuk mengobati penyakit yang jadi penyebabnya. Jadi, biasakan untuk rutin periksa ke dokter gigi Anda. </p>
            
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