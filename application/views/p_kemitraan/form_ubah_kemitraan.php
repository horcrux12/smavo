<!-- Kembali -->

<button type="button" class="btn btn-warning btn-sm pull-right" onclick="javascript:history.back()">
  <i class="fa  fa-arrow-circle-left"> &nbsp;</i>
  Kembali
</button>

<form id=Myform class="form-horizontal style-form" style="margin-top: 20px;" method="POST" enctype="multipart/form-data" name="form1" id="form1" action="<?php echo base_url(); ?>admin/pengaturan/kemitraan/simpan-kemitraan">
  <input type="text" name="kode" value="<?php echo $kode;?>" hidden>
  <div class="form-group">
    <label for="nama" class="col-sm-2 control-label">Nama Mitra</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" name="nama" id="nama" value="<?php echo $nama;?>">
    </div>
  </div>
  <div class="form-group">
    <label class="col-sm-2 control-label">Foto Utama</label>
    <div class="col-sm-8">
      <img id="avatar" class="editable img-responsive" width="120px" src="<?php echo base_url('assets/photo/kemitraan/'.$foto.'');?>"><br>
      <input type="file" class="form-control" id="validatedCustomFile" name="file_name" accept="image/*"  required/>
      <i><font color="red">*Foto yang telah digunakan : <?php echo $foto;?><br></font></i>
    </div>
  </div>
  <div class="form-group">
    <label for="" class="col-sm-2 control-label">Link Mitra</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" name="link" id="link" value="<?php echo $link;?>">
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

<!-- <script>
  $('form').submit(function(e) {
    var form = this;
    e.preventDefault();
    setTimeout(function() {
      form.submit();
    }, 1000); // in milliseconds
  });
</script> -->
<!-- <script>
  $(document).ready(function() {
    var selected = '';

    if ($('#artikel').val() == "Non Akademik") {
      
        $.getJSON("<?php echo base_url(); ?>/berita/ambil_data_organisasi", function(data){
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