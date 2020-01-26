
<!-- INFO -->
<?php
$info = $this->session->flashdata('info');
if(!empty($info))

{

  echo "<div class='alert alert-success alert-dismissible'>";
  echo "<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>"; 
  echo "</button>";
  echo "<i class='icon fa fa-check'>"; 
  echo "</i>";
  echo $info;
  echo "</div>";
 
}
?>

<?php
$info_hapus = $this->session->flashdata('info_hapus');
if(!empty($info_hapus))

{

  echo "<div class='alert alert-success alert-dismissible'>";
  echo "<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>"; 
  echo "</button>";
  echo "&nbsp; <i class='icon fa fa-check'>"; 
  echo "</i>";
  echo $info_hapus;
  echo "</div>";
 
}
?>

<!-- INFO -->
<?php 
$info_gagal = $this->session->flashdata('info_gagal');
if(!empty($info_gagal))
{
  echo "<div class='alert alert-danger alert-dismissible'>";
  echo "<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>"; 
  echo "</button>";
  echo "<i class='icon fa fa-times'>"; 
  echo "</i>";
  echo $info_gagal;
  echo "</div>";
} 
?>
<!-- END INFO -->
<!-- END INFO -->

            <div class="row">
                  <div class="col-xs-12">
                    <h3 class="header smaller lighter blue">DATA USER SMAN 2 CIBINONG</h3>

                    <div class="clearfix">

                      <div class="pull-right tableTools-container"></div>

                        <a href="<?php echo base_url();?>user/tambah" class="btn btn-primary btn-small">
                    <i class="fa fa-plus-circle">&nbsp;&nbsp;</i>Tambah Data User</a>
                      <br>
                    <br>
                  </div>
                    <div class="table-header">
                     DATA USER SMAN 2 CIBINONG
                    </div>

                    <!-- div.table-responsive -->

                    <!-- div.dataTables_borderWrap -->
                    <div>
                      <table id="dynamic-table" class="table table-striped table-bordered table-hover">

                        <thead>
                          <tr>

                            
                            <th class="center">No</th>
                            <th>ID User</th>
                            <th>Nama Lengkap</th>
                            <th>Username</th>
                            <th>Hak Akses</th>
                            <th>Foto</th>
                            <th>Aksi</th>

                            
                     </tr>
                        </thead>

                        <tbody>
                          <tr>


                                        <!-- MENAMPILKAN DATA user -->
                            <?php

                            $no=1;

                            foreach ($data->result() as $row) {
                              
                            ?>

                            

                            <td class="center"><?php echo $no++; ?></td>
                            <td><?php echo $row->id_user?></td>
                            <td><?php echo $row->nama?></td>
                            <td><?php echo $row->username?></td>
                            <td><?php echo $row->hak_akses?></td>
                           
                           <td class="center">
                           <div>
                              <ul class="ace-thumbnails clearfix">
                                <li class >
                                  <a href="<?= base_url()?>assets/photo/user/<?= $row->foto?>" data-rel="colorbox">
                                    <img width="80" height="80" alt="150x150" src="<?= base_url()?>assets/photo/user/<?= $row->foto;?>" />
                                    <div class="text">
                                      <div class="inner"><?php echo $row->nama?></div>
                                    </div>
                                  </a>
                                </li>
                              </ul>
                            </div>
                           </td>
                           <td class="center">
                              <div class="hidden-sm hidden-xs action-buttons">
                                      <a class="tooltip-info blue" href="<?php echo base_url();?>user/detail/<?php echo $row->id_user?>"  title="Detail"  data-rel="tooltip" >
                                        <i class="fa fa-search-plus bigger-130"  ></i>
                                      </a>

                                      <a class="tooltip-info green" href="<?php echo base_url();?>user/ubah/<?php echo $row->id_user?>" title="Edit"  data-rel="tooltip">
                                        <i class="fa fa-pencil bigger-130" ></i>
                                      </a>

                                      <a class="tooltip-info red" href="<?php echo base_url();?>user/delete/<?php echo $row->id_user?>"
                                       title="Hapus" data-rel="tooltip" onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')">

                                        <i class=" fa fa-trash-o bigger-130" ></i>
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