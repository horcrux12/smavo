<!-- Kembali -->

<a href="<?php echo base_url(); ?>admin/berita">
  <button type="button" class="btn btn-warning btn-sm pull-right">
    <i class="fa  fa-arrow-circle-left"> &nbsp;</i>
    Kembali
  </button>
</a>
</i>
<div class="page-header">
  <h1>
    <?php echo $jdl ?>
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


          <img id="avatar" class="editable img-responsive" src=<?php echo base_url('assets/photo/berita/' . $file_name . ''); ?>>


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
            <span class="editable" id="username"><?php echo $kode; ?></span>
          </div>
        </div>


        <div class="profile-info-row">
          <div class="profile-info-name"> Judul Berita </div>

          <div class="profile-info-value">
            <span class="editable" id="jdl"><?php echo $jdl; ?></span>
          </div>
        </div>
        <!--     -->

        <div class="profile-info-row">
          <div class="profile-info-name"> Kategori Artikel </div>
          <div class="profile-info-value">
            <span class="editable" id="username"><?php echo $nama_kategori ?></span>
          </div>
        </div>


        <div class="profile-info-row">
          <div class="profile-info-name"> Isi Berita </div>

          <div class="profile-info-value">
            <span class="editable" id="username"><?php echo $isi; ?></span>
          </div>
        </div>

        <div class="profile-info-row">
          <div class="profile-info-name"> Nama Dokumen </div>

          <div class="profile-info-value">
            <span class="editable" id="username"><?php echo $file_download;?></span>
          </div>
        </div>

        <div class="profile-info-row">
          <div class="profile-info-name"> Download File</div>

          <div class="profile-info-value">
            <span class="editable" id="username"><a href="<?php echo base_url('assets/file/'. $file_download .'');?>" class="btn btn-primary"> <i class="fa fa-download"> &nbsp;</i>Download</a></span>
          </div>
        </div>


        <?php foreach ($data->result() as $row) { ?>
        <div class="profile-info-row">
          <div class="profile-info-name"> Tanggal Update </div>

          <div class="profile-info-value">
            <span class="editable" id="username"><?php echo $row->tanggal; ?></span>
       <?php } ?>
          </div>
        </div>
        



      </div>
    </div>
  </div>
</div>