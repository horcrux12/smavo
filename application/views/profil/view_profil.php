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
    <h3 class="header smaller lighter blue">DATA PROFIL</h3>

    <div class="clearfix">

      <div class="pull-right tableTools-container"></div>


      <a href="<?php echo base_url(); ?>profil/tambah" class="btn btn-primary btn-small">
        <i class="fa fa-plus-circle">&nbsp;&nbsp;</i>Tambah Data profil</a>
      <br>
      <br>
    </div>


    <div class="table-header">
      Data profil
    </div>

    <!-- div.table-responsive -->

    <!-- div.dataTables_borderWrap -->
    <div>
      <table id="dynamic-table" class="table table-striped table-bordered table-hover">

        <thead>
          <tr>

            <th>#</th>
            <th align="center">No</th>
            <th>Kode </th>
            <th>Kategori</th>
            <th colspan="2">Isi profil</th>
            <th>Aksi</th>



          </tr>
        </thead>

        <tbody>



          <!-- MENAMPILKAN DATA profil-->
          <?php

          $no = 1;


          foreach ($data->result() as $row) {

          ?>

            <tr>
              <td>#</td>
              <td align="center"><?php echo $no++; ?></td>
              <td><?php echo $row->id_info ?></td>
              <td><?php echo $row->id_kat_profil ?></td>
              <td><?php echo $row->penulis ?></td>

              <td colspan="2">
                <?php $data = $row->deskripsi;
                $cut = substr($data, 0, 200);
                echo $cut;
                echo " .... " ?>
                <br>
                <a href="<?php echo base_url(); ?>profil/detail/<?php echo $row->id_info ?>"> ( Selanjutnya )</a> </td>





              <td align="center">
                <div class="hidden-sm hidden-xs action-buttons">
                  <a class="blue" href="<?php echo base_url(); ?>profil/detail/<?php echo $row->id_info ?>" id="show-option3" title="Detail" class="tooltip-info" data-rel="tooltip">
                    <i class="fa fa-search-plus bigger-130"></i>
                  </a>

                  <a class="green" href="<?php echo base_url(); ?>profil/ubah/<?php echo $row->id_info ?>" id="show-option2" title="Edit" class="tooltip-info" data-rel="tooltip">
                    <i class="fa fa-pencil bigger-130"></i>
                  </a>

                  <a class="red" href="<?php echo base_url(); ?>profil/delete/<?php echo $row->id_info ?>" id="show-option1" title="Hapus" class="tooltip-info" data-rel="tooltip" onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')">

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