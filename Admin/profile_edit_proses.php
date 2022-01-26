<?php
require 'koneksi.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
}


if (isset($_POST['simpan'])) {
    $nama_perusahaan = $_POST['nama_perusahaan'];
    $alamat = $_POST['alamat'];
    $telepone = $_POST['telepone'];
    $whatsapp = $_POST['whatsapp'];
    $email = $_POST['email'];
    $logo = $_POST['logo'];
    $logolama = $_POST['logolama'];
    if ($logo == "") {
        $logo = $logolama;
    }

    $sql = "UPDATE tbl_profile_perusahaan SET nama_perusahaan='$nama_perusahaan', 	alamat='$alamat', telepone='$telepone', whatsapp='$whatsapp', email='$email', logo='$logo' WHERE id_perusahaan='$id'";
    $query = mysqli_query($koneksi, $sql);

    if ($query) {
        header("location:profile.php");
        // echo 'Berhasil Di hapus';
    } else {
        echo 'Data Gagal Terhapus' . mysqli_error($koneksi);
    }
}
