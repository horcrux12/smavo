<!-- hak akses admin -->   
<?php 
  if ($this->session->userdata('akses') == 'Administrator'):
 ?>
  
  <!-- CEK FORM KOSONG -->
<script type="text/javascript">
  
  function cekform(){

      if(!$ ("#kode").val())
      {
        alert('Maaf Id kategori artikel tidak boleh kosong');
        $("#kode").focus();
        return false;

      }

      if(!$ ("#nama").val())
      {
        alert('Maaf nama kategori artikel tidak boleh kosong');
        $("#nama").focus();
        return false;

      }

      
</script>

    <!-- Kembali -->
     
      <a href="<?php echo base_url();?>kat_profil">
      <button type="button" class="btn btn-warning btn-sm pull-right">
      <i class="fa  fa-arrow-circle-left"> &nbsp;</i>
      Kembali  
      </button>
      </a>
      </i>
    
           <form class="form-horizontal style-form" style="margin-top: 20px;" method="POST" enctype="multipart/form-data" name="form1" id="form1" action="<?php echo base_url();?>kat_profil/simpan" onsubmit="return cekform();">


           
              <div class="form-group">
              <label for="" class="col-sm-2 control-label">ID Kategori Artikel</label>
              <div class="col-sm-5">
              <input type="text" class="form-control" name="kode" id="kode" value="<?php echo $kode;?>" readonly>
              </div>
              </div>

              <div class="form-group">
              <label for="" class="col-sm-2 control-label">Nama Kategori Artikel</label>
              <div class="col-sm-5">
              <input type="text" class="form-control" name="nama" id="nama" value="<?php echo $nama;?>">
              </div>
              </div>


     <center> 
<div class="box-footer">    
<button type="submit" class="btn btn-info btn-small">Ubah</button>
<button type="reset"  class="btn btn-danger btn-small">Batal</button>
   </form>
      </div>
            </center>

<!-- end hak akses admin -->
<?php endif; ?>



