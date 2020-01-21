	<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class siswa extends CI_Controller {

	function __construct(){
    parent::__construct();
    //validasi jika user belum login
    if($this->session->userdata('masuk') != TRUE){
    echo "<script>;
    	  document.location='http://localhost/smavo/login'</script>";
		}

		$this->load->library('upload');
		$this->load->model('model_dinamic');
	}
		
		public function index()
		{
			$konten['css']		= '<link rel="stylesheet" href="'.base_url().'assets/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">';
			$konten['konten'] 		= 'siswa/view_siswa';
			$konten['judul']		= 'Data Master';
			$konten['sub_judul'] 	= 'Data siswa';
			$konten['data']			= $this->db->get('tb_siswa');
			$konten['js']			= '
			<script src="'.base_url().'assets/js/jquery.dataTables.min.js"></script>
			<script src="'.base_url().'assets/js/jquery.dataTables.bootstrap.min.js"></script>
			<script src="'.base_url().'assets/js/dataTables.buttons.min.js"></script>
			<script src="'.base_url().'assets/js/buttons.flash.min.js"></script>
			<script src="'.base_url().'assets/js/buttons.html5.min.js"></script>
			<script src="'.base_url().'assets/js/buttons.print.min.js"></script>
			<script src="'.base_url().'assets/js/buttons.colVis.min.js"></script>
			<script src="'.base_url().'assets/js/dataTables.select.min.js"></script>
			<script src="'.base_url().'assets/plugins/sweetalert2/sweetalert2.min.js"></script>
			<script>
				function myFunction(id) {
				Swal.fire({
				title: '."'".'Are you sure?'."'".',
				text: "You won'."'".'t be able to revert this!",
				icon: '."'".'warning'."'".',
				showCancelButton: true,
				confirmButtonColor: '."'".'#3085d6'."'".',
				cancelButtonColor: '."'".'#d33'."'".',
				confirmButtonText: '."'".'Yes, delete it!'."'".',
				
				}).then((result) => {
				if (result.value) {
					Swal.fire(
					'."'".'Deleted!'."'".',
					'."'".'Your file has been deleted.'."'".',
					'."'".'success'."'".'
					),
					function(){
						window.location = "'.base_url().'admin/siswa/hapus-siswa/"+id;	
					}
				}
				})
			}
				</script>
			<script type="text/javascript">
			jQuery(function($) {
				//initiate dataTables plugin
				var myTable = 
				$('."'".'#dynamic-table'."'".')
				//.wrap("<div class='."'".'dataTables_borderWrap'."'".' />")   //if you are applying horizontal scrolling (sScrollX)
				.DataTable( {
					bAutoWidth: false,
					"aoColumns": [
					  { "bSortable": false },
					  null, null,null, null, null,
					  { "bSortable": false }
					],
					"aaSorting": [],
					
					
					//"bProcessing": true,
			        //"bServerSide": true,
			        //"sAjaxSource": "http://127.0.0.1/table.php"	,
			
					//,
					//"sScrollY": "200px",
					//"bPaginate": false,
			
					//"sScrollX": "100%",
					//"sScrollXInner": "120%",
					//"bScrollCollapse": true,
					//Note: if you are applying horizontal scrolling (sScrollX) on a ".table-bordered"
					//you may want to wrap the table inside a "div.dataTables_borderWrap" element
			
					//"iDisplayLength": 50
			
			
					select: {
						style: '."'".'multi'."'".'
					}
			    } );
			
				
				
				$.fn.dataTable.Buttons.defaults.dom.container.className = '."'".'dt-buttons btn-overlap btn-group btn-overlap'."'".';
				
				new $.fn.dataTable.Buttons( myTable, {
					buttons: [
					  {
						"extend": "colvis",
						"text": "<i class='."'".'fa fa-search bigger-110 blue'."'".'></i> <span class='."'".'hidden'."'".'>Show/hide columns</span>",
						"className": "btn btn-white btn-primary btn-bold",
						columns: '."'".':not(:first):not(:last)'."'".'
					  },
					  {
						"extend": "copy",
						"text": "<i class='."'".'fa fa-copy bigger-110 pink'."'".'></i> <span class='."'".'hidden'."'".'>Copy to clipboard</span>",
						"className": "btn btn-white btn-primary btn-bold"
					  },
					  {
						"extend": "csv",
						"text": "<i class='."'".'fa fa-database bigger-110 orange'."'".'></i> <span class='."'".'hidden'."'".'>Export to CSV</span>",
						"className": "btn btn-white btn-primary btn-bold"
					  },
					  {
						"extend": "excel",
						"text": "<i class='."'".'fa fa-file-excel-o bigger-110 green'."'".'></i> <span class='."'".'hidden'."'".'>Export to Excel</span>",
						"className": "btn btn-white btn-primary btn-bold"
					  },
					  {
						"extend": "pdf",
						"text": "<i class='."'".'fa fa-file-pdf-o bigger-110 red'."'".'></i> <span class='."'".'hidden'."'".'>Export to PDF</span>",
						"className": "btn btn-white btn-primary btn-bold"
					  },
					  {
						"extend": "print",
						"text": "<i class='."'".'fa fa-print bigger-110 grey'."'".'></i> <span class='."'".'hidden'."'".'>Print</span>",
						"className": "btn btn-white btn-primary btn-bold",
						autoPrint: false,
						message: '."'".'This print was produced using the Print button for DataTables'."'".'
					  }		  
					]
				} );
				myTable.buttons().container().appendTo( $('."'".'.tableTools-container'."'".') );
				
				//style the message box
				var defaultCopyAction = myTable.button(1).action();
				myTable.button(1).action(function (e, dt, button, config) {
					defaultCopyAction(e, dt, button, config);
					$('."'".'.dt-button-info'."'".').addClass('."'".'gritter-item-wrapper gritter-info gritter-center white'."'".');
				});
				
				
				var defaultColvisAction = myTable.button(0).action();
				myTable.button(0).action(function (e, dt, button, config) {
					
					defaultColvisAction(e, dt, button, config);
					
					
					if($('."'".'.dt-button-collection > .dropdown-menu'."'".').length == 0) {
						$('."'".'.dt-button-collection'."'".')
						.wrapInner('."'".'<ul class="dropdown-menu dropdown-light dropdown-caret dropdown-caret" />'."'".')
						.find('."'".'a'."'".').attr('."'".'href'."'".', '."'".'#'."'".').wrap("<li />")
					}
					$('."'".'.dt-button-collection'."'".').appendTo('."'".'.tableTools-container .dt-buttons'."'".')
				});
			
				////
			
				setTimeout(function() {
					$($('."'".'.tableTools-container'."'".')).find('."'".'a.dt-button'."'".').each(function() {
						var div = $(this).find('."'".' > div'."'".').first();
						if(div.length == 1) div.tooltip({container: '."'".'body'."'".', title: div.parent().text()});
						else $(this).tooltip({container: '."'".'body'."'".', title: $(this).text()});
					});
				}, 500);
				
				
				
				
				
				myTable.on( '."'".'select'."'".', function ( e, dt, type, index ) {
					if ( type === '."'".'row'."'".' ) {
						$( myTable.row( index ).node() ).find('."'".'input:checkbox'."'".').prop('."'".'checked'."'".', true);
					}
				} );
				myTable.on( '."'".'deselect'."'".', function ( e, dt, type, index ) {
					if ( type === '."'".'row'."'".' ) {
						$( myTable.row( index ).node() ).find('."'".'input:checkbox'."'".').prop('."'".'checked'."'".', false);
					}
				} );
			
			
			
			
				/////////////////////////////////
		
				
				//select/deselect all rows according to table header checkbox
				$('."'".'#dynamic-table > thead > tr > th input[type=checkbox], #dynamic-table_wrapper input[type=checkbox]'."'".').eq(0).on('."'".'click'."'".', function(){
					var th_checked = this.checked;//checkbox inside "TH" table header
					
					$('."'".'#dynamic-table'."'".').find('."'".'tbody > tr'."'".').each(function(){
						var row = this;
						if(th_checked) myTable.row(row).select();
						else  myTable.row(row).deselect();
					});
				});
				
				//select/deselect a row when the checkbox is checked/unchecked
				$('."'".'#dynamic-table'."'".').on('."'".'click'."'".', '."'".'td input[type=checkbox]'."'".' , function(){
					var row = $(this).closest('."'".'tr'."'".').get(0);
					if(this.checked) myTable.row(row).deselect();
					else myTable.row(row).select();
				});
			
			
			
				$(document).on('."'".'click'."'".', '."'".'#dynamic-table .dropdown-toggle'."'".', function(e) {
					e.stopImmediatePropagation();
					e.stopPropagation();
					e.preventDefault();
				});
				
				
				
				//And for the first simple table, which doesn'."'".'t have TableTools or dataTables
				//select/deselect all rows according to table header checkbox
				var active_class = '."'".'active'."'".';
				$('."'".'#simple-table > thead > tr > th input[type=checkbox]'."'".').eq(0).on('."'".'click'."'".', function(){
					var th_checked = this.checked;//checkbox inside "TH" table header
					
					$(this).closest('."'".'table'."'".').find('."'".'tbody > tr'."'".').each(function(){
						var row = this;
						if(th_checked) $(row).addClass(active_class).find('."'".'input[type=checkbox]'."'".').eq(0).prop('."'".'checked'."'".', true);
						else $(row).removeClass(active_class).find('."'".'input[type=checkbox]'."'".').eq(0).prop('."'".'checked'."'".', false);
					});
				});
				
				//select/deselect a row when the checkbox is checked/unchecked		
				
				/**
				//add horizontal scrollbars to a simple table
				$('."'".'#simple-table'."'".').css({'."'".'width'."'".':'."'".'2000px'."'".', '."'".'max-width'."'".': '."'".'none'."'".'}).wrap('."'".'<div style="width: 1000px;" />'."'".').parent().ace_scroll(
				  {
					horizontal: true,
					styleClass: '."'".'scroll-top scroll-dark scroll-visible'."'".',//show the scrollbars on top(default is bottom)
					size: 2000,
					mouseWheelLock: true
				  }
				).css('."'".'padding-top'."'".', '."'".'12px'."'".');
				*/
			
			
			})
		</script>';

			$konten['data']	= $this->model_siswa->tampil_siswa();
			
			if ($konten['data']->num_rows()>0) {
				$konten['data'] = $konten['data']->result();
			}
			else{
				$konten['data'] = 
				array('0' => 
				(object)array(
					'id_artikel' => "Tidak Ada Data",
					'nama_kat_siswa' => "Tidak Ada Data",
					'nama' => "Tidak Ada Data",
					'judul' => "Tidak Ada Data",
					'foto' => "Tidak Ada Data",
					'deskripsi' => "Tidak Ada Data"
				)
				);
				// $konten['data'] =  $konten['data'];
			}
			// print_r($konten['data']); 
			$this->load->view('v_dashboard',$konten);
		}
		

		public function detail_kat_siswa($id){
			$konten['css']			= '';
				$konten['konten'] 		= 'siswa/view_siswa_kategori';
				$konten['judul']		= 'Data siswa';
				
				$konten['js']			= '
				<script src="'.base_url().'assets/js/jquery.dataTables.min.js"></script>
				<script src="'.base_url().'assets/js/jquery.dataTables.bootstrap.min.js"></script>
				<script src="'.base_url().'assets/js/dataTables.buttons.min.js"></script>
				<script src="'.base_url().'assets/js/buttons.flash.min.js"></script>
				<script src="'.base_url().'assets/js/buttons.html5.min.js"></script>
				<script src="'.base_url().'assets/js/buttons.print.min.js"></script>
				<script src="'.base_url().'assets/js/buttons.colVis.min.js"></script>
				<script src="'.base_url().'assets/js/dataTables.select.min.js"></script>
				<script type="text/javascript">
				jQuery(function($) {
					//initiate dataTables plugin
					var myTable = 
					$('."'".'#dynamic-table'."'".')
					//.wrap("<div class='."'".'dataTables_borderWrap'."'".' />")   //if you are applying horizontal scrolling (sScrollX)
					.DataTable( {
						bAutoWidth: false,
						"aoColumns": [
						  { "bSortable": false },
						  null, null,null, null, null,
						  { "bSortable": false }
						],
						"aaSorting": [],
						
						
						//"bProcessing": true,
						//"bServerSide": true,
						//"sAjaxSource": "http://127.0.0.1/table.php"	,
				
						//,
						//"sScrollY": "200px",
						//"bPaginate": false,
				
						//"sScrollX": "100%",
						//"sScrollXInner": "120%",
						//"bScrollCollapse": true,
						//Note: if you are applying horizontal scrolling (sScrollX) on a ".table-bordered"
						//you may want to wrap the table inside a "div.dataTables_borderWrap" element
				
						//"iDisplayLength": 50
				
				
						select: {
							style: '."'".'multi'."'".'
						}
					} );
				
					
					
					$.fn.dataTable.Buttons.defaults.dom.container.className = '."'".'dt-buttons btn-overlap btn-group btn-overlap'."'".';
					
					new $.fn.dataTable.Buttons( myTable, {
						buttons: [
						  {
							"extend": "colvis",
							"text": "<i class='."'".'fa fa-search bigger-110 blue'."'".'></i> <span class='."'".'hidden'."'".'>Show/hide columns</span>",
							"className": "btn btn-white btn-primary btn-bold",
							columns: '."'".':not(:first):not(:last)'."'".'
						  },
						  {
							"extend": "copy",
							"text": "<i class='."'".'fa fa-copy bigger-110 pink'."'".'></i> <span class='."'".'hidden'."'".'>Copy to clipboard</span>",
							"className": "btn btn-white btn-primary btn-bold"
						  },
						  {
							"extend": "csv",
							"text": "<i class='."'".'fa fa-database bigger-110 orange'."'".'></i> <span class='."'".'hidden'."'".'>Export to CSV</span>",
							"className": "btn btn-white btn-primary btn-bold"
						  },
						  {
							"extend": "excel",
							"text": "<i class='."'".'fa fa-file-excel-o bigger-110 green'."'".'></i> <span class='."'".'hidden'."'".'>Export to Excel</span>",
							"className": "btn btn-white btn-primary btn-bold"
						  },
						  {
							"extend": "pdf",
							"text": "<i class='."'".'fa fa-file-pdf-o bigger-110 red'."'".'></i> <span class='."'".'hidden'."'".'>Export to PDF</span>",
							"className": "btn btn-white btn-primary btn-bold"
						  },
						  {
							"extend": "print",
							"text": "<i class='."'".'fa fa-print bigger-110 grey'."'".'></i> <span class='."'".'hidden'."'".'>Print</span>",
							"className": "btn btn-white btn-primary btn-bold",
							autoPrint: false,
							message: '."'".'This print was produced using the Print button for DataTables'."'".'
						  }		  
						]
					} );
					myTable.buttons().container().appendTo( $('."'".'.tableTools-container'."'".') );
					
					//style the message box
					var defaultCopyAction = myTable.button(1).action();
					myTable.button(1).action(function (e, dt, button, config) {
						defaultCopyAction(e, dt, button, config);
						$('."'".'.dt-button-info'."'".').addClass('."'".'gritter-item-wrapper gritter-info gritter-center white'."'".');
					});
					
					
					var defaultColvisAction = myTable.button(0).action();
					myTable.button(0).action(function (e, dt, button, config) {
						
						defaultColvisAction(e, dt, button, config);
						
						
						if($('."'".'.dt-button-collection > .dropdown-menu'."'".').length == 0) {
							$('."'".'.dt-button-collection'."'".')
							.wrapInner('."'".'<ul class="dropdown-menu dropdown-light dropdown-caret dropdown-caret" />'."'".')
							.find('."'".'a'."'".').attr('."'".'href'."'".', '."'".'#'."'".').wrap("<li />")
						}
						$('."'".'.dt-button-collection'."'".').appendTo('."'".'.tableTools-container .dt-buttons'."'".')
					});
				
					////
				
					setTimeout(function() {
						$($('."'".'.tableTools-container'."'".')).find('."'".'a.dt-button'."'".').each(function() {
							var div = $(this).find('."'".' > div'."'".').first();
							if(div.length == 1) div.tooltip({container: '."'".'body'."'".', title: div.parent().text()});
							else $(this).tooltip({container: '."'".'body'."'".', title: $(this).text()});
						});
					}, 500);
					
					
					
					
					
					myTable.on( '."'".'select'."'".', function ( e, dt, type, index ) {
						if ( type === '."'".'row'."'".' ) {
							$( myTable.row( index ).node() ).find('."'".'input:checkbox'."'".').prop('."'".'checked'."'".', true);
						}
					} );
					myTable.on( '."'".'deselect'."'".', function ( e, dt, type, index ) {
						if ( type === '."'".'row'."'".' ) {
							$( myTable.row( index ).node() ).find('."'".'input:checkbox'."'".').prop('."'".'checked'."'".', false);
						}
					} );
				
				
				
				
					/////////////////////////////////
					//table checkboxes
					$('."'".'th input[type=checkbox], td input[type=checkbox]'."'".').prop('."'".'checked'."'".', false);
					
					//select/deselect all rows according to table header checkbox
					$('."'".'#dynamic-table > thead > tr > th input[type=checkbox], #dynamic-table_wrapper input[type=checkbox]'."'".').eq(0).on('."'".'click'."'".', function(){
						var th_checked = this.checked;//checkbox inside "TH" table header
						
						$('."'".'#dynamic-table'."'".').find('."'".'tbody > tr'."'".').each(function(){
							var row = this;
							if(th_checked) myTable.row(row).select();
							else  myTable.row(row).deselect();
						});
					});
					
					//select/deselect a row when the checkbox is checked/unchecked
					$('."'".'#dynamic-table'."'".').on('."'".'click'."'".', '."'".'td input[type=checkbox]'."'".' , function(){
						var row = $(this).closest('."'".'tr'."'".').get(0);
						if(this.checked) myTable.row(row).deselect();
						else myTable.row(row).select();
					});
				
				
				
					$(document).on('."'".'click'."'".', '."'".'#dynamic-table .dropdown-toggle'."'".', function(e) {
						e.stopImmediatePropagation();
						e.stopPropagation();
						e.preventDefault();
					});
					
					
					
					//And for the first simple table, which doesn'."'".'t have TableTools or dataTables
					//select/deselect all rows according to table header checkbox
					var active_class = '."'".'active'."'".';
					$('."'".'#simple-table > thead > tr > th input[type=checkbox]'."'".').eq(0).on('."'".'click'."'".', function(){
						var th_checked = this.checked;//checkbox inside "TH" table header
						
						$(this).closest('."'".'table'."'".').find('."'".'tbody > tr'."'".').each(function(){
							var row = this;
							if(th_checked) $(row).addClass(active_class).find('."'".'input[type=checkbox]'."'".').eq(0).prop('."'".'checked'."'".', true);
							else $(row).removeClass(active_class).find('."'".'input[type=checkbox]'."'".').eq(0).prop('."'".'checked'."'".', false);
						});
					});
					
					//select/deselect a row when the checkbox is checked/unchecked
					$('."'".'#simple-table'."'".').on('."'".'click'."'".', '."'".'td input[type=checkbox]'."'".' , function(){
						var $row = $(this).closest('."'".'tr'."'".');
						if($row.is('."'".'.detail-row '."'".')) return;
						if(this.checked) $row.addClass(active_class);
						else $row.removeClass(active_class);
					});
				
					/********************************/
					//add tooltip for small view action buttons in dropdown menu
					$('."'".'[data-rel="tooltip"]'."'".').tooltip({placement: tooltip_placement});
					
					//tooltip placement on right or left
					function tooltip_placement(context, source) {
						var $source = $(source);
						var $parent = $source.closest('."'".'table'."'".')
						var off1 = $parent.offset();
						var w1 = $parent.width();
				
						var off2 = $source.offset();
						//var w2 = $source.width();
				
						if( parseInt(off2.left) < parseInt(off1.left) + parseInt(w1 / 2) ) return '."'".'right'."'".';
						return '."'".'left'."'".';
					}
					
					/***************/
					$('."'".'.show-details-btn'."'".').on('."'".'click'."'".', function(e) {
						e.preventDefault();
						$(this).closest('."'".'tr'."'".').next().toggleClass('."'".'open'."'".');
						$(this).find(ace.vars['."'".'.icon'."'".']).toggleClass('."'".'fa-angle-double-down'."'".').toggleClass('."'".'fa-angle-double-up'."'".');
					});
					/***************/
					
					/**
					//add horizontal scrollbars to a simple table
					$('."'".'#simple-table'."'".').css({'."'".'width'."'".':'."'".'2000px'."'".', '."'".'max-width'."'".': '."'".'none'."'".'}).wrap('."'".'<div style="width: 1000px;" />'."'".').parent().ace_scroll(
					  {
						horizontal: true,
						styleClass: '."'".'scroll-top scroll-dark scroll-visible'."'".',//show the scrollbars on top(default is bottom)
						size: 2000,
						mouseWheelLock: true
					  }
					).css('."'".'padding-top'."'".', '."'".'12px'."'".');
					*/
				
				
				})
			</script>
			
			<script>
				$(document).ready(function(){
					var ini = $("#nahini").text();
					if (ini = "Tidak Ada Data"){
						$('."'".'#btn-detail'."'".').removeAttr('."'".'href'."'".');
						$('."'".'#btn-ubah'."'".').removeAttr('."'".'href'."'".');
						$('."'".'#show-option1'."'".').removeAttr('."'".'href'."'".');
					}
	
					
				});
			</script> ';
				
			$search  = array(
				"%20",
				"%5E",
				"%60" );
			$replace = array(
				" ",
				"^",
				"`");
				$id = str_replace($search,$replace,$id);
				
				$data = $this->model_dinamic->getWhere ('tb_kat_siswa','nama_kat_siswa',$id)->result();
	
				$id = $data[0]->id_kat_siswa;
	
				$konten['data']	= $this->model_siswa->tampil_kategori_siswa($id);
	
				if ($konten['data']->num_rows()>0) {
					$konten['data'] = $konten['data']->result();
				}
				else{
					$konten['data'] = 
					array('0' => 
					(object)array(
						'id_artikel' => "Tidak Ada Data",
						'nama_kat_siswa' => "Tidak Ada Data",
						'nama' => "Tidak Ada Data",
						'judul' => "Tidak Ada Data",
						'foto' => "Tidak Ada Data",
						'deskripsi' => "Tidak Ada Data"
					)
					);
					// $konten['data'] =  $konten['data'];
				}
	
				$subjudul = $this->model_dinamic->getWhere ('tb_kat_siswa','id_kat_siswa',$id)->result();
				$konten['sub_judul'] 	= 'Data siswa - '.$subjudul[0]->nama_kat_siswa.'';
				$konten['judul_tambah'] = $subjudul[0]->nama_kat_siswa;
				$konten['kd_judul'] = $subjudul[0]->id_kat_siswa;
				// print_r($konten['data']); 
				$this->load->view('v_dashboard',$konten);
		}

		public function tambah($id) // tambah data siswa
		{
			$konten['css']			= '
				<link rel="stylesheet" href="'.base_url().'assets/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
				<link rel="stylesheet" href="'.base_url().'assets/css/jquery-ui.custom.min.css" />
				<link rel="stylesheet" href="'.base_url().'assets/css/chosen.min.css" />
				<link rel="stylesheet" href="'.base_url().'assets/summernote-master/dist/summernote-lite.min.css" />
				';
			$konten['konten'] 		= 'siswa/form_tambah_siswa';
			$konten['judul']		= 'Data Master';
			$konten['sub_judul'] 	= 'Tambah Data siswa';
			$konten['kode'] 		= $this->model_siswa->kode(); //tambah kode otomatis
			$konten['js']			= '
				<script src="'.base_url().'assets/plugins/sweetalert2/sweetalert2.min.js"></script>
				<script src="'.base_url().'assets/js/jquery-ui.custom.min.js"></script>
				<script src="'.base_url().'assets/js/chosen.jquery.min.js"></script>
				<script src="'.base_url().'assets/js/autosize.min.js"></script>
				<script src="'.base_url().'assets/js/jquery.inputlimiter.min.js"></script>
				<script src="'.base_url().'assets/js/jquery.maskedinput.min.js"></script>
				<script src="'.base_url().'assets/summernote-master/dist/summernote-lite.js"></script>
				<script>
				jQuery(function($){
				$("#id-input-file-1 , #id-input-file-2").ace_file_input({
					no_file:"No File ...",
					btn_choose:"Choose",
					btn_change:"Change",
					droppable:false,
					onchange:null,
					thumbnail:false //| true | large
					//whitelist:"gif|png|jpg|jpeg"
					//blacklist:"exe|php"
					//onchange:""
					//
				});

				$("#id-input-file-3").ace_file_input({
					style: "well",
					btn_choose: "Drop files here or click to choose",
					btn_change: null,
					no_icon: "ace-icon fa fa-cloud-upload",
					droppable: true,
					thumbnail: "small"//large | fit
					//,icon_remove:null//set null, to hide remove/reset button
					/**,before_change:function(files, dropped) {
						//Check an example below
						//or examples/file-upload.html
						return true;
					}*/
					/**,before_remove : function() {
						return true;
					}*/
					,
					preview_error : function(filename, error_code) {
						//name of the file that failed
						//error_code values
						//1 = "FILE_LOAD_FAILED",
						//2 = "IMAGE_LOAD_FAILED",
						//3 = "THUMBNAIL_FAILED"
						//alert(error_code);
					}
			
				}).on("change", function(){
					//console.log($(this).data("ace_input_files"));
					//console.log($(this).data("ace_input_method"));
				});
			});
				</script>
				<script type="text/javascript">
					$(function() {
						const Toast = Swal.mixin({
						toast: true,
						position: '."'".'top-end'."'".',
						showConfirmButton: false,
						timer: 3000
						});

						$('."'".'.swalDefaultSuccess'."'".').click(function() {
						Toast.fire({
							type: '."'".'success'."'".',
							title: '."'".'Data Berhasil di Simpan '."'".'
						})
						});
						
					});
					</script>
				';
			$konten['data'] = $this->model_dinamic->getWhere ('tb_kat_siswa','id_kat_siswa',$id)->result();
			$this->load->view('v_dashboard',$konten);
		}

		//Upload image Summernote
		function upload_image(){
			if(isset($_FILES["image"]["name"])){
				$config['upload_path'] = './assets/photo/';
				$config['allowed_types'] = 'jpg|jpeg|png|gif';
				$this->upload->initialize($config);
				if(!$this->upload->do_upload('image')){
					$this->upload->display_errors();
					return FALSE;
				}else{
					$data = $this->upload->data();
					//Compress Image
					$config['image_library']='gd2';
					$config['source_image']='./assets/photo/'.$data['file_name'];
					$config['create_thumb']= FALSE;
					$config['maintain_ratio']= TRUE;
					$config['quality']= '60%';
					$config['width']= 800;
					$config['height']= 800;
					$config['new_image']= './assets/photo/'.$data['file_name'];
					$this->load->library('image_lib', $config);
					$this->image_lib->resize();
					echo base_url().'assets/photo/'.$data['file_name'];
				}
			}
		}
	
		//Delete image summernote
		function delete_image(){
			$src = $this->input->post('src');
			$file_name = str_replace(base_url(), '', $src);
			if(unlink($file_name)){
				echo 'File Delete Successfully';
			}
		}


		public function simpan() // simpan data siswa
		{
		  $config['upload_path'] 	= './assets/file/';
		//   $config['allowed_types'] 	= 'gif|jpg|jpeg|png';
		  $config['allowed_types'] 	= 'docx|pdf|xlxs';
	      $config['encrypt_name']	= FALSE;
	     
	      $this->load->library('upload', $config);
	      $this->upload->initialize($config);
			
		//   print_r($this->upload->do_upload('file_name'));

	    //   if ( ! $this->upload->do_upload('file_name')){
	    //     $this->session->set_flashdata('info_gagal','Foto Gagal Diupload atau foto melebihi 2500x2500 pixel. Silakan pilih foto yang lain');
	    //      redirect('admin/siswa/tambah-siswa/'.$this->input->post('kode_kat').''); 
		//   } 
		//   else {

			$key = $this->input->post('kode');
			$data['id_artikel'] 			= $this->input->post('kode');
			$data['id_kat_siswa'] 	= $this->input->post('kd_siswa');
			// if (! $this->input->post('kd_organisasi')) {
			// 	$data['id_organisasi']	= null;
			// }
			// else{
			// 	$data['id_organisasi'] =  $this->input->post('kd_organisasi');
			// }
			$data['judul'] 				= $this->input->post('jdl');
			$data['penulis'] 			= $this->input->post('kd_user');
			$data['deskripsi'] 			= $this->input->post('isi');
			$data['foto'] 				= $this->upload->data('file_name');
			$galeri['id_artikel']			= $this->input->post('kode');
			$galeri['foto']				= $this->upload->data('file_name');
			
			$this->load->model('model_siswa');
			$query = $this->model_siswa->getdata($key);
				if($query->num_rows()>0)
				{
					$this->model_siswa->getupdate($key,$data);
					// $this->session->set_flashdata('info','Data berhasil di update');
				}
				else
				{
					// print_r($data);
					$this->model_siswa->getinsert($data);
					$this->model_dinamic->input_data($galeri,'tb_galeri');
					// $this->session->set_flashdata('info','Data berhasil di simpan');
				}
			$doto = $this->model_dinamic->getWhere('tb_kat_siswa','id_kat_siswa',$this->input->post('kd_siswa'))->result();
			redirect('admin/siswa/kategori-siswa/'.$doto[0]->nama_kat_siswa.'','refresh');
			}
		}

		public function ambil_data_organisasi(){
			$data = $this->model_dinamic->getData('tb_organisasi');
			echo json_encode($data);
		}

		public function ubah($id) // Mengubah data siswa
		{
			$konten['css']			= '
				<link rel="stylesheet" href="'.base_url().'assets/css/jquery-ui.custom.min.css" />
				<link rel="stylesheet" href="'.base_url().'assets/css/chosen.min.css" />
				<link rel="stylesheet" href="'.base_url().'assets/summernote-master/dist/summernote-lite.min.css" />
				';
			$konten['js']			= '
				<script src="'.base_url().'assets/js/jquery-ui.custom.min.js"></script>
				<script src="'.base_url().'assets/js/chosen.jquery.min.js"></script>
				<script src="'.base_url().'assets/js/autosize.min.js"></script>
				<script src="'.base_url().'assets/js/jquery.inputlimiter.min.js"></script>
				<script src="'.base_url().'assets/js/jquery.maskedinput.min.js"></script>
				<script src="'.base_url().'assets/summernote-master/dist/summernote-lite.js"></script>
				// <script src="'.base_url().'assets/summernote-master/dist/summernote-cleaner.js"></script>
				<script>
				jQuery(function($) {
				$("#id-input-file-1 , #id-input-file-2").ace_file_input({
					no_file:"No File ...",
					btn_choose:"Choose",
					btn_change:"Change",
					droppable:false,
					onchange:null,
					thumbnail:false //| true | large
					//whitelist:"gif|png|jpg|jpeg"
					//blacklist:"exe|php"
					//onchange:""
					//
				});

				$("#id-input-file-3").ace_file_input({
					style: "well",
					btn_choose: "Drop files here or click to choose",
					btn_change: null,
					no_icon: "ace-icon fa fa-cloud-upload",
					droppable: true,
					thumbnail: "small"//large | fit
					//,icon_remove:null//set null, to hide remove/reset button
					/**,before_change:function(files, dropped) {
						//Check an example below
						//or examples/file-upload.html
						return true;
					}*/
					/**,before_remove : function() {
						return true;
					}*/
					,
					preview_error : function(filename, error_code) {
						//name of the file that failed
						//error_code values
						//1 = "FILE_LOAD_FAILED",
						//2 = "IMAGE_LOAD_FAILED",
						//3 = "THUMBNAIL_FAILED"
						//alert(error_code);
					}
			
				}).on("change", function(){
					//console.log($(this).data("ace_input_files"));
					//console.log($(this).data("ace_input_method"));
				});
			});
				</script>
				';
			$konten['konten'] 		= 'siswa/form_ubah_siswa';
			$konten['judul']		= 'Data Master';
			$konten['sub_judul'] 	= 'Ubah Data siswa';
			$key = $id;
			$this->db->where('id_artikel',$key);
			$query = $this->db->get('tb_siswa');
			if($query->num_rows()>0)
			
			{

				foreach ($query->result() as $row )
					{
						$konten['kode']			= $row->id_artikel;
						$konten['kode_kat']		= $row->id_kat_siswa;
						$konten['jdl']			= $row->judul;
						$konten['user']			= $row->penulis;
						$konten['isi']			= $row->deskripsi;
						$konten['file']			= $row->foto;
						// $konten['tanggal']		= $row->tgl_update;
						
						
					}
				}
				else
				{
						$konten['kode']			= "";
						$konten['kode_kat']		= "";
						$konten['jdl']			= "";
						$konten['user']			= "";
						$konten['isi']			= "";
						$konten['file']			= "";
						// $konten['tanggal']		= "";
			} 
			
			$this->load->view('v_dashboard',$konten);
}

		public function detail($id) // Detail data siswa
		{
			$konten['css']			= '';
			$konten['js']			= '';
			$konten['konten'] 		= 'siswa/view_detail_siswa';
			$konten['judul']		= 'Data Master';
			$konten['sub_judul'] 	= 'Detail siswa';
			$key = $id;
			$konten['data']			= $this->model_dinamic->getWhere('tb_siswa','id_artikel',$key);
			
			
			if($konten['data']->num_rows()>0)
			{

				foreach ($konten['data']->result() as $row )
					{
						$konten['kode']			= $row->id_artikel;
						$konten['kode_kat']		= $row->id_kat_siswa;
						$konten['jdl']			= $row->judul;
						$konten['user']			= $row->penulis;
						$konten['isi']			= $row->deskripsi;
						$konten['file']			= $row->foto;
				
					}
				}
				else
				{
						$konten['kode']			= "";
						$konten['kode_kat']		= "";
						$konten['jdl']			= "";
						$konten['user']			= "";
						$konten['isi']			= "";
						$konten['file']			= "";
				}
			$kategori = $this->model_dinamic->getWhere ('tb_kat_siswa','id_kat_siswa',$konten['kode_kat'])->result();
			foreach ($kategori as $key) {
				$konten ['nama_kategori'] = $key->nama_kat_siswa;
			}
			// print_r($konten['kode_kat']);
			$this->load->view('v_dashboard',$konten);
		
			} 


		public function delete()
		{
			
			$this->load->model('model_siswa');
			$key = $this->uri->segment(3);
			$this->db->where('id_artikel',$key);
			$query = $this->db->get('tb_siswa');
		
			if($query->num_rows()>0)
				{
					$query=$query->result();
					unlink('./assets/photo/'.$query[0]->foto);
					$this->model_siswa->getdelete($key);
					// $this->session->set_flashdata('info_hapus','Data berhasil di hapus');
				}
				redirect('admin/siswa');
	}
}
?>	

		