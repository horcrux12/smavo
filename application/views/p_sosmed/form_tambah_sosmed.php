

<button type="button" class="btn btn-warning btn-sm pull-right" onclick="javascript:history.back()">
  <i class="fa  fa-arrow-circle-left"> &nbsp;</i>
  Kembali
</button>

<form id=Myform class="form-horizontal style-form" style="margin-top: 20px;" method="POST" enctype="multipart/form-data" name="form1" id="form1" action="<?php echo base_url(); ?>admin/pengaturan/sosmed/simpan-sosmed" onsubmit="return cekform();">
  <input type="text" name="kode" value="<?php echo $kode;?>" hidden>
  <div class="form-group">
    <label for="nama" class="col-sm-2 control-label">Jenis Sosial Media</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" name="jenis" id="jenis">
    </div>
  </div>
  <div class="form-group">
    <label for="nama" class="col-sm-2 control-label">Nama Sosial Media</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" name="nama" id="nama">
    </div>
  </div>

  <div class="form-group">
    <label for="" class="col-sm-2 control-label">Link Sosial Media</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" name="link" id="link" placeholder="https://bpptik.kominfo.go.id">
    </div>
  </div>
  <br>

  <center>

    <div class="box-footer">
      <button id="toggle" type="submit" class="btn btn-info btn-small swalDefaultSuccess"> Simpan</button>
      <button type="reset" class="btn btn-danger btn-small">Batal</button>
    </div>
</form>

</center>



<script src="<?php echo base_url(); ?>assets/vendor/jquery/jquery.min.js"></script>
<!-- <script src="<?php echo base_url(); ?>assets/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script> -->

<script>
  $('form').submit(function(e) {
    var form = this;
    e.preventDefault();
    setTimeout(function() {
      form.submit();
    }, 1000); // in milliseconds
  });
</script>