<?php
session_start();
if (!isset($_SESSION['login'])) {
    header('location:../login.php');
}
?>

<?php include 'layout/haed.php'; ?>
<?php include 'layout/navbar.php'; ?>
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Edit Paket</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Paket Wisata</li>
                        <li class="breadcrumb-item active">Edit Paket</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <section class="content">
        <div class="container-fluid">
            <div class="card card-primary">
                <?php
                require 'koneksi.php';


                if (isset($_GET['id'])) {
                    $id = $_GET['id'];
                    $query = "SELECT * FROM tbl_liburan WHERE id_liburan='$id'";
                    $result = mysqli_query($koneksi, $query);
                    $data = mysqli_fetch_object($result);
                }
                ?>
                <form action="edit_proses.php?id=<?= $data->id_liburan; ?>" method="POST">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Title Paket</label>
                            <input type="text" class="form-control" id="title" name="title" value="<?= $data->title ?>" placeholder="Title Paket">
                        </div>
                        <div class="form-group">
                            <label>Keterangan Paket</label>
                            <textarea class="form-control" rows="3" id="keterangan" name="keterangan" placeholder="Enter ..."><?= $data->Keterangan ?></textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Harga</label>
                            <input type="text" class="form-control" id="harga" name="harga" placeholder="Harga" value="<?= $data->harga ?>">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputFile">File input</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                    <input type="file" class="custom-file-input" id="gambar" name="gambar" value="<?= $data->gambar ?>">
                                    <input type="hiden" class="custom-file-input" id="gambaruplod" name="gambaruplod" value="<?= $data->gambar ?>">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.card-body -->

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary" name="simpan" id="Simpan">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
</div>
<?php include 'layout/footer.php'; ?>