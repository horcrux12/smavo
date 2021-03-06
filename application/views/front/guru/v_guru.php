<section id="home" class="min-header bg-img" data-scroll-index="0" data-overlay-dark="5" data-background="<?= base_url(); ?>assets2/img/back.jpg" data-stellar-background-ratio="0.5">
    <div class="container-fluid">
        <div class="row">
            <div class="v-middle mt-30">
                <div class="text-center col-md-12">
                    <h5>Staff dan Guru SMA Negeri 2 Cibinong</h5>
                    <div class="path">
                        <span><a href="<?= base_url() ?>">Home</a></span>
                        <span><a href="#0"><?= $title ?></a></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="team">
    <div class="container">
        <div class="row">
            <!-- Kepala sekolah -->
            <div class="col-lg-12 col-md-24 frame">
                <div class="section-header wow fadeInUp">
                    <h3>Kepala Sekolah</h3>
                    <p>Kepala Sekolah SMA Negeri 2 Cibinong </p>
                </div>
                <div class="row d-flex justify-content-center">
                    <?php foreach ($data['JBT001'] as $key) {?>
                    <div class="col-lg-3 col-md-6 wow fadeInUp">
                        <div class="member">
                            <img src="<?php echo base_url(); ?>assets/photo/guru/<?php echo $key['foto']?>" class="img-fluid" alt="">
                            <div class="member-info">
                                <div class="member-info-content">
                                    <h4><?php echo $key['nama_lengkap'] ?></h4>
                                    <span><?php echo $key['nama_jabatan'] ?></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>
            <!-- End Kepala Sekolah -->
            <!-- Wakasek -->
            <div class="col-lg-12 col-md-24 frame">
                <div class="section-header wow fadeInUp">
                    <h3>Wakil Kepala Sekolah</h3>
                    <p>Wakil Kepala Sekolah SMA Negeri 2 Cibinong </p>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-6 wow fadeInUp">
                        <div class="col-lg-12 col-md-24 frame">
                            <div class="section-header wow fadeInUp">
                                <p style="font-weight: bold; margin-bottom: 0px;">Bidang Kurikulum </p>
                            </div>
                            <div class="row d-flex justify-content-center">
                                <?php foreach ($data['JBT002'] as $key) {?>
                                <div class="col-lg-12 col-md-24 wow fadeInUp">
                                    <div class="member">
                                        <img src="<?php echo base_url(); ?>assets/photo/guru/<?php echo $key['foto'] ?>" class="img-fluid" alt="">
                                        <div class="member-info">
                                            <div class="member-info-content">
                                                <h4><?php echo $key['nama_lengkap'] ?></h4>
                                                <span><?php echo "Guru ",$key['nama_mapel']; ?></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp">
                        <div class="col-lg-12 col-md-24 frame">
                            <div class="section-header wow fadeInUp">
                                <p style="font-weight: bold; margin-bottom: 0px;">Bidang Sarana Prasarana</p>
                            </div>
                            <div class="row d-flex justify-content-center">
                            <?php foreach ($data['JBT018'] as $key) {?>
                            <div class="col-lg-12 col-md-24 wow fadeInUp">
                                <div class="member">
                                    <img src="<?php echo base_url(); ?>assets/photo/guru/<?php echo $key['foto'] ?>" class="img-fluid" alt="">
                                    <div class="member-info">
                                        <div class="member-info-content">
                                            <h4><?php echo $key['nama_lengkap'] ?></h4>
                                            <?php if (!$key['nama_mapel']==null) :?>
                                                <span><?php echo "Guru ",$key['nama_mapel']; ?></span>
                                            <?php endif;?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php } ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp">
                        <div class="col-lg-12 col-md-24 frame">
                            <div class="section-header wow fadeInUp">
                                <p style="font-weight: bold; margin-bottom: 0px;">Bidang Kesiswaan</p>
                            </div>
                            <div class="row d-flex justify-content-center">
                            <?php foreach ($data['JBT019'] as $key) {?>
                            <div class="col-lg-12 col-md-24 wow fadeInUp">
                                <div class="member">
                                    <img src="<?php echo base_url(); ?>assets/photo/guru/<?php echo $key['foto'] ?>" class="img-fluid" alt="">
                                    <div class="member-info">
                                        <div class="member-info-content">
                                            <h4><?php echo $key['nama_lengkap'] ?></h4>
                                            <?php if (!$key['nama_mapel']==null) :?>
                                                <span><?php echo "Guru ",$key['nama_mapel']; ?></span>
                                            <?php endif;?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php } ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp">
                        <div class="col-lg-12 col-md-24 frame">
                            <div class="section-header wow fadeInUp">
                                <p style="font-weight: bold; margin-bottom: 0px;">Bidang Humas</p>
                            </div>
                            <div class="row d-flex justify-content-center">
                            <?php foreach ($data['JBT020'] as $key) {?>
                            <div class="col-lg-12 col-md-24 wow fadeInUp">
                                <div class="member">
                                    <img src="<?php echo base_url(); ?>assets/photo/guru/<?php echo $key['foto'] ?>" class="img-fluid" alt="">
                                    <div class="member-info">
                                        <div class="member-info-content">
                                            <h4><?php echo $key['nama_lengkap'] ?></h4>
                                            <?php if (!$key['nama_mapel']==null) :?>
                                                <span><?php echo "Guru ",$key['nama_mapel']; ?></span>
                                            <?php endif;?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Wakasek -->
            <!-- Kepala -->
            <div class="col-lg-4 col-md-8 frame">
                <div class="section-header wow fadeInUp">
                    <h3 style="font-size: 24px">Kepala Tata Usaha</h3>
                    <p>Kepala Tatat Usaha SMA Negeri 2 Cibinong </p>
                </div>
                <div class="row d-flex justify-content-center">
                    <?php foreach ($data['JBT007'] as $key) {?>
                    <div class="col-lg-8 col-md-16 wow fadeInUp">
                        <div class="member">
                            <img src="<?php echo base_url(); ?>assets/photo/guru/<?php echo $key['foto'] ?>" class="img-fluid" alt="">
                            <div class="member-info">
                                <div class="member-info-content">
                                    <h4><?php echo $key['nama_lengkap'] ?></h4>
                                    <?php if (!$key['nama_mapel']==null) :?>
                                        <span><?php echo "Guru ",$key['nama_mapel']; ?></span>
                                    <?php endif;?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>
            <div class="col-lg-4 col-md-8 frame">
                <div class="section-header wow fadeInUp">
                    <h3 style="font-size: 24px">Kepala Laboratorium</h3>
                    <p>Kepala Laboratorium SMA Negeri 2 Cibinong </p>
                </div>
                <div class="row d-flex justify-content-center">
                    <?php foreach ($data['JBT003'] as $key) {?>
                    <div class="col-lg-8 col-md-16 wow fadeInUp">
                        <div class="member">
                            <img src="<?php echo base_url(); ?>assets/photo/guru/<?php echo $key['foto'] ?>" class="img-fluid" alt="">
                            <div class="member-info">
                                <div class="member-info-content">
                                    <h4><?php echo $key['nama_lengkap'] ?></h4>
                                    <?php if (!$key['nama_mapel']==null) :?>
                                        <span><?php echo "Guru ",$key['nama_mapel']; ?></span>
                                    <?php endif;?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>
            <div class="col-lg-4 col-md-8 frame">
                <div class="section-header wow fadeInUp">
                    <h3 style="font-size: 24px">Kepala Perpustakaan</h3>
                    <p>Kepala Perpustakaan SMA Negeri 2 Cibinong </p>
                </div>
                <div class="row d-flex justify-content-center">
                    <?php foreach ($data['JBT008'] as $key) {?>
                    <div class="col-lg-8 col-md-16 wow fadeInUp">
                        <div class="member">
                            <img src="<?php echo base_url(); ?>assets/photo/guru/<?php echo $key['foto'] ?>" class="img-fluid" alt="">
                            <div class="member-info">
                                <div class="member-info-content">
                                    <h4><?php echo $key['nama_lengkap'] ?></h4>
                                    <?php if (!$key['nama_mapel']==null) :?>
                                        <span><?php echo "Guru ",$key['nama_mapel']; ?></span>
                                    <?php endif;?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>
            <!-- End Kepala -->
            <!-- Koordinator -->
            <div class="col-lg-6 col-md-12 frame">
                <div class="section-header wow fadeInUp">
                    <h3>Koordinator BK</h3>
                    <p>Koordinator BK SMA Negeri 2 Cibinong </p>
                </div>
                <div class="row d-flex justify-content-center">
                    <?php foreach ($data['JBT005'] as $key) {?>
                    <div class="col-lg-6 col-md-12 wow fadeInUp">
                        <div class="member">
                            <img src="<?php echo base_url(); ?>assets/photo/guru/<?php echo $key['foto'] ?>" class="img-fluid" alt="">
                            <div class="member-info">
                                <div class="member-info-content">
                                    <h4><?php echo $key['nama_lengkap'] ?></h4>
                                    <?php if (!$key['nama_mapel']==null) :?>
                                        <span><?php echo "Guru ",$key['nama_mapel']; ?></span>
                                    <?php endif;?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 frame">
                <div class="section-header wow fadeInUp">
                    <h3>Koordinator IT</h3>
                    <p>Koordinator IT SMA Negeri 2 Cibinong </p>
                </div>
                <div class="row d-flex justify-content-center">
                    <?php foreach ($data['JBT004'] as $key) {?>
                    <div class="col-lg-6 col-md-12 wow fadeInUp">
                        <div class="member">
                            <img src="<?php echo base_url(); ?>assets/photo/guru/<?php echo $key['foto'] ?>" class="img-fluid" alt="">
                            <div class="member-info">
                                <div class="member-info-content">
                                    <h4><?php echo $key['nama_lengkap'] ?></h4>
                                    <?php if (!$key['nama_mapel']==null) :?>
                                        <span><?php echo "Guru ",$key['nama_mapel']; ?></span>
                                    <?php endif;?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>
            <!-- End Koordinator -->
            <!-- Guru -->
            <div class="col-lg-12 col-md-24 frame">
                <div class="section-header wow fadeInUp">
                    <h3>Guru</h3>
                    <p>Guru SMA Negeri 2 Cibinong </p>
                </div>
                <div class="row d-flex justify-content-center">
                    <?php foreach ($data['JBT006'] as $key) {?>
                    <div class="col-lg-3 col-md-6 wow fadeInUp">
                        <div class="member">
                            <img src="<?php echo base_url(); ?>assets/photo/guru/<?php echo $key['foto'] ?>" class="img-fluid" alt="">
                            <div class="member-info">
                                <div class="member-info-content">
                                    <h4><?php echo $key['nama_lengkap'] ?></h4>
                                    <?php if (!$key['nama_mapel']==null) :?>
                                        <span><?php echo "Guru ",$key['nama_mapel']; ?></span>
                                    <?php endif;?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>
            <!-- End Guru -->
            <!-- Staff TU -->
            <div class="col-lg-12 col-md-24 frame">
                <div class="section-header wow fadeInUp">
                    <h3><?php echo $jabatan['JBT010']['nama_jabatan'] ?></h3>
                    <p><?php echo $jabatan['JBT010']['nama_jabatan'] ?> SMA Negeri 2 Cibinong </p>
                </div>
                <div class="row d-flex justify-content-center">
                    <?php foreach ($data['JBT010'] as $key) {?>
                    <div class="col-lg-3 col-md-6 wow fadeInUp">
                        <div class="member">
                            <img src="<?php echo base_url(); ?>assets/photo/guru/<?php echo $key['foto'] ?>" class="img-fluid" alt="">
                            <div class="member-info">
                                <div class="member-info-content">
                                    <h4><?php echo $key['nama_lengkap'] ?></h4>
                                    <?php if (!$key['nama_mapel']==null) :?>
                                        <span><?php echo "Guru ",$key['nama_mapel']; ?></span>
                                    <?php endif;?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>
            <!-- End Staff TU -->
            <!-- Staff IT -->
            <div class="col-lg-12 col-md-24 frame">
                <div class="section-header wow fadeInUp">
                    <h3><?php echo $jabatan['JBT016']['nama_jabatan'] ?></h3>
                    <p><?php echo $jabatan['JBT016']['nama_jabatan'] ?> SMA Negeri 2 Cibinong </p>
                </div>
                <div class="row d-flex justify-content-center">
                    <?php foreach ($data['JBT016'] as $key) {?>
                    <div class="col-lg-3 col-md-6 wow fadeInUp">
                        <div class="member">
                            <img src="<?php echo base_url(); ?>assets/photo/guru/<?php echo $key['foto'] ?>" class="img-fluid" alt="">
                            <div class="member-info">
                                <div class="member-info-content">
                                    <h4><?php echo $key['nama_lengkap'] ?></h4>
                                    <?php if (!$key['nama_mapel']==null) :?>
                                        <span><?php echo "Guru ",$key['nama_mapel']; ?></span>
                                    <?php endif;?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>
            <!-- End Staff IT -->
            <!-- Pustakawan -->
            <div class="col-lg-6 col-md-12 frame">
                <div class="section-header wow fadeInUp">
                    <h3><?php echo $jabatan['JBT017']['nama_jabatan'] ?> </h3>
                    <p><?php echo $jabatan['JBT017']['nama_jabatan'] ?> SMA Negeri 2 Cibinong </p>
                </div>
                <div class="row d-flex justify-content-center">
                    <?php if (isset($data['JBT017'])) {
                    foreach ($data['JBT017'] as $key) {?>
                    <div class="col-lg-6 col-md-12 wow fadeInUp">
                        <div class="member">
                            <img src="<?php echo base_url(); ?>assets/photo/guru/<?php echo $key['foto'] ?>" class="img-fluid" alt="">
                            <div class="member-info">
                                <div class="member-info-content">
                                    <h4><?php echo $key['nama_lengkap'] ?></h4>
                                    <?php if (!$key['nama_mapel']==null) :?>
                                        <span><?php echo "Guru ",$key['nama_mapel']; ?></span>
                                    <?php endif;?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php }} ?>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 frame">
                <div class="section-header wow fadeInUp">
                    <h3><?php echo $jabatan['JBT009']['nama_jabatan'] ?></h3>
                    <p><?php echo $jabatan['JBT009']['nama_jabatan'] ?> SMA Negeri 2 Cibinong </p>
                </div>
                <div class="row d-flex justify-content-center">
                    <?php if (isset($data['JBT009'])) {
                    foreach ($data['JBT009'] as $key) {?>
                    <div class="col-lg-6 col-md-12 wow fadeInUp">
                        <div class="member">
                            <img src="<?php echo base_url(); ?>assets/photo/guru/<?php echo $key['foto'] ?>" class="img-fluid" alt="">
                            <div class="member-info">
                                <div class="member-info-content">
                                    <h4><?php echo $key['nama_lengkap'] ?></h4>
                                    <?php if (!$key['nama_mapel']==null) :?>
                                        <span><?php echo "Guru ",$key['nama_mapel']; ?></span>
                                    <?php endif;?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php }} ?>
                </div>
            </div>
            <!-- End Pustakawan -->
            <!-- Security -->
            <div class="col-lg-12 col-md-24 frame">
                <div class="section-header wow fadeInUp">
                    <h3>Penjaga Keamaanan</h3>
                    <p>Penjaga Keamaanan SMA Negeri 2 Cibinong </p>
                </div>
                <div class="row d-flex justify-content-center">
                    <?php foreach ($data['JBT011'] as $key) {?>
                    <div class="col-lg-3 col-md-6 wow fadeInUp">
                        <div class="member">
                            <img src="<?php echo base_url(); ?>assets/photo/guru/<?php echo $key['foto'] ?>" class="img-fluid" alt="">
                            <div class="member-info">
                                <div class="member-info-content">
                                    <h4><?php echo $key['nama_lengkap'] ?></h4>
                                    <?php if (!$key['nama_mapel']==null) :?>
                                        <span><?php echo "Guru ",$key['nama_mapel']; ?></span>
                                    <?php endif;?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>
            <!-- End Security -->
            <!-- Juru Masak dan Penjaga Kebersihan -->
            <div class="col-lg-6 col-md-12 frame">
                <div class="section-header wow fadeInUp">
                    <h3>Penjaga Kebersihan</h3>
                    <p>Penjaga Kebersihan SMA Negeri 2 Cibinong </p>
                </div>
                <div class="row d-flex justify-content-center">
                    <?php if (isset($data['JBT012'])) {
                    foreach ($data['JBT012'] as $key) {?>
                    <div class="col-lg-6 col-md-12 wow fadeInUp">
                        <div class="member">
                            <img src="<?php echo base_url(); ?>assets/photo/guru/<?php echo $key['foto'] ?>" class="img-fluid" alt="">
                            <div class="member-info">
                                <div class="member-info-content">
                                    <h4><?php echo $key['nama_lengkap'] ?></h4>
                                    <?php if (!$key['nama_mapel']==null) :?>
                                        <span><?php echo "Guru ",$key['nama_mapel']; ?></span>
                                    <?php endif;?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php }} ?>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 frame">
                <div class="section-header wow fadeInUp">
                    <h3>Juru Masak</h3>
                    <p>Juru Masak SMA Negeri 2 Cibinong </p>
                </div>
                <div class="row d-flex justify-content-center">
                    <?php if (isset($data['JBT013'])) {
                    foreach ($data['JBT013'] as $key) {?>
                    <div class="col-lg-6 col-md-12 wow fadeInUp">
                        <div class="member">
                            <img src="<?php echo base_url(); ?>assets/photo/guru/<?php echo $key['foto'] ?>" class="img-fluid" alt="">
                            <div class="member-info">
                                <div class="member-info-content">
                                    <h4><?php echo $key['nama_lengkap'] ?></h4>
                                    <?php if (!$key['nama_mapel']==null) :?>
                                        <span><?php echo "Guru ",$key['nama_mapel']; ?></span>
                                    <?php endif;?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php }} ?>
                </div>
            </div>
            <!-- End Juru Masak dan Penjaga Kebersihan -->
            <!-- Seterusnya -->
            <?php foreach ($jabatan as $jbtn) {
                if ($jbtn['id_jabatan'] != "JBT001" && $jbtn['id_jabatan'] != "JBT002" && $jbtn['id_jabatan'] != "JBT003" && $jbtn['id_jabatan'] != "JBT004" && $jbtn['id_jabatan'] != "JBT005" && $jbtn['id_jabatan'] != "JBT006" && $jbtn['id_jabatan'] != "JBT007" && $jbtn['id_jabatan'] != "JBT008" && $jbtn['id_jabatan'] != "JBT009" && $jbtn['id_jabatan'] != "JBT010" && $jbtn['id_jabatan'] != "JBT011" && $jbtn['id_jabatan'] != "JBT012" && $jbtn['id_jabatan'] != "JBT013" && $jbtn['id_jabatan'] != "JBT016" && $jbtn['id_jabatan'] != "JBT017" && $jbtn['id_jabatan'] != "JBT018" &&$jbtn['id_jabatan'] != "JBT019" && $jbtn['id_jabatan'] != "JBT020") :?>
                <div class="col-lg-12 col-md-24 frame">
                    <div class="section-header wow fadeInUp">
                        <h3><?php echo $jbtn['nama_jabatan']?></h3>
                        <p><?php echo $jbtn['nama_jabatan']?> SMA Negeri 2 Cibinong </p>
                    </div>
                    <div class="row d-flex justify-content-center">
                        <?php foreach ($data[$jbtn['id_jabatan']] as $key) {?>
                        <div class="col-lg-3 col-md-6 wow fadeInUp">
                            <div class="member">
                                <img src="<?php echo base_url(); ?>assets/photo/guru/<?php echo $key['foto'] ?>" class="img-fluid" alt="">
                                <div class="member-info">
                                    <div class="member-info-content">
                                        <h4><?php echo $key['nama_lengkap'] ?></h4>
                                        <?php if (!$key['nama_mapel']==null) :?>
                                            <span><?php echo "Guru ",$key['nama_mapel']; ?></span>
                                        <?php endif;?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                </div>
            <?php endif;
            } ?>
            
            <!-- End Seterusnya -->
        </div>
    </div>
</section><!-- #team -->