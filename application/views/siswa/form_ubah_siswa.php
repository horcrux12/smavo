
  
  <!-- CEK FORM KOSONG -->

<script type="text/javascript">
  
  function cekform(){

      if(!$ ("#kode").val())
      {
        alert('Maaf kode artikel tidak boleh kosong');
        $("#kode").focus();
        return false;

      }

      if(!$ ("#nama").val())
      {
        alert('Maaf nama artikel tidak boleh kosong');
        $("#nama").focus();
        return false;

      }

      if(!$ ("#kode_kat").val())
      {
        alert('Maaf kategori tidak boleh kosong');
        $("#kode_kat").focus();
        return false;

      }

      if(!$ ("#judul").val())
      {
        alert('Maaf judul tidak boleh kosong');
        $("#judul").focus();
        return false;

    }

     if(!$ ("#isi").val())
      {
        alert('Maaf isi artikel tidak boleh kosong');
        $("#isi").focus();
        return false;

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
     
      <a href="<?php echo base_url();?>artikel">
      <button type="button" class="btn btn-warning btn-sm pull-right">
      <i class="fa  fa-arrow-circle-left"> &nbsp;</i>
      Kembali  
      </button>
      </a>
      </i>
   
             
           <form class="form-horizontal style-form" style="margin-top: 20px;" method="POST" enctype="multipart/form-data" name="form1" id="form1" action="<?php echo base_url();?>artikel/simpan" onsubmit="return cekform();">

              
              <div class="form-group">
              <label for="" class="col-sm-2 control-label">Kode Artikel</label>
              <div class="col-sm-5">
              <input type="text" class="form-control" name="kode" id="kode" value="<?php echo $kode; ?>" readonly>
              </div>
              </div>

              <div class="form-group">
              <label for="" class="col-sm-2 control-label">Nama Penulis</label>
              <div class="col-sm-5">
              <input type="text" class="form-control" name="nama" id="nama" value="<?php echo $nama; ?>">
              </div>
              </div>

              <div class="form-group">
              <label for="" class="col-sm-2 control-label">Tanggal</label>
              <div class="col-sm-2">
              <input type="text" class="form-control" name="tanggal" id="tanggal" value="<?php echo $tgl=date('Ymd');?>" readonly>
              </div>
              </div>

              <div class="form-group">
              <label class="col-sm-2 control-label">Kategori</label>
              <div class="col-lg-3">
              <select class="form-control" name="kode_kat" id="kode_kat">
              <option value="">-------- pilih salah satu -------</option>


                            <?php

                            $kat  = $this->db->get('tb_kategori');
                            foreach ($kat->result() as $row) {

                            ?>            
            
            <option value="<?php echo $row->kode_kategori;?>"><?php echo $row->nama_kategori;?></option>
            <?php } ?>
            </select>
              </div>
              </div>

              <div class="form-group">
              <label for="" class="col-sm-2 control-label">Judul Artikel</label>
              <div class="col-sm-5">
              <input type="text" class="form-control" name="judul" id="judul" value="<?php echo $judul; ?>">
              </div>
              </div>

              
       <section class="content">
          <div class="row">
            <label class="col-sm-2 control-label">Isi Artikel</label>
                      <div class="col-md-10">
                            <div class="box-header">
            </div>
            
              
                    <textarea id="editor1" name="isi" rows="10" cols="80"><?php echo $isi;?></textarea>
           
           
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

                 

