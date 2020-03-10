<section id="home" class="min-header bg-img" data-scroll-index="0" data-overlay-dark="5" data-background="<?= base_url(); ?>assets2/img/back.jpg" data-stellar-background-ratio="0.5">
  <div class="container-fluid">
    <div class="row">
      <div class="v-middle mt-30">
        <div class="text-center col-md-12">
          <h5>Kontak SMAN 2 Cibinong</h5>
          <div class="path">
            <span><a href="<?= base_url() ?>">Beranda</a></span>
            <span><a href="#0"><?= $title ?></a></span>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section id="contact" class="wow fadeInUp" data-scroll-index="5">
  <div class="container" style="padding-top: 20px;">
    <div class="section-header wow fadeInUp">
      <h3>Kontak Kami</h3>
      <p>Untuk info lebih lanjut dan pengajuan pertanyaan seputar SMA Negeri 2 Cibinong dapat langsung menghubungi kami dibawah ini:</p>
    </div>

      <div class="container">
     
        <div class="form">
          <form action="<?php echo base_url();?>kontak/kirim-pesan" method="post" role="form" class="contactForm">
            <div class="form-row">
              <div class="form-group col-md-6">
                <input type="text" name="pengirim" id="pengirim" class="form-control"  placeholder="Nama Lengkap" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
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
              <option value="">------------- pilih salah satu -------------</option>
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
<!-- #team -->


<!-- - - - - -end- - - - -  -->