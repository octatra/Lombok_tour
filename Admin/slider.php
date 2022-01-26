<?php
session_start();
if (!isset($_SESSION['login'])) {
    header('location:../login.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'layout/haed.php'; ?>
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <!-- Preloader -->
    <div class="preloader flex-column justify-content-center align-items-center">
        <img class="animation__shake" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
    </div>
    <?php include 'layout/navbar.php'; ?>

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>SLIDE</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                            <li class="breadcrumb-item active">Slider</li>
                        </ol>
                    </div>
                </div>
                <div class="col-sm-2">
                    <td>
                        <a href="tambah_slide.php"><button type="button" class="btn btn-block btn-primary btn-lg">Tambah Data</button></a>
                    </td>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <table id="example2" class="table table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Gambar Slide</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        require 'koneksi.php';
                                        $query = "SELECT * FROM tbl_slide";
                                        $sql = mysqli_query($koneksi, $query);
                                        $no = 1;
                                        while ($data = mysqli_fetch_object($sql)) {
                                        ?>
                                            <tr>
                                                <td><?= $no++; ?></td>
                                                <td><a href="Image/<?= $data->image; ?>"><?= $data->image; ?></a></td>
                                                <td><a href="edit_slide.php?id=<?= $data->id_slide; ?>">
                                                        <input type="submit" value="Edit" class="btn btn-warning">
                                                    </a> <a href="hapus_paket.php?id=<?= $data->id_slide; ?>">
                                                        <input type="submit" value="Hapus" class="btn btn-danger" onclick="return confirm('Yakin Hapus Data?')">
                                                </td>
                                            <?php
                                        }
                                            ?>
                                            </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <?php include 'layout/footer.php'; ?>
</body>

</html>