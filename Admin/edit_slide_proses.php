<?php
require 'koneksi.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
}


if (isset($_POST['simpan'])) {
    $txtgambar = $_POST['gambar'];
    $txtgambaruplod = $_POST['gambaruplod'];
    if ($txtgambar == "") {
        $txtgambar = $txtgambaruplod;
    }

    $sql = "UPDATE tbl_slide SET image='$txtgambar' WHERE id_slide='$id'";
    $query = mysqli_query($koneksi, $sql);

    if ($query) {
        header("location:slider.php");
        // echo 'Berhasil Di hapus';
    } else {
        echo 'Data Gagal Terhapus' . mysqli_error($koneksi);
    }
}
