
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
                            <th class="center">Hits</th>
                            <th class="center">Hostname</th>
                            <th class="center">OS Name </th>
                            <!-- <th colspan="3" class="center">Aksi</th>  -->
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
                            <td><?php echo $tanggal[]=$row->tanggal?></td>
                            <td><?php echo $row->browser?> V<?php echo $row->browser_version?></td>
                            <td><?php echo $hits[]=$row->hits?></td>
                            <td><?php echo $row->hostname?></td>
                            <td><?php echo $row->os_name?></td>
                            
                            

                           <!-- <td class="center">
                                      <a class="tooltip-info red" href="#"
                                     title="Hapus" data-rel="tooltip" onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')">

                                        <i class=" fa fa-trash-o bigger-130" ></i>
                                      </a>
                           </td> -->
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
      labels  : <?php echo json_encode($tanggal);?>,
      datasets: [
        {
          label               : 'Hits',
          backgroundColor     : 'rgba(60,141,188,0.9)',
          borderColor         : 'rgba(60,141,188,0.8)',
          pointRadius          : false,
          pointColor          : '#3b8bba',
          pointStrokeColor    : 'rgba(60,141,188,1)',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(60,141,188,1)',
          data                : <?php echo json_encode($hits);?>
        },
        {
          label               : 'Digital Goods',
          backgroundColor     : 'rgba(60,141,188,0.9)',
          borderColor         : 'rgba(60,141,188,0.8)',
          pointRadius          : false,
          pointColor          : '#3b8bba',
          pointStrokeColor    : 'rgba(60,141,188,1)',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(60,141,188,1)',
          data                : <?php echo json_encode($hits);?>
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