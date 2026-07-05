<?php

include "../../config/koneksi.php";

// Tambah Data
if(isset($_POST['simpan'])){

    $judul = $_POST['judul'];
    $penulis = $_POST['penulis'];
    $penerbit = $_POST['penerbit'];
    $tahun = $_POST['tahun'];

    mysqli_query($conn,"INSERT INTO buku
    VALUES(
    '',
    '$judul',
    '$penulis',
    '$penerbit',
    '$tahun'
    )");

    header("Location:index.php");

}

// Update Data
if(isset($_POST['update'])){

    $id = $_POST['id'];
    $judul = $_POST['judul'];
    $penulis = $_POST['penulis'];
    $penerbit = $_POST['penerbit'];
    $tahun = $_POST['tahun'];

    mysqli_query($conn,"UPDATE buku SET

    judul='$judul',
    penulis='$penulis',
    penerbit='$penerbit',
    tahun='$tahun'

    WHERE id='$id'
    ");

    header("Location:index.php");

}
?>