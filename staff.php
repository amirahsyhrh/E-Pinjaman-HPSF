<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>SISTEM PINJAMAN BARANG</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link rel="icon" type="image/x-icon" href="assets/img/home2.ico" />
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Anyar - v2.0.0
  * Template URL: https://bootstrapmade.com/anyar-free-multipurpose-one-page-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
  <style>

	.center {
		
		margin-left:auto;
		margin-right:auto;
		width: 100%;
		align: center;
	}
  </style>
</head>

<body>

  <!-- ======= Top Bar ======= -->
  <div id="topbar" class="d-none d-lg-flex align-items-center fixed-top ">
    <div class="container d-flex align-items-center">
      <div class="contact-info mr-auto">
        <ul>
          <li><i class="icofont-envelope"></i><a href="mailto:contact@example.com">hpsf_webmaster@moh.gov.my</a></li>
          <li><i class="icofont-phone"></i>06-9564000</li>
          <li><i class="icofont-clock-time icofont-flip-horizontal"></i> Setiap Hari 8pagi-5petang</li>
        </ul>
      </div>
    </div>
  </div>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center">
<img src="logo2.png" alt="" class="img-fluid" width="80" height="80">

      <h1 class="logo mr-auto"><a href="#header" class="scrollto">UNIT ICT, HPSF</a></h1>
      <br><br>
      
      <!-- Uncomment below if you prefer to use an image logo -->
     	<?php
			include 'config.php';
			$id=$_GET['id'];
			$qry = "SELECT * FROM staff WHERE staff_username = '$id'";
			$qid = mysqli_query($connect,$qry);
						 ?>	
      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="#header">LAMAN UTAMA</a></li>
          <li><a href="#about">PERMOHONAN</a></li>
			<li><a href= "status.php?id=<?php echo $id ?>">STATUS PERMOHONAN</a></li>
          <li><a href="index.php">KELUAR</a></li>

        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex justify-cntent-center align-items-center">
    <div id="heroCarousel" class="container carousel carousel-fade" data-ride="carousel">

      <!-- Slide 1 -->
      <div class="carousel-item active">
        <div class="carousel-container">
         <br><br> <br><br><br><br><br><br><h2 class="animated fadeInDown">Selamat Datang</h2>
          <p class="animated fadeInUp">Sebelum membuat sebarang permohonan, anda hendaklah membaca panduan untuk membuat permohonan</p>
          <a href="calendar.php?id=<?php echo $id ?>" class="btn-get-started animated fadeInUp scrollto">Klik Untuk Memohon!</a>
		<a href="status.php?id=<?php echo $id ?>" class="btn-get-started animated fadeInUp scrollto">Klik Untuk Semak Status Permohonan!</a><br><br><br>
        </div>
      </div>
		
    </div>
  </section><!-- End Hero -->

  <main id="main">
<br><br><br>
    <!-- ======= Icon Boxes Section ======= -->
    <section id="icon-boxes" class="icon-boxes">
      <div class="container">

        <div class="row">
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up">
            <div class="icon-box">
              <div class="icon"><i class="bx bxl-dribbble"></i></div>
              <h4 class="title"><a href="">Semasa Proses Pinjaman</a></h4>
			  <ul>
              <p class="description"><li> Melengkapkan permohonan pinjaman di unit ICT ke dalam Sistem Pinjaman di Unit ICT, Hospital Muar.</li> <br><li> Permohonan pinjaman peralatan aset di Unit ICT melalui sistem hendaklah dilaksanakan sekurang-kurangnya <b>empat</b> (4) jam sebelum mengambil peralatan.</li><br><li>Permohon hendaklah menyemak dahulu kalendar semakan sebelum membuat permohonan untuk menyemak kekosongan tarikh dan waktu.</li> <br> <li> Menyemak dahulu status pemohonan sama ada diluluskan atau ditolak sebelum Tuan/Puan megambil peralatan ICT di Unit ICT.</li> <br> <li> Menyemak kelengkapan peralatan ICT yang disediakan dalam keadaan baik dan mencukupi (seperti yang dipohon). </li></p></ul>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="100">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-file"></i></div>
              <h4 class="title"><a href="">Semasa Pemulangan</a></h4>
              <ul><p class="description"><li> Memastikan peralatan ICT yang dipinjam berada dalam keadaan baik dan kehilangannya mencukupi.</li> <br>
              <li> Memaklumkan kepada pihak di Unit ICT sekiranya peralatan ICT tersebut mengalami kerosakan.</li> <br>
              <li> Membuat laporan <b> polis </b> sekiranya peralatan ICT tersebut hilang dalam simpanan. </li><br>
              <li> Membuat penggantian semula sekiranya peralatan ICT tersebut mengalami kerosakan atau kehilangan atas kecuaian pengguna. </li><br></p></ul>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="200">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-tachometer"></i></div>
              <h4 class="title"><a href="">Waktu Pinjaman dan Pemulangan</a></h4>
              <p class="description"><table border=0 width="100%">
              <tr>
              <th>Hari</th>
              <th>Pagi</th>
              <th>Petang</th>
              </tr>
			  <tr>
			  <td><br></td>
			  </tr>
              <tr>
              <td>Ahad-Rabu</td>
              <td>8.00am-1.00pm</td>
              <td>2.00pm-5.00pm</td>
              </tr>
			  <tr>
			  <td><br></td>
			  </tr>
              <tr>
              <td>Khamis</td>
              <td>8.00am-1.00pm</td>
              <td>2.00pm-3.30pm</td>
              </tr>
              </table></p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="300">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-layer"></i></div>
              <h4 class="title"><a href="">Sekiranya Tidak Dipulangkan</a></h4>
              <ul><p class="description"><li> Tuan/Puan dikehendaki memaklumkan kepada pihak di Unit ICT melalui panggilan telefon bagi permohonan pinjaman lanjutan.</li> <br>
              <li> Sekiranya melebihi masa pemulangan iaitu jam <b> 5 petang </b> , peralatan ICT tersebut perlulah disimpan di bawah seliaan tuan/puan dan menjadi tanggungjawab tuan/puan.</li> <br></p></ul>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Icon Boxes Section -->

    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2><b>Permohonan Pinjaman Barang di Unit ICT</b></h2><br>
          <h6><p>Sila periksa barang yang hendak dipinjam ketika diberikan barang dan juga sebelum memulangkan barang semula</p></h6>
          <p>Untuk pembatalan pinjaman barangan ICT, anda boleh terus hubungi staff di Unit ICT</p>
          <p>Panduan untuk memohon ada disertakan di ilustrasi di bawah</p>
		  <img src="paste1.png" width="1000" height="500" class="center">
		  </div> </img>
        <div class="row content">                  
            <a href="calendar.php?id=<?php echo $id ?>" class="btn-learn-more">Mohon Sekarang </a> 
		</div>
      </div>
    </section><!-- End About Us Section -->


  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>UNIT ICT, HPSF</span></strong>. All Rights Reserved
      </div>
      
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top"><i class="ri-arrow-up-line"></i></a>
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>