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
    <h3 class="header smaller lighter blue">Data Mata Pelajaran</h3>

    <div class="clearfix">

      <div class="pull-right tableTools-container"></div>


      <a href="<?php echo base_url(); ?>admin/kategori-mapel/tambah-mapel" class="btn btn-primary btn-small">
        <i class="fa fa-plus-circle">&nbsp;&nbsp;</i>Tambah Data Mata Pelajaran</a>
      <br>
      <br>
    </div>


    <div class="table-header">
      Data Mata Pelajaran
    </div>

    <!-- div.table-responsive -->

    <!-- div.dataTables_borderWrap -->
    <div>
      <table id="dynamic-table" class="table table-striped table-bordered table-hover">

        <thead>
          <tr>

            <th class="hidden"></th>
            <th class="hidden"></th>
            <th width="50px" class="center">No</th>
            <th class="center">Id Mata Pelajaran</th>
            <th class="center">Nama Mata Pelajaran</th>
            <th colspan="4" class="center">Aksi</th>



          </tr>
        </thead>

        <tbody>



          <!-- MENAMPILKAN DATA KATEGORI MAPEL-->
          <?php

          $no = 1;

          foreach ($data->result() as $row) {

          ?>

            <tr>
              <td class="hidden"></td>
              <td class="hidden"></td>
              <td class="center"><?php echo $no++; ?></td>
              <td><?php echo $row->id_mapel ?></td>
              <td><?php echo $row->nama_mapel ?></td>

              <td class="center">

                <a class="tooltip-info green" href="<?php echo base_url(); ?>admin/kategori-mapel/ubah-mapel/<?php echo $row->id_mapel ?>" title="Edit" data-rel="tooltip">
                  <i class="fa fa-pencil bigger-130"></i>
                </a>


              </td>

              <td class="center">



                <a class="tooltip-info red" href="<?php echo base_url(); ?>admin/kategori-mapel/hapus-mapel/<?php echo $row->id_mapel ?>" title="Hapus" data-rel="tooltip" onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')">

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