<section id="team">
  <div class="container" style="padding-top: 130px;">
    <div class="section-header wow fadeInUp">
      <h3>Fasilitas</h3>
      <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque</p>
    </div>

    <div class="row">
      <div class="custom-accordion">
        <?php $no=1; foreach ($data as $key) { ?>
          <?php if ($no == 6) : $no=1?>
          <div class="item">
            <div class="icon"></div>
            <div class="title">
              <a href=""><?php echo $key->nama_fasilitas ?></a>
            </div>
            <div class="content">
              <?php echo $key->deskripsi ?>
              <a href="#" class="btn-more-detail">Selengkapnya</a>
            </div>
          </div>
          </div>
          <div class="custom-accordion">
          <?php else :?>
          <div class="item">
            <div class="icon"></div>
            <div class="title">
              <div class="text"><a href=""><?php echo $key->nama_fasilitas ?></a></div>
            </div>
            <div class="content">
              <?php echo $key->deskripsi ?><br>
              <a href="#" class="btn-more-detail">More Details</a>
            </div>
          </div>
          <?php endif?>
        <?php $no++; } ?>
        <div class="item">
          <div class="icon"></div>
          <div class="title">Nemo pariatur</div>
          <div class="content">
            <div class="heart-icon"><img src="<?php echo base_url(); ?>assets2/img/logo.png" width="80"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section><!-- #team -->