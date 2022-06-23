<?php
require(__DIR__.'/vendor/autoload.php');
require_once(__DIR__."/config.php");

// AKUN
function hapusAkun($kode) {
    $akun = akun::where('id_akun', $kode)->delete();
    if($akun) {
    return true;
        
    } else {
    return false;
    }
    }

// KATEGORI
function hapusKategori($kode) {
    $kategori = kategori::where('id_kategori', $kode)->delete();
    if($kategori) {
    return true;
        
    } else {
    return false;
    }
    }

// BARANG
function hapusBarang($kode) {
    $barang = barang::where('id_barang', $kode)->delete();
    if($barang) {
    return true;
        
    } else {
    return false;
    }
    }

// PELANGGAN
function hapusPelanggan($kode) {
    $pelanggan = pelanggan::where('id_pelanggan', $kode)->delete();
    if($pelanggan) {
    return true;
        
    } else {
    return false;
    }
    }

?>