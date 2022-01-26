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
    <?php include 'layout/navbar.php'; ?>
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Tambah Paket</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Paket Wisata</li>
                            <li class="breadcrumb-item active">Tambah Paket</li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>
        <section class="content">
            <div class="container-fluid">
                <div class="card card-primary">
                    <form action="proses_tambah.php" method="POST">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Title Paket</label>
                                <input type="text" class="form-control" id="title" name="title" placeholder="Title Paket">
                            </div>
                            <div class="form-group">
                                <label>Keterangan Paket</label>
                                <textarea class="form-control" rows="3" id="keterangan" name="keterangan" placeholder="Enter ..."></textarea>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Harga</label>
                                <input type="text" class="form-control" id="harga" name="harga" placeholder="Harga">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputFile">Gambar</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="gambar" name="gambar">
                                        <label class="custom-file-label" id="foto" for="exampleInputFile">Pilih Gambar</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary" name="simpan" id="Simpan">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </div>
    <?php include 'layout/footer.php'; ?>
</body>

</html>