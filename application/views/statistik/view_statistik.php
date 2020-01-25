
<?php 
	  	
	  // echo "Alamat IP : ".$ip_address ; 
	  // echo '<br>';
	  // echo "Nama Operating System : ".$os;
	  // echo '<br>';
	  // echo "Nama Browser : ". $browser;
	  // echo '<br>';
    // echo "Nama Laptop : ".$hostname;
?>

        <div class="row">
                  <div class="col-xs-12">
                    <h3 class="header smaller lighter blue">Data Statistik Pengguna</h3>
                    <div class="clearfix">
                    <div class="table-header">
                     Data Statistik Pengguna
                    </div>
                    <div>
                      <table id="dynamic-table" class="table table-striped table-bordered table-hover">
                        <thead>
                          <tr>

                            <th class="center">No</th>
                            <th class="center">Ip Address</th>
                            <th class="center">Tanggal</th>
                            <th class="center">Browser</th>
                            <th colspan="3" class="center">Aksi</th> 
                     </tr>
                        </thead>
                        <tbody>
                            <?php

                            $no=1;

                            foreach ($data->result() as $row) {
                              
                            ?>

                            <tr>
                            <td class="center"><?php echo $no++; ?></td>
                            <td><?php echo $row->ip_address?></td>
                            <td><?php echo $row->tanggal?></td>
                            <td><?php echo $row->browser?></td>
                            
                            <td class="center" > 
                                <div class="hidden-sm hidden-xs action-buttons">
                                      <a class="tooltip-info blue" href="#" title="Detail" data-rel="tooltip" >
                                        <i class="fa fa-search-plus bigger-130"  ></i>
                                      </a>
                            </td> 

                            <td class="center">
                                
                                <a class="tooltip-info green" href="#" title="Ubah" data-rel="tooltip">
                                        <i class="fa fa-pencil bigger-130" ></i>
                                      </a>
                            </td>

                           <td class="center">
                                      <a class="tooltip-info red" href="#"
                                     title="Hapus" data-rel="tooltip" onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')">

                                        <i class=" fa fa-trash-o bigger-130" ></i>
                                      </a>
                           </td>
                              </div>
                          </tr>

                          <?php } ?>

                      </tbody>
                  </table>
              </div>
          </div>
                      
                            

            <br>                  
            <!-- AREA CHART -->
            <div class="widget-box">
											<div class="widget-header widget-header-flat widget-header-small">
												<h5 class="widget-title">
													<i class="ace-icon fa fa-signal"></i>
													Statistik Pengguna
                        </h5>
              </div><br>
              <div class="card-body">
                <div class="chart">
                  <canvas id="areaChart" style="min-height: 250px; height: 400px; max-height: 400px; max-width: 100%;"></canvas>
                </div>
              </div>
            
      

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>			

<script>
  $(function () {
    var areaChartCanvas = $('#areaChart').get(0).getContext('2d')

    var areaChartData = {
      labels  : ['January', 'February', 'March', 'April', 'May', 'June', 'July','Agustus','September','Oktober','November','Desember'],
      datasets: [
        {
          label               : 'Digital Goods',
          backgroundColor     : 'rgba(60,141,188,0.9)',
          borderColor         : 'rgba(60,141,188,0.8)',
          pointRadius          : false,
          pointColor          : '#3b8bba',
          pointStrokeColor    : 'rgba(60,141,188,1)',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(60,141,188,1)',
          data                : [28, 48, 40, 19, 86, 27, 90, 77, 48, 40, 19, 86]
        },
        {
          label               : 'Electronics',
          backgroundColor     : 'rgba(210, 214, 222, 1)',
          borderColor         : 'rgba(210, 214, 222, 1)',
          pointRadius         : false,
          pointColor          : 'rgba(210, 214, 222, 1)',
          pointStrokeColor    : '#c1c7d1',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(220,220,220,1)',
          data                : [65, 59, 80, 81, 56, 55, 40, 80, 65, 59, 80, 81]
        },
      ]
    }

    var areaChartOptions = {
      maintainAspectRatio : false,
      responsive : true,
      legend: {
        display: false
      },
      scales: {
        xAxes: [{
          gridLines : {
            display : false,
          }
        }],
        yAxes: [{
          gridLines : {
            display : false,
          }
        }]
      }
    }

    // This will get the first returned node in the jQuery collection.
    var areaChart       = new Chart(areaChartCanvas, { 
      type: 'line',
      data: areaChartData, 
      options: areaChartOptions
    })
  })
</script>