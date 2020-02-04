<style>
   .ubah{
      transform: rotate(90deg) !important
       }

  </style>
  
<script type="text/javascript">
  function cekform(){

      if(!$ ("#id-input-file-2").val())
      {
        alert('Foto tidak boleh kosong');
        $("#id-input-file-2").focus();
        return false;

      }

}
      
</script>

<!-- hak akses admin -->   
<?php 
  if ($this->session->userdata('hak_akses') === 'Administrator'):
 ?>
  
  


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
     
      <a href="<?php echo base_url();?>admin/guru">
      <button type="button" class="btn btn-warning btn-sm pull-right">
      <i class="fa  fa-arrow-circle-left"> &nbsp;</i>
      Kembali  
      </button>
      </a>
      </i>
    
           <form class="form-horizontal style-form" style="margin-top: 20px;" method="POST" enctype="multipart/form-data" name="form1" id="form1" action="<?php echo base_url();?>admin/guru/simpan-guru" onsubmit="return cekform();">


           
              <div class="form-group">
              <label for="" class="col-sm-2 control-label">ID Guru</label>
              <div class="col-sm-5">
              <input type="text" class="form-control" name="kode" id="kode" value="<?php echo $kode;?>" readonly>
              </div>
              </div>

              <div class="form-group">
              <label for="" class="col-sm-2 control-label">NIP/NUPTK</label>
              <div class="col-sm-5">
              <input type="text" class="form-control" name="nip" id="nip"  value="<?php echo $nip; ?>" placeholder="Nomer Induk Pegawai">
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
              <br>
              <br>

                            

                    
                                <?php
                                $set = getimagesize(base_url().'assets/photo/guru/'.$file_name);
                                if ($set) {
                                  // width
                                  $ambilst = explode (" ",$set[3]);
                                  $ambilsts = str_replace('width="',"",$ambilst[0]);
                                  $ambilstst = str_replace('"',"",$ambilsts);
                                  if($ambilstst > 1800){
                                    
                                    $ubahnya = "ubah";
                            
                                  }else{
                                    
                                    $ubahnya = "";
                                  }
                                }
                                
                              ?>  


              <div class="form-group">
              <label for="" class="col-sm-2 control-label">Foto</label>
              <div class="col-sm-5">
              <img id="avatar" class="editable img-responsive <?= $ubahnya?>" width="50%" src="<?php echo base_url('assets/photo/guru/'.$file_name.'');?>"> 
              <br><br><br><input type="file" id="id-input-file-2" name="file_name" accept="image/*"/>
              <i><font color="red">*Foto yang telah digunakan : <?php echo $file_name;?><br></font></i>
              </div>
              </div>   
              

     <center> 
<div class="box-footer">    
<button type="submit" class="btn btn-info btn-small">Simpan</button>
<button type="reset"  class="btn btn-danger btn-small">Batal</button>
   </form>
      </div>
            </center>

<!-- end hak akses admin -->
<?php endif; ?>



