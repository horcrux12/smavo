<!-- CEK FORM KOSONG -->
<script type="text/javascript">
  
  function cekform(){

       if(!$ ("#kode").val())
      {
        alert('Maaf ID user tidak boleh kosong');
        $("#kode").focus();
        return false;

      }


      if(!$ ("#nama").val())
      {
        alert('Maaf nama user tidak boleh kosong');
        $("#nama").focus();
        return false;

      }
      
      if(!$ ("#user").val())
      {
        alert('Maaf username tidak boleh kosong');
        $("#user").focus();
        return false;

      }

      if(!$ ("#pass").val())
      {
        alert('Maaf password tidak boleh kosong');
        $("#pass").focus();
        return false;

      }

      if(!$ ("#hak").val())
      {
        alert('Maaf Hak Akses tidak boleh kosong');
        $("#hak").focus();
        return false;

      }

        if(!$ ("#id-input-file-2").val())
      {
        alert('Maaf foto tidak boleh kosong');
        $("#id-input-file-2").focus();
        return false;
      }

  }

</script>
<!-- END CEK FORM KOSONG -->


<!-- INFO -->
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
<!-- END INFO -->


    <!-- Kembali -->
      <a href="<?php echo base_url();?>user">
      <button type="button" class="btn btn-warning btn-sm pull-right">
      <i class="fa  fa-arrow-circle-left"> &nbsp;</i>Kembali</button>
      </a>
      </i>
      <!-- end kembali -->
   
             
           <form class="form-horizontal style-form" style="margin-top: 20px;" method="POST" enctype="multipart/form-data" name="form1" id="form1" action="<?php echo base_url();?>user/simpan" onsubmit="return cekform();">

              
              <div class="form-group">
              <label for="" class="col-sm-2 control-label">Id user</label>
              <div class="col-sm-2">
              <input type="text" class="form-control" name="kode" id="kode" value="<?php echo $kode; ?>" readonly>
              </div>
              </div>

              <div class="form-group">
              <label for="" class="col-sm-2 control-label">Nama Lengkap</label>
              <div class="col-sm-5">
              <input type="text" class="form-control" name="nama" id="nama" placeholder="Nama Lengkap User/Admin">
              </div>
              </div>


              <div class="form-group">
              <label for="" class="col-sm-2 control-label">Username</label>
              <div class="col-sm-5">
              <input type="text" class="form-control" name="user" id="user" placeholder="Username">
              <i><font color="red">*Maksimal menggunakan 20 Huruf</font></i>
              </div>
              </div>

              <div class="form-group">
              <label for="" class="col-sm-2 control-label">Password</label>
              <div class="col-sm-5">
              <input type="password" class="form-control" name="pass" id="pass" placeholder="Password">
              <i><font color="red">*Maksimal menggunakan 20 Huruf</font></i>
              </div>
              </div>


              <div class="form-group">
              <label class="col-sm-2 control-label">Hak Akses</label>
              <div class="col-lg-3">
              <select class="form-control" name="hak" id="hak">
              <option value="">-------- pilih salah satu -------</option>
                  
                  <option>Administrator</option>
                  <option>Admin Publish</option>
                  <option>Admin Siswa</option>
                                  
              </select>
              </div>
              </div>

              <div class="form-group">
              <label for="" class="col-sm-2 control-label">Foto</label>
              <div class="col-sm-5">
              <input type="file" id="id-input-file-2" name="file_name" accept="image/*"/>
              <!-- <i><font color="red">*Foto hanya berekstensi .*gif|jpg|jpeg|png, dengan ukuran maksimal 2500x2500 px</font></i> -->
              </div>
              </div> 
                
<center> 
<div class="box-footer">		
<button type="submit" class="btn btn-info btn-small"> Simpan</button>
<button type="reset"  class="btn btn-danger btn-small">Batal</button>
   </form>
      </div>
            </center>