<!-- ====== Header ======  -->
<section id="home" class="min-header bg-img" data-scroll-index="0" data-overlay-dark="5" data-background="<?= base_url(); ?>assets2/img/back.jpg" data-stellar-background-ratio="0.5">
    <div class="container-fluid">
        <div class="row">
            <div class="v-middle mt-30">
                <div class="text-center col-md-12">
                    <h5>Berita Terkini SMAN 2 Cibinong</h5>
                    <div class="path">
                        <span><a href="<?= base_url() ?>">Home</a></span>
                        <span><a href="#0"><?= $title ?></a></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
		<!-- ====== End Header ======  -->

		<!--====== Blog ======-->
		<section class="blogs section-padding">
			<div class="container">
				<div class="row">
					
					<div class="col-md-8">
						<div class="posts">
							<?php foreach ($berita as $berita) {?>
							<div class="post">
								<div class="post-img">
									<a href="#0" class="full-width">
										<img src="<?= base_url();?>assets/photo/berita/<?php echo $berita->foto ?>" alt="">
									</a>
								</div>
								<div class="content text-center">
									<div class="post-meta">
										<div class="post-title">
											<h5>
												<a href="#0"><?php echo $berita->judul?></a>
											</h5>
										</div>
										<ul class="meta">
											<li>
												<a href="#0">
													<i class="fa fa-user" aria-hidden="true"></i>
													<?php echo $berita->nama?>
												</a>
											</li>
											<li>
												<a href="#0">
													<i class="fa fa-calendar" aria-hidden="true"></i>
													<?php echo format_indo(substr($berita->tanggal,0,10))?>
												</a>
											</li>
											<li>
												<a href="#0">
													<i class="fa fa-tags" aria-hidden="true"></i>
													<?php echo $berita->nama_kat_artikel;
													if (!$berita->id_organisasi == null) {
														echo ", ";
														$kate = $this->model_dinamic->getWhereArray('tb_organisasi','id_organisasi',$berita->id_organisasi);
														echo $kate[0]['nama_organisasi'];
													}?>
												</a>
											</li>
										</ul>
									</div>

									<div class="post-cont">
										<p><?php echo substr(strip_tags($berita->deskripsi),0,230),"...";?></p>
									</div>

									<a href="#0" class="butn">Read More</a>

								</div>
							</div>
							<?php }?>
							<?php echo $this->pagination->create_links();?>

						</div>
					</div>

					<div class="col-md-4">
						<div class="side-bar">

							<div class="widget">
								<div class="widget-title">
									<h6>Berita Terbaru</h6>
								</div>
								<ul>
									<?php foreach ($berita_baru as $key) {?>
										<li><a href="<?php echo base_url()?>berita/detail/<?php echo $key->id_berita?>"><?php echo $key->judul?></a></li>
									<?php }?>	
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
									<?php foreach ($kategori as $kay) {?>
										<li><a href="<?= base_url('berita/kategori/');?><?php echo $kay->nama_kat_artikel; ?>"><?php echo $kay->nama_kat_artikel?></a></li>
									<?php }?>
								</ul>
							</div>

						</div>
					</div>

				</div>
			</div>
		</section>
		<!--====== End Blog ======-->
		