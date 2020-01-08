<?php
$info_gagal = $this->session->flashdata('info_gagal');
if(!empty($info_gagal))

{

  echo "<div class='alert alert-danger alert-dismissible'>";
  echo "<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>"; 
  echo "</button>";
  echo "<i class='icon fa fa-times'>"; 
  echo "</i>";
  echo $info_gagal;
  echo "</div>";
 
}
?>
    <!-- Kembali -->
     
      <a href="<?php echo base_url();?>profil">
      <button type="button" class="btn btn-warning btn-sm pull-right">
      <i class="fa  fa-arrow-circle-left"> &nbsp;</i>
      Kembali  
      </button>
      </a>
      </i>
   
             
           <form class="form-horizontal style-form" style="margin-top: 20px;" method="POST" enctype="multipart/form-data" name="form1" id="form1" action="<?php echo base_url();?>profil/simpan" onsubmit="return cekform();">

              
              <div class="form-group">
              <label for="" class="col-sm-2 control-label">Kode Profil</label>
              <div class="col-sm-5">
              <input type="text" class="form-control" name="kode" id="kode" value="<?php echo $kode; ?>" readonly>
              </div>
              </div>

              <div class="form-group">
              <label for="" class="col-sm-2 control-label">Nama Penulis</label>
              <div class="col-sm-5">
              <input type="text" class="form-control" name="nama" id="nama" value="<?php echo $this->session->userdata('nama');?>">
              </div>
              </div>

              <div class="form-group">
              <label class="col-sm-2 control-label">Kategori</label>
              <div class="col-sm-5">
              <select class="form-control" name="kode_kat" id="kode_kat">
              <option value="">-------- pilih salah satu -------</option>


                            <?php

                            $kat  = $this->db->get('tb_kat_profil');
                            foreach ($kat->result() as $row) {

                            ?>            
            
            <option value="<?php echo $row->id_kat_profil;?>"><?php echo $row->nama_kat_profil;?></option>
            <?php } ?>
            </select>
              </div>
            </div>



  <!-- form sejarah -->
  <section class="content">

    <div class="row">
      <label class="col-sm-2 control-label">sejarah</label>
      <div class="col-md-10">
        <div class="box-header">
        </div>
        <textarea id="summernote_1" name="sejarah"></textarea>
      </div>
    </div>
    <br>
  </section>
  <!-- end form sejarah  -->


  <!-- form visi dan misi -->
  <section class="content">
    <div class="row">
      <label class="col-sm-2 control-label">Visi</label>
      <div class="col-md-10">
        <div class="box-header">
        </div>
        <textarea id="summernote_2" name="visi"></textarea>
      </div>
    </div>
    <br>
  </section>

  <section class="content">
    <div class="row">
      <label class="col-sm-2 control-label">Misi</label>
      <div class="col-md-10">
        <div class="box-header">
        </div>
        <textarea id="summernote_3" name="misi"></textarea>
      </div>
    </div>
    <br>
  </section>

  <!-- end form visi dan misi   -->
       
    




<center>
<div class="box-footer">		
<button type="submit" class="btn btn-info btn-small"> Simpan</button>
<button type="reset"  class="btn btn-danger btn-small">Batal</button>
   </form>
      </div>
</center>



    <script src="<?php echo base_url();?>assets/vendor/jquery/jquery.min.js"></script>
        <script src="<?php echo base_url();?>assets/ckeditor/ckeditor.js"></script>
    <script src="<?php echo base_url();?>assets/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>

    <script type="text/javascript">

      $(function () {
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.
    CKEDITOR.replace('editor1')
    //bootstrap WYSIHTML5 - text editor
    
  });
  </script> 

  <script type="text/javascript">
    $(document).ready(function() {
      $(".add-more").click(function(){ 
          var html = $(".copy").html();
          $(".after-add-more").after(html);
      });
      $("body").on("click",".remove",function(){ 
          $(this).parents(".control-group").remove();
      });
    });
</script>

                 

