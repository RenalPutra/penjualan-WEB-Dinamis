<?php 
require(__DIR__.'/../vendor/autoload.php');
require_once(__DIR__."/../config.php");
$loader = new \Twig\Loader\FilesystemLoader(__DIR__.'/../template');
$twig = new \Twig\Environment($loader);

$data = pelanggan::all();

echo $twig->render('create-pelanggan.twig');

?>
