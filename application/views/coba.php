	<!-- <style>
		#container {
			margin: auto;
		}

		.grid-item {
			display: inline-block;
			height: 250px;
			margin: 5px;
			overflow: hidden;
			text-align: center;
			width: 250px;
		}

		/* .isotope-pager .pager {
			display: inline-block;
		} */
	</style> -->
<br>
<br>
<br>
<br>
<br>
<br>
	<ul class="filters">
		<li><a href="javascript:void(0);" data-filter="*">Todos</a></li>
		<li><a href="javascript:void(0);" data-filter="city">Cidade</a></li>
		<li><a href="javascript:void(0);" data-filter="cats">Gatos</a></li>
	</ul>
	<div id="container" class="isotope">
		<div class="grid-item" data-filter="city"><img src="<?= base_url(); ?>assets2/img/logo.png"></div>
		<div class="grid-item" data-filter="city"><img src="<?= base_url(); ?>assets2/img/logo.png"></div>
		<div class="grid-item" data-filter="city"><img src="<?= base_url(); ?>assets2/img/logo.png"></div>
		<div class="grid-item" data-filter="city"><img src="<?= base_url(); ?>assets2/img/logo.png"></div>
		<div class="grid-item" data-filter="city"><img src="<?= base_url(); ?>assets2/img/logo.png"></div>
		<div class="grid-item" data-filter="city"><img src="<?= base_url(); ?>assets2/img/logo.png"></div>
		<div class="grid-item" data-filter="city"><img src="<?= base_url(); ?>assets2/img/logo.png"></div>
		<div class="grid-item" data-filter="city"><img src="<?= base_url(); ?>assets2/img/logo.png"></div>
		<div class="grid-item" data-filter="cats"><img src="<?= base_url(); ?>assets2/img/apple-touch-icon.png"></div>
		<div class="grid-item" data-filter="cats"><img src="<?= base_url(); ?>assets2/img/apple-touch-icon.png"></div>
		<div class="grid-item" data-filter="cats"><img src="<?= base_url(); ?>assets2/img/apple-touch-icon.png"></div>
		<div class="grid-item" data-filter="cats"><img src="<?= base_url(); ?>assets2/img/apple-touch-icon.png"></div>
		<div class="grid-item" data-filter="cats"><img src="<?= base_url(); ?>assets2/img/apple-touch-icon.png"></div>
		<div class="grid-item" data-filter="cats"><img src="<?= base_url(); ?>assets2/img/apple-touch-icon.png"></div>
		<div class="grid-item" data-filter="cats"><img src="<?= base_url(); ?>assets2/img/apple-touch-icon.png"></div>
	</div>
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
            <ul id="portfolio-flters filters">
              <li><a data-filter="*" class="filter-active">All</a></li>
              <?php foreach ($data['kategori'] as $key) { ?>
                <li><a href="javascript:void(0);" data-filter="<?php echo str_replace(" ", "-", $key->nama_kat_artikel) ?>"><?php echo $key->nama_kat_artikel ?></a></li>
              <?php } ?>
            </ul>
            <div class="row portfolio-container berita" id="container">
              <?php foreach ($data['berita'] as $key) { ?>
                <div class="grid-item col-lg-4 portfolio-item" data-filter="<?php echo str_replace(" ", "-", $key->nama_kat_artikel) ?>">
                  <div class="item text-center mb-md50">
                    <div class="post-img">
                      <img src="<?= base_url(); ?>assets/photo/berita/<?php echo $key->foto ?>" alt="">
                      <div class="date">
                        <a href="#0">
                          <span>06</span>
                          <span>Aug</span>
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
          <div class="col-lg-4">
            <br><br><br><br>
            <div class="calender-cont widget-calender">
              <div id="calendar"></div>
            </div>
            <!-- /.card -->
          </div>
        </div>
        <br>
        <br>
        <div class="row">
          <div class="col-lg-8">
            <nav aria-label="...">
              <ul class="pagination">
                <li class="page-item disabled">
                  <a class="page-link" href="javascript:void(0);" tabindex="-1">Previous</a>
                </li>
                <li class="page-item"><a class="page-link" href="javascript:void(0);">1</a></li>
                <li class="page-item active">
                  <a class="page-link" href="javascript:void(0);">2 <span class="sr-only">(current)</span></a>
                </li>
                <li class="page-item"><a class="page-link" href="javascript:void(0);">3</a></li>
                <li class="page-item">
                  <a class="page-link" href="javascript:void(0);">Next</a>
                </li>
              </ul>
            </nav>
          </div>
        </div>
      </div>
    </section>