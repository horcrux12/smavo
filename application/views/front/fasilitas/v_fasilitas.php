<section id="home" class="min-header bg-img" data-scroll-index="0" data-overlay-dark="5" data-background="<?= base_url(); ?>assets2/img/back.jpg" data-stellar-background-ratio="0.5">
	<div class="container-fluid">
		<div class="row">
			<div class="v-middle mt-30">
				<div class="text-center col-md-12">
					<h5>Fasilitas</h5>
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
			<h3>Fasilitas Sekolah</h3>
			<p>Berikut adalah sarana dan prasarana yang terdapat di SMAN 2 Cibinong guna menunjang kegiatan belajar mengajar agar terlaksana dengan baik dan nyaman</p>
		</div>
		<?php $z = 1; foreach ($kategori as $key) { ?>
			<?php if ($z % 2 == 1) :?>
				<div class="card">
					<div class="row ">
						<div class="col-md-5 post-text">
							<div class="card-block text-container">
								<div class="val">
								<h4 class="card-title"><?php echo $key->nama_fasilitas ?></h4>
								<p class="card-text"><?php
									if (!$key->deskripsi == null) {
										echo "Aliquam ornare mauris quis sapien interdum euod. Nullam a elementum odio. Vivamus vestibulum bib orci. ultricies...";
									}else {
										echo $key->deskripsi;
									}
									?></p>
								</div>
							</div>
						</div>
						<div class="col-md-7 post-img">
							<div id="demo<?php echo $key->id ?>" class="carousel slide" data-ride="carousel">
								<!-- Indicators -->
								<ul class="carousel-indicators">
									<?php $j = count($foto[$key->id]);
									for ($i = 0; $i < $j; $i++) { ?>
										<?php if ($i == 0) : ?>
											<li data-target="#demo<?php echo $key->id ?>" data-slide-to="<?php echo $i; ?>" class="active"></li>
										<?php else : ?>
											<li data-target="#demo<?php echo $key->id ?>" data-slide-to="<?php echo $i; ?>"></li>
										<?php endif; ?>
									<?php } ?>
								</ul>

								<!-- The slideshow -->
								<div class="carousel-inner">
									<?php $n = 1;
									foreach ($foto[$key->id] as $kay) { ?>
										<?php if ($n == 1) : ?>
											<div class="carousel-item active">
												<img src="<?php echo base_url() ?>assets/photo/fasilitas/<?php echo $kay->foto ?>" alt="" class="img-fluid">
											</div>
										<?php else : ?>
											<div class="carousel-item">
												<img src="<?php echo base_url() ?>assets/photo/fasilitas/<?php echo $kay->foto ?>" alt="" class="img-fluid">
											</div>
										<?php endif; ?>
									<?php $n++;
									} ?>
								</div>

								<!-- Left and right controls -->
								<a class="carousel-control-prev" href="#demo<?php echo $key->id ?>" data-slide="prev">
									<span class="ion-chevron-left"></span>
								</a>
								<a class="carousel-control-next" href="#demo<?php echo $key->id ?>" data-slide="next">
									<span class="ion-chevron-right"></span>
								</a>
							</div>
						</div>
					</div>
				</div>
			<?php else :?>
				<div class="card">
					<div class="row ">
						<div class="col-md-7 post-img">
							<div id="demo<?php echo $key->id ?>" class="carousel slide" data-ride="carousel">
								<!-- Indicators -->
								<ul class="carousel-indicators">
									<?php $j = count($foto[$key->id]);
									for ($i = 0; $i < $j; $i++) { ?>
										<?php if ($i == 0) : ?>
											<li data-target="#demo<?php echo $key->id ?>" data-slide-to="<?php echo $i; ?>" class="active"></li>
										<?php else : ?>
											<li data-target="#demo<?php echo $key->id ?>" data-slide-to="<?php echo $i; ?>"></li>
										<?php endif; ?>
									<?php } ?>
								</ul>

								<!-- The slideshow -->
								<div class="carousel-inner">
									<?php $n = 1;
									foreach ($foto[$key->id] as $kay) { ?>
										<?php if ($n == 1) : ?>
											<div class="carousel-item active">
												<img src="<?php echo base_url() ?>assets/photo/fasilitas/<?php echo $kay->foto ?>" alt="" class="img-fluid">
											</div>
										<?php else : ?>
											<div class="carousel-item">
												<img src="<?php echo base_url() ?>assets/photo/fasilitas/<?php echo $kay->foto ?>" alt="" class="img-fluid">
											</div>
										<?php endif; ?>
									<?php $n++;
									} ?>
								</div>

								<!-- Left and right controls -->
								<a class="carousel-control-prev" href="#demo<?php echo $key->id ?>" data-slide="prev">
									<span class="ion-chevron-left"></span>
								</a>
								<a class="carousel-control-next" href="#demo<?php echo $key->id ?>" data-slide="next">
									<span class="ion-chevron-right"></span>
								</a>
							</div>
						</div>
						<div class="col-md-5 post-text">
							<div class="card-block text-container">
								<div class="val">
								<h4 class="card-title"><?php echo $key->nama_fasilitas ?></h4>
								<p class="card-text"><?php
									if (!$key->deskripsi == null) {
										echo "Aliquam ornare mauris quis sapien interdum euod. Nullam a elementum odio. Vivamus vestibulum bib orci. ultricies...";
									}else {
										echo $key->deskripsi;
									}
									?></p>
								</div>
							</div>
						</div>
					</div>
				</div>
			<?php endif;?>
		<?php $z++; } ?>
		<!-- <div class="card" style="height: 25rem; margin: 2em 0;">
			<div class="row ">
				<div class="col-md-7">
					<img src="https://placeholdit.imgix.net/~text?txtsize=38&txt=400%C3%97400&w=400&h=400" class="w-100">
				</div>
				<div class="col-md-5 px-3" style="padding: 2em 0">
					<div class="card-block px-3">
						<h4 class="card-title">Lorem ipsum dolor sit amet</h4>
						<p class="card-text">Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
						<p class="card-text">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
						<a href="#" class="btn btn-primary">Read More</a>
					</div>
				</div>
			</div>
		</div> -->
	</div>
	</div>
	
</section>
<!-- #team -->


<!-- - - - - -end- - - - -  -->