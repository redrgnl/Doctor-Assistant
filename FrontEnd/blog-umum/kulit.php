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
            <h1 class="mb-3 bread">Penyakit Kulit</h1>
          </div>
        </div>
      </div>
    </div>
	
	<section class="ftco-section-2">
      <div class="container-fluid d-flex">
        <div class="section-2-blocks-wrapper row no-gutters">
          <div class="img col-sm-12 col-lg-6" style="background-image: url('../blog-umum/kulit.jpg');">
          </div>
          <div class="text col-lg-6 ftco-animate">
            <div class="text-inner align-self-start">
              
              <h3>Macam Macam Penyakit Kulit – Gejala, Penyebab dan Pengobatannya</h3>
              <p>Kulit menjadi bagian yang paling besar bagi tubuh manusia. Kulit menutupi semua bagian organ tubuh, sehingga penampilan menjadi lebih menarik. Hal itulah ketika ada beberapa bagian kulit yang terserang penyakit, maka bisa menyebabkan seseorang menjadi tidak percaya diri. Ada beberapa jenis penyakit kulit yang bisa mudah disembuhkan, namun ada beberapa jenis penyakit kulit yang sulit untuk disembuhkan.</p>

              <p>Kulit memiliki peranan yang sangat penting, tidak hanya untuk penampilan tapi juga untuk membantu dalam mengatur suhu tubuh normal. Salah satu kondisi kulit yang sulit untuk diperkirakan adalah ketika kulit mengalami iritasi dan menyebabkan ruam kemerahan.</p>
            </div>
          </div>
        </div>
      </div>
    </section>
	
    <section class="ftco-section ftco-degree-bg">
      <div class="container">
        <div class="row">
          <div class="col-md-8 ftco-animate">
            <h2 class="mb-3">1. Jerawat</h2>
			<p>Jerawat adalah salah satu masalah kulit yang disebabkan karena ada gangguan pada bagian kelenjar kulit. Kelenjar kulit terhubung secara langsung dengan bagian pori-pori kulit. Kelenjar minyak yang ada di bagian bawah kulit dapat terkena infeksi dari kotoran luar yang masuk lewat pori-pori, sel-sel kulit mati dan bakteri atau virus. Akhirnya jerawat akan terbentuk pada bagian pori-pori dan membuat penampilan menjadi kurang menarik.</p>
			<h5>Pencegahan</h5>
			<p>A. Bersihkan wajah secara teratur pada pagi dan sore hari. Bersihkan sisa riasan wajah dan gunakan produk pelembab kulit yang sesuai dengan tipe kulit wajah.</p>
			<p>B. Hindari terlalu banyak mengkonsumsi berbagai jenis makanan yang digoreng, makanan kemasan dan makanan yang terlalu banyak mengandung zat aditif pada makanan.</p>
			<p>C. Minum air putih secara teratur setiap hari juga bisa membantu meningkatkan proses metabolisme dan mencegah jerawat.</p>
			<h5>Pengobatan</h5>
			<p>A. Gunakan pasta gigi yang mengandung bahan bahan triclosan dan hidrogen peroksida. Terapkan pasta gigi pada jerawat saat malam hari dan bersihkan pada pagi harinya.</p>
			<p>B. Gunakan masker yang dibuat dari jus tomat dan madu. Campur pasta tomat dan madu dan gunakan seperti memakai masker.</p>
			<p>C. Gunakan madu dan perasan jeruk lemon yang bisa membuat jerawat cepat kering.</p>
			<h2 class="mb-3">2. Eksim</h2>
			<p>Eksim adalah jenis penyakit kulit yang bisa terjadi dalam waktu yang sangat panjang. Bahkan banyak penderita eksim yang merasa putus asa karena eksim sangat mengganggu aktivitas dan penampilan. Eksim ditunjukkan dengan benjolan kecil dan kemudian akan berkembang menjadi ruam. Pada tahap yang lebih parah, maka eksim bisa menyebabkan infeksi. Eksim biasanya menyerang beberapa bagian tubuh seperti lutut, siku, tangan, kaki dan bisa menyebar jika sudah menjadi eksim lanjut.</p>
			<h5>Penyebab</h5>
			<p>Penyebab eksim secara khusus memang tidak pernah diketahui. Namun penyebab alergi kulit yang mengalami eksim, biasanya sensitif dengan jenis makanan tertentu karena reaksi alergi. Selain itu, banyak penderita eksim yang sangat peka dengan tekanan dan stres. Infeksi bakteri tertentu juga bisa menyebabkan eksim menjadi lebih parah.</p>
			<h5>Gejala</h5>
			<p>Gejala awal eksim biasanya hanya berupa rasa gatal yang kemudian berkembang menjadi ruam. Ruam kemerahan akan menjadi bengkak dan apabila di garuk maka bisa menyebabkan infeksi bakteri dari luar. Jenis bakteri yang paling sering ditemukan adalah bakteri staphiococcus dan streptokokus.</p>
			<h5>Cara Perawatan</h5>
			<p>Eksim biasanya diobati dengan beberapa jenis obat salep kulit yang mengandung belerang atau bahan khusus. Bedak untuk eksim memang efektif namun hanya bisa digunakan untuk gejala awal saja. Sedangkan eksim yang sudah lanjut tetap membutuhkan beberapa obat dari dalam yang mengandung antibiotik. Eksim dapat muncul dan berkembang terus karena itu perawatan eksim membutuhkan waktu yang lebih lama.</p>
			<h2 class="mb-3">3. Panu</h2>
			<p>Panu adalah jenis penyakit yang sangat umum dan bisa terjadi pada semua orang. Panu akan membuat seseorang merasa sangat malu karena bercak putih yang akan terus menyebar. Panu termasuk macam-macam penyakit kulit yang disebabkan karena infeksi jamur yang menyerang pada bagian pigmen kulit. Infeksi panu yang terjadi akan menyebabkan bercak putih yang akan terlihat karena berbeda dengan bagian kulit yang lain.</p>
			<h5>Gejala</h5>
			<p>Gejala penyakit panu biasanya akan menyebabkan beberapa bagian kulit terlihat lebih putih. Selain itu, ada rasa gatal yang akan terasa pada bagian punggung, leher, lengan atas dan dada. Panu lebih sering menyerang kulit yang mengalami perubahan terhadap cuaca panas, kulit yang terlalu berminyak dan orang dengan kekebalan tubuh yang lemah.</p>
			<h5>Cara Pengobatan</h5>
			<p>Panu dapat diobati dengan salep atau krim untuk kulit yang mengandung beberapa bahan seperti klotrimazol, belerang, mikonazol dan selenium sulfida. Selain itu, biasanya panu juga diobati secara tradisional dengan memakai lengkuas atau jahe yang dioleskan pada bagian panu.</p>
			<h5>Cara Mencegah</h5>
			<p>Panu memang penyakit menular apabila terjadi kontak dengan penderita yang berhubungan secara langsung seperti sabun mandi, handuk atau pakaian. Untuk mengatasi panu maka memelihara kesehatan kulit adalah langkah yang sangat tepat. Mandi secara teratur dan selalu menjaga kelembapan alami kulit.</p>
			<h2 class="mb-3">4. Kudis</h2>
			<p>Kudis adalah salah satu jenis penyakit kulit yang disebabkan karena serangan tungau atau kutu kecil. Jenis kutu kecil yang sering disebut dengan istilah sarcoptes scabiei. Penyakit ini akan menyebabkan bercak kemerahan pada bagian kulit tertentu. Infeksi dari kutu kecil bisa masuk ke bagian dalam kulit kemudian menghisap darah dan menyebabkan bercak kemerahan.</p>
			<p>Penyakit ini sangat mudah menular hanya dengan kontak fisik dengan penderita. Bahkan kontak langsung dengan pakaian atau perlengkapan mandi juga bisa menyebabkan penularan.</p>
			<h5>Gejala</h5>
			<p>Gejala penyakit kudis hampir sama dengan jenis penyakit kulit lain. Ada rasa gatal yang sangat kuat pada beberapa bagian kulit ketika kutu masuk ke lapisan kulit. Kemudian bekas kutu akan tumbuh benjolan kecil, lalu akan melepuh dan menyebar ke bagian kulit lain. Beberapa masalah ini biasanya banyak menyerang pada jari, sekitar pinggang, dada, lutut, dan tulang belikat.</p>
			<h5>Cara Pengobatan</h5>
			<p>Sebelum kudis berkembang menjadi penyakit yang sangat serius dan sulit untuk diobati, maka pada tahap awal bisa diobati dengan mudah. Beberapa cara yang bisa dilakukan untuk mengobati kudis adalah dengan merendam bagian kulit yang gatal dengan air dingin, memakai pelembab yang mengandung calamine. Jika kondisi sudah parah maka bisa memakai obat antibiotik dan antihistamin.</p>
			<h5>Cara Mencegah</h5>
			<p>Cara untuk mencegah kudis atau penyebaran kudis harus dilakukan dengan hati-hati. Kutu yang menyebabkan kudis mudah loncat dan berpindah kemudian menyerang orang lain. Jadi cara untuk pencegahan adalah seperti dibawah ini :</p>
			<p>A. Bersihkan semua pakaian dan isi kamar orang yang terkena penyakit kudis.</p>
			<p>B. Cuci dan rendam semua pakaian, handuk dan selimut dalam air hangat kemudian jemur dibawah sinar matahari.</p>
			<p>C. Buang semua jenis perlengkapan yang tidak terpakai dalam rumah untuk mencegah dijadikan sarang bagi kutu.</p>
			<h2 class="mb-3">5. Herpes</h2>
			<p>Herpes adalah jenis penyakit kulit yang disebabkan oleh virus. Herpes dapat menyebabkan kulit menjadi ruam. Penyakit ini sangat mengganggu karena biasanya menyebabkan sakit dan demam pada penderitanya. Penyebab penyakit herpes adalah virus varisella. Virus dapat menyerang pada bagian tulang belakang dan otak sehingga penyakit sering cepat sembuh dan kemudian muncul lagi.</p>
			<h5>Gejala</h5>
			<p>Gejala awal penyakit herpes biasanya ditandai dengan ruam atau bintik kecil pada bagian tubuh tertentu. Setelah itu, akan timbul rasa panas seperti terbakar. Jika bagian yang sakit disentuh maka bisa menyebabkan infeksi pada daerah di sekitarnya. Cairan herpes yang pecah dan gatal akan mudah menular ke orang lain dan menyebar ke bagian tubuh lain. Gejala lebih lanjut dapat menyebabkan sakit kepala, demam dan tubuh yang mudah lelah.</p>
			<h5>Cara Perawatan</h5>
			<p>Cara perawatan herpes dengan menggunakan krim khusus untuk kulit yang mengandung antibiotik. Selain itu orang yang sudah terkena infeksi lanjut sebaiknya melakukan vaksinasi untuk menambah kekebalan tubuh terhadap serangan virus varisella.</p>
			<p>Macam-macam penyakit kulit yang terjadi tidak hanya mengganggu penampilan, tapi juga bisa menyebabkan penyakit yang lebih akut. Karena itu menjaga kebersihan kulit dan membentuk kekebalan tubuh bisa dilakukan untuk mencegah semua jenis penyakit kulit yang mudah menyerang kita. Menjaga kebersihan diri, pakaian dan lingkungan akan menjauhkan kulit dari beberapa potensi infeksi virus dan bakteri penyebab penyakit kulit.</p>
			
		
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