<?php
require 'koneksi.php';
if (isset($_POST['simpan'])) {
    $txttitle = $_POST['title'];
    $txtket = $_POST['keterangan'];
    $txtharga = $_POST['harga'];
    $txtgambar = $_POST['gambar'];

    $sql = "INSERT INTO tbl_liburan VALUES (NULL, '$txttitle', '$txtket', '$txtharga','$txtgambar')";
    $query = mysqli_query($koneksi, $sql);

    if ($query) {
        header("location:paket_pariwisata.php");
    } else {
        echo 'Data Gagal Terhapus' . mysqli_error($koneksi);
    }
}
