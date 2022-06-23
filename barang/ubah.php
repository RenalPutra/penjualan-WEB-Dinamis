<?php 
session_start();
require(__DIR__.'/../vendor/autoload.php');
require_once(__DIR__."/../config.php");
$loader = new \Twig\Loader\FilesystemLoader(__DIR__.'/../template');
$twig = new \Twig\Environment($loader);
if (!isset($_SESSION['login'])) {
	$queryString =  $_SERVER['QUERY_STRING'];
	header('Location: ../login.php'. $queryString);
	exit();
}
$id = $_GET["id_barang"];
$barang = barang::find($id);
$kategoris = kategori::all();

echo $twig->render('update-barang.twig', ['barang' =>$barang, 'kategori' => $kategoris ]);
?>