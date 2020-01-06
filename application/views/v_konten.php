
<?php 
    if ($this->session->userdata('hak_akses') === 'Administrator'):
 ?>
                                <!-- PAGE CONTENT BEGINS -->
                                
                                <div class="alert alert-block alert-success">
                                <marquee>
                                    <button type="button" class="close" data-dismiss="alert">
                                       
                                    </button>

                                    <i class="ace-icon fa fa-check green"></i>

                                    Selamat Datang

                                    <strong class="green">
                                    <?php echo $this->session->userdata('nama');
                                    ?> </strong>


                                    Sebagai
                                <strong class="green">
                                <?php echo $this->session->userdata('hak_akses');?>
                                </strong> 

                                    Pada
                                    <strong class="green">

                                        Sistem Informasi Akademik Sekolah Menengah Atas Negeri 2 Cibinong
                                        
                                        <small></small>
                                    </strong>
                            </marquee>   
                        </div>



               <!--  HAK AKSES ADMIN  -->                                  
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-edit fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                     <h1>
                                        <?php 
                                        $this->db->like('id_kat_artikel', 'tb_kat_artikel');
                                        $this->db->from('id_kat_artikel');
                                        echo $this->db->count_all('tb_kat_artikel');
                                        ?> 
                                    </h1>
                                    <div>Kategori Artikel</div>
                                </div>
                            </div>
                        </div>
                        <a href="<?php echo base_url();?>kat_artikel">
                            <div class="panel-footer">
                                <span class="pull-left">Detail Kategori Artikel</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>


                
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-success">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-edit fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                     <h1>
                                         <?php 
                                        $this->db->like('id_kat_profil', 'tb_kat_profil');
                                        $this->db->from('id_kat_profil');
                                        echo $this->db->count_all('tb_kat_profil');
                                        ?> 
                                    </h1>
                                    <div>Kategori Artikel Profil</div>
                                </div>
                            </div>
                        </div>
                        <a href="<?php echo base_url();?>kat_profil">
                            <div class="panel-footer">
                                <span class="pull-left">Detail Kategori Artikel Profil</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-danger">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-pencil-square-o fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                     <h1>
                                        <?php 
                                        $this->db->like('id_kat_siswa', 'tb_kat_siswa');
                                        $this->db->from('id_kat_siswa');
                                        echo $this->db->count_all('tb_kat_siswa');
                                        ?> 
                                    </h1>
                                    <div>Kategori Artikel Siswa</div>
                                </div>
                            </div>
                        </div>
                        <a href="<?php echo base_url();?>kat_siswa">
                            <div class="panel-footer">
                                <span class="pull-left">Detail kategori Artikel Siswa</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>


                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-warning">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-certificate fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                     <h1>
                                         <?php 
                                        $this->db->like('id_jabatan', 'tb_jabatan');
                                        $this->db->from('id_jabatan');
                                        echo $this->db->count_all('tb_jabatan');
                                        ?> 
                                    </h1>
                                    <div>Kategori Jabatan</div>
                                </div>
                            </div>
                        </div>
                        <a href="<?php echo base_url();?>kat_jab">
                            <div class="panel-footer">
                                <span class="pull-left">Detail Kategori Jabatan</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-danger">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-users fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                     <h1>
                                        <?php 
                                        $this->db->like('id_guru', 'tb_guru');
                                        $this->db->from('id_guru');
                                        echo $this->db->count_all('tb_guru');
                                        ?> 
                                    </h1>
                                    <div>Guru dan Staff Karyawan</div>
                                </div>
                            </div>
                        </div>
                        <a href="<?php echo base_url();?>guru">
                            <div class="panel-footer">
                                <span class="pull-left">Detail Guru dan Staff Karyawan</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-globe fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                     <h1>
                                         <?php 
                                        $this->db->like('id_organisasi', 'tb_organisasi');
                                        $this->db->from('id_organisasi');
                                        echo $this->db->count_all('tb_organisasi');
                                        ?> 
                                    </h1>
                                    <div>Kategori Organisasi</div>
                                </div>
                            </div>
                        </div>
                        <a href="<?php echo base_url();?>kat_organisasi">
                            <div class="panel-footer">
                                <span class="pull-left">Detail Kategori Organisasi</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>

                 <div class="col-lg-3 col-md-6">
                    <div class="panel panel-warning">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-book fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                     <h1>
                                         <?php 
                                        $this->db->like('id_mapel', 'tb_mapel');
                                        $this->db->from('id_mapel');
                                        echo $this->db->count_all('tb_mapel');
                                        ?> 
                                    </h1>
                                    <div>Mata Pelajaran</div>
                                </div>
                            </div>
                        </div>
                        <a href="<?php echo base_url();?>kat_mapel">
                            <div class="panel-footer">
                                <span class="pull-left">Detail Mata Pelajaran</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>

                      <div class="col-lg-3 col-md-6">
                    <div class="panel panel-success">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-lock fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                     <h1>
                                         <?php 
                                        $this->db->like('id_user', 'tb_user');
                                        $this->db->from('id_user');
                                        echo $this->db->count_all('tb_user');
                                        ?> 
                                    </h1>
                                    <div>Administrator</div>
                                </div>
                            </div>
                        </div>
                        <a href="<?php echo base_url();?>user">
                            <div class="panel-footer">
                                <span class="pull-left">Detail Administrator</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>


            </div>




                
<!--  END HAK AKSES ADMIN  -->          




<!-- admin_publish -->
<?php 
    elseif ($this->session->userdata('hak_akses') === 'Admin Publish'):
 ?>
                                <!-- PAGE CONTENT BEGINS -->
                                
                                <div class="alert alert-block alert-success">
                                <marquee>
                                    <button type="button" class="close" data-dismiss="alert">
                                       
                                    </button>

                                    <i class="ace-icon fa fa-check green"></i>

                                    Selamat Datang

                                    <strong class="green">
                                    <?php echo $this->session->userdata('nama');
                                    ?> </strong>


                                    Sebagai
                                <strong class="green">
                                <?php echo $this->session->userdata('hak_akses');?>
                                </strong> 

                                    Pada
                                    <strong class="green">

                                        Sistem Informasi Akademik Sekolah Menengah Atas Negeri 2 Cibinong
                                        
                                        <small></small>
                                    </strong>
                            </marquee>   
                        </div>

<!-- end hak akses admin_publish -->



<!-- admin_siswa -->
<?php 
    else:
 ?>
                                <!-- PAGE CONTENT BEGINS -->
                                
                                <div class="alert alert-block alert-success">
                                <marquee>
                                    <button type="button" class="close" data-dismiss="alert">
                                       
                                    </button>

                                    <i class="ace-icon fa fa-check green"></i>

                                    Selamat Datang

                                    <strong class="green">
                                    <?php echo $this->session->userdata('nama');
                                    ?> </strong>


                                    Sebagai
                                <strong class="green">
                                <?php echo $this->session->userdata('hak_akses');?>
                                </strong> 

                                    Pada
                                    <strong class="green">

                                        Sistem Informasi Akademik Sekolah Menengah Atas Negeri 2 Cibinong
                                        
                                        <small></small>
                                    </strong>
                            </marquee>   
                        </div>

<?php endif; ?>
<!-- end admin_siswa -->







