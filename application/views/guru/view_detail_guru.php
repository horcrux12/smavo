  <!-- hak akses admin -->
  <style>
   .ubah{
      transform: rotate(90deg) !important
       }
  </style>
  
  <?php 
    if ($this->session->userdata('hak_akses') === 'Administrator'):
 ?>

   <!-- Kembali -->
     
      <a href="<?php echo base_url();?>admin/guru">
      <button type="button" class="btn btn-warning btn-sm pull-right">
      <i class="fa  fa-arrow-circle-left"> &nbsp;</i>
      Kembali  
      </button>
      </a>
      </i>          
            

            <div class="page-header">
              <h1>
                <?php echo $nama;?>
                <small>
                  <i class="ace-icon fa fa-angle-double-right"></i> Dengan ID Guru
                  ( <?php echo $kode  ;?> )
                </small>
              </h1>
            </div><br><br><br><!-- /.page-header -->

                <div>
                  <div id="user-profile-1" class="user-profile row">
                    <div class="col-xs-12 col-sm-3 center">
                      <div>
                      <?php
                                $set = getimagesize(base_url().'assets/photo/guru/'.$file_name);
                                if ($set) {
                                  // width
                                  $ambilst = explode (" ",$set[3]);
                                  $ambilsts = str_replace('width="',"",$ambilst[0]);
                                  $ambilstst = str_replace('"',"",$ambilsts);
                                  if($ambilstst > 1800){
                                    
                                    $ubahnya = "ubah";
                                    // echo '';
                                  }else{
                                    
                                    $ubahnya = "";
                                  }
                                }
                                
                              ?>  
                        <span class="profile-picture <?= $ubahnya?>">
                          <img id="avatar" width="300" class="editable img-responsive" src=<?php echo base_url('assets/photo/guru/'.$file_name.'');?>>
                        </span>
                        
                        <div class="space-4"></div>
                        <div class="width-80 label label-info label-xlg arrowed-in arrowed-in-right">
                          <div class="inline position-relative">
                            <span class="white"><?php echo $nama;?></span>
                          </div>
                        </div>
                      </div>
                  </div>
                                

                    <div class="col-xs-12 col-sm-9">
                      <div class="profile-user-info profile-user-info-striped">
                        
                        <div class="profile-info-row">
                          
                          <div class="profile-info-name"> ID Guru </div>

                          <div class="profile-info-value">
                            <span class="editable" id="username"><?php echo $kode;?></span>
                          </div>
                        </div>

            
                        <div class="profile-info-row">
                          <div class="profile-info-name"> NIP/NUPTK </div>

                          <div class="profile-info-value">
                            <span class="editable" id="username"><?php echo $nip;?></span>
                          </div>
                        </div>

                        <div class="profile-info-name"> Nama Lengkap </div>

                          <div class="profile-info-value">
                            <span class="editable" id="username"><?php echo $nama;?></span>
                          </div>

                        
                          <div class="profile-info-row">
                          <div class="profile-info-name"> Tempat, Tanggal Lahir </div>

                          <div class="profile-info-value">
                            <span class="editable" id="username"><?php echo $tempat?>, <?php echo $tanggal?></span>
                          </div>
                          </div>


                          <div class="profile-info-row">
                          <div class="profile-info-name"> Jabatan </div>
                          <div class="profile-info-value">
                            <span class="editable" id="username"><?php echo $nama_jabatan?></span>
                          
                          </div>
                          </div>

                          <div class="profile-info-row">
                          <div class="profile-info-name"> Mata Pelajaran</div>

                          <div class="profile-info-value">
                            <span class="editable" id="username"><?php echo $nama_mapel?></span>
                            
                          </div>
                          </div> 

                                                  

                        </div>
                      </div>
                    </div>
                  </div>


<!--   end hak akses admin -->
<?php endif; ?>
