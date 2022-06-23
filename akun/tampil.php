<?php 
session_start();
require(__DIR__.'/../vendor/autoload.php');
require_once(__DIR__."/../config.php");
require_once(__DIR__."/../fungsi.php");
if (!isset($_SESSION['login'])) {
	$queryString =  $_SERVER['QUERY_STRING'];
	header('Location: ../login.php'. $queryString);
	exit();
}
$data = akun::all();

if(isset($_GET['hapus'])) {
  $id = $_GET['hapus'];
  $c = hapusAkun($id);

  if($c == true) {
    echo "<h1 class='text-light mt-5 '>DATA TELAH DI HAPUS</h1>";
    echo "<a href='tampil.php' class='btn btn-primary mb-5 mt-2'>CEK DATA</a>";
    
  } else {
    //   jika gagal
  }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DATA AKUN</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
  <!-- Navigasi -->
  <div class="pos-f-t">
    <div class="collapse" id="navbarToggleExternalContent">
      <div class="bg-dark p-4">
        <h5 class="text-white h4">Collapsed content</h5>
        <span class="text-muted">Toggleable via the navbar brand.</span>
      </div>
    </div>
    <nav class="navbar navbar-dark bg-dark">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    </nav>
  </div>
  <!-- end navigasi -->
<div class="container">
<h1>DATA AKUN</h1>
    <a href="form-akun.php" class="btn btn-primary mb-2 mt-2">+TAMBAH</a>
    <table class="table table-dark table-striped">
        <thead>
            <tr class="text-center">
                <th>#</th>
                <th>NAMA</th>
                <th>NO TELEPON</th>
                <th>USERNAME</th>
                <th>AKSI</th>
            </tr>
        </thead>
        <tbody>
            
                <?php $no = 1 ?>
                <?php foreach ($data as $key => $value) :?>
                    <tr class="text-center">
                    <td><?= $no++ ?></td>
                    <td><?= $value->nama ?></td>
                    <td>0<?= $value->no_telp ?></td>
                    <td><?= $value->username ?></td>
                    <td><a href="detail.php?id_akun=<?= $value->id_akun ?>" class="btn btn-warning">DETAIL</a> <a href="tampil.php?hapus=<?= $value->id_akun ?>" class="btn btn-danger">HAPUS</a> <a href="ubah.php?id_akun=<?= $value->id_akun?>" class="btn btn-success">UBAH</a></td>
                    </tr>
                <?php endforeach; ?>
        </tbody>
    </table>

</div>
<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
