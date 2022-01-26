<?php
require 'koneksi.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
}


if (isset($_POST['simpan'])) {
    $txttitle = $_POST['title'];
    $txtket = $_POST['keterangan'];
    $txtharga = $_POST['harga'];
    $txtgambar = $_POST['gambar'];
    $txtgambaruplod = $_POST['gambaruplod'];
    if ($txtgambar == "") {
        $txtgambar = $txtgambaruplod;
    }

    $sql = "UPDATE tbl_liburan SET title='$txttitle', Keterangan='$txtket', harga='$txtharga', gambar='$txtgambar' WHERE id_liburan='$id'";
    $query = mysqli_query($koneksi, $sql);

    if ($query) {
        header("location:paket_pariwisata.php");
        // echo 'Berhasil Di hapus';
    } else {
        echo 'Data Gagal Terhapus' . mysqli_error($koneksi);
    }
}
