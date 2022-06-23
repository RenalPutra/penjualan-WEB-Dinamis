<?php 
session_start();
require(__DIR__.'/../vendor/autoload.php');
require_once(__DIR__."/../config.php");

// $id = $_GET["id_akun"];
$data = barang::find($id);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HALAMAN DETAIL BARANG</title>
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
<div class="container mt-5">
    <h1>HALAMAN DETAIL BARANG</h1>
    <table class="table table-dark table-striped">
        <thead>
            <tr class="text-center">
                <th>#</th>
                <th>NAMA KATEGORI</th>
                <th>NAMA BARANG</th>
                <th>HARGA BELI</th>
                <th>KETERANGAN</th>
                <th>STOK</th>
            </tr>
        </thead>
        <tbody>
            <?php $no = 1 ?>
            <tr class="text-center">
                <td><?= $no++ ?></td>
                <td><?= $data->id_kategori->nama_kategori ?></td>
                <td><?= $data->nama_barang ?></td>
                <td><?= $data->harga_beli ?></td>
                <td><?= $data->keterangan ?></td>
                <td><?= $data->stok ?></td>
            </tr>
        </tbody>
    </table>
    <br>
    <a href="tampil.php" class="btn btn-primary mb-2 mt-2">KEMBALI</a>
</div>
<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>