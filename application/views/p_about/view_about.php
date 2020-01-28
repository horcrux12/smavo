
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
  <a href="<?php echo base_url();?>admin/pengaturan/about/ubah-about/<?= $key->id;?>" class="btn btn-warning btn-sm pull-right">
      <i class="fa fa-pencil bigger-130" >&nbsp;</i>
      Ubah Data
      </a>
      </i> 
<?php }?>
<?php foreach ($data as $row) { ?>
              

    <div class="col-xs-12 col-sm-12">
      <div class="center"></div>

      <div class="space-12"></div>

      <div class="profile-user-info profile-user-info-striped">
        <div class="profile-info-row">
          <div class="profile-info-name"> ID about </div>

          <div class="profile-info-value">
            <span class="editable" id="username"><?php echo $row->id; ?></span>
          </div>
        </div>

        <div class="profile-info-row">
          <div class="profile-info-name">Visi</div>

          <div class="profile-info-value">
            <span class="editable" id="isi1"><?php echo $row->visi; ?></span>
          </div>
        </div>

        <div class="profile-info-row">
          <div class="profile-info-name"> Misi </div>

          <div class="profile-info-value">
            <span class="editable" id="isi2"><?php echo $row->misi; ?></span>
          </div>
        </div>
        
        <div class="profile-info-row">
          <div class="profile-info-name"> Tujuan </div>

          <div class="profile-info-value">
            <span class="editable" id="isi3"><?php echo $row->plan; ?></span>
          </div>
        </div>

        <div class="profile-info-row">
          <div class="profile-info-name"> Deskripsi </div>

          <div class="profile-info-value">
            <span class="editable" id="isi4"><?php echo $row->deskripsi; ?></span>
          </div>
        </div>

      </div>
    </div>


<?php } ?>