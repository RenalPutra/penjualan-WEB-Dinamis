<?php 
require(__DIR__.'/../vendor/autoload.php');
require_once(__DIR__."/../config.php");

$loader = new \Twig\Loader\FilesystemLoader(__DIR__.'/../template');
$twig = new \Twig\Environment($loader);

$id = $_GET["id_kategori"];
$kategori = kategori::find($id);

echo $twig->render('detail-kategori.twig', ['kategori' => $kategori]);
?>

