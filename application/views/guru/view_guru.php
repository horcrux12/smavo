
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

                        <a href="<?php echo base_url();?>admin/guru/tambah-guru" class="btn btn-primary btn-small">
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

                            <th class="center">No</th>
                            <th class="center">NIP/NUPTK</th>
                            <th class="center">Nama Guru</th>
                            <th class="center">Foto</th>
                            <th colspan="4" class="center">Aksi</th>


                            
                     </tr>
                        </thead>

                        <tbody>
                        


                                        <!-- MENAMPILKAN DATA KATEGORI GURU-->
                            <?php

                            $no=1;

                            foreach ($data->result() as $row) {
                              
                            ?>

                            
                            <tr>
                            <td class="center"><?php echo $no++; ?></td>
                            <td><?php echo $row->nip?></td>
                            <td><?php echo $row->nama_lengkap?></td>
                            <td class="center">
                              <?php
                                $set = getimagesize(base_url().'assets/photo/guru/'.$row->foto);
                                if ($set) {
                                  // width
                                  $ambilst = explode (" ",$set[3]);
                                  $ambilsts = str_replace('width="',"",$ambilst[0]);
                                  $ambilstst = str_replace('"',"",$ambilsts);

                                  // //height
                                  // $ambilsts1 = str_replace('height="',"",$ambilst[1]);
                                  // $ambilstst1 = str_replace('"',"",$ambilsts1);
                                  // // print_r($ambilstst1-200);
                                  // // echo "<br>";
                                  // // print_r($ambilstst1);

                                  if($ambilstst > 1800){
                                    
                                    $ubahnya = "ubah";
                                    echo '<style>
                                    #ubah{
                                      transform: rotate(90deg)
                                    }
                                  </style>';
                                  }else{
                                    
                                    $ubahnya = "";
                                    
                                  }
                                }
                                
                              ?>
                            <div>
                              <ul class="ace-thumbnails clearfix">
                                <li class >
                                  <a href="<?= base_url()?>assets/photo/guru/<?= $row->foto?>" data-rel="colorbox" target="__blank" data-ids="<?= $ubahnya?>">
                                    <img width="80" id="<?= $ubahnya?>" height="80" alt="150x150" src="<?= base_url()?>assets/photo/guru/<?= $row->foto;?>" />
                                    <div class="text">
                                      <div class="inner"><?php echo $row->nama_lengkap?></div>
                                    </div>
                                  </a>
                                </li>
                              </ul>
                            </div>
                         </td>

                            <td class="center" > 
                                <div class="hidden-sm hidden-xs action-buttons">
                                      <a class="tooltip-info blue" href="<?php echo base_url();?>admin/guru/detail-guru/<?php echo $row->id_guru?>" title="Detail" data-rel="tooltip">
                                        <i class="fa fa-search-plus bigger-130"  ></i>
                                      </a>
                                  </td>

                                

                            <td class="center">
                                
                                <a class="tooltip-info green" href="<?php echo base_url();?>admin/guru/ubah-guru/<?php echo $row->id_guru?>"  title="Ubah"  data-rel="tooltip">
                                        <i class="fa fa-pencil bigger-130" ></i>
                                      </a>

                            </td>

                           <td class="center">
                                      <a class="tooltip-info red" href="<?php echo base_url();?>admin/guru/hapus-guru/<?php echo $row->id_guru?>"
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
<script type="text/javascript">
	if ('ontouchstart' in document.documentElement) document.write("<script src='<?php echo base_url(); ?>assets/js/jquery.mobile.custom.min.js'>" + "<" + "/script>");
</script>
<script>
  // ubahimg();
  function ubahimg() {
    var myImg = document.getElementById('ubah');
    // var y = $(this).attr("data-id");
    alert(myImg.getAttribute('data-id'));
    // var currWidth = myImg.clientWidth;
    // var currHeigt = myImg.clientHeight;
  }
</script>