<div>
	<ul class="ace-thumbnails clearfix">
		<?php foreach ($data as $key) :?>
		<li>
			<a href="<?= base_url()?>assets/photo/<?= $key->foto?>" data-rel="colorbox">
				<img width="150" height="150" alt="150x150" src="<?= base_url()?>assets/photo/<?= $key->foto;?>" />
				<div class="text">
					<div class="inner">Sample Caption on Hover</div>
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

