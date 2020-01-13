<?php
$info_gagal = $this->session->flashdata('info_gagal');
if(!empty($info_gagal))

{

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
      <a href="<?php echo base_url();?>berita">
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

  <div class="form-group">
    <label for="" class="col-sm-2 control-label">Judul</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" name="judul" id="judul" value="<?php echo $judul;?>" placeholder="Judul Berita">
  </div>
</div>
   

  <div class="form-group">
    <label class="col-sm-2 control-label " for="isi">Isi Berita</label>
    <div class="col-sm-8">
      <textarea name="isi" id="isi" ><?php echo $isi;?></textarea>
    </div>
  </div>
  <br>
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
      styleWithSpan: false
    //   toolbar:[
    //     ['cleaner',['cleaner']],// The Button
    //     ['style',['style']],
    //     ['font',['bold','italic','underline','clear']],
    //     ['fontname',['fontname']],
    //     ['color',['color']],
    //     ['para',['ul','ol','paragraph']],
    //     ['height',['height']],
    //     ['table',['table']],
    //     ['insert',['media','link','hr','picture']],
    //     ['view',['fullscreen','codeview']],
    //     ['help',['help']]
    // ],
    // cleaner:{
    //       action: 'both', // both|button|paste 'button' only cleans via toolbar button, 'paste' only clean when pasting content, both does both options.
    //       newline: '<br>', // Summernote's default is to use '<p><br></p>'
    //       notStyle: 'position:absolute;top:0;left:0;right:0', // Position of Notification
    //       icon: '<i class="note-icon">Clean</i>',
    //       keepHtml: false, // Remove all Html formats
    //       keepOnlyTags: ['<p>', '<br>', '<ul>', '<li>', '<b>', '<strong>','<i>', '<a>'], // If keepHtml is true, remove all tags except these
    //       keepClasses: false, // Remove Classes
    //       badTags: ['style', 'script', 'applet', 'embed', 'noframes', 'noscript', 'html'], // Remove full tags with contents
    //       badAttributes: ['style', 'start'], // Remove attributes from remaining tags
    //       limitChars: false, // 0/false|# 0/false disables option
    //       limitDisplay: 'both', // text|html|both
    //       limitStop: false // true/false
    // }
});
  }); 
</script>
                 

