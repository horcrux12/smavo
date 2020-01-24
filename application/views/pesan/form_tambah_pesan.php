
    <!-- Kembali -->
      <a href="<?php echo base_url();?>pesan">
      <button type="button" class="btn btn-warning btn-sm pull-right">
      <i class="fa  fa-arrow-circle-left"> &nbsp;</i>Kembali</button>
      </a>
      </i>
      <!-- end kembali -->
   
             
           <form class="form-horizontal style-form" style="margin-top: 20px;" method="POST" enctype="multipart/form-data" name="form1" id="form1" action="<?php echo base_url();?>pesan/simpan" onsubmit="return cekform();">

              <div class="form-group">
              <label for="" class="col-sm-2 control-label">Nama Pengirim</label>
              <div class="col-sm-5">
              <input type="text" class="form-control" name="pengirim" id="pengirim" placeholder="Nama Pengirim">
              </div>
              </div>

              <div class="form-group">
              <label for="" class="col-sm-2 control-label">Email Pengirim</label>
              <div class="col-sm-5">
              <input type="text" class="form-control" name="email" id="email" placeholder="Email Pengirim">
              </div>
              </div>

              <div class="form-group">
              <label class="col-sm-2 control-label">Jenis Pesan</label>
              <div class="col-lg-3">
              <select class="form-control" name="kat" id="kat">
              <option value="">-------- pilih salah satu -------</option>
                  
                  <option>Keluhan</option>
                  <option>Rekomendasi/Saran</option>
                                  
              </select>
              </div>
              </div>

              <div class="form-group">
              <label for="" class="col-sm-2 control-label">Judul Pesan</label>
              <div class="col-sm-5">
              <input type="text" class="form-control" name="jdl" id="jdl" placeholder="Judul Pesan">
              </div>
              </div>

              <div class="form-group">
              <label for="" class="col-sm-2 control-label">Deskripsi Pesan</label>
              <div class="col-sm-5">
              <textarea class="form-control" name="isi" id="isi" cols="40" rows="10"></textarea> 
              </div>
              </div>

                
<center> 
<div class="box-footer">    
<button type="submit" class="btn btn-info btn-small"> Simpan</button>
<button type="reset"  class="btn btn-danger btn-small">Batal</button>
   </form>
      </div>
            </center>