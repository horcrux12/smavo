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
    <section id="call-to-action" class="wow fadeIn" style="background-image: url('<?php echo base_url() ?>assets2/img/batik.jpg')">
      <div class="container text-center">
        <h3>Selamat Datang di Website SMAN 2 Cibinong</h3>
        <h1><span id="typed1"></span></h1>
        <p>SMA Negeri 2 Cibinong, Jl. Karadenan No. 05 Cibinong Kabupaten Bogor 16913- Jawa Barat Telp: +62 251 8654347 Fax: +62 251 8654347 Email: info@sman2cibinong.sch.id</p>
        <!-- <a class="cta-btn" href="#">Call To Action</a> -->
      </div>
    </section><!-- #call-to-action -->
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
                    <div class="card item text-center mb-md50">
                      <div class="post-img" style="height: 160px;">
                        <img src="<?= base_url(); ?>assets/photo/berita/<?php echo $key->foto ?>" class="mx-auto d-block" alt="">
                        <div class="date">
                          <a href="javascript:void(0)">
                            <span><?php echo substr($key->tanggal, 8, 2); ?></span>
                            <span><?php echo format_indo_bln(substr($key->tanggal, 0, 10)) ?></span>
                          </a>
                        </div>
                      </div>
                      <div class="content">
                        <span class="tag">
                          <a href="<?php echo base_url('berita/detail/'), $key->id_berita ?>"><?php echo $key->nama_kat_artikel ?></a>
                        </span>
                        <h5><a href="<?php echo base_url('berita/detail/'), $key->id_berita ?>"><?php echo $key->judul ?></a></h5>
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
                <div id="calendarIO"></div>

              </div>
              <div class="modal fade" id="create_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <form class="form-horizontal" method="POST" action="POST" id="form_create">
                      <input type="hidden" name="calendar_id" value="0">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                        <h4 class="modal-title" id="myModalLabel">Kalender Kegiatan</h4>
                      </div>
                      <div class="modal-body">

                        <div class="form-group">
                          <div class="alert alert-danger" style="display: none;"></div>
                        </div>
                        <div class="form-group">
                          <label class="control-label col-sm-4">Nama Kegiatan<span class="required"></span></label>
                          <div class="col-sm-10">
                            <input type="text" name="title" class="form-control" placeholder="Judul Kegiatan" readonly>
                          </div>
                        </div>

                        <div class="form-group">
                          <label class="control-label col-sm-2">Deskripsi</label>
                          <div class="col-sm-10">
                            <textarea name="description" rows="3" class="form-control" readonly></textarea>
                          </div>
                        </div>

                        <div class="form-group">
                          <label class="control-label col-sm-2">Tanggal Mulai</label>
                          <div class="col-sm-10">
                              <input type="text" name="start_date" class="form-control" readonly>
                          </div>
                        </div>

                        <div class="form-group">
                          <label class="control-label col-sm-2">Tanggal Berakhir</label>
                          <div class="col-sm-10">
                              <input type="text" name="end_date" class="form-control" readonly>
                          </div>
                        </div>

                      </div>
                      <div class="modal-footer">
                        <a href="javascript::void" class="btn btn-danger" data-dismiss="modal">close</a>
                        <!-- <a class="btn btn-danger delete_calendar" style="display: none;">Hapus</a>
                        <button type="submit" class="btn green">Simpan</button> -->
                      </div>
                    </form>
                  </div>

                </div>
              </div>
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
            <span data-toggle="counter-up"><?php echo $data['kunjungan']['now'][0]->hits ?></span>
            <p>Hari Ini</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up"><?php echo $data['kunjungan']['week'][0]->hits ?></span>
            <p>Minggu Ini </p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up"><?php echo $data['kunjungan']['month'][0]->hits ?></span>
            <p>Bulan Ini </p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up"><?php echo $data['kunjungan']['year'][0]->hits ?></span>
            <p>Tahun Ini </p>
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
              <iframe src="https://www.youtube.com/embed/qhgyI-DMpAI" allowfullscreen allowtransparency allow="autoplay"></iframe>
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
              <a href="<?php echo $key->link_website ?>" target="_blank">
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
              <h3>No Telp</h3>
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

              <?php
                    $info = $this->session->flashdata('info');
                    if (!empty($info)) {

                      echo "<div class='alert alert-success alert-dismissible'>";
                      echo "<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>";
                      echo "</button>";
                      echo "<i class='icon fa fa-check'>";
                      echo "</i>";
                      echo $info;
                      echo "</div>";
                    }
                 ?>
                 
        <div class="form">
          <!-- <div id="sendmessage">Your message has been sent. Thank you!</div> -->
          <!-- <div id="errormessage"></div> -->
        
          <form action="<?php echo base_url(); ?>beranda/kirim-pesan" method="post" role="form" class="contactForm">
            <div class="form-row">
              <div class="form-group col-md-6">
                <input type="text" name="pengirim" id="pengirim" class="form-control" placeholder="Nama Lengkap" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                <div class="validation"></div>
              </div>
              <div class="form-group col-md-6">
                <input type="email" class="form-control" name="email" id="email" placeholder="Email Lengkap" data-rule="email" data-msg="Please enter a valid email" />
                <div class="validation"></div>
              </div>
            </div>

            <div class="form-row">
              <div class="form-group col-md-4">
                <select class="form-control" name="kat" id="kat" data-rule="required" data-msg="Please enter at least 8 chars of subject" />
                <option id=ini value="">------------- pilih salah satu -------------</option>
                <option>Keluhan</option>
                <option>Rekomendasi/Saran</option>
                </select>
                <div class="validation"></div>
              </div>

              <div class="form-group col-md-8">
                <input type="text" class="form-control" name="jdl" id="jdl" placeholder="Judul Pesan" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                <div class="validation"></div>
              </div>
            </div>

            <div class="form-group">
              <textarea class="form-control" name="isi" id="isi" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Deskripsi Pesan"></textarea>
              <div class="validation"></div>
            </div>
            <div class="text-center"><button type="submit">Kirim Pesan</button></div>
          </form>
        </div>

      </div>
    </section><!-- #contact -->

  </main>