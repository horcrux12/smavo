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