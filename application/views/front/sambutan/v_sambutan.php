<section id="home" class="min-header bg-img" data-scroll-index="0" data-overlay-dark="5" data-background="<?= base_url(); ?>assets2/img/back.jpg" data-stellar-background-ratio="0.5">
    <div class="container-fluid">
        <div class="row">
            <div class="v-middle mt-30">
                <div class="text-center col-md-12">
                    <h5><?php echo $data[0]['judul']?></h5>
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
            <h3>Sambutan</h3>
            <p>Berikut adalah sambutan bapak kepala SMAN 2 Cibinong</p>
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

                                    <!-- Item fulltext -->
                                    <p><?php echo $data[0]['deskripsi']; ?></p>
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