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

<a href="<?php echo base_url(); ?>berita">
  <button type="button" class="btn btn-warning btn-sm pull-right">
    <i class="fa  fa-arrow-circle-left"> &nbsp;</i>
    Kembali
  </button>
</a>
</i>

<form class="form-horizontal style-form" style="margin-top: 20px;" method="POST" enctype="multipart/form-data" name="form1" id="form1" action="<?php echo base_url(); ?>berita/simpan" onsubmit="return cekform();">


  <div class="form-group">
    <label for="" class="col-sm-2 control-label">Kode berita</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" name="kode" id="kode" value="<?php echo $kode; ?>" readonly>
    </div>
  </div>

  <div class="form-group">
    <label for="" class="col-sm-2 control-label">Nama Penulis</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" name="nama" id="nama" value="<?php echo $this->session->userdata('nama'); ?>"readonly>
    </div>
  </div>

  <div class="form-group">
    <label class="col-sm-2 control-label">Kategori</label>
    <div class="col-sm-8">
      <select class="form-control" name="kode_kat" id="kode_kat">
        <option value="">-------- pilih salah satu -------</option>
        <?php
        $kat  = $this->db->get('tb_kat_artikel');
        foreach ($kat->result() as $row) {
        ?>
          <option value="<?php echo $row->id_kat_artikel; ?>"><?php echo $row->nama_kat_artikel; ?></option>
        <?php } ?>
      </select>
    </div>
  </div>

  <div class="form-group">
    <label class="col-sm-2 control-label">Foto Utama</label>
    <div class="col-sm-8">
      <input type="file" id="id-input-file-2" name="file_name" accept="image/*"/>
    </div>
  </div>

  <section class="content">

    <div class="row">
      <label class="col-sm-2 control-label">Isi berita</label>
      <div class="col-md-10">
        <div class="box-header">
        </div>
        <textarea id="isi" name="isi"></textarea>
      </div>
    </div>
    <br>
  </section>
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
    $(".add-more").click(function() {
      var html = $(".copy").html();
      $(".after-add-more").after(html);
    });
    $("body").on("click", ".remove", function() {
      $(this).parents(".control-group").remove();
    });
  });
</script> -->
<!-- <script>
  var ckeditor = CKEDITOR.replace('isi',{
    height : '400px',
    width : '610px',
    filebrowserBrowseUrl : 'filemanager/dialog.php?type=2&editor=ckeditor&fldr=',
    filebrowserUploadUrl : 'filemanager/dialog.php?type=2&editor=ckeditor&fldr=',
    filebrowserImageBrowseUrl : 'filemanager/dialog.php?type=1&editor=ckeditor&fldr='
  });
  CKEDITOR.disablAutoInLine = true;
  CKEDITOR.inline('editable');
</script> -->
<script type="text/javascript">
  $(document).ready(function() {
    $('#isi').summernote({
      height: "300px",
      width: "990px",
      styleWithSpan: false
    });
  }); 
</script>