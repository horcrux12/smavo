
  
  <!-- CEK FORM KOSONG -->

<script type="text/javascript">
  
  function cekform(){

    //         if(!$ ("#kode").val())
    //   {
    //     alert('Maaf kode berita tidak boleh kosong');
    //     $("#kode").focus();
    //     return false;

    //   }

    //   if(!$ ("#nama").val())
    //   {
    //     alert('Maaf nama berita tidak boleh kosong');
    //     $("#nama").focus();
    //     return false;

    //   }

    //   if(!$ ("#kode_kat").val())
    //   {
    //     alert('Maaf kategori tidak boleh kosong');
    //     $("#kode_kat").focus();
    //     return false;

    //   }

    //   if(!$ ("#judul").val())
    //   {
    //     alert('Maaf judul tidak boleh kosong');
    //     $("#judul").focus();
    //     return false;

    // }

    //  if(!$ ("#isi").val())
    //   {
    //     alert('Maaf isi berita tidak boleh kosong');
    //     $("#isi").focus();
    //     return false;

    }
</script>



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
     
      <a href="<?php echo base_url();?>berita">
      <button type="button" class="btn btn-warning btn-sm pull-right">
      <i class="fa  fa-arrow-circle-left"> &nbsp;</i>
      Kembali  
      </button>
      </a>
      </i>
   
             
           <form class="form-horizontal style-form" style="margin-top: 20px;" method="POST" enctype="multipart/form-data" name="form1" id="form1" action="<?php echo base_url();?>berita/simpan" onsubmit="return cekform();">

              
              <div class="form-group">
              <label for="" class="col-sm-2 control-label">Kode berita</label>
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

                            $kat  = $this->db->get('tb_kat_artikel');
                            foreach ($kat->result() as $row) {

                            ?>            
            
            <option value="<?php echo $row->id_kat_artikel;?>"><?php echo $row->nama_kat_artikel;?></option>
            <?php } ?>
            </select>
              </div>
              </div>
              
       <section class="content">

        <div class="row">
          <label class="col-sm-2 control-label">Isi berita</label>
          <div class="col-md-9">
            <div class="box-header">
            </div>
            <textarea id="summernote_1" name="isi"></textarea>
          </div>
        </div>  
    <br>

<label for="" class="col-sm-2 control-label">Foto</label>
<div class="container">
  <div class="panel panel-default col-md-9">
     <div class="panel-body">
        <div class="input-group control-group after-add-more">
          
                    <input type="file" name="file_name[]" class="form-control" placeholder="Enter Name Here">
                    <span class="input-group-btn">
                      <button type="button" class="btn btn-primary btn-sm add-more">
                        <span class="ace-icon fa fa-plus icon-on-right bigger-110"></span> 
                      </button>
                    </span>
        </div>
        
        <!-- Copy Fields -->
        <div class="copy hide">
          <div class="control-group input-group" style="margin-top:10px">
            <input type="file" name="file_name[]" class="form-control" placeholder="Enter Name Here">
            <span class="input-group-btn">
                      <button type="button" class="btn btn-danger btn-sm remove">
                        <span class="ace-icon fa fa-trash icon-on-right bigger-110"></span> 
                      </button>
            </span>
        </div>
      </div> 
    </div>
 </div>
</div>

</section>
<br>





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

                 

