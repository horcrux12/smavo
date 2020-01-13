  <!-- Kembali -->
     
  <a href="<?php echo base_url();?>profil/ubah/<?= $data[0]->id_info;?>">
      <button type="button" class="btn btn-warning btn-sm pull-right">
      <i class="fa  fa-arrow-circle-left"> &nbsp;</i>
      Kembali  
      </button>
      </a>
      </i>          
            <?php
            $key = $this->uri->segment(3);
            $this->db->where('id_kat_profil',$key);
            $query = $this->db->get('tb_profil');
            foreach ($query->result() as $row) {
            ?>


            <div class="page-header">
              <h1>
                <?php echo $row->judul?>
              </h1>
            </div>
            <!-- /.page-header -->



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
                          

                          <img id="avatar" class="editable img-responsive" src=<?php echo base_url('assets/photo/'.$row->foto.'');?>>

                          
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
                          <div class="profile-info-name"> ID berita </div>

                          <div class="profile-info-value">
                            <span class="editable" id="username"><?php echo $row->id_berita;?></span>
                          </div>
                        </div>

                        
                        <div class="profile-info-row">
                          <div class="profile-info-name"> Judul Berita </div>

                          <div class="profile-info-value">
                            <span class="editable" id="jdl"><?php echo $row->judul;?></span>
                          </div>
                        </div>
                               <?php

                                      $key = $this->uri->segment(3);
                                      $this->db->where('id_berita',$key);
                                      $this->db->select('*');
                                      $this->db->from('tb_berita');
                                      $this->db->join('tb_kat_artikel','tb_kat_artikel.id_kat_artikel = tb_berita.id_kat_artikel');

                                      $query = $this->db->get();
                                      foreach ($query->result() as $row) {
                                    
                                  ?>   

                          <div class="profile-info-row">
                          <div class="profile-info-name"> Kategori Artikel </div>
                          <div class="profile-info-value">
                            <span class="editable" id="username"><?php echo $row->nama_kat_artikel?></span>
                           <?php } ?>   
                          </div>
                          </div>


                          <div class="profile-info-row">
                          <div class="profile-info-name"> Isi Berita </div>

                          <div class="profile-info-value">
                            <span class="editable" id="username"><?php echo $row->deskripsi;?></span>
                          </div>
                        </div>


                         
                        </div>
                      </div>
                    </div>
                  </div>
<?php } ?>

