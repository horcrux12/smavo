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

			<div class="sidebar-shortcuts" id="sidebar-shortcuts">
				<div class="sidebar-shortcuts-large" id="sidebar-shortcuts-large">
					<button class="btn btn-success">
						<i class="ace-icon fa fa-signal"></i>
					</button>

					<button class="btn btn-info">
						<i class="ace-icon fa fa-pencil"></i>
					</button>

					<button class="btn btn-warning">
						<i class="ace-icon fa fa-users"></i>
					</button>

					<button class="btn btn-danger">
						<i class="ace-icon fa fa-cogs"></i>
					</button>
				</div>

				<div class="sidebar-shortcuts-mini" id="sidebar-shortcuts-mini">
						<!-- <span class="btn btn-success"></span>

						<span class="btn btn-info"></span>

						<span class="btn btn-warning"></span>

						<span class="btn btn-danger"></span> -->
				</div>
					
			</div><!-- /.sidebar-shortcuts -->


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

							<div class="nav-search" id="nav-search">
								<form class="form-search">
									<span class="input-icon">
										<input type="text" placeholder="Search ..." class="nav-search-input" id="nav-search-input" autocomplete="off" />
										<i class="ace-icon fa fa-search nav-search-icon"></i>
									</span>
								</form>
							</div><!-- /.nav-search -->
						</div>

						<div class="page-content">
							<div class="ace-settings-container" id="ace-settings-container">


								<div class="ace-settings-box clearfix" id="ace-settings-box">
									<div class="pull-left width-50">
										<div class="ace-settings-item">
											<div class="pull-left">
												<select id="skin-colorpicker" class="hide">
													<option data-skin="no-skin" value="#438EB9">#438EB9</option>
													<option data-skin="skin-1" value="#222A2D">#222A2D</option>
													<option data-skin="skin-2" value="#C6487E">#C6487E</option>
													<option data-skin="skin-3" value="#D0D0D0">#D0D0D0</option>
												</select>
											</div>
											<span>&nbsp; Choose Skin</span>
										</div>

										<div class="ace-settings-item">
											<input type="checkbox" class="ace ace-checkbox-2 ace-save-state" id="ace-settings-navbar" autocomplete="off" />
											<label class="lbl" for="ace-settings-navbar"> Fixed Navbar</label>
										</div>

										<div class="ace-settings-item">
											<input type="checkbox" class="ace ace-checkbox-2 ace-save-state" id="ace-settings-sidebar" autocomplete="off" />
											<label class="lbl" for="ace-settings-sidebar"> Fixed Sidebar</label>
										</div>

										<div class="ace-settings-item">
											<input type="checkbox" class="ace ace-checkbox-2 ace-save-state" id="ace-settings-breadcrumbs" autocomplete="off" />
											<label class="lbl" for="ace-settings-breadcrumbs"> Fixed Breadcrumbs</label>
										</div>

										<div class="ace-settings-item">
											<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-rtl" autocomplete="off" />
											<label class="lbl" for="ace-settings-rtl"> Right To Left (rtl)</label>
										</div>

										<div class="ace-settings-item">
											<input type="checkbox" class="ace ace-checkbox-2 ace-save-state" id="ace-settings-add-container" autocomplete="off" />
											<label class="lbl" for="ace-settings-add-container">
												Inside
												<b>.container</b>
											</label>
										</div>
									</div><!-- /.pull-left -->

									<div class="pull-left width-50">
										<div class="ace-settings-item">
											<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-hover" autocomplete="off" />
											<label class="lbl" for="ace-settings-hover"> Submenu on Hover</label>
										</div>

										<div class="ace-settings-item">
											<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-compact" autocomplete="off" />
											<label class="lbl" for="ace-settings-compact"> Compact Sidebar</label>
										</div>

										<div class="ace-settings-item">
											<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-highlight" autocomplete="off" />
											<label class="lbl" for="ace-settings-highlight"> Alt. Active Item</label>
										</div>
									</div><!-- /.pull-left -->
								</div><!-- /.ace-settings-box -->
							</div><!-- /.ace-settings-container -->

							<div class="row">
								<div class="col-xs-12">
									<!-- PAGE CONTENT BEGINS -->
									<?php $this->load->view($konten);
// UAT 
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
		
		<![endif]-->
		<script src="<?= base_url();?>assets/js/bootstrap.min.js"></script>

		<!-- page specific plugin scripts -->

		<!-- ace scripts -->
		<script src="<?= base_url();?>assets/js/ace-elements.min.js"></script>
		<script src="<?= base_url();?>assets/js/ace.min.js"></script>

		<?= $js;?>

		<!-- inline scripts related to this page -->

	</body>
	</html>

	<?php endif; ?>