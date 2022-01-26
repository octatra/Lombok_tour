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
                    <h1>Edit Slide</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Slider</li>
                        <li class="breadcrumb-item active">Edit Slider</li>
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
                    $query = "SELECT * FROM tbl_slide WHERE id_slide='$id'";
                    $result = mysqli_query($koneksi, $query);
                    $data = mysqli_fetch_object($result);
                }
                ?>
                <form action="edit_slide_proses.php?id=<?= $data->id_slide; ?>" method="POST">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="exampleInputFile">Input Gambar</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                    <input type="file" class="custom-file-input" id="gambar" name="gambar" value="<?= $data->image ?>">
                                    <input type="hiden" class="custom-file-input" id="gambaruplod" name="gambaruplod" value="<?= $data->image ?>">
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