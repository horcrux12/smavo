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

<!-- INFO -->
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


<div class="row">
                  <div class="col-xs-12">
                    <h3 class="header smaller lighter blue">Data fasilitas</h3>

                    <div class="clearfix">

                      <div class="pull-right tableTools-container"></div>
              </div>


                    <div class="table-header">
                     Data fasilitas
                    </div>

                    <!-- div.table-responsive -->

                    <!-- div.dataTables_borderWrap -->
                    <div>
                      <table id="dynamic-table" class="table table-striped table-bordered table-hover">

                        <thead>
                          <tr>

                            
                            <th class="center">No</th>
                            <th class="center">Id fasilitas</th>
                            <th class="center">Nama fasilitas</th>
                            <th class="center">Foto</th>
                            <th colspan="3" class="center">Aksi</th>


                            
                     </tr>
                        </thead>

                        <tbody>
                          


                                        <!-- MENAMPILKAN DATA KATEGORI fasilitas-->
                            <?php

                            $no=1;

                            foreach ($data->result() as $row) {
                              
                            ?>

                            <tr>
                           
                            <td class="center"><?php echo $no++; ?></td>
                            <td><?php echo $row->id?></td>
                            <td><?php echo $row->nama_fasilitas?></td>

                            <td class="center">
							<div>
                              <ul class="ace-thumbnails clearfix">
                                <li class >
                                  <a href="<?= base_url()?>assets/photo/fasilitas/<?= $row->foto?>" data-rel="colorbox">
                                    <img width="80" height="80" alt="150x150" src="<?= base_url()?>assets/photo/fasilitas/<?= $row->foto;?>" />
                                    <div class="text">
                                      <!-- <div class="inner"><?php echo $row->nama_falitas?></div> -->
                                    </div>
                                  </a>
                                </li>
                              </ul>
                            </div>
							</td>
                            
                            <td class="hidden" > 
                                <div class="hidden-sm hidden-xs action-buttons">
                                      <a class="tooltip-info blue" href="<?php echo base_url();?>fasilitas/detail/<?php echo $row->id?>" title="Detail" data-rel="tooltip" >
                                        <i class="fa fa-search-plus bigger-130"  ></i>
                                      </a>
                                  </td> 

                            <td class="center">
                                
                                <a class="tooltip-info green" href="<?php echo base_url();?>admin/fasilitas/ubah-fasilitas/<?php echo $row->id?>" title="Edit" data-rel="tooltip">
                                        <i class="fa fa-pencil bigger-130" ></i>
                                      </a>
                            </td>

                           <td class="center">
                             

                                      
                                      <a class="tooltip-info red" href="<?php echo base_url();?>admin/fasilitas/hapus-fasilitas/<?php echo $row->id?>"
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
