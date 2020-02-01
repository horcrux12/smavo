<div>
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
				<a href="#">
					<i class="ace-icon fa fa-link"></i>
				</a>

				<a href="#">
					<i class="ace-icon fa fa-paperclip"></i>
				</a>

				<a href="#">
					<i class="ace-icon fa fa-pencil"></i>
				</a>

				<a href="#">
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

