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
  if (current_url() == base_url()) {
    echo "<link href=" . '"' . "" . base_url() . "assets2/css/style_head_foots.css" . '"' . " rel=" . '"' . "stylesheet" . '"' . ">
      ";
  } else {
    echo "<link href=" . '"' . "" . base_url() . "assets2/css/style_head_foots.css" . '"' . " rel=" . '"' . "stylesheet" . '"' . ">
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

  <!-- <div class="loading">
    <div class="text-center middle">
      <div class="lds-ellipsis">
        <div></div>
        <div></div>
        <div></div>
        <div></div>
      </div>
    </div>
  </div> -->

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
        <a class="logo" href="<?= base_url(); ?>"><img src="<?= base_url(); ?>assets2/img/logo jawa barat.png" alt="logo" title="" /></a>
        <a class="logo" href="<?= base_url(); ?>"><img src="<?= base_url(); ?>assets2/img/logo.png" alt="logo" title="" /></a>
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-active"><a href="<?= base_url(); ?>">Beranda</a></li>
          <li class="menu-has-children"><a href="#" data-scroll-nav="1">Profil</a>
            <ul>
              <li><a href="<?php echo base_url(); ?>sambutan">Sambutan Kepala Sekolah</a></li>
              <li><a href="<?php echo base_url(); ?>sejarah">Sejarah</a></li>
              <li><a href="<?php echo base_url(); ?>vismis">Visi dan Misi</a></li>
              <li><a href="<?php echo base_url(); ?>tujuan">Tujuan</a></li>
              <li><a href="<?php echo base_url(); ?>mars">Mars Sekolah</a></li>
              <li><a href="<?php echo base_url(); ?>struktur">Struktur Organisasi</a></li>
              <li><a href="<?php echo base_url(); ?>guru">Staff dan Guru</a></li>
              <li><a href="<?php echo base_url(); ?>fasilitas">Fasilitas</a></li>
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
          <?php if ( current_url() == base_url() ) :?>
          <li><a href="#" data-scroll-nav="4">Kerjasama</a></li>
          <?php endif; ?>
          <li class="menu-has-children"><a href="#">Siswa</a>
            <ul>
            <li><a href="<?= base_url('kesiswaan/kategori/Organisasi'); ?>">Organisasi</a></li>
              <?php
              $data = $this->model_dinamic->getData('tb_kat_siswa');
              foreach ($data as $key) { ?>
                <li><a href="<?= base_url('kesiswaan/kategori/'); ?><?php echo $key->nama_kat_siswa; ?>"><?php echo $key->nama_kat_siswa; ?></a></li>
              <?php } ?>
            </ul>
          </li>
          <li class="menu-has-children"><a href="#" data-scroll-nav="5">Kontak</a>
            <ul>
              <li><a href="<?= base_url('kontak/kontak-kami'); ?>">Kontak Kami</a></li>
              <li><a href="<?= base_url('kontak/lokasi-sekolah'); ?>">Lokasi Sekolah</a></li>
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
            <h4>Link Terkait</h4>
            <ul>
              <li><i class="ion-ios-arrow-right"></i> <a href="<?= base_url(); ?>">Beranda</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="<?= base_url('sejarah'); ?>">Sejarah</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="<?= base_url('berita'); ?>">Berita</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="<?= base_url('kesiswaan/kategori/Karya%20Cipta'); ?>">Karya Cipta</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="<?= base_url('kontak/kontak-kami'); ?>">Kontak</a></li>
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
              <a href="https://twitter.com/officialsmavo" class="twitter" data-toggle="tooltip" data-placement="bottom" title="<?php echo "Twitter"; ?>"><i class="fa fa-twitter"></i></a>
              <a href="https://www.facebook.com/Sman2Cibinong" class="facebook" data-toggle="tooltip" data-placement="bottom" title="<?php echo "Facebook"; ?>"><i class="fa fa-facebook"></i></a>
              <a href="https://instagram.com/" class="instagram" data-toggle="tooltip" data-placement="bottom" title="<?php echo "Instagram"; ?>"><i class="fa fa-instagram"></i></a>
              <a href="https://plus.google.com/u/0/107622506577547252711" class="google-plus" data-toggle="tooltip" data-placement="bottom" title="<?php echo "Google"; ?>"><i class="fa fa-google-plus"></i></a>
              <a href="https://www.youtube.com/channel/UCR64-kTszWp1CG1axMjxjMA" class="youtube" data-toggle="tooltip" data-placement="bottom" title="<?php echo "Youtube"; ?>"><i class="fa fa-youtube"></i></a>
            </div>

          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <?php echo date('Y') ?> <a href="<?php echo base_url(); ?>">SMA Negeri 2 Cibinong</a>. All Rights Reserved
      </div>
      <div class="credits">
        <!--
          All the links in the footer should remain intact.
          You can delete the links only if you purchased the pro version.
          Licensing information: https://bootstrapmade.com/license/
          Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=BizPage
        -->
        <!-- Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a> -->
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

  <script src="<?php echo base_url() ?>assets2/js/jquery.stellar.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url() ?>assets2/js/scrollIt.min.js"></script>

  <script src="<?php echo base_url() ?>assets2/js/loading.js"></script>

  <?php echo $js; ?>
<?php if ( current_url() == base_url() )  :?>
  <script type="text/javascript">
    var get_data = '<?php echo $get_data; ?>';
    var backend_url = '<?php echo base_url(); ?>';

    $(document).ready(function() {
      
      $('.date-picker').datepicker();
      $('#calendarIO').fullCalendar({
        header: {
          left: 'prev,next today',
          center: 'title',
          right: 'month,basicWeek,basicDay'
        },
        height: 650,
        defaultDate: moment().format('YYYY-MM-DD'),
        // editable: true,
        eventLimit: true, // allow "more" link when too many events
        // selectable: true,
        selectHelper: true,
        // select: function(start, end) {
        //   $('#create_modal input[name=start_date]').val(moment(start).format('YYYY-MM-DD'));
        //   $('#create_modal input[name=end_date]').val(moment(end).format('YYYY-MM-DD'));
        //   $('#create_modal').modal('show');
        //   save();
        //   $('#calendarIO').fullCalendar('unselect');
        // },
        // eventDrop: function(event, delta, revertFunc) { // si changement de position
        //   editDropResize(event);
        // },
        // eventResize: function(event, dayDelta, minuteDelta, revertFunc) { // si changement de longueur
        //   editDropResize(event);
        // },
        eventClick: function(event, element) {
          // alert ("nah ini");
          deteil(event);
          // editData(event);
          // deleteData(event);
        },
        events: JSON.parse(get_data)
      });
    });

    function deteil(event) {
      console.log(event);
      $('#create_modal input[name=calendar_id]').val(event.id);
      $('#create_modal input[name=start_date]').val(moment(event.start).format('YYYY-MM-DD'));
      $('#create_modal input[name=end_date]').val(moment(event.end).add(-1, 'days').format('YYYY-MM-DD'));
      $('#create_modal input[name=title]').val(event.title);
      $('#create_modal input[name=description]').val(event.description);
      $('#create_modal select[name=color]').val(event.color);
      $('#create_modal .delete_calendar').show();
      $('#create_modal').modal('show');
    }
  </script>
<?php endif;?>

</body>

</html>