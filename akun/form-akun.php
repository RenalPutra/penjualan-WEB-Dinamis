<?php 
require(__DIR__.'/../vendor/autoload.php');
require_once(__DIR__."/../config.php");

$data = akun::all();


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORM INPUT AKUN</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
<div class="container col-md-6 mt-5 bg-dark rounded">
    <form action="proses-akun.php" method="post" class="row g-3">
        <!-- <label class="text-warning" for="">Nama Supplier</label>
        <select name="nama_supplier" id="">
            <option value=""></option>
        </select> -->
        <div class="mb-3">            
            <label class="text-warning" for="">NAMA</label>
            <input type="text" name="nama" class="form-control sm">
        </div>
        <div class="mb-3">
           <label class="text-warning" for="">NO TELEPON</label>
           <input type="number" name="no_telp" class="form-control">
        </div>
        <div class="mb-3">            
            <label class="text-warning" for="">USERNAME</label>
            <input type="text-area" name="username" class="form-control">
        </div>
        <div class="mb-3">            
            <label class="text-warning" for="">PASSWORD</label>
            <input type="text-area" name="password" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary mb-2 mt-2 col-md-3 ">TAMBAH</button>
    </form>
</div>
<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>