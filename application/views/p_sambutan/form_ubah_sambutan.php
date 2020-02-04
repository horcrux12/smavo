
<!-- Kembali -->
<button type="button" class="btn btn-warning btn-sm pull-right" onclick="javascript:history.back()">
  <i class="fa  fa-arrow-circle-left"> &nbsp;</i>
  Kembali
</button>

<form id=Myform class="form-horizontal style-form" style="margin-top: 20px;" method="POST" enctype="multipart/form-data" name="form1" id="form1" action="<?php echo base_url(); ?>admin/pengaturan/sambutan/simpan-sambutan" onsubmit="return cekform();">

<input type="hidden" class="form-control" name="kode" id="kode" value="<?php echo $kode;?>">

<div class="form-group">
    <label for="nama" class="col-sm-2 control-label">Nama Kepala Sekolah</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" name="nama" id="nama" value="<?php echo $nama;?>">
    </div>
  </div>


<div class="form-group">
    <label class="col-sm-2 control-label">Foto Utama</label>
    <div class="col-sm-8">
      <img id="avatar" class="editable img-responsive" width="125px" src=<?php echo base_url('assets/photo/kemitraan/'.$foto.'');?>>
      <br><input type="file" class="form-control" id="validatedCustomFile" name="file_name" accept="image/*" required/>
      <i><font color="red">*Foto yang telah digunakan : <?php echo $foto;?><br></font></i>
    </div>
  </div>

  <div class="form-group">
    <label class="col-sm-2 control-label " for="isi">Sambutan</label>
    <div class="col-sm-8">
      <textarea name="isi" id="isi" ><?php echo $isi;?></textarea>
    </div>
  </div>
  <br>
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
      toolbar: [

        ['style', ['style']],
        ['font', ['bold', 'italic', 'underline', 'clear']],
        ['fontname', ['fontname']],
        ['color', ['color']],
        ['para', ['ul', 'ol', 'paragraph']],
        ['height', ['height']],
        ['table', ['table']],
        ['insert', ['media', 'link', 'hr', 'picture']],
        ['view', ['fullscreen', 'codeview']],
        ['help', ['help']]
      ],
      callbacks: {
        onImageUpload: function(image) {
          uploadImage(image[0]);
        },
        onMediaDelete: function(target) {
          deleteImage(target[0].src);
        }
      }
    });

    function uploadImage(image) {
      var data = new FormData();
      data.append("image", image);
      $.ajax({
        url: "<?php echo base_url('sambutan/upload_image') ?>",
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
        data: {
          src: src
        },
        type: "POST",
        url: "<?php echo base_url('sambutan/delete_image') ?>",
        cache: false,
        success: function(response) {
          console.log(response);
        }
      });
    }
  });
</script>
<script>
  $('form').submit(function(e) {
    var form = this;
    e.preventDefault();
    setTimeout(function() {
      form.submit();
    }, 1000); // in milliseconds
  });
</script>
<!-- <script>
  $(document).ready(function() {
    var selected = '';

    if ($('#artikel').val() == "Non Akademik") {
      
        $.getJSON("<?php echo base_url(); ?>/sambutan/ambil_data_organisasi", function(data){
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