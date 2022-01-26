<!doctype html>
<html lang="en">

<head>
    <?php include 'Layout_user/head.php' ?>
</head>


<body>
    <?php include 'Layout_user/navbar.php' ?>

    <div class="container mt-5 mb-5">
        <div class="row">
            <?php
            require 'Admin/koneksi.php';

            if (isset($_GET['id'])) {
                $id = $_GET['id'];
                $query = "SELECT * FROM tbl_liburan WHERE id_liburan='$id'";
                $result = mysqli_query($koneksi, $query);
                $data = mysqli_fetch_object($result);
            }
            ?>
            <div class="col-md-8">
                <img src="Admin/Image/<?= $data->gambar; ?>" class="card-img-top" width="100%" height="500px" alt="...">
            </div>
            <div class="col-md-4">
                <h2 class="card-title"><?= $data->title; ?></h2>
                <div class="card-body">
                    <p><?= $data->Keterangan; ?></p>
                    <a href="mailto:octatravelian@gmail.com" class="btn btn-dark">Whatsapp</a>
                    <a href="detail_liburan.php" class="btn btn-dark">Email</a>
                </div>
            </div>
        </div>
    </div>
    <?php include 'Layout_user/footer.php' ?>

</body>

</html>