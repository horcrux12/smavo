<!-- CEK FORM KOSONG -->
<script type="text/javascript">
  
  function cekform(){

      if(!$ ("#kode").val())
      {
        alert('Maaf ID fasilitas tidak boleh kosong');
        $("#kode").focus();
        return false;

      }

      if(!$ ("#nama").val())
      {
        alert('Maaf nama fasilitas tidak boleh kosong');
        $("#nama").focus();
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

    <!-- Kembali -->
      <a href="<?php echo base_url();?>fasilitas">
      <button type="button" class="btn btn-warning btn-sm pull-right">
      <i class="fa  fa-arrow-circle-left"> &nbsp;</i>Kembali</button>
      </a>
      </i>
      <!-- end kembali -->
   
             
           <form class="form-horizontal style-form" style="margin-top: 20px;" method="POST" enctype="multipart/form-data" name="form1" id="form1" action="<?php echo base_url();?>fasilitas/simpan" onsubmit="return cekform();">

              
              <div class="form-group">
              <!-- <label for="" class="col-sm-2 control-label">ID Fasilitas</label> -->
              <div class="col-sm-8">
              <input type="hidden" class="form-control" name="kode" id="kode" value="<?php echo $kode; ?>" readonly>
              </div>
              </div>

              <div class="form-group">
              <label for="" class="col-sm-2 control-label">Kategori Fasilitas</label>
              <div class="col-sm-8">
              <input type="text" class="form-control" name="nama" id="nama" value="<?php echo $data[0]->nama_fasilitas; ?>" placeholder="Kategori fasilitas" readonly>
              </div>
              </div>

              <input type="hidden" class="form-control" name="nama" id=nama" value="<?php echo $data[0]->id; ?>">

            <div class="form-group">
            <label class="col-sm-2 control-label">Foto Utama</label>
            <div class="col-sm-8">
              <input type="file" id="id-input-file-2" name="file_name" accept="image/*"/>
            </div>
          </div>

<center> 
<div class="box-footer">    
<button type="submit" class="btn btn-info btn-small"> Simpan</button>
<button type="reset"  class="btn btn-danger btn-small">Batal</button>
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
          url: "<?php echo base_url('fasilitas/upload_image')?>",
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
          url: "<?php echo base_url('fasilitas/delete_image')?>",
          cache: false,
          success: function(response) {
              console.log(response);
          }
      });
  }
  }); 
</script>