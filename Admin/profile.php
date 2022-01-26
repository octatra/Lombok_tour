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
                        <h1>Profile</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                            <li class="breadcrumb-item active">Profile</li>
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
                                <?php
                                require 'koneksi.php';
                                $query = "SELECT * FROM tbl_profile_perusahaan";
                                $sql = mysqli_query($koneksi, $query);
                                while ($data = mysqli_fetch_object($sql)) {
                                ?>
                                    <div class="col-5 text-center d-flex align-items-center justify-content-center">
                                        <div class="form-group">
                                            <img src="../Admin/Image/<?= $data->logo; ?>">
                                        </div>
                                        <!-- <div class="form-group">
                                            <h2><strong><?= $data->nama_perusahaan; ?></strong></h2>
                                            <p class="lead mb-5"><?= $data->alamat; ?><br>
                                                Phone: <?= $data->telepone; ?>
                                            </p>
                                        </div> -->
                                    </div>
                                    <div class="col-7">
                                        <div class="form-group">
                                            <label for="inputName">Nama Perusahaan</label>
                                            <input type="text" id="nama_perusahaan" class="form-control" value="<?= $data->nama_perusahaan; ?>" readonly />
                                        </div>
                                        <div class="form-group">
                                            <label for="inputEmail">Alamat</label>
                                            <input type="text" id="inputEmail" value="<?= $data->alamat; ?>" class="form-control" readonly />
                                        </div>
                                        <div class="form-group">
                                            <label for="inputSubject">Telepone</label>
                                            <input type="text" id="telepone" value="<?= $data->telepone; ?>" name="telepone" class="form-control" readonly />
                                        </div>
                                        <div class="form-group">
                                            <label for="inputSubject">WhatsApp</label>
                                            <input type="text" id="telepone" name="telepone" value="<?= $data->whatsapp; ?>" class="form-control" readonly />
                                        </div>
                                        <div class="form-group">
                                            <label for="inputSubject">Email</label>
                                            <input type="email" id="telepone" name="telepone" value="<?= $data->email; ?>" class="form-control" readonly />
                                        </div>
                                        <div class="form-group">
                                            <a href="profile_edit.php?id=<?= $data->id_perusahaan; ?>"><input type="submit" class="btn btn-warning" value="Edit"></a>
                                        </div>
                                    </div>

                            </div>
                        <?php
                                }
                        ?>
                        </div>

                    </div>
                </div>
            </div>
        </section>
    </div>

    <?php include 'layout/footer.php'; ?>
</body>

</html>