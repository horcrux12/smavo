<!-- ====== Header ======  -->
<section id="home" class="min-header bg-img" data-scroll-index="0" data-overlay-dark="5" data-background="<?= base_url(); ?>assets2/img/back.jpg" data-stellar-background-ratio="0.5">
    <div class="container-fluid">
        <div class="row">
            <div class="v-middle mt-30">
                <div class="text-center col-md-12">
                    <h5>Berita Terkini SMAN 2 Cibinong</h5>
                    <div class="path">
                        <span><a href="<?= base_url() ?>">Beranda</a></span>
                        <span><a href="<?= base_url('berita') ?>">Berita</a></span>
                        <span><a href="<?= base_url('berita/kategori/'),$title ?>"><?php echo $title?></a></span>
                        <span><a href="#0"><?= $sub_title ?></a></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ====== End Header ======  -->
<section class="blogs section-padding">
    <div class="container">
        <div class="row">
            <div id="content" class="col-md-8">
                <!-- Begin Content -->
                <div id="system-message-container">
                </div>

                <div class="pd_tb">

                    <!-- Start K2 Item Layout -->
                    <span id="startOfPageId4"></span>

                    <div id="k2Container" class="posts ">
                        <!-- Plugins: BeforeDisplay -->

                        <!-- K2 Plugins: K2BeforeDisplay -->
                        <div class="post">
                            <!-- Item Image -->
                            <div class="post-img">
                                <a class="full-width" href="4-managing-their-own-websites.html" title="Managing Their Own Websites">
                                    <img src="<?= base_url('assets/photo/berita/'),$isi_berita[0]['foto']?>" alt="Managing Their Own Websites" style="width:100%; height:auto;" />
                                </a>
                            </div>
                            <div class="content">
                                <div class="post-meta">

                                    <div class="post-title">
                                        <!-- Item title -->
                                        <h5><?php echo $isi_berita[0]['judul']?></h5>
                                    </div>

                                    <ul class="meta" style="padding: 0">
                                        <li>
                                            <i class="fa fa-user" aria-hidden="true"></i> <?php echo $isi_berita[0]['nama_penulis']?>
                                        </li>

                                        <li>
                                            <i class="fa fa-folder-open" aria-hidden="true"></i> Berita </li>

                                        <li>
                                            <i class="fa fa-calendar" aria-hidden="true"></i> <?php echo format_indo(substr($isi_berita[0]['tanggal'],0,10))?> </li>

                                        <li>
                                            <i class="fa fa-tags" aria-hidden="true"></i>
                                            <?php echo $isi_berita[0]['nama_kat_artikel']; if (!$isi_berita[0]['nama_organisasi']==null) {
                                                echo ", ",$isi_berita[0]['nama_organisasi'];
                                            }?>
                                        </li>

                                    </ul>
                                </div>

                                <div class="post-cont">
                                    <?php echo $isi_berita[0]['deskripsi']?>
                                </div>



                                <div class="extra-info">
                                    <div class="itemAuthorBlock">
                                        <div class="itemAuthorDetails">
                                        </div>
                                    </div>

                                    <div class="blog-articles-nav">
                                        <div class="row">
                                            <!-- Previous Post -->
                                            <div class="col-md-6 prev-post">
                                                <!-- <a href="3-30-best-joomla-themes.html"> <i class="icofont icofont-long-arrow-left"></i> 30 Best Joomla Themes</a> -->
                                            </div>
                                            <!-- Next Post -->
                                            <div class="col-md-6 next-post text-right">

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="comments-area mb-80">


                            <!-- Item comments -->
                            <a name="itemCommentsAnchor" id="itemCommentsAnchor"></a>
                            <div class="itemCommentslist">
                            </div>
                        </div><!-- /.comments-area -->
                    </div>
                </div>


                <!-- End Content -->
            </div>
            <div class="col-md-4">
                <div class="side-bar">

                    <div class="widget">
                        <div class="widget-title">
                            <h6>Berita Terbaru</h6>
                        </div>
                        <ul>
                            <?php foreach ($berita_baru as $key) { ?>
                                <li><a href="<?php echo base_url() ?>berita/detail/<?php echo $key->id_berita ?>"><?php echo $key->judul ?></a></li>
                            <?php } ?>
                        </ul>
                    </div>


                    <div class="widget">
                        <div class="widget-title">
                            <h6>Karya Cipta Siswa</h6>
                        </div>
                        <ul>
                            <li><a href="#0">WordPress</a></li>
                            <li><a href="#0">ThemeForest</a></li>
                        </ul>
                    </div>

                    <div class="widget">
                        <div class="widget-title">
                            <h6>Kategori Berita</h6>
                        </div>
                        <ul>
                            <?php foreach ($kategori as $kay) { ?>
                                <li><a href="<?= base_url('berita/kategori/'); ?><?php echo $kay->nama_kat_artikel; ?>"><?php echo $kay->nama_kat_artikel ?></a></li>
                            <?php } ?>
                        </ul>
                    </div>

                </div>
            </div>
</section>
</body>
</head>

</html>