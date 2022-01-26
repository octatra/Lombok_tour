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
                        <h1>Edit Profile</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Profile</li>
                            <li class="breadcrumb-item active">Edit Profile</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body row">
                                <div class="col-md-12">
                                    <?php
                                    require 'koneksi.php';
                                    if (isset($_GET['id'])) {
                                        $id = $_GET['id'];
                                        $query = "SELECT * FROM tbl_profile_perusahaan WHERE id_perusahaan='$id'";
                                        $sql = mysqli_query($koneksi, $query);
                                        $data = mysqli_fetch_object($sql);
                                    }
                                    ?>
                                    <form action="profile_edit_proses.php?id=<?= $data->id_perusahaan; ?>" method="POST">
                                        <div class="form-group">
                                            <label for="inputName">Nama Perusahaan</label>
                                            <input type="text" id="nama_perusahaan" name="nama_perusahaan" class="form-control" value="<?= $data->nama_perusahaan; ?>" />
                                        </div>
                                        <div class="form-group">
                                            <label for="inputEmail">E-Alamat</label>
                                            <input type="text" id="alamat" name="alamat" value="<?= $data->alamat; ?>" class="form-control" />
                                        </div>
                                        <div class="form-group">
                                            <label for="inputSubject">Telepone</label>
                                            <input type="text" id="telepone" value="<?= $data->telepone; ?>" name="telepone" class="form-control" />
                                        </div>
                                        <div class="form-group">
                                            <label for="inputSubject">WhatsApp</label>
                                            <input type="text" id="whatsapp" name="whatsapp" value="<?= $data->whatsapp; ?>" class="form-control" />
                                        </div>
                                        <div class="form-group">
                                            <label for="inputSubject">Email</label>
                                            <input type="email" id="email" name="email" value="<?= $data->email; ?>" class="form-control" />
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputFile">Input Gambar</label>
                                            <div class="input-group">
                                                <div class="custom-file">
                                                    <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                                    <input type="file" class="custom-file-input" id="logo" name="logo" value="<?= $data->logo ?>">
                                                    <input type="hiden" class="custom-file-input" id="logolama" name="logolama" value="<?= $data->logo ?>">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <input type="submit" class="btn btn-primary" name="simpan" value="Simpan">
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    </section>


    </div>

    <?php include 'layout/footer.php'; ?>
</body>

</html>