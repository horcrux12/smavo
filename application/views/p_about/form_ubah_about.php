
<!-- Kembali -->
<button type="button" class="btn btn-warning btn-sm pull-right" onclick="javascript:history.back()">
  <i class="fa  fa-arrow-circle-left"> &nbsp;</i>
  Kembali
</button>

<form id=Myform class="form-horizontal style-form" style="margin-top: 20px;" method="POST" enctype="multipart/form-data" name="form1" id="form1" action="<?php echo base_url(); ?>admin/pengaturan/about/simpan-about" onsubmit="return cekform();">

<input type="hidden" class="form-control" name="kode" id="kode" value="<?php echo $kode;?>">

  
  <div class="form-group">
    <label class="col-sm-2 control-label " for="isi">Visi</label>
    <div class="col-sm-8">
      <textarea name="isi1" id="isi1" cols="100" rows="15"><?php echo $isi1;?></textarea>
    </div>
  </div>

  <div class="form-group">
    <label class="col-sm-2 control-label " for="isi">Misi</label>
    <div class="col-sm-8">
      <textarea name="isi2" id="isi2"cols="100" rows="15" ><?php echo $isi2;?></textarea>
    </div>
  </div>

  <div class="form-group">
    <label class="col-sm-2 control-label " for="isi">Tujuan</label>
    <div class="col-sm-8">
      <textarea name="isi3" id="isi3" cols="100" rows="15"><?php echo $isi3;?></textarea>
    </div>
  </div>

  <div class="form-group">
    <label class="col-sm-2 control-label " for="isi">Deskripsi</label>
    <div class="col-sm-8">
      <textarea name="isi4" id="isi4"cols="100" rows="15" ><?php echo $isi4;?></textarea>
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


<!-- <script type="text/javascript">
  $(document).ready(function() {
    $('#isi1').summernote({
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
        url: "<?php echo base_url('about/upload_image') ?>",
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
        url: "<?php echo base_url('about/delete_image') ?>",
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


<script type="text/javascript">
  $(document).ready(function() {
    $('#isi2').summernote({
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
        url: "<?php echo base_url('about/upload_image') ?>",
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
        url: "<?php echo base_url('about/delete_image') ?>",
        cache: false,
        success: function(response) {
          console.log(response);
        }
      });
    }
  });
</script>


<script type="text/javascript">
  $(document).ready(function() {
    $('#isi3').summernote({
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
        url: "<?php echo base_url('about/upload_image') ?>",
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
        url: "<?php echo base_url('about/delete_image') ?>",
        cache: false,
        success: function(response) {
          console.log(response);
        }
      });
    }
  });
</script>


<script type="text/javascript">
  $(document).ready(function() {
    $('#isi4').summernote({
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
        url: "<?php echo base_url('about/upload_image') ?>",
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
        url: "<?php echo base_url('about/delete_image') ?>",
        cache: false,
        success: function(response) {
          console.log(response);
        }
      });
    }
  });
</script> -->