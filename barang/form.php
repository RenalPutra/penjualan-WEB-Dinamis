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
$kategoris = kategori::all();

echo $twig->render('create-barang.twig', ['kategori' => $kategoris ]);

?>
