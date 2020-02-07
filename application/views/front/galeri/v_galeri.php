<section id="home" class="min-header bg-img" data-scroll-index="0" data-overlay-dark="5" data-background="<?= base_url(); ?>assets2/img/back.jpg" data-stellar-background-ratio="0.5">
    <div class="container-fluid">
        <div class="row">
            <div class="v-middle mt-30">
                <div class="text-center col-md-12">
                    <h5>Galeri SMAN 2 Cibinong</h5>
                    <div class="path">
                        <span><a href="<?= base_url() ?>">Home</a></span>
                        <span><a href="#0"><?= $title ?></a></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="portfolio"  class="section-bg" data-scroll-index="3">
  <div class="container">
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
    <?php foreach ($data as $key) {?>
      <div class="col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp">
        <div class="portfolio-wrap">
          <figure>
            <img src="<?= base_url();?>assets/photo/berita/<?php echo $key->foto?>" class="img-fluid" alt="">
            <a href="<?= base_url();?>assets/photo/berita/<?php echo $key->foto?>" data-lightbox="portfolio" data-title="App 1" class="link-preview" title="Preview"><i class="ion ion-eye"></i></a>
            <a href="<?php echo base_url()?>berita/<?php echo $key->id_berita?>" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
          </figure>
        </div>
      </div>
    <?php }?>

    </div>

  </div>
</section><!-- #portfolio -->