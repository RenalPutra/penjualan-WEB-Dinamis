<?php 
session_start();
require(__DIR__.'/../vendor/autoload.php');
require_once(__DIR__."/../config.php");
if (!isset($_SESSION['login'])) {
	$queryString =  $_SERVER['QUERY_STRING'];
	header('Location: ../login.php'. $queryString);
	exit();
}
$id = $_GET["id_akun"];
$data = akun::find($id);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
<div class="container mt-5">
    <h1>HALAMAN DETAIL AKUN</h1>
    <table class="table table-dark table-striped">
        <thead>
            <tr class="text-center">
                <th>#</th>
                <th>NAMA</th>
                <th>NO TELEPON</th>
                <th>USERNAME</th>
                <th>PASSWORD</th>
            </tr>
        </thead>
        <tbody>
            <?php $no = 1 ?>
            <tr class="text-center">
                <td><?= $no++ ?></td>
                <td><?= $data->nama ?></td>
                <td><?= $data->no_telp ?></td>
                <td><?= $data->username ?></td>
                <td><?= $data->password ?></td>
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