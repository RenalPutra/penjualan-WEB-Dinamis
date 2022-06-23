<?php 
require(__DIR__.'/../vendor/autoload.php');
require_once(__DIR__."/../config.php");

$id = $_GET["id_barang"];
$data = barang::find($id);

$kategoris = kategori::all();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HALAMAN UBAH BARANG</title>
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
    <form action="proses-ubah.php?id_barang=<?= $data->id_barang ?>" method="post" class="row g-3">
    <div class="mb-3">
    <label class="text-warning" for="">KATEGORI</label>
        <select name="nama_kategori" class="form-control" id="">
            <option value="">-- PILIH KATEGORI --</option>
            <?php foreach($kategoris as $kategori) : ?>
             <option value="<?= $kategori['id_kategori'] ?>" <?= $kategori['id_kategori'] == $data->id_kategori ? 'selected' : '' ?>><?= $kategori['nama_kategori'] ?></option>
            <?php endforeach; ?>
        </select>
    </div>
    <div class="mb-3">
        <label class="text-warning" for="">NAMA BARANG</label>
        <input class="form-control" type="text" name="nama_barang" value="<?= $data->nama_barang ?>">
    </div>
    <div class="mb-3">
        <label class="text-warning" for="">HARGA BELI</label>
        <input class="form-control" type="text" name="harga_beli" value="<?= $data->harga_beli ?>">
    </div>
    <div class="mb-3">
        <label class="text-warning" for="">HARGA BELI</label>
        <input class="form-control" type="text" name="harga_jual" value="<?= $data->harga_jual ?>">
    </div>
    <div class="mb-3">
        <label class="text-warning" for="">KETERANGAN</label>
        <input class="form-control" type="text" name="keterangan" value="<?= $data->keterangan ?>">
    </div>
    <div class="mb-3">
        <label class="text-warning" for="">STOK</label>
        <input class="form-control" type="text" name="stok" value="<?= $data->stok ?>">
    </div>
        <button type="submit" class="btn btn-primary mb-3 mt-2 col-md-3 ">Submit</button>
    </form>
</div>
<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>