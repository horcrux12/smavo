  <style>
    .owl-centered .owl-wrapper {
      display: table !important;
    }
    .owl-centered .owl-item {
      display: table-cell;
      float: none;
      vertical-align: middle;
    }
    .owl-centered .owl-item > div {
      text-align: center;
    }
  </style>
  <section id="intro" data-scroll-index="0">
    <div class="intro-container">
      <div id="introCarousel" class="carousel  slide carousel-fade" data-ride="carousel">

        <ol class="carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">

          <div class="carousel-item active">
            <div class="carousel-background"><img src="<?= base_url();?>assets2/img/CROP.jpg" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h3 class="animated fadeInLeft">Selamat Datang di Website Resmi</h3>
                <h1 class="animated fadeInRight">SMAN 2 Negeri <span>Cibinong</span></h1>
                <p class="animated fadeInUp">Jl. Karadenan No. 05 Cibinong Kabupaten Bogor 16913- Jawa Barat Telp: +62-251-8654347 Fax: +62-251-8654347 Email: info@sman2cibinong.sch.id</p>
                <!-- <a href="#featured-services" class="btn-get-started scrollto animated zoomIn">Get Started</a> -->
              </div>
            </div>
          </div>
          
          <!-- For Berita -->
          <?php foreach ($data['berita_limit'] as $key) {?>
          <div class="carousel-item">
            <div class="carousel-background"><img src="<?= base_url();?>assets/photo/berita/<?php echo $key->foto?>" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h3 class="animated fadeInLeft">Berita - SMAVO</h3>
                <h1 class="animated fadeInRight"><?php echo $key->judul?></h1>
                <p class="animated fadeInUp"><?php echo "".strip_tags(substr($key->deskripsi,0,30))."..." ?></p>
                <a href="<?php echo base_url()?>berita/detail/<?php echo $key->id_berita?>" class="btn-get-started scrollto animated zoomIn">Selengkapnya</a>
              </div>
            </div>
          </div>
          <?php }?>
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
    <section id="about" class="section-bg" >
      <div class="container" data-scroll-index="1">

        <header class="section-header">
          <h3>SMAN 2 Cibinong</h3>
          <p>SMA Negeri 2 Cibinong merupakan lembaga pendidikan yang sedang berusaha untuk mewujudkan impian, cita-cita dari warga dan stakeholdernya. Menjadikan sekolah yang bersih, hijau, sehat, aman dan nyaman serta terwujudnya delapan standar pendidikan dan ISO 2001 seperti yang diamanatkan dalam Undang-Undang  Nomor 20 tahun 2003 tentang Sisdiknas.Serta menjadi lembaga pendidikan yang berprestasi di tingkat Kabupaten, Propinsi, Nasional maupun Internasional, yang tidak meninggalkan budaya lokal yang bernuansa Islami.
          </p>
        </header>

        <div class="row about-cols">

          <div class="col-md-4 wow fadeInUp">
            <div class="about-col">
                <div class="icon"><i class="ion-ios-paperplane-outline"></i></div>
              <h2 class="title"><a href="#">Our Mission</a></h2>
              <p>
                <?php echo $data['about']['Misi']['deskripsi']?>
              </p>
            </div>
          </div>

          <div class="col-md-4 wow fadeInUp" data-wow-delay="0.1s">
            <div class="about-col">
                <div class="icon"><i class="ion-ios-list-outline"></i></div>
              <h2 class="title"><a href="#">Our Plan</a></h2>
              <p>
              <?php echo $data['about']['Tujuan']['deskripsi']?>
              </p>
            </div>
          </div>

          <div class="col-md-4 wow fadeInUp" data-wow-delay="0.2s">
            <div class="about-col">
                <div class="icon"><i class="ion-ios-pie-outline"></i></div>
              <h2 class="title"><a href="#">Our Vision</a></h2>
              <p>
              <?php echo substr($data['about']['Visi']['deskripsi'],0,100) ?>
              </p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- #about -->

    <!--==========================
      Services Section
    ============================-->
    <section id="services">
      <div class="container">

        <header class="section-header wow fadeInUp">
          <h3>Sambutan Kepala Sekolah</h3>
        </header>

        <div class="row">
          <div class="col-lg-12">
            <div class="row"> 
              <div class="col-lg-3 col-md-4 box wow bounceInUp gambar" data-wow-duration="1.4s">
                <img src="<?= base_url();?>assets2/img/head-master.png" class="srv-image" alt="">
                <h3> Bapak Kepala Sekolah, S.Pd., M.Pd. </h3>
                <h4> Kepala Sekolah SMAN 2 Cibinong</h4>
              </div>
              <div class="col-lg-9 box wow bounceInUp" data-wow-duration="1.4s">
                <p class="description"> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi soluta praesentium nostrum, aliquam eos voluptate eaque laboriosam aliquid sed, quas quidem voluptatem nulla quisquam odit qui aspernatur, quo blanditiis. Repellat. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam eligendi odit temporibus similique voluptate quisquam, pariatur odio quas, atque nostrum, minima maiores voluptatem libero distinctio delectus id reiciendis ad obcaecati. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis dolores voluptas nostrum. Expedita beatae, molestias similique tempora architecto, rerum, optio quasi corrupti nostrum voluptatem repudiandae velit? Enim fugit, quia sit!</p>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section><!-- #services -->

    <!--==========================
      Call To Action Section
    ============================-->
    <section id="call-to-action" class="wow fadeIn">
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

          <div class="section-head col-sm-8 wow fadeInUp">
            <h4>
              <span>Berita</span>
              Terkini
            </h4>
          </div>
          <div class="section-head col-sm-4 wow fadeInUp">
            <h4>
              <span>Kalender</span>
              Sekolah
            </h4>
          </div>
          <div class="col-lg-8 ">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".akademik">Akademik</li>
              <li data-filter=".non-akademik">Non-Akademik</li>
              <li data-filter=".beasiswa">Beasiswa</li>
            </ul>
            <div class="row portfolio-container berita">
                <div class="col-lg-4 portfolio-item akademik">
                  <div class="item text-center mb-md50">
                    <div class="post-img">
                      <img src="<?= base_url();?>assets2/img/blog/1.jpg" alt="">
                      <div class="date">
                        <a href="#0">
                          <span>06</span>
                          <span>Aug</span>
                        </a>
                      </div>
                    </div>
                    <div class="content">
                      <span class="tag">
                        <a href="#0">WordPress</a>
                      </span>
                      <h5><a href="#0">48 Best WordPress Themes</a></h5>
                      <p>Lorem Ipsum is simply dummy text of the printing and type setting industry. Lorem Ipsum has been the dummy text ever</p>
                    </div>
                  </div>
                </div>

                <div class="col-lg-4 portfolio-item non-akademik">
                  <div class="item text-center mb-md50">
                    <div class="post-img">
                      <img src="<?= base_url();?>assets2/img/blog/2.jpg" alt="">
                      <div class="date">
                        <a href="#0">
                          <span>06</span>
                          <span>Aug</span>
                        </a>
                      </div>
                    </div>
                    <div class="content">
                      <span class="tag">
                        <a href="#0">ThemeForest</a>
                      </span>
                      <h5><a href="#0">Managing Their Own Websites</a></h5>
                      <p>Lorem Ipsum is simply dummy text of the printing and type setting industry. Lorem Ipsum has been the dummy text ever</p>
                    </div>
                  </div>
                </div>

                <div class="col-lg-4 portfolio-item beasiswa">
                  <div class="item text-center">
                    <div class="post-img">
                      <img src="<?= base_url();?>assets2/img/blog/3.jpg" alt="">
                      <div class="date">
                        <a href="#0">
                          <span>06</span>
                          <span>Aug</span>
                        </a>
                      </div>
                    </div>
                    <div class="content">
                      <span class="tag">
                        <a href="#0">Trends</a>
                      </span>
                      <h5><a href="#0">Master These Awesome Skills</a></h5>
                      <p>Lorem Ipsum is simply dummy text of the printing and type setting industry. Lorem Ipsum has been the dummy text ever</p>
                    </div>
                  </div>
                </div>

            </div>
          </div>
          <div class="col-lg-4">
            <br><br><br><br>
                <div class="calender-cont widget-calender">
                  <div id="calendar"></div>
                </div>
          <!-- /.card -->
          </div>
        </div>
      </div>
    </section>
      <!-- End Blog ====
      ======================================= -->

    <!--==========================
      Facts Section
    ============================-->
    <section id="facts"  class="wow fadeIn">
      <div class="container">

        <header class="section-header">
          <h3>Data Kunjungan</h3>
          <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque</p>
        </header>

        <div class="row counters">

  				<div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">18</span>
            <p>Now</p>
  				</div>

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">274</span>
            <p>Weeks Ago</p>
  				</div>

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">421</span>
            <p>Mouths Ago</p>
  				</div>

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">1,364</span>
            <p>Years Ago</p>
  				</div>

  			</div>

      </div>
    </section> 
    <!-- #facts -->

    <!--==========================
      Portfolio Section
    ============================-->
    <section id="portfolio"  class="section-bg" data-scroll-index="3">
      <div class="container">

        <header class="section-header">
          <h3 class="section-title">Our Video</h3>
        </header>

        <!-- <div class="row">
          <div class="col-lg-12">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-app">App</li>
              <li data-filter=".filter-card">Card</li>
              <li data-filter=".filter-web">Web</li>
            </ul>
          </div>
        </div> -->

        <div class="row portfolio-container">

          <div class="col-lg-12 col-md-12 portfolio-item filter-app wow fadeInUp">
            <div class="portfolio-wrap">
              <figure>
                <img src="<?= base_url();?>assets2/img/portfolio/app1.jpg" class="img-fluid" alt="">
                <a href="<?= base_url();?>assets2/img/portfolio/app1.jpg" data-lightbox="portfolio" data-title="App 1" class="link-preview" title="Preview"><i class="ion ion-eye"></i></a>
                <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="#">App 1</a></h4>
                <p>App</p>
              </div>
            </div>
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
          <div>
            <img src="<?= base_url();?>assets2/img/clients/client-1.png" alt="">
          </div>
          <div>
            <img src="<?= base_url();?>assets2/img/clients/client-2.png" alt="">
          </div>
          <div>
            <img src="<?= base_url();?>assets2/img/clients/client-3.png" alt="">
          </div>
          <div>
            <img src="<?= base_url();?>assets2/img/clients/client-4.png" alt="">
          </div>
          <div>
            <img src="<?= base_url();?>assets2/img/clients/client-5.png" alt="">
          </div>
          <div>
            <img src="<?= base_url();?>assets2/img/clients/client-6.png" alt="">
          </div>
          <div>
            <img src="<?= base_url();?>assets2/img/clients/client-7.png" alt="">
          </div>
          <div>
            <img src="<?= base_url();?>assets2/img/clients/client-8.png" alt="">
          </div>
          <div>
            <img src="<?= base_url();?>assets2/img/logo.png" alt="">
          </div>
        </div>

      </div>
    </section>
    <!-- #clients -->

    <!--==========================
      Clients Section
    ============================-->
    <!-- <section id="testimonials" class="section-bg wow fadeInUp">
      <div class="container">

        <header class="section-header">
          <h3>Testimonials</h3>
        </header>

        <div class="owl-carousel testimonials-carousel">

          <div class="testimonial-item">
            <img src="<?= base_url();?>assets2/img/testimonial-1.jpg" class="testimonial-img" alt="">
            <h3>Saul Goodman</h3>
            <h4>Ceo &amp; Founder</h4>
            <p>
              <img src="<?= base_url();?>assets2/img/quote-sign-left.png" class="quote-sign-left" alt="">
              Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
              <img src="<?= base_url();?>assets2/img/quote-sign-right.png" class="quote-sign-right" alt="">
            </p>
          </div>

          <div class="testimonial-item">
            <img src="<?= base_url();?>assets2/img/testimonial-2.jpg" class="testimonial-img" alt="">
            <h3>Sara Wilsson</h3>
            <h4>Designer</h4>
            <p>
              <img src="<?= base_url();?>assets2/img/quote-sign-left.png" class="quote-sign-left" alt="">
              Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
              <img src="<?= base_url();?>assets2/img/quote-sign-right.png" class="quote-sign-right" alt="">
            </p>
          </div>

          <div class="testimonial-item">
            <img src="<?= base_url();?>assets2/img/testimonial-3.jpg" class="testimonial-img" alt="">
            <h3>Jena Karlis</h3>
            <h4>Store Owner</h4>
            <p>
              <img src="<?= base_url();?>assets2/img/quote-sign-left.png" class="quote-sign-left" alt="">
              Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
              <img src="<?= base_url();?>assets2/img/quote-sign-right.png" class="quote-sign-right" alt="">
            </p>
          </div>

          <div class="testimonial-item">
            <img src="<?= base_url();?>assets2/img/testimonial-4.jpg" class="testimonial-img" alt="">
            <h3>Matt Brandon</h3>
            <h4>Freelancer</h4>
            <p>
              <img src="<?= base_url();?>assets2/img/quote-sign-left.png" class="quote-sign-left" alt="">
              Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
              <img src="<?= base_url();?>assets2/img/quote-sign-right.png" class="quote-sign-right" alt="">
            </p>
          </div>

          <div class="testimonial-item">
            <img src="<?= base_url();?>assets2/img/testimonial-5.jpg" class="testimonial-img" alt="">
            <h3>John Larson</h3>
            <h4>Entrepreneur</h4>
            <p>
              <img src="<?= base_url();?>assets2/img/quote-sign-left.png" class="quote-sign-left" alt="">
              Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.
              <img src="<?= base_url();?>assets2/img/quote-sign-right.png" class="quote-sign-right" alt="">
            </p>
          </div>

        </div>

      </div>
    </section> -->
    <!-- #testimonials -->

    <!--==========================
      Team Section
    ============================-->
    <!-- <section id="team">
      <div class="container">
        <div class="section-header wow fadeInUp">
          <h3>Staff dan Guru</h3>
          <p>SMA Negeri 2 Cibinong</p>
        </div>

        <div class="row">

          <div class="col-lg-3 col-md-6 wow fadeInUp">
            <div class="member">
              <img src="<?= base_url();?>assets2/img/team-1.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Walter White</h4>
                  <span>Chief Executive Officer</span>
                  <div class="social">
                    <a href=""><i class="fa fa-twitter"></i></a>
                    <a href=""><i class="fa fa-facebook"></i></a>
                    <a href=""><i class="fa fa-google-plus"></i></a>
                    <a href=""><i class="fa fa-linkedin"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
            <div class="member">
              <img src="<?= base_url();?>assets2/img/team-2.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Sarah Jhonson</h4>
                  <span>Product Manager</span>
                  <div class="social">
                    <a href=""><i class="fa fa-twitter"></i></a>
                    <a href=""><i class="fa fa-facebook"></i></a>
                    <a href=""><i class="fa fa-google-plus"></i></a>
                    <a href=""><i class="fa fa-linkedin"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
            <div class="member">
              <img src="<?= base_url();?>assets2/img/team-3.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>William Anderson</h4>
                  <span>CTO</span>
                  <div class="social">
                    <a href=""><i class="fa fa-twitter"></i></a>
                    <a href=""><i class="fa fa-facebook"></i></a>
                    <a href=""><i class="fa fa-google-plus"></i></a>
                    <a href=""><i class="fa fa-linkedin"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
            <div class="member">
              <img src="<?= base_url();?>assets2/img/team-4.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Amanda Jepson</h4>
                  <span>Accountant</span>
                  <div class="social">
                    <a href=""><i class="fa fa-twitter"></i></a>
                    <a href=""><i class="fa fa-facebook"></i></a>
                    <a href=""><i class="fa fa-google-plus"></i></a>
                    <a href=""><i class="fa fa-linkedin"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section> -->
    <!-- #team -->

    <!--==========================
      Contact Section
    ============================-->
    <section id="contact" class="section-bg wow fadeInUp" data-scroll-index="5">
      <div class="container">

        <div class="section-header">
          <h3>Contact Us</h3>
          <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque</p>
        </div>

        <div class="row contact-info">

          <div class="col-md-4">
            <div class="contact-address">
              <i class="ion-ios-location-outline"></i>
              <h3>Address</h3>
              <address>A108 Adam Street, NY 535022, USA</address>
            </div>
          </div>

          <div class="col-md-4">
            <div class="contact-phone">
              <i class="ion-ios-telephone-outline"></i>
              <h3>Phone Number</h3>
              <p><a href="tel:+155895548855">+1 5589 55488 55</a></p>
            </div>
          </div>

          <div class="col-md-4">
            <div class="contact-email">
              <i class="ion-ios-email-outline"></i>
              <h3>Email</h3>
              <p><a href="mailto:info@example.com">info@example.com</a></p>
            </div>
          </div>

        </div>

        <!-- <div class="form"> -->
          <div id="sendmessage">Your message has been sent. Thank you!</div>
          <div id="errormessage"></div>
          <form action="" method="post" role="form" class="contactForm">
            <div class="form-row">
              <div class="form-group col-md-6">
                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                <div class="validation"></div>
              </div>
              <div class="form-group col-md-6">
                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                <div class="validation"></div>
              </div>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
              <div class="validation"></div>
            </div>
            <div class="form-group">
              <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
              <div class="validation"></div>
            </div>
            <div class="text-center"><button type="submit">Send Message</button></div>
          </form>
        <!-- </div> -->

      </div>
    </section><!-- #contact -->

  </main>