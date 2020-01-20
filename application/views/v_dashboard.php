<?php 
$cekin = $this->session->userdata('hak_akses');
if ($cekin === 'Administrator' || $cekin === 'Admin Siswa' || $cekin === 'Admin Publish'):
	?>

<!DOCTYPE html>
<html lang="en">
<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta charset="utf-8" />
		<title>ADMIN - SMA NEGERI 2 CIBINONG</title>

		<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"> -->
		<!-- Ini Coba Pisah -->
		<meta name="description" content="" />
		<link rel="icon" href="<?php echo base_url();?>assets/photo/logo.png">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

		<!-- bootstrap & fontawesome -->
		<link rel="stylesheet" href="<?= base_url();?>assets/css/bootstrap.min.css" />
		<link rel="stylesheet" href="<?= base_url();?>assets/font-awesome/4.5.0/css/font-awesome.min.css" />

		<!-- page specific plugin styles -->
			<?= $css;?>
		<!-- text fonts -->
		<link rel="stylesheet" href="<?= base_url();?>assets/css/fonts.googleapis.com.css" />

		<!-- ace styles -->
		<link rel="stylesheet" href="<?= base_url();?>assets/css/ace.min.css" class="ace-main-stylesheet" id="main-ace-style" />

		<!--[if lte IE 9]>
			<link rel="stylesheet" href="<?= base_url();?>assets/css/ace-part2.min.css" class="ace-main-stylesheet" />
		<![endif]-->
		<link rel="stylesheet" href="<?= base_url();?>assets/css/ace-skins.min.css" />
		<link rel="stylesheet" href="<?= base_url();?>assets/css/ace-rtl.min.css" />

		

		<!--[if lte IE 9]>
		  <link rel="stylesheet" href="<?= base_url();?>assets/css/ace-ie.min.css" />
		<![endif]-->

		<!-- inline styles related to this page -->

		<!-- ace settings handler -->
		<script src="<?= base_url();?>assets/js/ace-extra.min.js"></script>

		<!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->

		<!--[if lte IE 8]>
		<script src="<?= base_url();?>assets/js/html5shiv.min.js"></script>
		<script src="<?= base_url();?>assets/js/respond.min.js"></script>
	<![endif]-->

</head>

<body class="no-skin">
	<div id="navbar" class="navbar navbar-default          ace-save-state">
		<div class="navbar-container ace-save-state" id="navbar-container">
			<button type="button" class="navbar-toggle menu-toggler pull-left" id="menu-toggler" data-target="#sidebar">
				<span class="sr-only">Toggle sidebar</span>

				<span class="icon-bar"></span>

				<span class="icon-bar"></span>

				<span class="icon-bar"></span>
			</button>

			<div class="navbar-header pull-left">
				<a href="<?php echo base_url();?>dashboard" class="navbar-brand">
					<small>
						<img src="<?php echo base_url();?>assets/photo/logo.png ?>" width="27">
						ADMIN - SMA NEGERI 2 CIBINONG
					</small>
				</a>
			</div>

			<div class="navbar-buttons navbar-header pull-right" role="navigation">
				<ul class="nav ace-nav">
					<?php $this->load->view('v_akun');?>
				</ul>
			</div>
		</div><!-- /.navbar-container -->
	</div>

	<div class="main-container ace-save-state" id="main-container">
		<script type="text/javascript">
			try{ace.settings.loadState('main-container')}catch(e){}
		</script>

		<div id="sidebar" class="sidebar responsive ace-save-state">
			<script type="text/javascript">
				try{ace.settings.loadState('sidebar')}catch(e){}
			</script>

				<!-- include v_menu -->
				<?php $this->load->view('v_menu');?>

				
				<div class="main-content">
					<div class="main-content-inner">
						<div class="breadcrumbs ace-save-state" id="breadcrumbs">
							<ul class="breadcrumb">
								<li>
									<?php echo $judul;?>
								</li>
								<li>
									<?php echo $sub_judul;?>
								</li>
							</ul><!-- /.breadcrumb -->
							<!-- /.nav-search -->
						</div>

						<div class="page-content">
							<div class="row">
								<div class="col-xs-12">
									<!-- PAGE CONTENT BEGINS -->
									<?php $this->load->view($konten);
									?>
									<!-- PAGE CONTENT ENDS -->
								</div><!-- /.col -->
							</div><!-- /.row -->
						</div><!-- /.page-content -->
					</div>
				</div><!-- /.main-content -->

				<?php $this->load->view('v_footer');?>

				<a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
					<i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
				</a>
			</div><!-- /.main-container -->

		<!-- basic scripts -->

		<!--[if !IE]> -->
		<script src="<?= base_url();?>assets/js/jquery-2.1.4.min.js"></script>

		<!-- <![endif]-->

		<!--[if IE]>
		<script src="<?= base_url();?>assets/js/jquery-1.11.3.min.js"></script>
		<![endif]-->
		<script src="<?= base_url();?>assets/js/bootstrap.min.js"></script>

		<!-- page specific plugin scripts -->
		<?= $js;?>
		
		<!-- ace scripts -->
		<script src="<?= base_url();?>assets/js/ace-elements.min.js"></script>
		<script src="<?= base_url();?>assets/js/ace.min.js"></script>

		

		<!-- inline scripts related to this page -->

	</body>
	</html>

	<?php endif; ?>