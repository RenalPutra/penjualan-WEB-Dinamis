<?php
session_start();
require(__DIR__.'/../vendor/autoload.php');
require_once(__DIR__."/../config.php");

    $pelanggan      = $_POST["nama_pelanggan"];
    $akun           = $_POST["nama_akun"];
    $kode_transaksi = $_POST["kode_transaksi"];
    $tanggal        = $_POST["tanggal"];
    $total          = $_POST["total"];

    $transaksi = new transaksi();
    // cara dapatkan id akun (yang login)
    $akun = $SESSION['id'];
    $transaksi->id_pelanggan = $pelanggan;
    $transaksi->id_akun = $akun;
    // membuat string acak
    $transaksi->kode_transaksi = 'TRX' . time();
    $transaksi->tanggal = date('Y-m-d');
    $transaksi->total = $total;
    
    // save transaksi 1
    if($transaksi->save()) {
        // get last id
        $get = transaksi::orderBy('id', 'desc')->limit(1)->first();

        $detail = new transaksiitem();
        $detal->id_transaksi = $get->id_transaksi;
        $detail->id_barang = $barang;
        $detail->qty = $qty;
        $detail->subtotal = $subtotal;

        $detail->save();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VALIDASI INPUT</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;1,600;1,800&family=Sriracha&display=swap');

        * {
            font-family: 'Poppins', sans-serif;
            font-family: 'Sriracha', cursive;   
        }
    </style>
</head>
<body>
    <div class="container col-md-6 mt-5 bg-dark rounded">
    <h1 class="text-light mt-5 ">DATA TELAH DI INPUT</h1>

    <a href="tampil.php" class="btn btn-primary mb-5 mt-2">CEK DATA</a>
    </div>

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>