<?php 
session_start();

 ?> 
 <!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="index.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="fontawesome-free-5.9.0-web/css/all.min.css">
    <title>Web Dasar</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-dark fixed-top">
      <a class="navbar-brand text-white" href="#"><i class="fab fa-aws"></i> Rental Mobil Abi W.S</a>
        <span class="navbar-text text-white my-2 my-lg-0 ml-auto">
          Selamat Datang, Admin
        </span>
        <div class="icon ml-4 mt-2">
          <h5>
            <button class="btn btn-outline-info  text-white btn-small" data-toggle="modal" data-target="#logout"><i class="fas fa-sign-out-alt text-white mr-2" data-toggle="tooltip" title="Sign Out"></i> Sign Out </button>
          </h5>
        </div>
      </div>
    </nav>
        <div class="row no-gutters mt-5">
          <div class="col-md-2 bg-dark mt-2 pr-3 pt-4">
            <ul class="nav flex-column ml-3 mb-5">
            <li class="nav-item">
              <a class="nav-link active text-white" href="?page=beranda"><i class="fas fa-home mr-2"></i> Beranda</a> <hr class="bg-secondary">
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="?page=view_mobil"><i class="fas fa-car mr-2"></i> View Mobil</a><hr class="bg-secondary">
            </li>
        </div>

        <!-- modal Sign Out-->
      <div class="modal fade" id="logout" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Mau Keluar ?</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            Klik Sign Out di bawah untuk keluar
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-light" data-dismiss="modal">Batal</button>
            <a href="logout.php" class="btn btn-info">Sign Out</a>
          </div>
        </div>
      </div>
    </div>

    <?php 
          if(isset($_GET['page'])) 
            {
              $page = $_GET['page'];
              include $page.'.php';
            }else{
              include 'beranda.php';
            }
            ?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
  </body>
</html>