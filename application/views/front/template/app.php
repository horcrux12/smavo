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

  <!-- Main Stylesheet File -->
  <link href="<?= base_url(); ?>assets2/css/style.css" rel="stylesheet">

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
          <li class="menu-active"><a href="<?= base_url(); ?>home">Home</a></li>
          <li class="menu-has-children"><a href="#" data-scroll-nav="1">Profil</a>
            <ul>
              <li><a href="#">Sambutan Kepala Sekolah</a></li>
              <li><a href="#">Sejarah</a></li>
              <li><a href="#">Visi dan Misi</a></li>
              <li><a href="#">Tujuan</a></li>
              <li><a href="#">Mars Sekolah</a></li>
              <li><a href="#">Struktur Organisasi</a></li>
              <li><a href="#">Staff dan Guru</a></li>
              <li><a href="#">Fasilitas</a></li>
            </ul>
          </li>
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

          <div class="col-lg-3 col-md-6 footer-info">
            <h3>BizPage</h3>
            <p>Cras fermentum odio eu feugiat lide par naso tierra. Justo eget nada terra videa magna derita valies darta donna mare fermentum iaculis eu non diam phasellus. Scelerisque felis imperdiet proin fermentum leo. Amet volutpat consequat mauris nunc congue.</p>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="ion-ios-arrow-right"></i> <a href="#">Home</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="#">About us</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="#">Services</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-contact">
            <h4>Contact Us</h4>
            <p>
              A108 Adam Street <br>
              New York, NY 535022<br>
              United States <br>
              <strong>Phone:</strong> +1 5589 55488 55<br>
              <strong>Email:</strong> info@example.com<br>
            </p>

            <div class="social-links">
              <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
              <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
              <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
              <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
              <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
            </div>

          </div>

          <div class="col-lg-3 col-md-6 footer-newsletter">
            <h4>Our Newsletter</h4>
            <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna veniam enim veniam illum dolore legam minim quorum culpa amet magna export quem marada parida nodela caramase seza.</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>
          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong>BizPage</strong>. All Rights Reserved
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
  <script src="<?= base_url(); ?>assets2/contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="<?= base_url(); ?>assets2/js/main.js"></script>


  <!-- JS for this page -->
  <script src="<?= base_url(); ?>assets2/js/scripts.js"></script>
  <script src="<?= base_url(); ?>assets2/js/animated.headline.js"></script>
  <script src="<?= base_url(); ?>assets2/js/jquery.counterup.min.js"></script>

  <!-- Scroll To -->
  <script type="text/javascript" src="<?= base_url(); ?>assets2/js/scrollIt.min.js"></script>

  <!-- Typed JS -->
  <script type="text/javascript" src="<?= base_url(); ?>assets2/lib/typed/typed.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.8/typed.min.js"></script>

  <script type="text/javascript">
    var typed = new Typed('#typed1', {
      strings: ["SMAN 2 Cibinong", "Berakhlak Mulia", "Mandiri", "Berwawasan Lingkungan", "Unggul dalam IPTEKS"],
      loop: true,
      typeSpeed: 40,
      backSpeed: 60,
      startDelay: 1000,
      backDelay: 2000
    });
  </script>

  <script>
    $(function() {
      $('[data-toggle="tooltip"]').tooltip()
    })
  </script>

  <!-- Calendar -->
  <script src="https://cdn.jsdelivr.net/npm/moment@2.22.2/moment.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/fullcalendar@3.9.0/dist/fullcalendar.min.js"></script>
  <script src="<?= base_url(); ?>assets2/js/fullcalendar-init.js"></script>
  <script src="<?= base_url(); ?>assets2/js/iso.js"></script>
  <!-- <script>
    $(document).ready(function() {

      var itemSelector = '.portfolio-item';

      var $container = $('.portfolio-container').isotope({
        itemSelector: itemSelector,
        masonry: {
          columnWidth: itemSelector,
          isFitWidth: true
        }
      });

      //Ascending order
      var responsiveIsotope = [
        [480, 4],
        [720, 6]
      ];

      var itemsPerPageDefault = 5;
      var itemsPerPage = defineItemsPerPage();
      var currentNumberPages = 1;
      var currentPage = 1;
      var currentFilter = '*';
      var filterAtribute = 'data-filter';
      var pageAtribute = 'data-page';
      var pagerClass = 'isotope-pager';

      function changeFilter(selector) {
        $container.isotope({
          filter: selector
        });
      }


      function goToPage(n) {
        currentPage = n;

        var selector = itemSelector;
        selector += (currentFilter != '*') ? '[' + filterAtribute + '="' + currentFilter + '"]' : '';
        selector += '[' + pageAtribute + '="' + currentPage + '"]';

        changeFilter(selector);
      }

      function defineItemsPerPage() {
        var pages = itemsPerPageDefault;

        for (var i = 0; i < responsiveIsotope.length; i++) {
          if ($(window).width() <= responsiveIsotope[i][0]) {
            pages = responsiveIsotope[i][1];
            break;
          }
        }

        return pages;
      }

      function setPagination() {

        var SettingsPagesOnItems = function() {

          var itemsLength = $container.children(itemSelector).length;

          var pages = Math.ceil(itemsLength / itemsPerPage);
          var item = 1;
          var page = 1;
          var selector = itemSelector;
          selector += (currentFilter != '*') ? '[' + filterAtribute + '="' + currentFilter + '"]' : '';

          $container.children(selector).each(function() {
            if (item > itemsPerPage) {
              page++;
              item = 1;
            }
            $(this).attr(pageAtribute, page);
            item++;
          });

          currentNumberPages = page;

        }();

        var CreatePagers = function() {

          var $isotopePager = ($('.' + pagerClass).length == 0) ? $('<div class="' + pagerClass + '"></div>') : $('.' + pagerClass);

          $isotopePager.html('');

          for (var i = 0; i < currentNumberPages; i++) {
            var $pager = $('<a href="javascript:void(0);" class="pager" ' + pageAtribute + '="' + (i + 1) + '"></a>');
            $pager.html(i + 1);

            $pager.click(function() {
              var page = $(this).eq(0).attr(pageAtribute);
              goToPage(page);
            });

            $pager.appendTo($isotopePager);
          }

          $container.after($isotopePager);

        }();

      }

      setPagination();
      goToPage(1);

      //Adicionando Event de Click para as categorias
      $('#portfolio-flters li').click(function() {
        $("#portfolio-flters li").removeClass('filter-active');
        $(this).addClass('filter-active');
        var filter = $(this).attr(filterAtribute);
        currentFilter = filter;

        setPagination();
        goToPage(1);


      });

      //Evento Responsivo
      $(window).resize(function() {
        itemsPerPage = defineItemsPerPage();
        setPagination();
        goToPage(1);
      });
    });
  </script> -->

</body>

</html>