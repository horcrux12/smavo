
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
<?php foreach ($data as $key) {?>
  <a href="<?php echo base_url();?>admin/pengaturan/slider/ubah-slider/<?= $key->id;?>" class="btn btn-warning btn-sm pull-right">
      <i class="fa fa-pencil bigger-130" >&nbsp;</i>
      Ubah Data
      </a>
      </i> 
<?php }?>
<?php foreach ($data as $row) { ?>
              
             
<div class="page-header">
  <h1>
    <?php echo $row->judul_utama;?>
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
                          

                        <div>
                              <ul class="ace-thumbnails clearfix">
                                <li class >
                                  <a href="<?= base_url()?>assets/photo/slider/<?= $row->foto?>" data-rel="colorbox">
                                    <img width="100%" height="100%" src="<?= base_url()?>assets/photo/slider/<?= $row->foto;?>" />
                                    <div class="text">
                                      <div class="inner"><?php echo $row->judul_utama?></div>
                                    </div>
                                  </a>
                                </li>
                              </ul>
                            </div>
                          
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
          <div class="profile-info-name"> ID Slider </div>

          <div class="profile-info-value">
            <span class="editable" id="username"><?php echo $row->id; ?></span>
          </div>
        </div>

        <div class="profile-info-row">
          <div class="profile-info-name">Judul Utama</div>

          <div class="profile-info-value">
            <span class="editable" id="jdl"><?php echo $row->judul_utama; ?></span>
          </div>
        </div>

        <div class="profile-info-row">
          <div class="profile-info-name"> Sub Judul </div>

          <div class="profile-info-value">
            <span class="editable" id="jdl"><?php echo $row->sub_judul; ?></span>
          </div>
        </div>
        
        <div class="profile-info-row">
          <div class="profile-info-name"> Deskripsi </div>

          <div class="profile-info-value">
            <span class="editable" id="username"><?php echo $row->deskripsi; ?></span>
          </div>
        </div>

      </div>
    </div>
  </div>
</div>
<?php } ?>