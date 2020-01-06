 
<!-- hak akses admin -->   
<?php 
  if ($this->session->userdata('akses') == 'Administrator'):
 ?>

   <!-- Kembali -->
     
      <a href="<?php echo base_url();?>artikel">
      <button type="button" class="btn btn-warning btn-sm pull-right">
      <i class="fa  fa-arrow-circle-left"> &nbsp;</i>
      Kembali  
      </button>
      </a>
      </i>          
 <?php
            $key = $this->uri->segment(3);
            $this->db->where('kode_artikel',$key);
            $query = $this->db->get('tb_artikel');
            foreach ($query->result() as $row) {
            ?>


            <div class="page-header">
              <h1>
                <?php echo $row->judul_artikel;?>
                <small>
                  <i class="ace-icon fa fa-angle-double-right"></i> Dengan Kode Artikel 
                  ( <?php echo $row->kode_artikel  ;?> )
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
                  
                      <div class="space-6"></div>



                      <div class="profile-contact-info">
                        

                        <div class="space-6"></div>

                        
                      </div>

                                          </div>

                    <div class="col-xs-12">
                      <div class="center"></div>

                      <div class="space-12"></div>

                      <div class="profile-user-info profile-user-info-striped">
                        <div class="profile-info-row">
                          <div class="profile-info-name"> Kode Artikel </div>

                          <div class="profile-info-value">
                            <span class="editable" id="username"><?php echo $row->kode_artikel;?></span>
                          </div>
                        </div>


                        

                        <div class="profile-info-row">
                          <div class="profile-info-name"> Kode Kategori </div>

                          <div class="profile-info-value">
                            <span class="editable" id="username"><?php echo $row->kode_kategori;?></span>
                          </div>
                        </div>

                        <div class="profile-info-name"> Penulis </div>

                          <div class="profile-info-value">
                            <span class="editable" id="username"><?php echo $row->nama_penulis;?></span>
                          </div>

                          <div class="profile-info-row">
                          <div class="profile-info-name"> Tanggal terbit </div>

                          <div class="profile-info-value">
                            <span class="editable" id="username"><?php echo $row->tanggal_post;?></span>
                          </div>
                          </div>
                        
                          <div class="profile-info-row">
                          <div class="profile-info-name">Isi Artikel (Berita)</div>

                          <div class="profile-info-value">
                          
                            <span class="editable" id="username"><?php echo $row->isi_artikel?></span>
                          </div>
                          </div>

                        </div>
                      </div>
<?php } ?>
<!-- end hak akses admin -->



<!-- hak akses pasien dan umum -->
<?php 
  
    elseif ($this->session->userdata('akses') != 'Administrator' ||  $this->session->userdata('akses') == 'Pasien'):
 
 ?>

 <?php
            $key = $this->uri->segment(3);
            $this->db->where('kode_artikel',$key);
            $query = $this->db->get('tb_artikel');
            foreach ($query->result() as $row) {
            ?>


           <div class="col-md-12">
              <ol class="breadcrumb">
            <div class="page-header">
              <h2>
                &nbsp;&nbsp;<?php echo $row->judul_artikel;?>
              </h2>
            </div><!-- /.page-header -->
            </div>
          </ol>



            <div class="col-md-12">
        <div class="">
          <div class="card-body">
            <i class="menu-icon fa fa-user"></i>
            <i class="card-text"> Penulis : <?php echo $row->nama_penulis; ?> </i> <br>
            <i class="menu-icon fa fa-calendar"></i>
            <i class="card-text"> Tanggal Post : <?php echo $row->tanggal_post; ?> </i>
            <p class="card-text" align="justify"><?php echo $row->isi_artikel; ?> </p>
          </div>

      </div>
     
</div>

<?php } ?>

<?php endif ?>