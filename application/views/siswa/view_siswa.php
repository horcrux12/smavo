<style>
td p  img{
  width: 590px !important
}
</style>

<div class="row">
                  <div class="col-xs-12">
                    <h3 class="header smaller lighter blue"><?= $sub_judul?></h3>

                    <div class="clearfix">

                      <div class="pull-right tableTools-container"></div>                    
                  <br>
                <br>
              </div>


                    <div class="table-header">
                     Data siswa
                    </div>

                    <!-- div.table-responsive -->

                    <!-- div.dataTables_borderWrap -->
                    <div>
                      <table id="dynamic-table" class="table table-striped table-bordered table-hover">

                        <thead>
                          <tr>

                            <th class="center">No</th>
                            <!-- <th>Kode </th> -->
                            <th class="col-md-1">Kategori</th>
                            <th class="col-md-2">Penulis</th>
                            <th class="col-md-4">Judul</th>
                            <th class="col-md-1">File</th>
                            <th class="col-md-3">Deskripsi</th>
                            <th class="col-md-1">Aksi</th>


                            
                     </tr>
                        </thead>

                        <tbody>
                          


                                        <!-- MENAMPILKAN DATA siswa-->
                            <?php

                            $no=1;
                            foreach ($data as $row) {
                            ?>
                            <tr>
                            <td class="center"><?php echo $no++; ?></td>
                            <!-- <td><?php echo $row->id_artikel?></td> -->
                            <td><?php echo $row->nama_kat_siswa?></td>
                            <td><?php echo $row->nama?></td>
                            <td><?php echo $row->judul?></td>
                            <td class="center">
                            <a href="<?php echo base_url('assets/file/'.$row->file.'');?>" class="btn btn-primary"> <i class="fa fa-download"> &nbsp;</i>Download</a>
                           </td>

                           
                            <td>
                                             <?php $data=$row->deskripsi;
                                             $cut=substr($data,0,200);
                                             echo $cut;
                                  echo " .... " ?>  
                                  <br>
                            <a href="<?php echo base_url();?>siswa/detail/<?php echo $row->id_artikel?>"></a> </td>
                           
                           <td class="center">
                              <div class="hidden-sm hidden-xs action-buttons">
                                      <a id="btn-detail" class="blue" href="<?php echo base_url();?>admin/siswa/detail-siswa/<?php echo $row->id_artikel?>" id="show-option3" title="Detail"  class="tooltip-info" data-rel="tooltip" >
                                        <i class="fa fa-search-plus bigger-130"  ></i>
                                      </a>

                                      <a id="btn-ubah" class="green" href="<?php echo base_url();?>admin/siswa/ubah-siswa/<?php echo $row->id_artikel?>" id="show-option2" title="Edit" class="tooltip-info" data-rel="tooltip">
                                        <i class="fa fa-pencil bigger-130" ></i>
                                      </a>

                                      <a  class="red" href="<?php echo base_url();?>siswa/delete/<?php echo $row->id_artikel?>"
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