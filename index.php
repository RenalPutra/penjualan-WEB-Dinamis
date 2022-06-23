<?php
session_start();

require(__DIR__.'/vendor/autoload.php');
require_once(__DIR__."/config.php");
$loader = new \Twig\Loader\FilesystemLoader(__DIR__.'/template');
$twig = new \Twig\Environment($loader);

if (!isset($_SESSION['login'])) {
	$queryString =  $_SERVER['QUERY_STRING'];
	header('Location: login.php'. $queryString);
	exit();
}

$pelanggan = pelanggan::count();
$barang = barang::count();
// $transaksi = transaksi::count();
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
      <!-- Bootstrap CSS -->
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;1,600;1,800&family=Sriracha&display=swap');

        * {
            font-family: 'Poppins', sans-serif;
            font-family: 'Sriracha', cursive;  
        }
    </style>
  </head>
  <body>
  <!-- {# nav #} -->
        <nav class="navbar navbar-expand-lg bg-dark">
            <div class="container-fluid">
                <img style="width:100px; height:30px;" src="asset/img/logo.png">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
            </div>
        </nav>
    <!-- {# end nav #} -->
    <!-- create 2 cols -->
    <div class="row w-100">
        <div class="col-md-2" style="height: 100vh;">
            <div class="h-100" style="background-color: #a2e697;">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <h3 class="text-center text-light mt-3">Menu</h3>
                    <li class="nav-item">
                            <button class="btn btn-success mt-2" style="width: 200px; margin-left:10px;">
                                <a class="nav-link active text-light" aria-current="page" href="pelanggan/tampil.php">Pelanggan</a>
                            </button>                            
                    </li>
                    <li class="nav-item">
                        <button class="btn btn-success mt-2" style="width: 200px; margin-left:10px;">
                            <a class="nav-link text-light" href="kategori/tampil.php">Kategori</a>
                        </button>
                    </li>
                    <li class="nav-item">
                        <button class="btn btn-success mt-2" style="width: 200px; margin-left:10px;">
                            <a class="nav-link text-light" href="barang/tampil.php">Barang</a>
                        </button>                        
                    </li>
                    <li class="nav-item">
                        <button class="btn btn-success mt-2" style="width: 200px; margin-left:10px;">
                            <a class="nav-link text-light" href="transaksi/tampil.php">Transaksi</a>
                        </button>                        
                    </li>
                </ul>
            </div>
        </div>
        <div class="col">
            <!-- konten -->
    <div class="row row-cols-1 row-cols-md-3 g-4 mt-5">
    <div class="col">
        <div class="card h-100" style="background-color: #a2e697;">
        <div class="card-body">
            <h5 class="card-title text-center">JUMLAH PELANGGAN</h5>
            <h1 class="card-text text-center"><?= $pelanggan ?></h1>
        </div>
        </div>
    </div>
    <div class="col">
        <div class="card h-100" style="background-color: #a2e697;">
        <div class="card-body">
            <h5 class="card-title text-center">JUMLAH BARANG</h5>
            <h1 class="card-text text-center"><?= $barang ?></h1>
        </div>
        </div>
    </div>
    <div class="col">
        <div class="card h-100" style="background-color: #a2e697;">
        <div class="card-body">
            <h5 class="card-title text-center">JUMLAH TRANSAKSI</h5>
            <!-- <h1 class="card-text text-center"><?= $transaksi ?></h1> -->
        </div>
        </div>
    </div>
    <!-- endkonten -->
    </div>
        </div>
    </div>
    
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>