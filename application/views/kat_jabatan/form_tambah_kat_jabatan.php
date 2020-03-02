<!-- CEK FORM KOSONG -->
<script type="text/javascript">
  function cekform() {

    if (!$("#kode").val()) {
      alert('Maaf ID jabatan tidak boleh kosong');
      $("#kode").focus();
      return false;

    }

    if (!$("#nama").val()) {
      alert('Maaf nama jabatan tidak boleh kosong');
      $("#nama").focus();
      return false;

    }

  }
</script>
<!-- END CEK FORM KOSONG -->

<!-- Kembali -->
<a href="<?php echo base_url(); ?>admin/kategori-jabatan">
  <button type="button" class="btn btn-warning btn-sm pull-right">
    <i class="fa  fa-arrow-circle-left"> &nbsp;</i>Kembali</button>
</a>
</i>
<!-- end kembali -->


<form class="form-horizontal style-form" style="margin-top: 20px;" method="POST" enctype="multipart/form-data" name="form1" id="form1" action="<?php echo base_url(); ?>admin/kategori-jabatan/simpan-jabatan" onsubmit="return cekform();">


  <div class="form-group">
    <label for="" class="col-sm-2 control-label">ID Jabatan</label>
    <div class="col-sm-2">
      <input type="text" class="form-control" name="kode" id="kode" value="<?php echo $kode; ?>" readonly>
    </div>
  </div>

  <div class="form-group">
    <label for="" class="col-sm-2 control-label">Nama Jabatan</label>
    <div class="col-sm-5">
      <input type="text" class="form-control" name="nama" id="nama" placeholder="Nama Jabatan">
    </div>
  </div>


  <center>
    <div class="box-footer">
      <button type="submit" class="btn btn-info btn-small"> Simpan</button>
      <button type="reset" class="btn btn-danger btn-small">Batal</button>
</form>
</div>
</center>