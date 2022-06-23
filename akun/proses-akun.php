<?php
session_start();
require(__DIR__.'/../vendor/autoload.php');
require_once(__DIR__."/../config.php");
if (!isset($_SESSION['login'])) {
	$queryString =  $_SERVER['QUERY_STRING'];
	header('Location: ../login.php'. $queryString);
	exit();
}
    $nama       = $_POST["nama"];
    $no_telp    = $_POST["no_telp"];
    $username   = $_POST["username"];
    $password   = $_POST['password'];

    $akun = new akun();
    $akun->nama = $nama;
    $akun->no_telp = $no_telp;
    $akun->username = $username;
    $akun->password = $password;
    
    $akun->save();

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