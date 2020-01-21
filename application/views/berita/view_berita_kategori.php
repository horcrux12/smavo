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
						<th align="center">No</th>
						<!-- <th>Kode </th> -->
						<th class="col-md-1">Kategori</th>
						<th class="col-md-2">Penulis</th>
						<th class="col-md-4">Judul</th>
						<th class="col-md-1">Foto Utama</th>
						<th class="col-md-3">Isi berita</th>
						<th class="col-md-1">Aksi</th>
					</tr>
				</thead>

				<tbody>
					<?php
					$no = 1;
					foreach ($data as $row) :
					?>
						<tr>
							<td align="center"><?php echo $no++; ?></td>
							<!-- <td><?php echo $row->id_berita ?></td> -->
							<td><?php echo $row->nama_kat_artikel ?></td>
							<td><?php echo $row->nama ?></td>
							<td><?php echo $row->judul ?></td>
							<td align="center">
								<img class="img-circle" width="70" height="70" src=<?php echo base_url('assets/photo/' . $row->foto . ''); ?>>
							</td>


							<td>
								<?php $data = $row->deskripsi;
								$cut = substr($data, 0, 200);
								echo $cut;
								echo " .... " ?>
								<a href="<?php echo base_url(); ?>berita/detail/<?php echo $row->id_berita ?>"></a>
							</td>
							<td>
								<div class="hidden-sm hidden-xs action-buttons">
									<a class="blue tooltip-info" title="Detail" data-rel="tooltip" href="<?php echo base_url(); ?>admin/berita/detail-berita/<?php echo $row->id_berita ?>">
										<i class="ace-icon fa fa-search-plus bigger-130"></i>
									</a>

									<a class="green tooltip-info" title="Edit" data-rel="tooltip" href="<?php echo base_url(); ?>admin/berita/ubah-berita/<?php echo $row->id_berita ?>">
										<i class="ace-icon fa fa-pencil bigger-130"></i>
									</a>

									<a class="red tooltip-info" title="Hapus" data-rel="tooltip" href="<?php echo base_url(); ?>berita/delete/<?php echo $row->id_berita ?>">
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