<section id="home" class="min-header bg-img" data-scroll-index="0" data-overlay-dark="5" data-background="<?= base_url(); ?>assets2/img/back.jpg" data-stellar-background-ratio="0.5">
    <div class="container-fluid">
        <div class="row">
            <div class="v-middle mt-30">
                <div class="text-center col-md-12">
                    <h5><?php echo $data['isi'][0]['judul']?></h5>
                    <div class="path">
                        <span><a href="<?= base_url() ?>">Beranda</a></span>
                        <span><a href="#0"><?= $title ?></a></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="team">
    <div class="container" style="padding-top: 20px;">
        <div class="section-header wow fadeInUp">
            <h3>Sejarah</h3>
            <p style="padding-bottom:0; margin-bottom: 0;">Berikut adalah sejarah SMA Negeri 2 Cibinong </p>
        </div>
        <br>
        <br>
        
        <div class="col-lg-12 col-md-24 frame mt-3 wow fadeInUp">
        <h5>Sejarah Kepemimpinan SMA Negeri 2 Cibinong</h5> <br>
            <div class="row d-flex justify-content-center">
                <?php foreach ($data['kepsek'] as $key) {?>
                <div class="col-lg-3 col-md-6 wow fadeInUp">
                    <div class="member">
                        <img src="<?php echo base_url(); ?>assets/photo/kepsek/<?php echo $key['foto'] ?>" class="img-fluid" alt="">
                        <div class="member-info">
                            <div class="member-info-content">
                                <h4><?php echo $key['nama'] ?></h4>
                                <span>Periode <?php echo $key['periode'] ?></span>
                            </div>
                        </div>
                    </div>
                    <p style="margin: 0px;" class="text-center"><?php echo $key['nama'] ?></p>
                    <p style="font-weight: bold; " class="text-center">Periode <?php echo $key['periode'] ?></p>
                </div>
                <?php } ?>
            </div>
        </div>
</section>

<section class="blogs">
    <div class="container">
        <div class="row">
            <div id="content" class="col-md-12 wow fadeInUp">

                <!-- Begin Content -->
                <div id="system-message-container"></div>
                <div class="pd_tb">
                    <span id="startOfPageId4"></span>
                    <div id="k2Container" class="posts ">

                        <div class="post">
                            <!-- Item Image -->
                            <div class="post-img"></div>
                            <div class="content" style="padding-top:0;">
                                <div class="post-cont">
                                    <h5>Sejarah SMA Negeri 2 Cibinong</h5> <br>
                                    <!-- Item fulltext -->
                                    <p><?php echo $data['isi'][0]['deskripsi']; ?></p>
                                </div>

                                <div class="extra-info">
                                    <div class="itemAuthorBlock">
                                        <div class="itemAuthorDetails">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Content -->
            </div>
</section>
<!-- #team -->


<!-- - - - - -end- - - - -  -->