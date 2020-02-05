<style>
  #ubah{
    transform: rotate(90deg)
  }
</style>
<section id="team">
    <div class="container" style="padding-top: 130px;">
        <div class="row">
            <div class="col-lg-12 col-md-24">

            </div>
            <?php foreach ($data as $key => $value) {?>
            <div class="col-lg-12 col-md-24 frame">
                <div class="section-header wow fadeInUp">
                    <h3><?php echo "$key"?></h3>
                    <p><?php echo "$key"?> SMA Negeri 2 Cibinong </p>
                </div>

                <div class="row d-flex justify-content-center">
                    <?php foreach ($data[$key] as $key) {?>
                    <div class="col-lg-3 col-md-6 wow fadeInUp">
                        <div class="member">
                            <img src="<?php echo base_url(); ?>assets/photo/guru/<?php echo $key->foto?>" class="img-fluid" alt="">
                            <div class="member-info">
                                <div class="member-info-content">
                                    <h4><?php echo $key->nama_lengkap?></h4>
                                        <?php if ($key->nama_jabatan == "Kepala Sekolah") :?>
                                            <span><?php echo $key->nama_jabatan?></span>
                                        <?php else :?>
                                            <span><?php echo "Guru ",$key->nama_mapel;?></span>
                                        <?php endif?>
                                    <!-- <div class="social">
                                        <a href=""><i class="fa fa-twitter"></i></a>
                                        <a href=""><i class="fa fa-facebook"></i></a>
                                        <a href=""><i class="fa fa-google-plus"></i></a>
                                        <a href=""><i class="fa fa-linkedin"></i></a>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <?php }?>
                </div>
            </div>
            <?php }?>
            <!-- <img src="https://www.google.com/images/srpr/logo3w.png" id="image"> -->
        </div>
    </div>
</section><!-- #team -->
