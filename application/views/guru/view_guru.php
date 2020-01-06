
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
<!-- END INFO -->

            <div class="row">
                  <div class="col-xs-12">
                    <h3 class="header smaller lighter blue">DATA GURU SMAN 2 CIBINONG</h3>

                    <div class="clearfix">

                      <div class="pull-right tableTools-container"></div>

                        <a href="<?php echo base_url();?>guru/tambah" class="btn btn-primary btn-small">
                    <i class="fa fa-plus-circle">&nbsp;&nbsp;</i>Tambah Data Guru</a>
                      <br>
                    <br>
                  </div>
                    <div class="table-header">
                     Data Guru SMAN 2 CIBINONG
                    </div>

                    <!-- div.table-responsive -->

                    <!-- div.dataTables_borderWrap -->
                    <div>
                      <table id="dynamic-table" class="table table-striped table-bordered table-hover">

                        <thead>
                          <tr>

                            <th align="center">No</th>
                            <th align="center">NIP/NUPTK</th>
                            <th align="center">Nama Guru</th>
                            <th align="center">Foto</th>
                            <th colspan="4" align="center">Aksi</th>


                            
                     </tr>
                        </thead>

                        <tbody>
                          <tr>


                                        <!-- MENAMPILKAN DATA KATEGORI GURU-->
                            <?php

                            $no=1;

                            foreach ($data->result() as $row) {
                              
                            ?>

                            
                            
                            <td align="center"><?php echo $no++; ?></td>
                            <td><?php echo $row->nip?></td>
                            <td><?php echo $row->nama_lengkap?></td>
                            <td align="center">
                              <img class="img-circle" width="70" height="70" src=<?php echo base_url('assets/photo/'.$row->foto.'');?>>
                           </td>

                           
                            
                            <td align="center" > 
                                <div class="hidden-sm hidden-xs action-buttons">
                                      <a class="blue" href="<?php echo base_url();?>guru/detail/<?php echo $row->id_guru?>" id="show-option3" title="Detail"  class="tooltip-info" data-rel="tooltip" >
                                        <i class="fa fa-search-plus bigger-130"  ></i>
                                      </a>
                                  </td>

                                

                            <td align="center">
                                
                                <a class="green" href="<?php echo base_url();?>guru/ubah/<?php echo $row->id_guru?>" id="show-option2" title="Ubah" class="tooltip-info" data-rel="tooltip">
                                        <i class="fa fa-pencil bigger-130" ></i>
                                      </a>


                            </td>

                           <td align="center">
                             

                                      
                                      <a class="red" href="<?php echo base_url();?>guru/delete/<?php echo $row->id_guru?>"
                                      id="show-option1" title="Hapus" class="tooltip-info" data-rel="tooltip" onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')">

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