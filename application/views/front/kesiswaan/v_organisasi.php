<section id="home" class="min-header bg-img" data-scroll-index="0" data-overlay-dark="5" data-background="<?= base_url(); ?>assets2/img/back.jpg" data-stellar-background-ratio="0.5">
  <div class="container-fluid">
    <div class="row">
      <div class="v-middle mt-30">
        <div class="text-center col-md-12">
          <h5>Organisasi SMAN 2 Cibinong</h5>
          <div class="path">
            <span><a href="<?= base_url() ?>">Beranda</a></span>
            <span><a href="#0"><?= $title ?></a></span>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section id="team">
	<div class="container" style="padding-top: 20px;">
		<div class="section-header wow fadeInUp">
			<h3>Organisasi</h3>
			<p>Berikut adalah sarana dan prasarana yang terdapat di SMAN 2 Cibinong guna menunjang kegiatan belajar mengajar agar terlaksana dengan baik dan nyaman</p>
		</div>
		<?php $z = 1;
    foreach ($data['organisasi'] as $key) { ?>
      <?php if ($z % 2 == 1) : ?>
        <div class="card">
          <div class="row ">
            <div class="col-md-5 post-text">
              <div class="card-block text-container">
                <div class="val">
                  <h4 class="card-title"><?php echo $key->nama_organisasi ?></h4>
                  <p class="card-text">
                    <?php
                    if ($key->deskripsi == null) {
                      echo "Aliquam ornare mauris quis sapien interdum euod. Nullam a elementum odio. Vivamus vestibulum bib orci. ultricies...";
                    } else {
                      $ini = strip_tags($key->deskripsi, '<br>');
                      echo substr($ini,0,100);
                    }
                    ?></p>
                </div>
              </div>
            </div>
            <div class="col-md-7 post-img d-flex justify-content-center bg-white card-img">
              <img src="<?= base_url(); ?>assets/photo/organisasi/logo/<?php echo $key->foto ?>" style="height: 465px; width: auto">
            </div>
          </div>
        </div>
      <?php else : ?>
        <div class="card">
          <div class="row ">
            <div class="col-md-7 post-img d-flex justify-content-center">
              <img src="<?= base_url(); ?>assets/photo/organisasi/logo/<?php echo $key->foto ?>" alt="" data-toggle="tooltip" data-placement="bottom" title="<?php echo $key->nama_organisasi; ?>" style="height: 465px; width: auto">
            </div>
            <div class="col-md-5 post-text">
              <div class="card-block text-container">
                <div class="val">
                  <h4 class="card-title"><?php echo $key->nama_organisasi ?></h4>
                  <p class="card-text">
                    <?php
                    if ($key->deskripsi == null) {
                      echo "Aliquam ornare mauris quis sapien interdum euod. Nullam a elementum odio. Vivamus vestibulum bib orci. ultricies...";
                    } else {
                      $ini = strip_tags($key->deskripsi, '<br>');
                      echo substr($ini,0,100);
                    }
                    ?></p>
                </div>
              </div>
            </div>
          </div>
        </div>
      <?php endif; ?>
    <?php $z++;
    } ?>
		<!-- <div class="card" style="height: 25rem; margin: 2em 0;">
			<div class="row ">
				<div class="col-md-7">
					<img src="https://placeholdit.imgix.net/~text?txtsize=38&txt=400%C3%97400&w=400&h=400" class="w-100">
				</div>
				<div class="col-md-5 px-3" style="padding: 2em 0">
					<div class="card-block px-3">
						<h4 class="card-title">Lorem ipsum dolor sit amet</h4>
						<p class="card-text">Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
						<p class="card-text">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
						<a href="#" class="btn btn-primary">Read More</a>
					</div>
				</div>
			</div>
		</div> -->
	</div>
	</div>
	
</section>

<!-- <section id="clients" class="wow fadeInUp" data-scroll-index="4">
  <div class="container">

    <header class="section-header wow fadeInUp">
      <h3>Organisasi</h3>
    </header>
    
    <div class="owl-carousel clients-carousel owl-centered wow fadeInRight">
      <?php foreach ($data['organisasi'] as $key) { ?>
        <div>
          <a class="ini" href="#" data-toggle="modal" data-target="#show" data-id="<?php echo $key->id_organisasi ?>">
            <img src="<?= base_url(); ?>assets/photo/organisasi/logo/<?php echo $key->foto ?>" alt="" data-toggle="tooltip" data-placement="bottom" title="<?php echo $key->nama_organisasi; ?>">
          </a>
        </div>
      <?php } ?>

    </div>
  </div>
</section> -->

<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<!-- Modal Detail -->
<div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="show" class="modal fade">
  <div class="modal-dialog modal-lg modal-dialog-scrollable" role="document">
    <!-- konten modal-->

    <div class="modal-content">
      <!-- heading modal -->
      <div class="modal-header">

        <h4 class="modal-title"></h4>
        <a class="close col-md-0" data-dismiss="modal">&times;</a>
      </div>

      <!-- body modal -->
      <div class="modal-body">
        <div class="modal-data"></div>
        Untuk informasi lebih lanjut, silakan download <a href="" class="modal-file"></a>
      </div>

      <!-- footer modal -->
      <div class="modal-footer">
        <button type="button" class="btn" style="background : #eba709" data-dismiss="modal">Keluar</button>
      </div>
    </div>
  </div>
</div>

<!-- Ini merupakan script yang terpenting -->
<script type="text/javascript">
  $(document).ready(function() {
    // $('#show').on('show.bs.modal', function (e) {
    //     var getDetail = $(e.relatedTarget).data('id');
    //     /* fungsi AJAX untuk melakukan fetch data */
    //     $.ajax({
    //         type : 'POST',
    //         url : "<?php echo base_url('kat_organisasi/get') ?>",

    //         /* detail per identifier ditampung pada berkas detail.php yang berada di folder application/view */
    //         data :  'getDetail='+ getDetail,
    //         /* memanggil fungsi getDetail dan mengirimkannya */
    //         success : function(data){
    //         // $('.modal-data').html(data[0].deskripsi);
    //         console.log(data);
    //         /* menampilkan data dalam bentuk dokumen HTML */
    //         }
    //     });
    //  });
    // $.ajax({
    //     type: 'POST',
    //     url: '<?php echo base_url('kat_organisasi/get') ?>',

    // });
    $('.ini').on('click', function() {
      var ini = $(this).data('id');
      $.ajax({
        type: 'POST',
        url: '<?php echo base_url('kat_organisasi/get') ?>',
        dataType: 'json',
        success: function(response) {
          // $('#result').html(response);
          // }
          for (var i = 0; i < response.length; i++) {
            if (response[i].id_organisasi == ini) {
              var nah = {
                // 'id' : response[i].id_organisasi,
                'nama': response[i].nama_organisasi,
                'deskripsi': response[i].deskripsi,
                'file': response[i].file
              };
            }
          }
          $('.modal-title').html(nah.nama);
          $('.modal-data').html(nah.deskripsi.slice(0, 1200) + ' . . . . . . . . . .');
          $('.modal-file').html(nah.nama);
          $('.modal-file').attr("href", "<?php echo base_url('assets/file/'); ?>" + nah.file);
        }
      });
    });
  });
</script>
<!-- - - - - -end- - - - -  -->