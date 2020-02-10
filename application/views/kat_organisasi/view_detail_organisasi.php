    

  <!-- Kembali -->
  <a href="<?php echo base_url();?>admin/kategori-organisasi">
      <button type="button" class="btn btn-warning btn-sm pull-right">
      <i class="fa  fa-arrow-circle-left"> &nbsp;</i>Kembali</button>
      </a>
      </i><br>
      <!-- end kembali -->

            <div class="page-header">
              <h1>
               <?php echo $nama; ?>
              </h1>
            </div>
            <!-- /.page-header -->

                <div>
                  <div id="user-profile-1" class="user-profile row">
                    <div class="col-xs-12 col-sm-3 center">
                      <div>
                        <span class="profile-picture">
                          

                          <img id="avatar" class="editable img-responsive" src=<?php echo base_url('assets/photo/organisasi/logo/'.$file_name.'');?>>

                          
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
                          <div class="profile-info-name"> ID Organisasi </div>

                          <div class="profile-info-value">
                            <span class="editable" id="username"><?php echo $kode;?></span>
                          </div>
                        </div>

                        <div class="profile-info-row">
                          <div class="profile-info-name"> Nama Organisasi </div>
                          <div class="profile-info-value">
                            <span class="editable" id="jdl"><?php echo $nama;?></span>
                          </div>
                        </div>
                        
                        <div class="profile-info-row">
                          <div class="profile-info-name">Deskripsi Organisasi</div>
                          <div class="profile-info-value">
                            <span class="editable" id="jdl"><?php echo $isi;?></span>
                          </div>
                        </div>

                        <div class="profile-info-row">
                        <div class="profile-info-name"> Download File</div>

                        <div class="profile-info-value">
                          <span class="editable" id="username"><a href="<?php echo base_url('assets/file/'. $file_download .'');?>" class="btn btn-primary"> <i class="fa fa-download"> &nbsp;</i>Download</a></span>
                        </div>
                      </div>        
                        
                   </div>
                  </div>
                </div>
              </div>
                  


