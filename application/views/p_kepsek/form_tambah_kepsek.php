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

<button type="button" class="btn btn-warning btn-sm pull-right" onclick="javascript:history.back()">
  <i class="fa  fa-arrow-circle-left"> &nbsp;</i>
  Kembali
</button>

<form id=Myform class="form-horizontal style-form" style="margin-top: 20px;" method="POST" enctype="multipart/form-data" name="form1" id="form1" action="<?php echo base_url(); ?>admin/profil/kepsek/simpan-kepsek" onsubmit="return cekform();">
  <input type="text" name="kode" value="<?php echo $kode;?>" hidden>
  <div class="form-group">
    <label for="nama" class="col-sm-2 control-label">Nama Kepala Sekolah</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" name="nama" id="nama">
    </div>
  </div>
  <div class="form-group">
    <label class="col-sm-2 control-label">Foto Utama</label>
    <div class="col-sm-8">
    <input type="file" class="form-control" id="validatedCustomFile" name="file_name" accept="image/*"  required/>
    </div>
  </div>

  <div class="form-group">
    <label for="" class="col-sm-2 control-label">Periode</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" name="periode" id="periode" placeholder="2010-2014">
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