  <style>
    .owl-centered .owl-wrapper {
      display: table !important;
    }

    .owl-centered .owl-item {
      display: table-cell;
      float: none;
      vertical-align: middle;
    }

    .owl-centered .owl-item>div {
      text-align: center;
    }
  </style>
  <section id="intro" data-scroll-index="0">
    <div class="intro-container">
      <div id="introCarousel" class="carousel  slide carousel-fade" data-ride="carousel">

        <ol class="carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">

          <?php foreach ($data['slider'] as $key) { ?>
            <div class="carousel-item active">
              <div class="carousel-background"><img src=<?php echo base_url('assets/photo/slider/' . $key->foto . ''); ?>> </div>
              <div class="carousel-container">
                <div class="carousel-content">
                  <h3 class="animated fadeInLeft"><?php echo $key->judul_utama; ?></h3>
                  <h1 class="animated fadeInRight"><span><?php echo $key->sub_judul; ?></span></h1>
                  <!-- <p class="animated fadeInUp"><?php echo "" . strip_tags($key->deskripsi) . "" ?></p> -->
                  <h6 class="animated fadeInUp"><?php echo "" . ($key->deskripsi) . "" ?></h6>
                  <!-- <a href="#featured-services" class="btn-get-started scrollto animated zoomIn">Get Started</a> -->
                </div>
              </div>
            <?php } ?>
            </div>


            <!-- For Berita -->
            <?php foreach ($data['berita_limit'] as $key) { ?>
              <div class="carousel-item">
                <div class="carousel-background"><img src="<?= base_url(); ?>assets/photo/berita/<?php echo $key->foto ?>" alt=""></div>
                <div class="carousel-container">
                  <div class="carousel-content">
                    <h3 class="animated fadeInRight">Berita - SMAVO</h3>
                    <h2 class="animated fadeInLeft"><?php echo $key->judul ?></h2>
                    <p class="animated fadeInUp"><?php echo "" . strip_tags(substr($key->deskripsi, 0, 30)) . "..." ?></p>
                    <a href="<?php echo base_url() ?>berita/detail/<?php echo $key->id_berita ?>" class="btn-get-started scrollto animated zoomIn">Selengkapnya</a>
                  </div>
                </div>
              </div>
            <?php } ?>
        </div>

        <a class="carousel-control-prev" href="#introCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon ion-chevron-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>

        <a class="carousel-control-next" href="#introCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon ion-chevron-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>

      </div>
    </div>
  </section><!-- #intro -->

  <main id="main">

    <!--==========================
      Featured Services Section
    ============================-->
    <!--  -->

    <!--==========================
      About Us Section
    ============================-->
    <section id="about" class="section-bg">
      <div class="container" data-scroll-index="1">

        <?php foreach ($data['about'] as $key) { ?>
          <header class="section-header">
            <h3>SMAN 2 Cibinong</h3>
            <p><?php $a = str_replace("&nbsp", " ", $key->deskripsi);
                echo $a; ?></p>
          </header>

          <div class="row about-cols">

            <div class="col-md-4 wow fadeInUp">
              <div class="about-col">
                <div class="icon"><i class="ion-ios-paperplane-outline"></i></div>
                <h2 class="title"><a href="javascript:void(0);">Visi</a></h2>
                <p>
                  <?php echo $key->visi ?>
                </p>
              </div>
            </div>

            <div class="col-md-4 wow fadeInUp" data-wow-delay="0.1s">
              <div class="about-col">
                <div class="icon"><i class="ion-ios-pie-outline"></i></div>
                <h2 class="title"><a href="javascript:void(0);">Misi</a></h2>
                <p>
                  <?php echo $key->misi ?>
                </p>
              </div>
            </div>

            <div class="col-md-4 wow fadeInUp" data-wow-delay="0.2s">
              <div class="about-col">
                <div class="icon"><i class="ion-ios-list-outline"></i></div>
                <h2 class="title"><a href="javascript:void(0);">Tujuan</a></h2>
                <p>
                  <?php echo $key->plan ?>
                </p>
              </div>
            </div>

          </div>

      </div>
    <?php } ?>
    </section><!-- #about -->

    <!--==========================
      Services Section
    ============================-->
    <section id="services">
      <div class="container">

        <?php foreach ($data['sambutan'] as $key) { ?>
          <header class="section-header wow fadeInUp">
            <h3>Sambutan Kepala Sekolah</h3>
          </header>

          <div class="row">
            <div class="col-lg-12">
              <div class="row">
                <div class="col-lg-3 col-md-4 box wow bounceInUp gambar" data-wow-duration="1.4s">
                  <img src=<?php echo base_url('assets/photo/sambutan/' . $key->foto . ''); ?> class="srv-image" alt="">
                  <h3> <?php echo $key->nama_kepsek ?> </h3>
                  <h4> Kepala Sekolah SMAN 2 Cibinong</h4>
                </div>
                <div class="col-lg-9 box wow bounceInUp" data-wow-duration="1.4s">
                  <p class="description"><?php echo $key->sambutan ?></p>
                </div>
              </div>
            </div>
          </div>
        <?php } ?>
      </div>
    </section><!-- #services -->

    <!--==========================
      Call To Action Section
    ============================-->
    <section id="call-to-action" class="wow fadeIn" style="background-image: url('<?php echo base_url()?>assets2/img/batik.jpg')">
      <div class="container text-center">
        <h3>Selamat Datang di Website SMAN 2 Cibinong</h3>
        <h1><span id="typed1"></span></h1>
        <p>SMA Negeri 2 Cibinong, Jl. Karadenan No. 05 Cibinong Kabupaten Bogor 16913- Jawa Barat Telp: +62 251 8654347 Fax: +62 251 8654347 Email: info@sman2cibinong.sch.id</p>
        <!-- <a class="cta-btn" href="#">Call To Action</a> -->
      </div>
    </section><!-- #call-to-action -->

    <!--==========================
      Skills Section
    ============================-->
    <!-- <section id="skills" data-scroll-index = "0">
      <div class="container">

        <header class="section-header">
          <h3>Our Skills</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip</p>
        </header>

        <div class="skills-content">

          <div class="progress">
            <div class="progress-bar bg-success" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
              <span class="skill">HTML <i class="val">100%</i></span>
            </div>
          </div>

          <div class="progress">
            <div class="progress-bar bg-info" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">
              <span class="skill">CSS <i class="val">90%</i></span>
            </div>
          </div>

          <div class="progress">
            <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
              <span class="skill">JavaScript <i class="val">75%</i></span>
            </div>
          </div>

          <div class="progress">
            <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100">
              <span class="skill">Photoshop <i class="val">55%</i></span>
            </div>
          </div>

        </div>

      </div>
    </section> -->

    <section class="blog section-padding " data-scroll-index="2">
      <div class="container">
        <div class="row">
          <div class="col-sm-8">
            <div class="section-head col-sm-12 wow fadeInUp">
              <h4>
                <span>Berita</span>
                Terkini
              </h4>
            </div>
            <div class="col-lg-12">
              <ul id="portfolio-flters">
                <li data-filter="*" class="filter-active">Semua</li>
                <?php foreach ($data['kategori'] as $key) { ?>
                  <li data-filter=".<?php echo str_replace(" ", "-", $key->nama_kat_artikel) ?>"><?php echo $key->nama_kat_artikel ?></li>
                <?php } ?>
              </ul>
              <div class="row portfolio-container berita" id="portfolio-container">
                <?php foreach ($data['berita'] as $key) { ?>
                  <div class="col-lg-4 portfolio-item <?php echo str_replace(" ", "-", $key->nama_kat_artikel) ?>">
                    <div class="item text-center mb-md50">
                      <div class="post-img">
                        <img src="<?= base_url(); ?>assets/photo/berita/<?php echo $key->foto ?>" alt="">
                        <div class="date">
                          <a href="#0">
                            <span><?php echo substr($key->tanggal,8,2) ;?></span>
                            <span><?php echo format_indo_bln(substr($key->tanggal,0,10))?></span>
                          </a>
                        </div>
                      </div>
                      <div class="content">
                        <span class="tag">
                          <a href="#0"><?php echo $key->nama_kat_artikel ?></a>
                        </span>
                        <h5><a href="#0"><?php echo $key->judul ?></a></h5>
                        <p><?php $a = $key->deskripsi;
                            echo substr(strip_tags($a), 0, 50) ?></p>
                      </div>
                    </div>
                  </div>
                <?php } ?>
              </div>
            </div>
            <div class="col-lg-12" id=pagination style="padding-top: 30px;">
            <nav aria-label="...">
              <ul class="pagination">
              </ul>
            </nav>
          </div>
          </div>
          <div class="col-sm-4">
            <div class="section-head col-sm-12 wow fadeInUp">
              <h4>
                <span>Kalender</span>
                Sekolah
              </h4>
            </div>
            <div class="col-lg-12">
            <br><br><br><br>
            <div class="calender-cont widget-calender">
              <div id="calendar"></div>
            </div>
            <!-- /.card -->
          </div>
          </div>
        </div>
        <div class="row">
          
          
        </div>
        <br>
        <br>
        <div class="row">
          
        </div>
      </div>
    </section>
    <!-- End Blog ====
      ======================================= -->

    <!--==========================
      Facts Section
    ============================-->
    <section id="facts" class="wow fadeIn">
      <div class="container">

        <header class="section-header">
          <h3>Data Kunjungan</h3>
          <!-- <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque</p> -->
        </header>

        <div class="row counters">

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up"><?php echo $data['kunjungan']['now'][0]->hits?></span>
            <p>Now</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up"><?php echo $data['kunjungan']['week'][0]->hits?></span>
            <p>Weeks Ago</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up"><?php echo $data['kunjungan']['month'][0]->hits?></span>
            <p>Months Ago</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up"><?php echo $data['kunjungan']['year'][0]->hits?></span>
            <p>Years Ago</p>
          </div>

        </div>

      </div>
    </section>
    <!-- #facts -->
    <!--==========================
      Portfolio Section
    ============================-->
    <section id="portfolio" class="section-bg" data-scroll-index="3">
      <div class="container">

        <header class="section-header">
          <h3 class="section-title">Video</h3>
        </header>
        <div class="row" style="padding-top: 30px;">
          <div class="col-lg-12 col-md-12 wow fadeInUp text-center">
            <div class="plyr__video-embed" id="player">
            <iframe
                src="https://www.youtube.com/embed/qhgyI-DMpAI"
                allowfullscreen
                allowtransparency
                allow="autoplay"
            ></iframe>
              <!-- <iframe width="1195" height="672" src="https://www.youtube.com/embed/qhgyI-DMpAI" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> -->
            </div>
            <!-- <div class="embed-responsive embed-responsive-16by9" id=players>
              <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/qhgyI-DMpAI"></iframe>
            </div> -->
          </div>
        </div>
        
      </div>
    </section><!-- #portfolio -->

    <!--==========================
      Clients Section
    ============================-->
    <section id="clients" class="wow fadeInUp" data-scroll-index="4">
      <div class="container">

        <header class="section-header">
          <h3>Kemitraan</h3>
        </header>

        <div class="owl-carousel clients-carousel owl-centered">
          <?php foreach ($data['kemitraan'] as $key) { ?>
            <div>
              <a href="<?php echo $key->link_website ?>">
                <img src="<?= base_url(); ?>assets/photo/kemitraan/<?php echo $key->foto ?>" alt="" data-toggle="tooltip" data-placement="bottom" title="<?php echo $key->nama; ?>">
              </a>
            </div>
          <?php } ?>
        </div>

      </div>
    </section>
    <!-- #clients -->

    <section id="contact" class="section-bg wow fadeInUp" data-scroll-index="5">
      <div class="container">

        <div class="section-header">
          <h3>Kontak Kami</h3>
          <p>Untuk info lebih lanjut dan pengajuan pertanyaan seputar SMA Negeri 2 Cibinong dapat langsung menghubungi kami dibawah ini:</p>
        </div>

        <div class="row contact-info">

          <div class="col-md-4">
            <div class="contact-address">
              <i class="ion-ios-location-outline"></i>
              <h3>Alamat</h3>
              <address>Jl. Karadenan No. 05 Cibinong Kabupaten Bogor 16913-Jawa Barat Indonesia</address>
            </div>
          </div>

          <div class="col-md-4">
            <div class="contact-phone">
              <i class="ion-ios-telephone-outline"></i>
              <h3>No Telephone</h3>
              <p><a href="tel:+155895548855"> +62 251 8654347</a></p>
            </div>
          </div>

          <div class="col-md-4">
            <div class="contact-email">
              <i class="ion-ios-email-outline"></i>
              <h3>Email</h3>
              <p><a href="mailto:info@example.com">info@sman2cibinong.sch.id</a></p>
            </div>
          </div>

        </div>


        <div class="form">
              
          <div id="sendmessage">Your message has been sent. Thank you!</div>
          <div id="errormessage"></div>
          <form action="<?php echo base_url();?>beranda/kirim-pesan" method="post" role="form" class="contactForm">
            <div class="form-row">
              <div class="form-group col-md-6">
                <input type="text" name="pengirim" id="pengirim" class="form-control" placeholder="Nama Lengkap Pengirim" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                <div class="validation"></div>
              </div>
              <div class="form-group col-md-6">
                <input type="email" class="form-control" name="email" id="email" placeholder="Email Lengkap Pengirim" data-rule="email" data-msg="Please enter a valid email" />
                <div class="validation"></div>
              </div>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="jdl" id="jdl" placeholder="Judul Pesan" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
              <div class="validation"></div>
            </div>
            <div class="form-group">
              <select class="form-control" name="kat" id="kat">
              <option value="">-------------------------------------------------------- pilih salah satu -------------------------------------------------------</option>
                  
                  <option>Keluhan</option>
                  <option>Rekomendasi/Saran</option>
                                  
              </select>
              </div>
             
            <div class="form-group">
              <textarea class="form-control" name="isi" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Isi Pesan"></textarea>
              <div class="validation"></div>
            </div>
            <div class="text-center"><button type="submit">Kirim Pesan</button></div>
          </form>
        </div>
        </div> 
      </div>
    </section><!-- #contact -->

  </main>