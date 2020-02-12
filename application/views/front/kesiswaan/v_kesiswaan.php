<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    
  </head>
  <body>

<section id="home" class="min-header bg-img" data-scroll-index="0" data-overlay-dark="5" data-background="<?= base_url(); ?>assets2/img/back.jpg" data-stellar-background-ratio="0.5">
    <div class="container-fluid">
        <div class="row">
            <div class="v-middle mt-30">
                <div class="text-center col-md-12">
                    <h5>Tata Tertib SMA Negeri 2 Cibinong</h5>
                    <div class="path">
                        <span><a href="<?= base_url() ?>">Beranda</a></span>
                        <span><a href="#0"><?= $title ?></a></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

                 
<!-- judul -->
<!-- <section id="team">
    <div class="container" style="padding-top: 20px;">
        <div class="section-header wow fadeInUp">
            <h3><?php echo $title ?></h3>
        </div>
</section> -->
<!-- end judul -->


<div class="moduletable"></div>
    <section class="blogs">
            <div class="container">
                <div class="row">
                    <div id="content" class="col-md-8">
                    
                    <!-- Begin Content -->
                    <div id="system-message-container"></div>
                        <div class="pd_tb">
                             <span id="startOfPageId4"></span>
                                 <div id="k2Container" class="posts ">
                                
                             <div class="post">
                    <!-- Item Image -->
                        <div class="post-img"></div>            
                            <div class="content">
                                <div class="post-meta">
                                    <div class="post-title">

                                    
                                                <!-- Item title -->
                                                <h5><?php  echo $jdl; ?></h5>
                                            </div>
                                        
                                            <ul class="meta">
                                                 <li>
                                                 
                                                    <a href=""><i class="fa fa-user" aria-hidden="true">&nbsp;</i><?php  echo $nama_user; ?></a></li><li>
                                                    <a href=""><i class="fa fa-folder-open" aria-hidden="true"></i><?php  echo  $nama_kategori; ?></a></li> <li>
                                                    <?php foreach ($data->result() as $key) { ?>
                                                    <a href=""><i class="fa fa-calendar" aria-hidden="true"></i>&nbsp;<?php echo format_indo(substr($key->tanggal_update,0,10))?></a></i> </li><li>
                                                    <?php } ?>
                                            </ul>
                                        </div>
                    
                                            <div class="post-cont">
                                                
                                                    <!-- Item fulltext -->
                                                    <p><?php  echo $isi; ?></p>
                                                  </div>
                                            
                                            <div class="extra-info">
                                                    <div class="itemAuthorBlock">
                                                        <div class="itemAuthorDetails"> 
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="blog-articles-nav">
                                                        <div class="row">
                                                            <!-- Previous Post -->
                                                            <div class="col-md-6 prev-post">
                                                    </div>
                                                            <!-- Next Post -->
                                                            <div class="col-md-6 next-post text-right">
                                                                 
                                                            </div>
                                                     </div>
                                                </div>
                                          </div>
                                    </div>
                                </div>   
                             </div>
                        </div>
                     <!-- End Content -->
                    </div>



                     <!-- Begin Right Sidebar -->
                        <div id="sidebar" class="sidebar2 pd_tb col-xs-12 col-md-4">
                            <div class="side-bar">                          
                                 <div id="k2ModuleBox108" class="widget search k2SearchBlock">
                    
                        </div>
                            <div class="moduletable">
                                 <div id="k2ModuleBox122" class="widget ">
                                        <div class="widget-title">
                                        <h6>Download File</h6>
                            </div>
                            <ul class="level0"><li><?php echo $file_download; ?></span></li></ul>
                            <ul class="level0"><a href="<?php echo base_url('assets/file/'. $file_download .'');?>" class="btn btn-success"> <i class="fa fa-download"> &nbsp;</i>Download</a></span></li></ul></div>
                            </div>


                                <div class="moduletable">
                                    <div id="k2ModuleBox124" class="widget k2TagCloudBlock">
                                         <div class="moduletable">
                                             <div id="k2ModuleBox107" class="widget k2ItemsBlock">
                                                <div class="widget-title">
                                                
                                            </div>
                                    </div>
                                        </div>
                                        
                                        <div class="moduletable">
                                    </div>
                                </div> 
                                <div class="moduletable">
                                    <div id="k2ModuleBox124" class="widget k2TagCloudBlock">
                                         <div class="moduletable">
                                             <div id="k2ModuleBox107" class="widget k2ItemsBlock">
                                                <div class="widget-title">
                                                <h6>Kategori</h6>
                                            </div>
                                        <ul>
                                            <!-- <li class="even"> -->
                                            <?php
                                            $data = $this->model_dinamic->getData('tb_kat_siswa');
                                            foreach ($data as $key) { ?>
                                            <li><a href="<?= base_url('kesiswaan/kategori/'); ?><?php echo $key->nama_kat_siswa; ?>"><?php echo $key->nama_kat_siswa; ?></a></li>
                                                    <?php }?>	
                                                    </li>
                                        </ul>   
                                    </div>
                                        </div>
                                        <br>
                                        <div class="moduletable">
                                    </div>
                                </div>    
                    <!-- End Right Sidebar -->
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </body>
    </head>
</html>
       