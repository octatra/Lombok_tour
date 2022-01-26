<?php
if (isset($_GET['id'])) {
    require 'koneksi.php';

    $id = $_GET['id'];
    $query = "DELETE FROM tbl_liburan WHERE id_liburan='$id'";
    $result = mysqli_query($koneksi, $query);

    if ($result) {
        header('location:paket_pariwisata.php');

        // echo 'Berhasil Di hapus';
    } else {
        echo 'Data Gagal Terhapus' . mysqli_error($koneksi);
    }
}
