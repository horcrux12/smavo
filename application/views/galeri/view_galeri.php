
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
<!-- END INFO -->

<div class="row">
  <div class="col-xs-12">
    <h3 class="header smaller lighter blue">DATA GALERI</h3>

    <div class="clearfix">

      <div class="pull-right tableTools-container"></div>

      <!-- <a href="<?php echo base_url(); ?>admin/guru/tambah-guru" class="btn btn-primary btn-small">
        <i class="fa fa-plus-circle">&nbsp;&nbsp;</i>Tambah Data Galeri/a> -->
      <br>
      <br>
    </div>
    <div class="table-header">
      Data Galeri
    </div>

    <!-- div.table-responsive -->

    <!-- div.dataTables_borderWrap -->
    <div>
      <table id="dynamic-table" class="table table-striped table-bordered table-hover">
        <thead>
          <tr>
			<th class="hidden"></th>
			<th class="hidden"></th>
			<th class="col-md-2">No</th>
			<th class="center">Foto</th>
			<th colspan="4" class="center">Aksi</th>
          </tr>
        </thead>
        <tbody>
         
          <?php
          $no = 1;
          foreach ($data as $row) {
          ?>
            <tr>
			<td hidden></td>
			<td hidden></td>
			<td hidden></td>
			<td hidden></td>
            <td class="center"><?php echo $no++; ?></td>
            <td class="col-lg-8">
                <div>
                  <ul class="ace-thumbnails clearfix">
                    <li class>
					<a href="<?= base_url()?>assets/photo/berita/<?= $row->foto?>" data-rel="colorbox">
                        <img width="700" id="" height="400" alt="150x150" src="<?= base_url() ?>assets/photo/berita/<?= $row->foto; ?>" />
                        <div class="text">
                          <div class="inner"><?php echo $row->id_berita ?></div>
                        </div>
                      </a>
                    </li>
                  </ul>
                </div>
              </td>
              
              <td class="center">
                <a class="tooltip-info red" href="<?php echo base_url(); ?>admin/galeri/hapus-galeri/<?php echo $row->id_galeri?>" title="Hapus" data-rel="tooltip" onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')">
                  <i class=" fa fa-trash-o bigger-130"></i>
                </a>
    </div>
    </td>
	
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
    </tr>
  <?php } ?>
  </tbody>
  </table>
  </div>
</div>
</div>
<script type="text/javascript">
  if ('ontouchstart' in document.documentElement) document.write("<script src='<?php echo base_url(); ?>assets/js/jquery.mobile.custom.min.js'>" + "<" + "/script>");
</script>
