<!-- <script type="text/javascript">
  
  function cekform(){

      if(!$ ("#id-input-file-2").val())
      {
        alert('File tidak boleh kosong');
        $("#id-input-file-2").focus();
        return false;

      }

} -->
      
</script>
    <!-- Kembali -->
      <a href="<?php echo base_url();?>siswa">
      <button type="button" class="btn btn-warning btn-sm pull-right">
      <i class="fa  fa-arrow-circle-left"> &nbsp;</i>
      Kembali  
      </button>
      </a>
      </i>

  <form class="form-horizontal style-form" style="margin-top: 20px;" method="POST" enctype="multipart/form-data" name="form1" id="form1" action="<?php echo base_url(); ?>siswa/simpan" onsubmit="return cekform();">
  <div class="form-group">
    <label for="" class="col-sm-2 control-label">Kode Artikel Siswa</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" name="kode" id="kode" value="<?php echo $kode; ?>" readonly>
    </div>
  </div>

  <div class="form-group">
    <label for="nama" class="col-sm-2 control-label">Nama Penulis</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" name="nama" id="nama" value="<?php echo $this->session->userdata('nama');?>" readonly>
    </div>
  </div>
  <input type="hidden" class="form-control" name="kd_user" id="kode_user" value="<?php echo $this->session->userdata('id_user'); ?>">


  <div class="form-group">
    <label class="col-sm-2 control-label">Kategori Artikel</label>
    <div class="col-sm-8">
      <select class="form-control" name="kd_siswa" id="kd_siswa">
        <?php
        
        $kat  = $this->db->get('tb_kat_siswa');
        foreach ($kat->result() as $row) {
          if($row->id_kat_siswa == $kd_siswa){
            $selected = 'selected';
          }else{
            $selected = '';
          }
        ?>
          <option <?= $selected?> value="<?php echo $row->id_kat_siswa; ?>"><?php echo $row->nama_kat_siswa; ?></option>
        <?php } ?>
      </select>
    </div>
  </div>

                

          <div class="form-group">
          <label class="col-sm-2 control-label">Foto Utama Logo</label>
          <div class="col-sm-8">
          <img id="avatar" class="editable img-responsive" width="40%" src="<?php echo base_url('assets/photo/karya-cipta/'.$file_name.'');?>"> 
          <br><input type="file" class="form-control" id="validatedCustomFile" name="file_name" accept="image/*" required/>
          <i><font color="red">*Foto yang telah digunakan : <?php echo $file_name;?><br></font></i>
          </div>
        </div>

        <div class="form-group">
          <label class="col-sm-2 control-label">File Dokumen</label>
          <div class="col-sm-8">
          <!-- <img id="avatar" class="editable img-responsive" width="40%" src="<?php echo base_url('assets/file/'.$file_download.'');?>">  -->
          <input type="file" class="form-control" id="validatedCustomFile" name="file_download" accept="" required/>
          <i><font color="red">*File yang telah terupload : <?php echo $file_download;?><br></font></i>
          </div>
        </div>

  <div class="form-group">
    <label for="" class="col-sm-2 control-label">Judul Artikel</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" name="jdl" id="jdl" value="<?php echo $jdl;?>" placeholder="Judul siswa">
  </div>
</div>
   

  <div class="form-group">
    <label class="col-sm-2 control-label " for="isi">Deskripsi Artikel</label>
    <div class="col-sm-8">
      <textarea name="isi" id="isi" ><?php echo $isi;?></textarea>
    </div>
  </div>

  
  <center>
  <div class="box-footer">
    <button type="submit" class="btn btn-info btn-small"> Simpan</button>
    <button type="reset" class="btn btn-danger btn-small">Batal</button>
    </form>
  </div>
  </center>



  <script src="<?php echo base_url(); ?>assets/vendor/jquery/jquery.min.js"></script>
  <!-- <script src="<?php echo base_url(); ?>assets/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script> -->


<script type="text/javascript">
  $(document).ready(function() {
    $('#isi').summernote({
      height: "300px",
      styleWithSpan: false,
      toolbar:[
   
        ['style',['style']],
        ['font',['bold','italic','underline','clear']],
        ['fontname',['fontname']],
        ['color',['color']],
        ['para',['ul','ol','paragraph']],
        ['height',['height']],
        ['table',['table']],
        ['insert',['media','link','hr','picture']],
        ['view',['fullscreen','codeview']],
        ['help',['help']]
    ],
    callbacks: {
        onImageUpload: function(image) {
            uploadImage(image[0]);
        },
        onMediaDelete : function(target) {
            deleteImage(target[0].src);
        }
    }
  });
  function uploadImage(image) {
      var data = new FormData();
      data.append("image", image);
      $.ajax({
          url: "<?php echo base_url('siswa/upload_image')?>",
          cache: false,
          contentType: false,
          processData: false,
          data: data,
          type: "POST",
          success: function(url) {
              $('#isi').summernote("insertImage", url);
          },
          error: function(data) {
              console.log(data);
          }
      });
  }

  function deleteImage(src) {
      $.ajax({
          data: {src : src},
          type: "POST",
          url: "<?php echo base_url('siswa/delete_image')?>",
          cache: false,
          success: function(response) {
              console.log(response);
          }
      });
  }
  }); 
</script>
<script>
$('form').submit(function (e) {
    var form = this;
    e.preventDefault();
    setTimeout(function () {
        form.submit();
    }, 3000); nama_kat_siswa //in milliseconds
});
</script>
<!-- <script>
  $(document).ready(function() {
    var selected = '';

    if ($('#siswa').val() == "Non Akademik") {
      
        $.getJSON("<?php echo base_url();?>/siswa/ambil_data_organisasi", function(data){
          selected += '<div class="form-group">'+
    '<label class="col-sm-2 control-label">nah ini</label>'+
    '<div class="col-sm-8">'+
      '<select class="form-control" name="organisasi" id="organisasi">';
          $.each( data, function( i, val ) {
          selected += '<option value="'+data[i].id_organisasi+'">'+data[i].nama_organisasi+'</option>';
          
          });
          selected+= '</select>'+
    '</div>'+
  '</div>';
  $("#nahini").html(selected);
        })
    }
  });
</script> -->