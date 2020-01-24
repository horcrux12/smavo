<style>
	td p img {
		width: 590px !important
	}
</style>
<?php
$info = $this->session->flashdata('info');
if (!empty($info)) {

	echo "<div class='alert alert-success alert-dismissible'>";
	echo "<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>";
	echo "</button>";
	echo "<i class='icon fa fa-check'>";
	echo "</i>";
	echo $info;
	echo "</div>";
}
?>

<!-- INFO -->
<?php
$info_hapus = $this->session->flashdata('info_hapus');
if (!empty($info_hapus)) {

	echo "<div class='alert alert-success alert-dismissible'>";
	echo "<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>";
	echo "</button>";
	echo "&nbsp; <i class='icon fa fa-check'>";
	echo "</i>";
	echo $info_hapus;
	echo "</div>";
}
?>

<div class="row">
	<div class="col-xs-12">
		<h3 class="header smaller lighter blue"><?= $sub_judul ?></h3>

		<div class="clearfix mb-3">
			<div class="pull-right tableTools-container">cobas</div>
			<a href="<?php echo base_url(); ?>admin/berita/tambah-berita/<?= $kd_judul ?>" class="btn btn-primary btn-small">
				<i class="fa fa-plus-circle">&nbsp;&nbsp;</i>Tambah Data Berita - <?= $judul_tambah ?></a><br><br>
		</div>
		<div class="table-header">
			Data berita
		</div>

		<!-- div.table-responsive -->

		<!-- div.dataTables_borderWrap -->
		<div>
			<table id="dynamic-table" class="table table-striped table-bordered table-hover">
				<thead>
					<tr>
						<th class="center">No</th>
						<!-- <th>Kode </th> -->
						<th class="col-md-1">Nama</th>
						<th class="col-md-2">Foto</th>
						<th class="col-md-4">Link Website</th>
						<th class="col-md-1">Aksi</th>
					</tr>
				</thead>

				<tbody>
					<?php
					$no = 1;
					foreach ($data as $row) :
					?>
						<tr>
							<td class="center"><?php echo $no++; ?></td>
							<!-- <td><?php  ?></td> -->
							<td><?php ?></td>
							<td class="center">
							<div>
                              <ul class="ace-thumbnails clearfix">
                                <li class >
                                  <a href="<?= base_url()?>assets/photo/berita/<?= $row->foto?>" data-rel="colorbox">
                                    <img width="80" height="80" alt="150x150" src="<?= base_url()?>assets/photo/berita/<?= $row->foto;?>" />
                                    <div class="text">
                                      <div class="inner"><?php echo $row->judul?></div>
                                    </div>
                                  </a>
                                </li>
                              </ul>
                            </div>
							</td>
                            <td><?php ?></td>
							<td>
								<div class="hidden-sm hidden-xs action-buttons">
									<a class="blue tooltip-info" title="Detail" data-rel="tooltip" href="<?php echo base_url(); ?>admin/berita/detail-berita/<?php echo $row->id_berita ?>">
										<i class="ace-icon fa fa-search-plus bigger-130"></i>
									</a>

									<a class="green tooltip-info" title="Edit" data-rel="tooltip" href="<?php echo base_url(); ?>admin/berita/ubah-berita/<?php echo $row->id_berita ?>">
										<i class="ace-icon fa fa-pencil bigger-130"></i>
									</a>

									<a class="red tooltip-info" title="Hapus" data-rel="tooltip" href="<?php echo base_url(); ?>admin/berita/hapus-berita/<?php echo $row->id_berita ?>"onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')">
										<i class="ace-icon fa fa-trash-o bigger-130"></i>
									</a>
								</div>
								<div class="hidden-md hidden-lg">
									<div class="inline pos-rel">
										<button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown" data-position="auto">
											<i class="ace-icon fa fa-caret-down icon-only bigger-120"></i>
										</button>

										<ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
											<li>
												<a href="#" class="tooltip-info" data-rel="tooltip" title="View">
													<span class="blue">
														<i class="ace-icon fa fa-search-plus bigger-120"></i>
													</span>
												</a>
											</li>

											<li>
												<a href="#" class="tooltip-success" data-rel="tooltip" title="Edit">
													<span class="green">
														<i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
													</span>
												</a>
											</li>

											<li>
												<a href="#" class="tooltip-error" data-rel="tooltip" title="Delete">
													<span class="red">
														<i class="ace-icon fa fa-trash-o bigger-120"></i>
													</span>
												</a>
											</li>
										</ul>
									</div>
								</div>
							</td>
						</tr>
					<?php
					endforeach;
					?>
				</tbody>
			</table>
		</div>
	</div>
</div>