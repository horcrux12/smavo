<?php
$info_hapus = $this->session->flashdata('info_hapus');
if(!empty($info_hapus))

{

  echo "<div class='alert alert-success alert-dismissible'>";
  echo "<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>"; 
  echo "</button>";
  echo "&nbsp; <i class='icon fa fa-check'>"; 
  echo "</i>";
  echo $info_hapus;
  echo "</div>";
 
}
?>


<div class="center">
	<ul class="ace-thumbnails clearfix">
		<?php foreach ($data as $key) :?>
		<li>
			<a href="<?= base_url()?>assets/photo/berita/<?= $key->foto?>" data-rel="colorbox">
				<img width="175" height="175" src="<?= base_url()?>assets/photo/berita/<?= $key->foto;?>" />
				<div class="text">
					<div class="inner"><?= $key->foto?></div>
				</div>
			</a>

			<div class="tools tools-bottom">
				<a href="<?php echo base_url();?>admin/galeri/hapus-galeri/<?php echo $key->id_galeri?>"  onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')">
					<i class="ace-icon fa fa-times red"></i>
				</a>
			</div>
		</li>
		<?php endforeach?>
	</ul>
</div>
<script type="text/javascript">
	if ('ontouchstart' in document.documentElement) document.write("<script src='<?php echo base_url(); ?>assets/js/jquery.mobile.custom.min.js'>" + "<" + "/script>");
</script>

