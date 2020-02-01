<?php 
$cekin = $this->session->userdata('hak_akses');
if ($cekin === 'Administrator' || $cekin === 'Admin Siswa' || $cekin === 'Admin Publish'):
	?>

<li class="light-blue dropdown-modal">
	<a data-toggle="dropdown" href="#" class="dropdown-toggle">
		<i class="ace-icon fa fa-user"></i>&nbsp;&nbsp;
		<span><?php echo $this->session->userdata('nama');?></span>
		<i class="ace-icon fa fa-caret-down"></i>
	</a>
	<ul class="user-menu dropdown-menu-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
		<li>
			<a href="<?php echo base_url();?>admin/logout" onclick="return confirm('Apakah anda yakin ingin keluar dari sistem ini?')">
			<i class="ace-icon fa fa-close"></i>Logout</a>
		</li>		
	</ul>
</li>
<?php endif;?>