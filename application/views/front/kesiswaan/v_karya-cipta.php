<!-- ====== Header ======  -->
<section id="home" class="min-header bg-img" data-scroll-index="0" data-overlay-dark="5" data-background="<?= base_url(); ?>assets2/img/back.jpg" data-stellar-background-ratio="0.5">
	<div class="container-fluid">
		<div class="row">
			<div class="v-middle mt-30">
				<div class="text-center col-md-12">
					<h5>Berita Terkini SMAN 2 Cibinong</h5>
					<div class="path">
						<span><a href="<?= base_url() ?>">Beranda</a></span>
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
					<?php foreach ($data->result() as $key) { ?>
						<div class="post">
							<div class="post-img">
								<!-- <a href="#0" class="full-width"> -->
								<img src="<?= base_url(); ?>assets/photo/karya-cipta/<?php echo $file_name ?>" alt="">
								<!-- </a> -->
							</div>
							<div class="content text-center">
								<div class="post-meta">
									<div class="post-title">
										<h5>
										<a href="#0"><?php echo $jdl ?></a>
										</h5>
									</div>
									<ul class="meta">
										<li>
											<i class="fa fa-user" aria-hidden="true"></i>
											<?php  echo $nama_user; ?>
										</li>
										<li>

											<i class="fa fa-calendar" aria-hidden="true"></i>
											<?php echo format_indo(substr($key->tanggal_update,0,10))?>

										</li>
										<li>

											<i class="fa fa-tags" aria-hidden="true"></i>
											
										</li>
									</ul>
								</div>

								<div class="post-cont">
									<p><?php echo substr(strip_tags($isi), 0, 230), "..."; ?></p>
								</div>

								<a href="<?php echo base_url('karya-cipta/detail/'),$key->id_artikel?>"class="butn">Baca Selengkapnya</a>

							</div>
						</div>
					<?php } ?>
					<?php echo $this->pagination->create_links(); ?>

				</div>
			</div>

			<div class="col-md-4">
				<div class="side-bar">

					<div class="widget">
						<div class="widget-title">
						<h6>Kategori Berita Kesiswaan</h6>
						</div>
						<ul>
						<?php
							$data = $this->model_dinamic->getData('tb_kat_siswa');
							foreach ($data as $key) { ?>
							<li><a href="<?= base_url('kesiswaan/kategori/'); ?><?php echo $key->nama_kat_siswa; ?>"><?php echo $key->nama_kat_siswa; ?></a></li>
							<?php }?>	
						</ul>
					</div>

				</div>
			</div>

		</div>
	</div>
</section>
<!--====== End Blog ======-->
