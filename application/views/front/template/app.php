<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>SMAN 2 Cibinong</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="<?= base_url(); ?>assets2/img/logo.png" rel="icon">
  <link href="<?= base_url(); ?>assets2/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">


  <!-- Bootstrap CSS File -->
  <link href="<?= base_url(); ?>assets2/lib/bootstrap/css/bootstrap.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="<?= base_url(); ?>assets2/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="<?= base_url(); ?>assets2/lib/animate/animate.min.css" rel="stylesheet">
  <link href="<?= base_url(); ?>assets2/lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="<?= base_url(); ?>assets2/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="<?= base_url(); ?>assets2/lib/lightbox/css/lightbox.min.css" rel="stylesheet">
  <link href="<?= base_url(); ?>assets2/css/style_loading.css" rel="stylesheet">

  <?php 
    if (current_url()==base_url()) {
      echo "<link href=".'"'."".base_url()."assets2/css/style_head_foots.css".'"'." rel=".'"'."stylesheet".'"'.">
      ";
    }
    else {
      echo "<link href=".'"'."".base_url()."assets2/css/style_head_foot.css".'"'." rel=".'"'."stylesheet".'"'.">
      ";
    }
  ?>

  <!-- Main Stylesheet File -->
 

  <!-- CSS for this page -->
  <?php echo $css; ?>

  <!-- Slider CSS File -->

  <!-- <link rel="stylesheet" href="css/owl.theme.default.css">
  <link rel="stylesheet" href="css/owl.carousel.css"> -->

  <!-- Animated CSS File -->
  <!--  <link rel="stylesheet" href="css/animate.min.css"> -->

  <!-- Font Awesome CSS File -->
  <!-- <link rel="stylesheet" href="css/fontawesome-all.min.css"> -->

  <!-- =======================================================
    Theme Name: BizPage
    Theme URL: https://bootstrapmade.com/bizpage-bootstrap-business-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->
</head>

<body>
  <!-- =====================================
      ==== Start Loading -->

  <div class="loading">
    <div class="text-center middle">
      <div class="lds-ellipsis">
        <div></div>
        <div></div>
        <div></div>
        <div></div>
      </div>
    </div>
  </div>

  <!-- End Loading ====
      ======================================= -->
  <!--==========================
    Header
  ============================-->
  <header id="header">
    <div class="container-fluid">

      <div id="logo" class="pull-left">
        <!-- <h1><a href="#intro" class="scrollto">BizPage</a></h1> -->
        <!-- Uncomment below if you prefer to use an image logo -->
        <a class="logo" href="#intro"><img src="<?= base_url(); ?>assets2/img/logo jawa barat.png" alt="logo" title="" /></a>
        <a class="logo" href="#intro"><img src="<?= base_url(); ?>assets2/img/logo.png" alt="logo" title="" /></a>
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-active"><a href="<?= base_url(); ?>">Home</a></li>
          <li class="menu-has-children"><a href="#" data-scroll-nav="1">Profil</a>
            <ul>
              <li><a href="#">Sambutan Kepala Sekolah</a></li>
              <li><a href="#">Sejarah</a></li>
              <li><a href="#">Visi dan Misi</a></li>
              <li><a href="#">Tujuan</a></li>
              <li><a href="#">Mars Sekolah</a></li>
              <li><a href="#">Struktur Organisasi</a></li>
              <li><a href="<?php echo base_url();?>guru">Staff dan Guru</a></li>
              <li><a href="<?php echo base_url();?>fasilitas">Fasilitas</a></li>
            </ul>
          </li>
          
          <li class="menu-has-children"><a href="#" data-scroll-nav="2">Berita</a>
            <ul>
              <?php
              $data = $this->model_dinamic->getData('tb_kat_artikel');
              foreach ($data as $key) { ?>
                <li><a href="<?= base_url('berita/kategori/'); ?><?php echo $key->nama_kat_artikel; ?>"><?php echo $key->nama_kat_artikel; ?></a></li>
              <?php } ?>
              <li><a href="<?= base_url('berita'); ?>">Semua berita</a></li>
            </ul>
            <!-- <ul>
              <li><a href="<?= base_url('berita/akademik'); ?>">Akademik</a></li>
              <li><a href="<?= base_url('berita/nonakademik'); ?>">Non-Akademik</a></li>
              <li><a href="<?= base_url('berita/umum'); ?>">Umum</a></li>
              <li><a href="<?= base_url('berita/beasiswa'); ?>">Beasiswa</a></li>
            </ul> -->
          </li>
          <li><a href="<?= base_url('galeri'); ?>">Galeri</a></li>
          <li><a href="#" data-scroll-nav="4">Kerjasama</a></li>
          <li class="menu-has-children"><a href="#">Siswa</a>
            <ul>
              <li class="menu-has-children"><a href="#">Organisasi</a>
                <ul>
                  <li class="menu-has-children"><a href="#">Olahraga</a>
                    <ul>
                      <li><a href="#">Futsal</a></li>
                      <li><a href="#">Karate</a></li>
                      <li><a href="#">Taekwondo</a></li>
                      <li><a href="#"></a></li>
                    </ul>
                  </li>
                  <li><a href="#">OSIS</a></li>
                  <li><a href="#">ROHIS</a></li>
                  <li><a href="#">PRAMUKA</a></li>
                  <li><a href="#">TIFAN</a></li>
                  <li><a href="#">Paduan Suara</a></li>
                  <li><a href="#">SFC</a></li>
                  <li><a href="#">SCC</a></li>
                  <li><a href="#">Drama/Teater</a></li>
                  <li><a href="#">Arumba/Angklung</a></li>
                  <li><a href="#">SJC</a></li>
                  <li><a href="#">Mading</a></li>
                </ul>
              </li>
              <li><a href="#">Karya Cipta</a></li>
              <li><a href="#">Tata Tertib</a></li>
              <li><a href="#">Aturan Akademik</a></li>
            </ul>
          </li>
          <li class="menu-has-children"><a href="#" data-scroll-nav="5">Kontak</a>
            <ul>
              <li><a href="#">Kontak Kami</a></li>
              <li><a href="#">Lokasi Sekolah</a></li>
            </ul>
          </li>
          <!-- <li><a href="#contact">Contact</a></li> -->
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->

  <?php $this->load->view($page) ?>

  <!--==========================
    Footer
  ============================-->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-4 col-md-8 footer-info">
            <h3>SMAVO</h3>
            <p>SMAVO atau SMA Negeri 2 Cibinong, berdiri tahun 1994 berletak di Jl. Karadenan No. 05 Cibinong Kabupaten Bogor 16913- Jawa Barat Indonesia dan hingga kini sekolah ini terus melakukan perkembangan dibidang akademik dan non-akademik untuk menunjang kebutuhan pendidikan bagi seluruh warga Indonesia</p>
          </div>

          <div class="col-lg-4 col-md-8 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="ion-ios-arrow-right"></i> <a href="#">Home</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="#">About us</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="#">Services</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-8 footer-contact">
            <h4>Kontak Kami</h4>
            <p>
              Jl. Karadenan No. 05 Cibinong <br>
              Kabupaten Bogor 16913-Jawa Barat<br>
              Indonesia <br>
              <strong>Telp: </strong> +62 251 8654347<br>
              <strong>Email:</strong> info@sman2cibinong.sch.id<br>
            </p>

            <div class="social-links">
              <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
              <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
              <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
              <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
              <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
            </div>

          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright 2020 <a href="<?php echo base_url();?>">SMA Negeri 2 Cibinong</a> Theme by : <strong>BizPage</strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!--
          All the links in the footer should remain intact.
          You can delete the links only if you purchased the pro version.
          Licensing information: https://bootstrapmade.com/license/
          Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=BizPage
        -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- #footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <!-- Uncomment below i you want to use a preloader -->
  <!-- <div id="preloader"></div> -->

  <!-- JavaScript Libraries -->
  <script src="<?= base_url(); ?>assets2/lib/jquery/jquery.min.js"></script>
  <script src="<?= base_url(); ?>assets2/lib/jquery/jquery-migrate.min.js"></script>
  <script src="<?= base_url(); ?>assets2/lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?= base_url(); ?>assets2/lib/easing/easing.min.js"></script>
  <script src="<?= base_url(); ?>assets2/lib/superfish/hoverIntent.js"></script>
  <script src="<?= base_url(); ?>assets2/lib/superfish/superfish.min.js"></script>
  <script src="<?= base_url(); ?>assets2/lib/wow/wow.min.js"></script>
  <script src="<?= base_url(); ?>assets2/lib/waypoints/waypoints.min.js"></script>
  <script src="<?= base_url(); ?>assets2/lib/counterup/counterup.min.js"></script>
  <script src="<?= base_url(); ?>assets2/lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="<?= base_url(); ?>assets2/lib/isotope/isotope.pkgd.min.js"></script>
  <script src="<?= base_url(); ?>assets2/lib/lightbox/js/lightbox.min.js"></script>
  <script src="<?= base_url(); ?>assets2/lib/touchSwipe/jquery.touchSwipe.min.js"></script>

  <!-- Contact Form JavaScript File -->

  <!-- Template Main Javascript File -->
  
  <script src="<?php echo base_url()?>assets2/js/jquery.stellar.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url()?>assets2/js/scrollIt.min.js"></script>
  
  <script src="<?php echo base_url()?>assets2/js/loading.js"></script>

  <?php echo $js;?>
  
</body>

</html>