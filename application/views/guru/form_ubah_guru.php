<!-- hak akses admin -->   
<?php 
  if ($this->session->userdata('hak_akses') === 'Administrator'):
 ?>
  
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

</script>



<?php
$info_gagal = $this->session->flashdata('&nbsp;','info_gagal');
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
     
      <a href="<?php echo base_url();?>guru">
      <button type="button" class="btn btn-warning btn-sm pull-right">
      <i class="fa  fa-arrow-circle-left"> &nbsp;</i>
      Kembali  
      </button>
      </a>
      </i>
    
           <form class="form-horizontal style-form" style="margin-top: 20px;" method="POST" enctype="multipart/form-data" name="form1" id="form1" action="<?php echo base_url();?>guru/simpan" onsubmit="return cekform();">


           
              <div class="form-group">
              <label for="" class="col-sm-2 control-label">ID Guru</label>
              <div class="col-sm-5">
              <input type="text" class="form-control" name="kode" id="kode" value="<?php echo $kode;?>" readonly>
              </div>
              </div>

              <div class="form-group">
              <label for="" class="col-sm-2 control-label">NIP/NUPTK</label>
              <div class="col-sm-5">
              <input type="text" class="form-control" name="nip" id="nip"  value="<?php echo $nip; ?> ">
              </div>
              </div>

              <div class="form-group">
              <label for="" class="col-sm-2 control-label">Nama Guru</label>
              <div class="col-sm-5">
              <input type="text" class="form-control" name="nama" id="nama" value="<?php echo $nama;?>">
              </div>
              </div>

              <div class="form-group">
              <label for="" class="col-sm-2 control-label">Tempat, Tanggal Lahir</label>
              <div class="col-sm-3">
              <input type="text" class="form-control" name="tempat" id="tempat" value="<?php echo $tempat;?>">
              </div>
            
              <div class="col-sm-2">
              <input type="date" class="form-control" name="tanggal" id="tanggal" value="<?php echo $tanggal?>">
              </div>
              </div>

             
              <div class="form-group">
              <label class="col-sm-2 control-label">Jabatan</label>
              <div class="col-lg-3">
              <select class="form-control" name="jbt" id="jbt">
              <option  value="">-------- pilih salah satu -------</option>
                          
                          
                            <?php
        
                            $kat  = $this->db->get('tb_jabatan');
                            foreach ($kat->result() as $row) {
                              if($row->id_jabatan == $jbt){
                                $selected = 'selected';
                              }else{
                                $selected = '';
                              }
                            ?>     
            
            <option <?= $selected?> value="<?php echo $row->id_jabatan;?>"><?php echo $row->nama_jabatan;?></option>
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
                $kat  = $this->db->get('tb_mapel');
                foreach ($kat->result() as $row) {
                  if($row->id_mapel== $mapel){
                    $selected = 'selected';
                  }else{
                    $selected = '';
                  }
                ?>   

            <option <?= $selected?> value="<?php echo $row->id_mapel;?>"><?php echo $row->nama_mapel;?></option>
            <?php } ?>
              </select>
              <i><font color="red">*Jika tidak ada, silakan dikosongkan</font></i>
              </div>
              </div>

                <?php
                $key = $this->uri->segment(3);
                $this->db->where('id_guru',$key);
                $query = $this->db->get('tb_guru');
                foreach ($query->result() as $row) {
                ?>


              <div class="form-group">
              <label for="" class="col-sm-2 control-label">Foto</label>
              <div class="col-sm-5">
              <img id="avatar" class="editable img-responsive" width="40%" src="<?php echo base_url('assets/photo/guru/'.$row->foto.'');?>"> 
              <br><input type="file" id="id-input-file-2" name="file_name" accept="image/*"/>
              <i><font color="red">*Foto yang telah digunakan : <?php echo $file_name;?><br></font></i>
              </div>
              </div>   
              <?php } ?>

     <center> 
<div class="box-footer">    
<button type="submit" class="btn btn-info btn-small">Ubah</button>
<button type="reset"  class="btn btn-danger btn-small">Batal</button>
   </form>
      </div>
            </center>

<!-- end hak akses admin -->
<?php endif; ?>



