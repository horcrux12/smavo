  <!-- hak akses admin -->
  <?php 
    if ($this->session->userdata('hak_akses') === 'Administrator'):
 ?>

   <!-- Kembali -->
     
      <a href="<?php echo base_url();?>admin/administrator">
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
                  <i class="ace-icon fa fa-angle-double-right"></i> Dengan ID User
                  ( <?php echo $kode  ;?> )
                </small>
              </h1>
            </div><!-- /.page-header -->



            <div class="row">
              <div class="col-xs-12">
                <!-- PAGE CONTENT BEGINS -->
                <div class="clearfix">
                  
                  </div>
                  </div>
                </div>

                


                <div>
                  <div id="user-profile-1" class="user-profile row">
                    <div class="col-xs-12 col-sm-3 center">
                      <div>
                        <span class="profile-picture">
                          

                          <img id="avatar" class="editable img-responsive" src=<?php echo base_url('assets/photo/user/'.$file_name.'');?>>

                          
                        </span>

                        <div class="space-4"></div>

                        <div class="width-80 label label-info label-xlg arrowed-in arrowed-in-right">
                          <div class="inline position-relative">
                            
                              
                              <span class="white"><?php echo $nama;?></span>
                            

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
                          <div class="profile-info-name"> ID User </div>

                          <div class="profile-info-value">
                            <span class="editable" id="username"><?php echo $kode;?></span>
                          </div>
                        </div>

            

                        <div class="profile-info-name"> Nama Lengkap </div>

                          <div class="profile-info-value">
                            <span class="editable" id="username"><?php echo $nama;?></span>
                          </div>

                        
                          <div class="profile-info-row">
                          <div class="profile-info-name"> Username </div>

                          <div class="profile-info-value">
                            <span class="editable" id="username"><?php echo $user?></span>
                          </div>
                          </div>


                             
                          <div class="profile-info-row">
                          <div class="profile-info-name"> Hak Akses </div>
                          <div class="profile-info-value">
                            <span class="editable" id="username"><?php echo $hak?></span>
                           
                          </div>
                          </div>


                          

                                                  

                        </div>
                      </div>
                    </div>
                  </div>
<!--   end hak akses admin -->
<?php endif; ?>
