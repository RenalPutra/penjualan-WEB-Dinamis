<?php 
session_start();
require(__DIR__.'/../vendor/autoload.php');
require_once(__DIR__."/../config.php");
require_once(__DIR__."/../fungsi.php");

$loader = new \Twig\Loader\FilesystemLoader(__DIR__.'/../template');
$twig = new \Twig\Environment($loader);
if (!isset($_SESSION['login'])) {
	$queryString =  $_SERVER['QUERY_STRING'];
	header('Location: ../login.php'. $queryString);
	exit();
}
$kategori = kategori::all();

echo $twig->render('read-kategori.twig', ['kategori' => $kategori]);

if(isset($_GET['hapus'])) {
  $id = $_GET['hapus'];
  $c = hapusKategori($id);

  if($c == true) {
    echo "<h1 class='text-light mt-5 '>DATA TELAH DI HAPUS</h1>";
    echo "<a href='tampil.php' class='btn btn-primary mb-5 mt-2'>CEK DATA</a>";
    
  } else {
    //   jika gagal
  }
}
?>