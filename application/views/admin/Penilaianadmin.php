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

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
      <div class="container">
        <a class="navbar-brand" href="#">Prosibad</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <div class="nav-link">
              <?php echo anchor('Admin1/indexadmin','<div class="customcolor"> Beranda </div>'); ?>
            </div>
             <li class="nav-item">
            <div class="nav-link">
              <?php echo anchor('Admin1/viewprogramadmin','<div class="customcolor"> Program </div>'); ?>
            </div>
          </li>
            <li class="nav-item">
              <div class="nav-link">
              <?php echo anchor('Admin1/viewsosialadmin','<div class="customcolor"> Sosialisasi </div>'); ?>
            </div>
            </li>
           <li class="nav-item">
              <div class="nav-link">
              <?php echo anchor('Admin1/viewpelaksanaanadmin','<div class="customcolor"> Pelaksanaan Program </div>'); ?>
              </div>

            </li>
      
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Proposal Program
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <div class="dropdown-item">
            <?php echo anchor('Admin1/viewpenilaianadmin','<div class="dropcolor">Penilaian</div>'); ?>
            </div>
           <div class="dropdown-item">
            <?php echo anchor('Download','<div class="dropcolor"> Proposal </div>'); ?>
            </div>
          
          <div class="dropdown-divider"></div>
         
        </div>
      </li>

          </ul>
      
      <div class="ml-auto my-2 my-lg-0">


<button class="btn btn-outline my-2 my-sm-0" ><a href="<?php echo base_url().'index.php/login/logout'?>">Log out Admin</a></button>
</form>
</div></div>

</div>
        </div>
         
      </div>
    

    </nav>


  <div class="container">
    <div class="col-md-8 col-md-offset-2">
      <h2>Portal pelaksanaan program</h2><hr/>
  <form action="<?php echo base_url(). "index.php/post_nilai/tambah_aksi"; ?>" method="post">
    <table style="margin:20px auto;">
      <tr>
        <td>Judul</td>
        <td><input type="text" name="nilai_judul" required></td>
      </tr>
      <tr>
        <td>Poin</td>
        <td><input type="number" name="nilai_poin" required></td>
      </tr>
      <tr>
        <td>Status</td>
        <td><input type="text" name="nilai_status" required></td>
      </tr>
      <tr>
        <td>Tanggal penilaian</td>
        <td><input type="date" name="nilai_tanggal"></td>
      </tr>
      <tr>
        <td>Pengirim</td>
        <td><input type="text" name="nilai_oleh"></td>
      </tr>

      <tr>
        <td></td>
        <td><input type="submit" name="submit" value="Tambah"></td>
      </tr>
    </table>
  </form> 
    </div>
    
  </div>
  
  <script src="<?php echo base_url().'assets/jquery/jquery-2.2.3.min.js'?>"></script>
  <script type="text/javascript" src="<?php echo base_url().'assets/js/bootstrap.js'?>"></script>
  <script src="<?php echo base_url().'assets/ckeditor/ckeditor.js'?>"></script>

   <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>











   <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

  </body>

</html>