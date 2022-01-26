<?php
require 'koneksi.php';
if (isset($_POST['simpan'])) {
    $txtgambar = $_POST['gambar'];

    $sql = "INSERT INTO tbl_slide VALUES (NULL,'$txtgambar')";
    $query = mysqli_query($koneksi, $sql);

    if ($query) {
        header("location:slider.php");
    } else {
        echo 'Data Gagal Terhapus' . mysqli_error($koneksi);
    }
}
