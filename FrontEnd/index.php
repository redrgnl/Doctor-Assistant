<?php
  session_start();
  require '../BackEnd/pages/php/function.php';
  $tips = query("SELECT * FROM artikel LIMIT 3");
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
          <li class="nav-item active"><a href=" #hihi" class="nav-link"> Beranda</a></li>
          <li class="nav-item active"><a href=" #huhu" class="nav-link"> Departemen</a></li>
          <li class="nav-item active"><a href=" #haha" class="nav-link"> Kontak</a></li>
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
    
    <div id="hihi" class="hero-wrap" style="background-image: url('images/background.jpg');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
		<div class="col-md-8 ftco-animate text-center">
            <h1 class="mb-4">"The most valuable thing is your Health"</h1>
		</div>
        </div>
      </div>
    </div>

 <section id="huhu" class="ftco-services">
      <div class="container">
        <div class="row no-gutters">
          <div class="col-md-4 ftco-animate py-5 nav-link-wrap">
            <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
              <a class="nav-link px-4 active" id="v-pills-master-tab" data-toggle="pill" href="#v-pills-master" role="tab" aria-controls="v-pills-master" aria-selected="true"><span class="mr-3 flaticon-tooth"></span> Kesehatan Gigi</a>
			  
              <a class="nav-link px-4" id="v-pills-sea-tab" data-toggle="pill" href="#v-pills-sea" role="tab" aria-controls="v-pills-sea" aria-selected="false"><span class="mr-3 flaticon-cardiogram"></span> Fisioterapi</a>

              <a class="nav-link px-4" id="v-pills-spa-tab" data-toggle="pill" href="#v-pills-spa" role="tab" aria-controls="v-pills-spa" aria-selected="false"><span class="mr-3 flaticon-ambulance"></span> Umum</a>
            </div>
          </div>
          <div  class="col-md-8 ftco-animate p-4 p-md-5 d-flex align-items-center">
            
            <div class="tab-content pl-md-5" id="v-pills-tabContent">

              <div class="tab-pane fade show active py-5" id="v-pills-master" role="tabpanel" aria-labelledby="v-pills-master-tab">
                <span class="icon mb-3 d-block flaticon-tooth"></span>
                <h2 class="mb-4">Departemen Gigi</h2>
				<div style='text-align:justify;'>
                <p>Sakit gigi adalah kondisi ketika muncul rasa nyeri di dalam atau sekitar gigi dan rahang. Tingkat keparahan nyeri tersebut bisa bervariasi, mulai dari ringan hingga parah.</p>
                <p>Nyeri sakit gigi bisa terasa secara terus-menerus sepanjang hari atau bisa muncul dan hilang secara berulang-ulang tanpa menentu.</p>
                </div>
				<p><a href="dental.php" class="btn btn-primary">Selengkapnya</a></p>
              </div>

              <div class="tab-pane fade py-5" id="v-pills-sea" role="tabpanel" aria-labelledby="v-pills-sea-tab">
                <span class="icon mb-3 d-block flaticon-cardiogram"></span>
                <h2 class="mb-4"> Departemen Fisioterapi</h2>
				<div style='text-align:justify;'>
                <p>&nbsp; &nbsp; &nbsp; Fisioterapi adalah perawatan yang dilakukan untuk membantu mengembalikan fungsi dan gerakan bagian tubuh seseorang akibat luka, sakit, atau hilangnya kemampuan tubuh.</p>
                <p>Selain itu, terapi ini juga bisa dilakukan untuk mengurangi risiko terluka atau sakit di kemudian hari. Perawatan ini berupa gerakan, latihan, terapi manual, edukasi dan saran.</p>
                </div>
			    <p><a href="physiotherapy.php" class="btn btn-primary">Selengkapnya</a></p>
              </div>

              <div class="tab-pane fade py-5" id="v-pills-spa" role="tabpanel" aria-labelledby="v-pills-spa-tab">
                <span class="icon mb-3 d-block flaticon-ambulance"></span>
                <h2 class="mb-4"> Departemen Umum</h2>
                <p>Penyakit adalah suatu keadaan abnormal dari tubuh atau pikiran yang menyebabkan ketidaknyamanan, disfungsi atau kesukaran terhadap orang yang dipengaruhinya. Untuk menyembuhkan penyakit, orang-orang biasa berkonsultasi dengan seorang dokter.</p>
                <p><a href="general.php" class="btn btn-primary">Selengkapnya</a></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section">
      <div class="container">
        <div class="row">
        	<div class="col-md-9 ftco-animate">
        		<h4>Tips Seputar Kesehatan</h4>
        		<p>Kesehatan adalah keadaan sejahtera dari badan, jiwa, dan sosial yang memungkinkan setiap orang hidup produktif secara sosial, dan ekonomis.</p>
        	</div>
        </div>
      </div>
    </section>
      
    <section class="ftco-section-2 img" style="background-image: url(images/bg_3.jpg);">
    	<div class="container">
    		<div class="row d-md-flex justify-content-end">
    			<div class="col-md-6">
    				<div class="row">
    					<div class="col-md-12">
                            <?php foreach ($tips as $row) : ?>
                            <?php echo
    						    "<a href='tips.php?id=$row[id]' class='services-wrap ftco-animate'>" ?>
    							<div class="icon d-flex justify-content-center align-items-center">
    								<span class="ion-ios-arrow-back"></span>
    								<span class="ion-ios-arrow-forward"></span>
    							</div>
                                <input type="hidden" value="<?php echo $row['id'];?>">
    							<h2><?php echo $row['judul'];?></h2>
    						<?php "</a>" ?>
                            <?php endforeach; ?>
    						<a href="tips_kesehatan.php" class="services-wrap ftco-animate">
    							<div class="icon d-flex justify-content-center align-items-center">
    								<span class="ion-ios-arrow-back"></span>
    								<span class="ion-ios-arrow-forward"></span>
    							</div>
    							<h2>Selengkapnya Seputar Tips Kesehatan</h2>
                                <p>Hal Terpenting Merupakan Kesehatan Anda</p>
    						</a>
    					</div>
    				</div>
    			</div>
    		</div>
    	</div>
    </section>

    <section class="ftco-section">
      <div class="container">
        <div class="row">
        	<div class="col-md-9 ftco-animate">
        		<h4>Audrey Hepburn</h4>
        		<p>“Air adalah kehidupan, dan air bersih berarti kesehatan” </p>
        	</div>
        </div>
      </div>
    </section>
	
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