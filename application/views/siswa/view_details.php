
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
  <a href="<?php echo base_url();?>siswa/ubah/<?= $key->id_artikel;?>" class="btn btn-warning btn-sm pull-right">
      <i class="fa fa-pencil bigger-130" >&nbsp;</i>
      Ubah Data
      </a>
      </i> 
<?php }?>
<?php foreach ($data as $row) { ?>
              
             
<div class="page-header">
  <h1>
    <?php echo $row->judul;?>
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


    <div class="col-xs-12 col-sm-12">
      <div class="center"></div>

      <div class="space-12"></div>

      <div class="profile-user-info profile-user-info-striped">
        <div class="profile-info-row">
          <div class="profile-info-name"> ID Artikel Siswa </div>

          <div class="profile-info-value">
            <span class="editable" id="username"><?php echo $row->id_artikel; ?></span>
          </div>
        </div>

        <div class="profile-info-row">
          <div class="profile-info-name"> Kategori Artikel Siswa</div>

          <div class="profile-info-value">
            <span class="editable" id="jdl"><?php echo $row->nama_kat_siswa; ?></span>
          </div>
        </div>

        <div class="profile-info-row">
          <div class="profile-info-name"> Penulis </div>

          <div class="profile-info-value">
            <span class="editable" id="jdl"><?php echo $row->nama; ?></span>
          </div>
        </div>
        
        <div class="profile-info-row">
          <div class="profile-info-name"> Deskripsi </div>

          <div class="profile-info-value">
            <span class="editable" id="username"><?php echo $row->deskripsi; ?></span>
          </div>
        </div>

        <div class="profile-info-row">
          <div class="profile-info-name"> Nama File </div>

          <div class="profile-info-value">
            <span class="editable" id="username"><?php echo $row->file;?></span>
          </div>
        </div>

        <div class="profile-info-row">
          <div class="profile-info-name"> Download File</div>

          <div class="profile-info-value">
            <span class="editable" id="username"><a href="<?php echo base_url('assets/file/'. $row->file .'');?>" class="btn btn-primary"> <i class="fa fa-download"> &nbsp;</i>Download</a></span>
          </div>
        </div>

      
        <div class="profile-info-row">
          <div class="profile-info-name"> Tanggal Update </div>

          <div class="profile-info-value">
            <span class="editable" id="username"><?php echo $row->tanggal_update; ?></span>
  
          </div>
        </div>

      </div>
    </div>
  </div>
</div>
<?php } ?>