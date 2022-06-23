<?php 
require(__DIR__.'/vendor/autoload.php');
require_once(__DIR__."/config.php");
$loader = new \Twig\Loader\FilesystemLoader(__DIR__.'/template');
$twig = new \Twig\Environment($loader);


    if(isset($_POST['submit'])) {
        $username   = $_POST["username"];
        $password   = $_POST["password"];

        $akun = akun::where('username', $username)->where('password', $password)->count();

        if($akun > 0) {
            // fetch data
            $fetch = akun::where('username', $username)->where('password', $password)->first();
    
            // set session ny dulu
            $_SESSION['login'] = true;
            $_SESSION['id'] = $fetch->id_akun;
            $_SESSION['nama'] = $fetch->nama;
            echo "<script>alert('Login Berhasil'); location.href='index.php';</script>";
            } else {
                echo "<script>alert('Username / Password yang anda masukkan salah'); location.href='login.php';</script>";
            }
    }
    
    echo $twig->render('login.twig');

        

?>



