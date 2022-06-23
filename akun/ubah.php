<?php 
require(__DIR__.'/../vendor/autoload.php');
require_once(__DIR__."/../config.php");

$id = $_GET["id_akun"];
$data = akun::find($id);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HALAMAN UBAH AKUN</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
<div class="container col-md-6 mt-5 bg-dark rounded">
    <form action="proses-ubah.php?id_akun=<?= $data->id_akun ?>" method="post" class="row g-3">
    <div class="mb-3">
        <label class="text-warning" for="">NAMA </label>
        <input class="form-control" type="text" name="nama" value="<?= $data->nama ?>">
    </div>
    <div class="mb-3">
        <label class="text-warning" for="">NO TELEPON</label>
        <input class="form-control" type="text" name="no_telp" value="<?= $data->no_telp ?>">
    </div>
    <div class="mb-3">
        <label class="text-warning" for="">USERNAME</label>
        <input class="form-control" type="text" name="username" value="<?= $data->username ?>">
    </div>       
    <div class="mb-3">
        <label class="text-warning" for="">PASSWORD</label>
        <input class="form-control" type="text" name="password" value="<?= $data->password ?>">
    </div>    
        <button type="submit" class="btn btn-primary mb-3 mt-2 col-md-3 ">Submit</button>
    </form>
</div>
<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>