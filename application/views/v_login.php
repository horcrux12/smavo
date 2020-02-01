<!DOCTYPE html>
<html lang="en">
	<head>
	<background image="<?php echo base_url();?>assets/images/536.jpg">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta charset="utf-8" />
		<title>Sistem Informasi Akademik SMA Negeri 2 Cibinong</title>

		<meta name="description" content="User login page" />

		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

		<!-- bootstrap & fontawesome -->
		<link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.min.css" />
		<link rel="stylesheet" href="<?php echo base_url();?>assets/font-awesome/4.5.0/css/font-awesome.min.css" />


		<!-- text fonts -->
		<link rel="stylesheet" href="<?php echo base_url();?>assets/css/fonts.googleapis.com.css" />

		<!-- ace styles -->
		<link rel="stylesheet" href="<?php echo base_url();?>assets/css/ace.min.css" />

		<!--[if lte IE 9]>
			<link rel="stylesheet" href="assets/css/ace-part2.min.css" />
		<![endif]-->
		<link rel="stylesheet" href="<?php echo base_url();?>assets/css/ace-rtl.min.css" />

		<!--[if lte IE 9]>
		  <link rel="stylesheet" href="assets/css/ace-ie.min.css" />
		<![endif]-->

		<!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->

		<!--[if lte IE 8]>
		<script src="assets/js/html5shiv.min.js"></script>
		<script src="assets/js/respond.min.js"></script>
		<![endif]-->

		<!-- CEK FORM KOSONG -->

<script type="text/javascript">
  
  function cekform(){

      if(!$ ("#username").val())
      {
        alert('Maaf username tidak boleh kosong');
        $("#username").focus();
        return false;

      }

      if(!$ ("#password").val())
      {
        alert('Maaf password tidak boleh kosong');
        $("#password").focus();
        return false;

      }
    }

</script>

	</head>

	<body class="login-layout">
		<div class="main-container">
			<div class="main-content">
				<div class="row">
				<br><br><br><br><br><br>
					<div class="col-sm-10 col-sm-offset-1">
						<div class="login-container">
							<div class="center">
								<h1>
									<img src="<?php echo base_url();?>assets/photo/logo/logo.png ?>" width="100"><br>
									<span class="red">SIAKAD</span>
									<span class="white" id="id-text2">Application</span>
								</h1>
								<h5 class="blue" id="id-company-text"> </h5>
							</div>

							<div class="space-6"></div>

							<div class="position-relative">
								<div id="login-box" class="login-box visible widget-box no-border">
									<div class="widget-body">
										<div class="widget-main">
											
											</h4>

											<div class="space-6"></div>

					<form action="<?php echo base_url();?>login/cek" method="post" onsubmit="return cekform();">

						<fieldset>
							<label class="block clearfix">
								<span class="block input-icon input-icon-right">
									<input type="username" class="form-control" name="username" id="username" placeholder="Username">
									<i class="ace-icon fa fa-user"></i>
								</span>
							</label>

							<label class="block clearfix">
								<span class="block input-icon input-icon-right">
									<input type="password" class="form-control" name="password" id="password" placeholder="Password">
									<i class="ace-icon fa fa-lock"></i>
								</span>
							</label>

											<!-- INFO/WARNING -->
				          <?php
				                $info = $this->session->flashdata('info');
				                if (!empty($info)){
				                  echo "<div class='alert alert-danger'>";
				                  echo "<i class='ace-icon fa fa-times'></i>";
				                  echo "&nbsp;&nbsp;";
				                  echo "<strong>";
				                  echo $info;
				                  echo "</div> </strong>"; }
				          ?>

							<div class="space"></div>

							<div class="clearfix">
								

								<button type="submit" class="width-100 pull-right btn btn-sm btn-primary">
									<i class="ace-icon fa fa-key"></i>
									<span class="bigger-110">Login</span>
								</button>
							</div>

							<div class="space-4"></div>
						</fieldset>

					</form>

									</div><!-- /.widget-body -->
								</div><!-- /.signup-box -->
							</div><!-- /.position-relative -->
							
						<h5 class="blue" id="id-company-text" align="center"> SMA Negeri 2 Cibinong &copy; <?php echo date('Y');?></h5> 
							
						</div>
					</div><!-- /.col -->
				</div><!-- /.row -->
			</div><!-- /.main-content -->
		</div><!-- /.main-container -->

		<!-- basic scripts -->

		<!--[if !IE]> -->
		<script src="<?php echo base_url();?>assets/js/jquery-2.1.4.min.js"></script>

		<!-- <![endif]-->

		<!--[if IE]>
<script src="assets/js/jquery-1.11.3.min.js"></script>
<![endif]-->
		<script type="text/javascript">
			if('ontouchstart' in document.documentElement) document.write("<script src='<?php echo base_url();?>assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
		</script>

		<!-- inline scripts related to this page -->
		<script type="text/javascript">
			jQuery(function($) {
			 $(document).on('click', '.toolbar a[data-target]', function(e) {
				e.preventDefault();
				var target = $(this).data('target');
				$('.widget-box.visible').removeClass('visible');//hide others
				$(target).addClass('visible');//show target
			 });
			});
			
			
			
			//you don't need this, just used for changing background
			jQuery(function($) {
			 $('#btn-login-dark').on('click', function(e) {
				$('body').attr('class', 'login-layout');
				$('#id-text2').attr('class', 'white');
				$('#id-company-text').attr('class', 'blue');
				
				e.preventDefault();
			 });
			 $('#btn-login-light').on('click', function(e) {
				$('body').attr('class', 'login-layout light-login');
				$('#id-text2').attr('class', 'grey');
				$('#id-company-text').attr('class', 'blue');
				
				e.preventDefault();
			 });
			 $('#btn-login-blur').on('click', function(e) {
				$('body').attr('class', 'login-layout blur-login');
				$('#id-text2').attr('class', 'white');
				$('#id-company-text').attr('class', 'light-blue');
				
				e.preventDefault();
			 });
			 
			});
		</script>
	</body>
</html>
