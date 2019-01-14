<?php 
 ?>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Prosibad</title>

    <!-- Bootstrap core CSS -->

    <!-- Custom styles for this template -->
  <link  rel="stylesheet" href="<?php echo base_url().'/css/gaya.css'?>"  type="text/css" media="all" >
  </head>

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
      <div class="container">
        <a class="navbar-brand" href="#">Prosibad</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <div class="nav-link">
              <?php echo anchor('Welcome/index','<div class="customcolor"> Beranda </div>'); ?>
            </div>
             <li class="nav-item">
            <div class="nav-link">
              <?php echo anchor('link/viewprogram','<div class="customcolor"> Program </div>'); ?>
            </div>
          </li>
            <li class="nav-item">
              <div class="nav-link">
              <?php echo anchor('link/viewsosial','<div class="customcolor"> Sosialisasi </div>'); ?>
            </div>
            </li>
           <li class="nav-item">
              <div class="nav-link">
              <?php echo anchor('link/viewpelaksanaan','<div class="customcolor"> Pelaksanaan Program </div>'); ?>
              </div>

            </li>
      
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Proposal Program
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <div class="dropdown-item">
            <?php echo anchor('link/viewstatus','<div class="dropcolor"> Status</div>'); ?>
            </div>
            <div class="dropdown-item">
            
            </div>
          
          <div class="dropdown-divider"></div>
         
        </div>
      </li>
          </ul>
      <div class="ml-auto my-2 my-lg-0">

<button class="btn btn-outline"><?php echo anchor('Login/index','<div class="dropcolor"> Sign In </div>');?></button>
</form>
</div></div>
</div>
        </div>
      </div>
    </nav>


<div class="container">

      <div class="row">

        <!-- Blog Entries Column -->

        <div class="col-md-8">
        <center>
          <h1 class="my-4">Prosibad
            <small>Program Siap bencana</small>
          </h1>

          <!-- Blog Post -->
  <div class="container">
    <?php
      function limit_words($string, $word_limit){
                $words = explode(" ",$string);
                return implode(" ",array_splice($words,0,$word_limit));
            }
      foreach ($data->result_array() as $i) :
        $id=$i['program_id'];
        $judul=$i['program_judul'];
        $image=$i['program_image'];
        $isi=$i['program_isi'];
    ?>
    
     <div class="card mb-4">
            <img class="card-img-top" src="<?php echo base_url().'assets/images/'.$image;?>" alt="Card image cap">
            <div class="card-body">
              <h2 class="card-title"><?php echo $judul;?></h2>
              <p class="card-text"><?php echo limit_words($isi,90000);?><a href="<?php echo base_url().'index.php/post_program/view/'.$id;?>"></a></p>


            <div class="card-footer text-muted">
              Posted on December 3, 2018 by
              <a href="#">BPBD</a>
            </div>
          </div>
      </div>
    <?php endforeach;?>
  </div>

  <script src="<?php echo base_url().'assets/jquery/jquery-2.2.3.min.js'?>"></script>
  <script type="text/javascript" src="<?php echo base_url().'assets/js/bootstrap.js'?>"></script>
          <!-- Pagination -->
          <ul class="pagination justify-content-center mb-4">
            <li class="page-item">
              <a class="page-link" href="#">← Older</a>
            </li>
            <li class="page-item disabled">
              <a class="page-link" href="#">Newer →</a>
            </li>
          </ul>

        </div>
        <!-- Sidebar Widgets Column -->
        <div class="col-md-4">

          <!-- Categories Widget -->
          <div class="card my-3">
            <h5 class="card-header">Categories</h5>
            <div class="card-body">
              <div class="row">
                <div class="col-lg-6">
                  <ul class="list-unstyled mb-0">
                    <li>
                      <a href="index">Siap Tanggap</a>
                    </li>
                    
                    <li>
                  <?php echo anchor('link/viewsosial','<div> Sosialisasi </div>'); ?>
          
                    </li>
                  </ul>
                </div>
                <div class="col-lg-6">
                  <ul class="list-unstyled mb-0">
                    <li>
                <?php echo anchor('link/viewprogram','<div> Program </div>'); ?>
                    </li>
                    <li>
                      <?php echo anchor('link/viewpelaksanaan','<div> Pelaksanaan </div>'); ?>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>

          <!-- Side Widget -->
          <div class="card my-4">
            <h5 class="card-header">Prosibad</h5>
            <div class="card-body">
              Prosibad adalah situs web yang dibuat demi mewujudkan tugas besar Pabw dan sjk
              dibuat berdasarkan SDD dan SRS yang sudah Direvisi
            </div>
          </div>
 <!-- Side Widget -->
          <div class="card my-4">
            <h5 class="card-header">Ketua BPBD</h5>
            <div class="card-body">
              <img class="card-img-top" src="https://pbs.twimg.com/profile_images/842298737011519488/Yx0yMvJu_400x400.jpg" alt="BPBD">
            </div>
          </div>

          <!-- tweeter -->
          <div class="card my-4">
            <h5 class="card-header">Tweeter here</h5>
            <div class="card-body">
            
 
<a href="https://twitter.com/rahmanadwi" class="twitter-follow-button" data-show-count="false">Follow @rahmanadwi</a><script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
            </div>
          </div>
        </div>
          
      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->

  <!--footer-->
    <footer class="kilimanjaro_area">
        <!-- Top Footer Area Start -->
        <div class="foo_top_header_one section_padding_100_70">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="kilimanjaro_part">
                            <h5>About Us</h5>
                            <p>
                              Website ini dibuat demi Menuntaskan tugas Besar Pabw dan Sjk yang dibuat Berdasarkan SRS dan SDD yang telah Di Revisi Oleh Team Router 
                            </p>
                        </div>
                        
                    </div>
                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="kilimanjaro_part">
                            <h5>Important Links</h5>
                            <ul class="kilimanjaro_links">
                                <li><a href="<?= site_url('korporat/program'); ?>"><i class="fa fa-angle-right" aria-hidden="true"></i>Program</a></li>
                                <li><a href="<?= site_url('korporat/sosialisasi'); ?>"><i class="fa fa-angle-right" aria-hidden="true"></i>Sosialisasi</a></li>
                                <li><a href="<?= site_url('korporat/pelaksanaan'); ?>"><i class="fa fa-angle-right" aria-hidden="true"></i>Pelaksanaan Program</a></li>
                                <li><a href="<?= site_url('korporat/status') ?>"><i class="fa fa-angle-right" aria-hidden="true"></i>Proposal Program - Status</a></li>
                                <li><a href="<?= site_url('korporat/pengajuan') ?>"><i class="fa fa-angle-right" aria-hidden="true"></i>Proposal Program - Pengajuan</a></li>
                            </ul>
                        </div>
                        <div class="kilimanjaro_part m-top-15">
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="kilimanjaro_part">
                            <h5>Latest News</h5>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="kilimanjaro_part">
                            <h5>Quick Contact</h5>
                            <div class="kilimanjaro_single_contact_info">
                            <div class="kilimanjaro_single_contact_info">
                                <h5>Email:</h5>
                                <p>Teamrouter17@gmail.com<br> Rahmanadwishaputra@gmail.com
                                <br> Zakkytf@gmail.com</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <!-- Footer Bottom Area Start -->
    <footer>
        <div class=" kilimanjaro_bottom_header_one section_padding_50 text-center">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <p>© All Rights Reserved by Router Team</p>
                    </div>
                </div>
            </div>
        </div>
    </footer> 
    <!-- Bootstrap core JavaScript -->
 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>

</html>
