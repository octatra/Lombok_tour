<!doctype html>
<html lang="en">

<head>
    <?php include 'Layout_user/head.php' ?>
</head>

<body>
    <?php include 'Layout_user/navbar.php' ?>
    <div class="container mx-auto mt-5 mb-5">
        <h1 class="card-title">PAKET LIBURAN</h1>
        <hr>
        <div class="row mb-5">
            <div class="col-md-12">
                <div class="row">
                    <?php
                    require 'Admin/koneksi.php';
                    $query = "SELECT * FROM tbl_liburan";
                    $sql = mysqli_query($koneksi, $query);
                    while ($data = mysqli_fetch_object($sql)) {
                    ?>
                        <div class="col-md-3 mb-3">
                            <div class="card" style="width: 20rem; border-radius: 10px;">
                                <img src="Admin/Image/<?= $data->gambar; ?>" class="card-img-top" style="height: 13rem; border-radius: 10px;" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title"><?= $data->title; ?></h5>
                                    <p class="card-text"><?= substr($data->Keterangan, 0, 100) ?>....</p>
                                </div>
                                <div class="card-footer text-muted">
                                    <a href="detail_liburan.php?id=<?= $data->id_liburan; ?>" class="btn btn-dark">Detail</a>
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
    <?php include 'Layout_user/footer.php' ?>

</body>

</html>