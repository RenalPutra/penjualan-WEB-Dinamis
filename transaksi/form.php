<?php 
require(__DIR__.'/../vendor/autoload.php');
require_once(__DIR__."/../config.php");

$loader = new \Twig\Loader\FilesystemLoader(__DIR__.'/../template');
$twig = new \Twig\Environment($loader);

$pelanggan  = pelanggan::all();
$barang     = barang::all();

echo $twig->render('create-transaksi.twig', ['pelanggan' => $pelanggan, 'barang' => $barang]);

?>
