<?php 
session_start();

require(__DIR__.'/vendor/autoload.php');
require_once(__DIR__."/config.php");
$loader = new \Twig\Loader\FilesystemLoader(__DIR__.'/template');
$twig = new \Twig\Environment($loader);

$username = $_POST['username'];
$password = $_POST['password'];

if(akun::where('username', $username)->where('password', $password)->first()) {
    $_SESSION['username'] = $username;
    $_SESSION['login'] = true;
    // echo "<script>alert('Login Berhasil')<script>";
    header('Location: index.php');
} else {
    echo $twig->render('login.twig');
    // echo "<script>alert('Username / Password yang anda masukan salah')<script>";
}

?>