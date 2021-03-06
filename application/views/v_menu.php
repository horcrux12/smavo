<!-- hak akses admin -->
<?php 
	if ($this->session->userdata('hak_akses') === 'Administrator'):
 ?>
<ul class="nav nav-list">
	<li>
		<a href="<?php echo base_url();?>admin/dashboard">
			<i class="menu-icon fa fa-home"></i><span class="menu-text"> Dashboard </span>
		</a>
		<b class="arrow"></b>
	</li>
	<li class="">
		<a href="#" class="dropdown-toggle">
			<i class="menu-icon fa fa-desktop"></i><span class="menu-text">Data Master</span>
			<b class="arrow fa fa-angle-down"></b>
		</a>
			<b class="arrow"></b>
		<ul class="submenu">
			<li class="">
				<a href="<?php echo base_url();?>admin/guru"><i class="menu-icon fa fa-caret-right"></i>Data Guru</a>
				<b class="arrow"></b>
			</li>
			<li class="">
				<a href="<?php echo base_url();?>admin/kategori-mapel"><i class="menu-icon fa fa-caret-right"></i>Data Mata Pelajaran</a>
				<b class="arrow"></b>
			</li>
			<li class="">
				<a href="<?php echo base_url();?>admin/kategori-artikel"><i class="menu-icon fa fa-caret-right"></i>Data Kategori Artikel</a>
				<b class="arrow"></b>
			</li>
			<li class="">
				<a href="<?php echo base_url();?>admin/kategori-fasilitas"><i class="menu-icon fa fa-caret-right"></i>Data Kategori Fasiitas</a>
				<b class="arrow"></b>
			</li>
			<!-- <li class="">
				<a href="<?php echo base_url();?>kat_siswa"><i class="menu-icon fa fa-caret-right"></i>Data Kategori Siswa</a>
				<b class="arrow"></b>
			</li> -->
			<li class="">
				<a href="<?php echo base_url();?>admin/kategori-jabatan"><i class="menu-icon fa fa-caret-right"></i>Data Kategori Jabatan</a>
				<b class="arrow"></b>
			</li>
			<li class="">
				<a href="<?php echo base_url();?>admin/kategori-organisasi"><i class="menu-icon fa fa-caret-right"></i>Data Organisasi</a>
				<b class="arrow"></b>
			</li>
			<li class="">
				<a href="<?php echo base_url();?>admin/galeri"><i class="menu-icon fa fa-caret-right"></i>Data Galeri</a>
				<b class="arrow"></b>
			</li>
		</ul>
	</li>

	
	<li class="">
		<a href="#" class="dropdown-toggle">
			<i class="menu-icon fa fa-list"></i><span class="menu-text"> Data Berita </span>
			<b class="arrow fa fa-angle-down"></b>
		</a>
		<b class="arrow"></b>
		<ul class="submenu">
			<li class="">
				<a href="<?php echo base_url('admin/berita');?>"><i class="menu-icon fa fa-caret-right"></i>Semua Artikel Berita</a>
				<b class="arrow"></b>
			</li>
			<li class="">
				<a href="#" class="dropdown-toggle"><i class="menu-icon fa fa-pencil-square-o"></i><span class="menu-text">Kategori Berita</span>
					<b class="arrow fa fa-angle-down"></b>
				</a>
				<b class="arrow"></b>
				<ul class="submenu">
					
					<?php
						$this->db->order_by('id_kat_artikel');
				        $data = $this->db->get('tb_kat_artikel');
						foreach ($data->result() as $row) {?>
							<li class="">
							<a href="<?php echo base_url();?>admin/berita/kategori-berita/<?php echo $row->nama_kat_artikel?>"><i class="menu-icon fa fa-caret-right"></i>
								<?php echo $row->nama_kat_artikel?>
							</a>
							<b class="arrow"></b>
						</li>
					<?php } ?>
							
				</ul>
			</li>
		</ul>
			<li class="">
				<a href="#" class="dropdown-toggle"><i class="menu-icon fa fa-list"></i><span class="menu-text"> Data Profil </span>
					<b class="arrow fa fa-angle-down"></b>
				</a>
					<b class="arrow"></b>
				<ul class="submenu">
					<!-- <li class="">
						<a href="<?php echo base_url();?>profil"><i class="menu-icon fa fa-caret-right"></i>Semua Artikel Profil</a>
						<b class="arrow"></b>
					</li> -->
					<li class="">
						<a href="#" class="dropdown-toggle"><i class="menu-icon fa fa-pencil-square-o"></i><span class="menu-text">Kategori Artikel</span>
							<b class="arrow fa fa-angle-down"></b>
						</a>
						<b class="arrow"></b>
						<ul class="submenu">
							
								<?php
								$this->db->order_by('id_kat_profil');
							    $data = $this->db->get('tb_kat_profil');
								foreach ($data->result() as $row) {?>
								<li class="">
									<a href="<?php echo base_url();?>admin/profil/detail-profil/<?php echo $row->id_kat_profil?>"><i class="menu-icon fa fa-caret-right"></i>
										<?php echo $row->nama_kat_profil?>
									</a>
									<b class="arrow"></b>
								</li>
								<?php } ?>

						<li class="">
							<a href="<?php echo base_url()?>admin/profil/kepsek"><i class="menu-icon fa fa-caret-right"></i>Kepala Sekolah</a>
							<b class="arrow"></b>
						</li>

						</ul>
					
						<ul class="submenu">
								<li class="">
								<a href="#" class="dropdown-toggle"><i class="menu-icon fa fa-caret-right"></i><span class="menu-text">Fasilitas</span>
									</a>
									<b class="arrow"></b>
									<ul class="submenu">
									<li class="">

									<a href="<?php echo base_url();?>admin/fasilitas"><i class="menu-icon fa fa-caret-right"></i>
										Semua Fasilitas
									</a>
									<b class="arrow"></b>
								</li>
							
								<?php
								$this->db->order_by('id');
							    $data = $this->db->get('tb_kat_fasilitas');
								foreach ($data->result() as $row) {?>
								<li class="">
									<a href="<?php echo base_url();?>admin/fasilitas/detail-fasilitas/<?php echo $row->id?>"><i class="menu-icon fa fa-caret-right"></i>
										<?php echo $row->nama_fasilitas?>
									</a>
									<b class="arrow"></b>
								</li>
								<?php } ?>
						</ul>
								</li>
								
						</ul>
					</li>
				</ul>
				<li class="">
					<a href="#" class="dropdown-toggle"><i class="menu-icon fa fa-list"></i><span class="menu-text"> Data Kesiswaan </span>
						<b class="arrow fa fa-angle-down"></b>
					</a>
						<b class="arrow"></b>
					<ul class="submenu">
						<!-- <li class="">
							<a href="<?php echo base_url();?>admin/siswa"><i class="menu-icon fa fa-pencil-square-o"></i>Semua Artikel Siswa</a>
							<b class="arrow"></b>
						</li> -->
						<li class="">
							<a href="#" class="dropdown-toggle"><i class="menu-icon fa fa-pencil-square-o"></i><span class="menu-text">Artikel Siswa</span>
								<b class="arrow fa fa-angle-down"></b>
							</a>
							<b class="arrow"></b>
							<!-- <ul class="submenu">
									<li class="">
										<a href="<?php echo base_url();?>admin/berita/kategori-berita/Non%20Akademik">
											<i class="menu-icon fa fa-caret-right"></i>
											Organisasi
										</a>		
										<b class="arrow"></b>
									</li>
						</ul> -->
							<ul class="submenu">
								
									<?php
									$this->db->order_by('id_kat_siswa');
							        $data = $this->db->get('tb_kat_siswa');
									foreach ($data->result() as $row) {?>
									<li class="">
										<a href="<?php echo base_url();?>admin/siswa/kategori-siswa/<?php echo $row->nama_kat_siswa?>">
											<i class="menu-icon fa fa-caret-right"></i>
											<?php echo $row->nama_kat_siswa?>
										</a>		
										<b class="arrow"></b>
									</li>
								<?php } ?>
	

						</ul>
						

					</li>

				</li>

			</ul><!-- /.nav-list -->

			<li class="">
						<a href="<?php echo base_url();?>admin/kategori-pesan">
							<i class="menu-icon fa  fa-envelope"></i>
							<span class="menu-text"> Kotak Masuk </span>
							<!-- <span class="badge badge-danger">5</span> -->
						</a>

						<b class="arrow"></b>
					</li>

			<li class="">
						<a href="<?php echo base_url();?>admin/statistik-pengguna">
							<i class="menu-icon fa fa-bar-chart-o"></i>
							<span class="menu-text"> Statistik Pengguna </span>
						</a>

						<b class="arrow"></b>
					</li>

					<li class="">
						<a href="<?php echo base_url();?>admin/kalendar-kegiatan">
							<i class="menu-icon fa fa-calendar"></i>
							<span class="menu-text"> Kalendar Kegiatan </span>
						</a>

						<b class="arrow"></b>
					</li>
			<li class="">
						<a href="<?php echo base_url();?>admin/administrator">
							<i class="menu-icon fa fa-users"></i>
							<span class="menu-text"> Administrator </span>
						</a>

						<b class="arrow"></b>
					</li>

			<!-- <li class="">
						<a href="<?php echo base_url();?>sistem">
							<i class="menu-icon fa fa-info-circle"></i>
							<span class="menu-text"> Tentang Sistem </span>
						</a>

						<b class="arrow"></b>
					</li> -->

					<li class="">
		<a href="#" class="dropdown-toggle">
			<i class="menu-icon fa fa-gear"></i><span class="menu-text">Pengaturan</span>
			<b class="arrow fa fa-angle-down"></b>
		</a>
			<b class="arrow"></b>
		<ul class="submenu">
			<li class="">
				<a href="<?php echo base_url()?>admin/pengaturan/slider"><i class="menu-icon fa fa-caret-right"></i>Slider</a>
				<b class="arrow"></b>
			</li>
			<li class="">
				<a href="<?php echo base_url()?>admin/pengaturan/about"><i class="menu-icon fa fa-caret-right"></i>Deskripsi Singkat</a>
				<b class="arrow"></b>
			</li>
			<li class="">
				<a href="<?php echo base_url()?>admin/pengaturan/sambutan"><i class="menu-icon fa fa-caret-right"></i>Sambutan Kepala Sekolah</a>
				<b class="arrow"></b>
			</li>
			
			<li class="">
				<a href="<?php echo base_url()?>admin/pengaturan/kemitraan"><i class="menu-icon fa fa-caret-right"></i>Kemitraan</a>
				<b class="arrow"></b>
			</li>

			<li class="">
				<a href="<?php echo base_url()?>admin/pengaturan/sosmed"><i class="menu-icon fa fa-caret-right"></i>Sosial Media</a>
				<b class="arrow"></b>
			</li>

			
		</ul>
	</li>

				<div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
					<i id="sidebar-toggle-icon" class="ace-icon fa fa-angle-double-left ace-save-state" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
				</div>
			</div>
<!-- end if akses administrator -->




<!-- hak akses admin publish -->
<?php 
	elseif ($this->session->userdata('hak_akses') === 'Admin Publish'):
 ?>

<ul class="nav nav-list">
					<li class="active">
						<a href="<?php echo base_url();?>admin/dashboard">
							<i class="menu-icon fa fa-home"></i>
							<span class="menu-text"> Dashboard </span>
						</a>

						<b class="arrow"></b>
					</li>

					<li class="">
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa fa-desktop"></i>
							<span class="menu-text">
								Data Master
							</span>

							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>

						<ul class="submenu">

							
							<li class="">
								<a href="<?php echo base_url();?>admin/kategori-artikel">
									<i class="menu-icon fa fa-caret-right"></i>
									Data Kategori Artikel
								</a>

								<b class="arrow"></b>
							</li>

							
						</ul>
					</li>



					<li class="">
		<a href="#" class="dropdown-toggle">
			<i class="menu-icon fa fa-list"></i><span class="menu-text"> Data Berita </span>
			<b class="arrow fa fa-angle-down"></b>
		</a>
		<b class="arrow"></b>
		<ul class="submenu">
			<li class="">
				<a href="<?php echo base_url('admin/berita');?>"><i class="menu-icon fa fa-caret-right"></i>Semua Artikel Berita</a>
				<b class="arrow"></b>
			</li>
			<li class="">
				<a href="#" class="dropdown-toggle"><i class="menu-icon fa fa-pencil-square-o"></i><span class="menu-text">Kategori Berita</span>
					<b class="arrow fa fa-angle-down"></b>
				</a>
				<b class="arrow"></b>
				<ul class="submenu">
					
					<?php
						$this->db->order_by('id_kat_artikel');
				        $data = $this->db->get('tb_kat_artikel');
						foreach ($data->result() as $row) {?>
							<li class="">
							<a href="<?php echo base_url();?>admin/berita/kategori-berita/<?php echo $row->nama_kat_artikel?>"><i class="menu-icon fa fa-caret-right"></i>
								<?php echo $row->nama_kat_artikel?>
							</a>
							<b class="arrow"></b>
						</li>
					<?php } ?>
							
				</ul>
			</li>
		</ul>



			<!-- <li class="">
						<a href="<?php echo base_url();?>sistem">
							<i class="menu-icon fa fa-info-circle"></i>
							<span class="menu-text"> Tentang Sistem </span>
						</a>

						<b class="arrow"></b>
					</li> -->

				<div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
					<i id="sidebar-toggle-icon" class="ace-icon fa fa-angle-double-left ace-save-state" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
				</div>
			</div>

<!-- end if hak akses admin publish -->
<?php endif; ?>







<!-- hak akses admin_siswa -->
<?php 
	if ($this->session->userdata('hak_akses') === 'Admin Siswa'):
?>

<ul class="nav nav-list">
					<li class="">
						<a href="<?php echo base_url();?>admin/dashboard">
							<i class="menu-icon fa fa-home"></i>
							<span class="menu-text"> Dashboard </span>
						</a>

						<b class="arrow"></b>
					</li>

					<!-- <li class="">
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa fa-desktop"></i>
							<span class="menu-text">
								Data Master
							</span>

							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>

						<ul class="submenu">

							
							<li class="">
								<a href="<?php echo base_url();?>kat_siswa">
									<i class="menu-icon fa fa-caret-right"></i>
									Data Kategori Siswa
								</a>

								<b class="arrow"></b>
							</li>

						</ul>
					</li> -->

				<li class="">
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa fa-list"></i>
							<span class="menu-text"> Data Kesiswaan </span>

							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>

						<ul class="submenu">

								<!-- <li class="">
								<a href="<?php echo base_url();?>admin/siswa	">
									<i class="menu-icon fa fa-pencil-square-o"></i>
									 Semua Artikel Siswa
								</a>

								<b class="arrow"></b>
							</li> -->

						<li class="">
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa fa-pencil-square-o"></i>
							<span class="menu-text">
								Artikel Siswa
							</span>

							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>

						<ul class="submenu">
									<li class="">
										<a href="<?php echo base_url();?>admin/berita/kategori-berita/Non%20Akademik">
											<i class="menu-icon fa fa-caret-right"></i>
											Organisasi
										</a>		
										<b class="arrow"></b>
									</li>
						</ul>
						<ul class="submenu">
							
						<?php
									$this->db->order_by('id_kat_siswa');
							        $data = $this->db->get('tb_kat_siswa');
									foreach ($data->result() as $row) {?>
									<li class="">
										<a href="<?php echo base_url();?>admin/siswa/kategori-siswa/<?php echo $row->nama_kat_siswa?>">
											<i class="menu-icon fa fa-caret-right"></i>
											<?php echo $row->nama_kat_siswa?>
										</a>		
										<b class="arrow"></b>
									</li>
								<?php } ?>


						</ul>

						

					</li>

				</li>

			</ul><!-- /.nav-list -->

			<!-- <li class="">
						<a href="<?php echo base_url();?>sistem">
							<i class="menu-icon fa fa-info-circle"></i>
							<span class="menu-text"> Tentang Sistem </span>
						</a>

						<b class="arrow"></b>
					</li> -->

				<div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
					<i id="sidebar-toggle-icon" class="ace-icon fa fa-angle-double-left ace-save-state" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
				</div>
			</div>
<?php endif; ?>
<!-- end if akses admin_siswa -->