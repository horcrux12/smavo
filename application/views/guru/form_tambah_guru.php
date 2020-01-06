<!-- CEK FORM KOSONG -->
<script type="text/javascript">
  
  function cekform(){

       if(!$ ("#kode").val())
      {
        alert('Maaf ID guru tidak boleh kosong');
        $("#kode").focus();
        return false;

      }


      if(!$ ("#nama").val())
      {
        alert('Maaf nama guru tidak boleh kosong');
        $("#nama").focus();
        return false;

      }
      
      if(!$ ("#tempat").val())
      {
        alert('Maaf tempat lahir tidak boleh kosong');
        $("#tempat").focus();
        return false;

      }

      if(!$ ("#tanggal").val())
      {
        alert('Maaf tanggal lahir tidak boleh kosong');
        $("#tanggal").focus();
        return false;

      }

      if(!$ ("#jbt").val())
      {
        alert('Maaf jabatan tidak boleh kosong');
        $("#jbt").focus();
        return false;

      }

        if(!$ ("#file_name").val())
      {
        alert('Maaf foto tidak boleh kosong');
        $("#file_name").focus();
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
      <a href="<?php echo base_url();?>guru">
      <button type="button" class="btn btn-warning btn-sm pull-right">
      <i class="fa  fa-arrow-circle-left"> &nbsp;</i>Kembali</button>
      </a>
      </i>
      <!-- end kembali -->
   
             
           <form class="form-horizontal style-form" style="margin-top: 20px;" method="POST" enctype="multipart/form-data" name="form1" id="form1" action="<?php echo base_url();?>guru/simpan" onsubmit="return cekform();">

              
              <div class="form-group">
              <label for="" class="col-sm-2 control-label">Id Guru</label>
              <div class="col-sm-2">
              <input type="text" class="form-control" name="kode" id="kode" value="<?php echo $kode; ?>" readonly>
              </div>
              </div>

              <div class="form-group">
              <label for="" class="col-sm-2 control-label">NIP/NUPTK</label>
              <div class="col-sm-5">
              <input type="text" class="form-control" name="nip" id="nip" placeholder="Nomer Induk Pegawai">
              <i><font color="red">*Jika tidak ada NIP/NUPTK, silakan dikosongkan</font></i>
              </div>
              </div>


              <div class="form-group">
              <label for="" class="col-sm-2 control-label">Nama Guru</label>
              <div class="col-sm-5">
              <input type="text" class="form-control" name="nama" id="nama" placeholder="Nama Lengkap Guru">
              </div>
              </div>


              <div class="form-group">
              <label for="" class="col-sm-2 control-label">Tempat, Tanggal Lahir</label>
              <div class="col-sm-3">
              <input type="text" class="form-control" name="tempat" id="tempat" placeholder="Tempat Lahir">
              </div>
            
              <div class="col-sm-2">
              <input type="date" class="form-control" name="tanggal" id="tanggal" placeholder="tanggal Lahir">
              </div>
              </div>

              

              <div class="form-group">
              <label class="col-sm-2 control-label">Jabatan</label>
              <div class="col-lg-3">
              <select class="form-control" name="jbt" id="jbt">
              <option value="">-------- pilih salah satu -------</option>
                          
                          <?php

                            $jbt  = $this->db->get('tb_jabatan');
                            foreach ($jbt->result() as $row) {

                            ?>            
            
            <option value="<?php echo $row->id_jabatan;?>"><?php echo $row->nama_jabatan;?></option>
            <?php } ?>
              </select>
              </div>
              </div>

              <div class="form-group">
              <label class="col-sm-2 control-label">Mata Pelajaran</label>
              <div class="col-lg-3">
              <select class="form-control" name="mapel" id="mapel">
              <option value="">-------- pilih salah satu -------</option>
                          
                          <?php

                            $mapel  = $this->db->get('tb_mapel');
                            foreach ($mapel->result() as $row) {

                            ?>            
            
            <option value="<?php echo $row->id_mapel;?>"><?php echo $row->nama_mapel;?></option>
            <?php } ?>
              </select>
              <i><font color="red">*Jika tidak ada, silakan dikosongkan</font></i>
              </div>
              </div>


             


              <div class="form-group">
              <label for="" class="col-sm-2 control-label">Foto</label>
              <div class="col-sm-5">
              <input type="file" class="form-control" name="file_name" id="file_name" placeholder="Pilih Foto">
              <i><font color="red">*Foto hanya berekstensi .*gif|jpg|jpeg|png, dengan ukuran maksimal 2500x2500 px</font></i>
              </div>
              </div> 
                
<center> 
<div class="box-footer">		
<button type="submit" class="btn btn-info btn-small"> Simpan</button>
<button type="reset"  class="btn btn-danger btn-small">Batal</button>
   </form>
      </div>
            </center>