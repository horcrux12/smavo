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
     
      <a href="<?php echo base_url();?>guru">
      <button type="button" class="btn btn-warning btn-sm pull-right">
      <i class="fa  fa-arrow-circle-left"> &nbsp;</i>
      Kembali  
      </button>
      </a>
      </i>          
            <?php
            $key = $this->uri->segment(3);
            $this->db->where('id_guru',$key);
            $query = $this->db->get('tb_guru');
            foreach ($query->result() as $row) {
            ?>


            <div class="page-header">
              <h1>
                <?php echo $row->nama_lengkap;?>
                <small>
                  <i class="ace-icon fa fa-angle-double-right"></i> Dengan ID Guru
                  ( <?php echo $row->id_guru  ;?> )
                </small>
              </h1>
            </div><br><br><br><!-- /.page-header -->

                <div>
                  <div id="user-profile-1" class="user-profile row">
                    <div class="col-xs-12 col-sm-3 center">
                      <div>
                      <?php
                                $set = getimagesize(base_url().'assets/photo/guru/'.$row->foto);
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
                          <img id="avatar" width="300" class="editable img-responsive" src=<?php echo base_url('assets/photo/guru/'.$row->foto.'');?>>
                        </span>
                        
                        <div class="space-4"></div>
                        <div class="width-80 label label-info label-xlg arrowed-in arrowed-in-right">
                          <div class="inline position-relative">
                            <span class="white"><?php echo $row->nama_lengkap;?></span>
                          </div>
                        </div>
                      </div>
                  </div>
                                

                    <div class="col-xs-12 col-sm-9">
                      <div class="profile-user-info profile-user-info-striped">
                        
                        <div class="profile-info-row">
                          
                          <div class="profile-info-name"> ID Guru </div>

                          <div class="profile-info-value">
                            <span class="editable" id="username"><?php echo $row->id_guru;?></span>
                          </div>
                        </div>

            
                        <div class="profile-info-row">
                          <div class="profile-info-name"> NIP/NUPTK </div>

                          <div class="profile-info-value">
                            <span class="editable" id="username"><?php echo $row->nip;?></span>
                          </div>
                        </div>

                        <div class="profile-info-name"> Nama Lengkap </div>

                          <div class="profile-info-value">
                            <span class="editable" id="username"><?php echo $row->nama_lengkap;?></span>
                          </div>

                        
                          <div class="profile-info-row">
                          <div class="profile-info-name"> Tempat, Tanggal Lahir </div>

                          <div class="profile-info-value">
                            <span class="editable" id="username"><?php echo $row->tempat_lahir?>, <?php echo $row->tgl_lahir?></span>
                          </div>
                          </div>


                               <?php

                                      $key = $this->uri->segment(3);
                                      $this->db->where('id_guru',$key);
                                      $this->db->select('*');
                                      $this->db->from('tb_guru');
                                      $this->db->join('tb_jabatan','tb_jabatan.id_jabatan = tb_guru.id_jabatan');

                                      $query = $this->db->get();
                                      foreach ($query->result() as $row) {
                                    
                                  ?>   

                          <div class="profile-info-row">
                          <div class="profile-info-name"> Jabatan </div>
                          <div class="profile-info-value">
                            <span class="editable" id="username"><?php echo $row->nama_jabatan?></span>
                           <?php } ?>   
                          </div>
                          </div>


                          <?php

                                      $key = $this->uri->segment(3);
                                      $this->db->where('id_guru',$key);
                                      $this->db->select('*');
                                      $this->db->from('tb_guru');
                                      $this->db->join('tb_mapel','tb_mapel.id_mapel = tb_guru.id_mapel');

                                      $query = $this->db->get();
                                      foreach ($query->result() as $row) {
                                    
                                  ?>
                            

                          <div class="profile-info-row">
                          <div class="profile-info-name"> Mata Pelajaran</div>

                          <div class="profile-info-value">
                            <span class="editable" id="username"><?php echo $row->nama_mapel?></span>
                            <?php } ?>
                          </div>
                          </div> 

                                                  

                        </div>
                      </div>
                    </div>
                  </div>
<?php } ?>

<!--   end hak akses admin -->
<?php endif; ?>
