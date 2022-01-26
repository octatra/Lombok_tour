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
                        <h1>Tambah Slide</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Slider</li>
                            <li class="breadcrumb-item active">Tambah Slider</li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>
        <section class="content">
            <div class="container-fluid">
                <div class="card card-primary">
                    <form action="proses_tambah_slide.php" method="POST">
                        <div class="card-body">
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