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
			<div class="pull-right tableTools-container"></div>
			<a href="<?php echo base_url(); ?>admin/pengaturan/sosmed/tambah-sosmed" class="btn btn-primary btn-small">
				<i class="fa fa-plus-circle">&nbsp;&nbsp;</i>Tambah <?php echo $sub_judul ?></a><br><br>
		</div>
		<div class="table-header">
			<?php echo $sub_judul ?>
		</div>
		<!-- div.table-responsive -->

		<!-- div.dataTables_borderWrap -->
		<div>
			<table id="dynamic-table" class="table table-striped table-bordered table-hover">
				<thead>
					<tr>
					<th hidden></th>
					<th hidden></th>
						<th width="50px" class="center">No</th>
						<th>Jenis</th>
						<th class="center">Nama</th>
						<th>Link Sosial Media</th>
						<th>Aksi</th>
					</tr>
				</thead>

				<tbody>
					<?php $no = 1;
					foreach ($data as $key) { ?>
						<tr>
							<td class="center">
								<?php echo $no++; ?>
							</td>
							<td hidden></td>
							<td hidden></td>
							<td><?php echo $key->jenis_sosmed ?></td>
							<td ><?php echo $key->nama_sosmed ?></td>
							<td>
								<a href="<?php echo $key->link_website ?>"><?php echo $key->link_website ?></a>
							</td>
							<td>
								<div class="hidden-sm hidden-xs action-buttons">

									<a class="green tooltip-info" title="Edit" data-rel="tooltip" href="<?php echo base_url(); ?>admin/pengaturan/sosmed/ubah-sosmed/<?php echo $key->id?>">
										<i class="ace-icon fa fa-pencil bigger-130"></i>
									</a>

									<a class="red tooltip-info" title="Hapus" data-rel="tooltip" href="<?php echo base_url(); ?>admin/pengaturan/sosmed/hapus-sosmed/<?php echo $key->id?>" onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')">
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
					} ?>
				</tbody>
			</table>
		</div>
	</div>
</div>