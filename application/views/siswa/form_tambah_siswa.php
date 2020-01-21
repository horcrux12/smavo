<?php
$info_gagal = $this->session->flashdata('info_gagal');
if (!empty($info_gagal)) {

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

<a href="<?php echo base_url(); ?>siswa">
  <button type="button" class="btn btn-warning btn-sm pull-right">
    <i class="fa  fa-arrow-circle-left"> &nbsp;</i>
    Kembali
  </button>
</a>
</i>

<form id=Myform class="form-horizontal style-form" style="margin-top: 20px;" method="POST" enctype="multipart/form-data" name="form1" id="form1" action="<?php echo base_url(); ?>admin/siswa/simpan" onsubmit="return cekform();">


  <div class="form-group">
    <label for="" class="col-sm-2 control-label">Kode siswa</label>
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
    <label class="col-sm-2 control-label">Kategori</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" name="siswa" id="siswa" value="<?php echo $data[0]->nama_kat_siswa; ?>" readonly>
    </div>
  </div>
  <input type="hidden" class="form-control" name="kd_siswa" id="kode_siswa" value="<?php echo $data[0]->id_kat_siswa; ?>">

  <div class="form-group">
    <label class="col-sm-2 control-label">File</label>
    <div class="col-sm-8">
      <input type="file" id="id-input-file-2" name="file_name" accept=""/>
    </div>
  </div>

  <div class="form-group">
    <label for="" class="col-sm-2 control-label">Judul</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" name="jdl" id="jdl" placeholder="Judul Artikel Siswa" >
    </div>
  </div>

  <div class="form-group">
    <label class="col-sm-2 control-label " for="isi">Deskripsi</label>
    <div class="col-sm-8">
      <textarea name="isi" id="isi" ></textarea>
    </div>
  </div>
  <br>
  
  <center>

    <div class="box-footer">
      <button id="toggle" type="submit" class="btn btn-info btn-small swalDefaultSuccess"> Simpan</button>
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
    }, 3000); // in milliseconds
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