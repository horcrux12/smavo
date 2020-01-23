  <!-- Kembali -->

   <?php
        $info = $this->session->flashdata('info');
        if(!empty($info))

        {

          echo "<div class='alert alert-success alert-dismissible col-xs-12>";
          echo "<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>"; 
          echo "</button>";
          echo "<i class='icon fa fa-check'>"; 
          echo "</i>";
          echo $info;
          echo "</div>";   
        }
        ?>           
  <a href="<?php echo base_url();?>profil/ubah/<?= $data[0]->id_info;?>">
      <button type="button" class="btn btn-warning btn-sm pull-right">
      <i class="fa fa-pencil bigger-130" >&nbsp;</i>
      Ubah Data 
      </button>
      </a>
      </i> 

              
             
            <?php
            foreach ($data as $row) {
            ?>
            <div class="page-header">
              <h1>
                <?php echo $row->judul?>
              </h1>
            </div>
            <!-- /.page-header -->

            


                <div>
                  <div id="user-profile-1" class="user-profile row">
                    <div class="col-xs-12 col-sm-3 center">
                      <div>
                        <span class="profile-picture">
                          

                          <img id="avatar" class="editable img-responsive" src=<?php echo base_url('assets/photo/profil/'.$row->foto.'');?>>

                          
                        </span>

                        <div class="space-4"></div>

                        <div class="width-80 label label-info label-xlg arrowed-in arrowed-in-right">
                          <div class="inline position-relative">
                              <span class="white">Foto Utama</span>
                          </div>
                        </div>
                      </div>

                      <div class="space-6"></div>
                      <div class="profile-contact-info">
                        <div class="space-6"></div>
                      </div>
                     </div>

                    <div class="col-xs-12 col-sm-9">
                      <div class="center"></div>

                      <div class="space-12"></div>

                      <div class="profile-user-info profile-user-info-striped">
                        <div class="profile-info-row">
                          <div class="profile-info-name"> ID Profil </div>

                          <div class="profile-info-value">
                            <span class="editable" id="username"><?php echo $row->id_info;?></span>
                          </div>
                        </div>

                        <div class="profile-info-row">
                          <div class="profile-info-name"> Penulis </div>
                          <div class="profile-info-value">
                            <span class="editable" id="jdl"><?php echo $row->nama;?></span>
                          </div>
                        </div>
                        

                        
                        <div class="profile-info-row">
                          <div class="profile-info-name"> Judul Profil</div>
                          <div class="profile-info-value">
                            <span class="editable" id="jdl"><?php echo $row->judul;?></span>
                          </div>
                        </div>



                        <div class="profile-info-row">
                          <div class="profile-info-name"> Kategori Profil</div>
                          <div class="profile-info-value">
                            <span class="editable" id="jdl"><?php echo $row->nama_kat_profil;?></span>
                            </div>
                            </div>
                                     
                          


                        <div class="profile-info-row">
                          <div class="profile-info-name"> Isi Profil</div>
                          <div class="profile-info-value">
                            <span class="editable" id="jdl"><?php echo $row->deskripsi;?></span>
                          </div>
                        </div>

                        <div class="profile-info-row">
                          <div class="profile-info-name"> Tanggal Update</div>
                          <div class="profile-info-value">
                            <span class="editable" id="jdl"><?php echo $row->tgl_update;?></span>
                          </div>
                        </div>
                   </div>
                  </div>
                </div>
              </div>
                  
<?php } ?>

