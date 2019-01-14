<?php

?>

<!------ Include the above in your HEAD tag ---------->

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <title>Prosibad</title>

    <!-- Bootstrap core CSS -->

    <!-- Custom styles for this template -->
    <link  rel="stylesheet" href="<?php echo base_url().'/css/gaya.css'?>"  type="text/css" media="all" >

  </head>

  <body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
      <div class="container">
        <a class="navbar-brand" href="#">Prosibad</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <div class="nav-link">
              <?php echo anchor('Korporat/indexcorp','<div class="customcolor"> Beranda </div>'); ?>
            </div>
             <li class="nav-item">
            <div class="nav-link">
              <?php echo anchor('korporat/viewprogramcorp','<div class="customcolor"> Program </div>'); ?>
            </div>
          </li>
            <li class="nav-item">
              <div class="nav-link">
              <?php echo anchor('Korporat/viewsosialcorp','<div class="customcolor"> Sosialisasi </div>'); ?>
            </div>
            </li>
           <li class="nav-item">
              <div class="nav-link">
              <?php echo anchor('Korporat/viewpelaksanaancorp','<div class="customcolor"> Pelaksanaan Program </div>'); ?>
              </div>

            </li>
      
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Proposal Program
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <div class="dropdown-item">
            <?php echo anchor('Korporat/viewstatuscorp','<div class="dropcolor"> Status</div>'); ?>
            </div>
            <div class="dropdown-item">
            <?php echo anchor('Admin/Files','<div class="dropcolor"> Pengajuan </div>'); ?>
            </div>
          
          <div class="dropdown-divider"></div>
         
        </div>
      </li>

          </ul>
      
      <div class="ml-auto my-2 my-lg-0">


<button class="btn btn-outline my-2 my-sm-0" ><a href="<?php echo base_url().'index.php/login/logout'?>">Log out Korporat</a></button>
</form>
</div></div>

</div>
        </div>
         
      </div>
    

    </nav>


  <div class="container">

  <table id="table" class="table table-striped table-bordered table-hover">
    <tr>
      <th> No </th>
      <th> Judul </th>
      <th> Poin </th>
      <th> Status </th>
      <th> Tanggal </th>
    </tr>
    <?php 
    $no = 1;
    foreach($tbl_nilai as $u){ 
    ?>
    <tr>
      <td><?php echo $no++ ?></td>
      <td><?php echo $u->nilai_judul ?></td>
      <td><?php echo $u->nilai_poin ?></td>
      <td><?php echo $u->nilai_status ?></td>
      <td><?php echo $u->nilai_tanggal ?></td>
 
    </tr>
    <?php } ?>
  </table>

  </div>

    </div>
































 
    <!-- Bootstrap core JavaScript -->
   <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

  </body>

</html>