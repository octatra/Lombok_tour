<!doctype html>
<html lang="en">

<head>
    <?php include 'Layout_user/head.php' ?>
</head>

<body>
    <?php include 'Layout_user/navbar.php' ?>
    <?php include 'Layout_user/slide.php' ?>
    <div class="container mx-auto mt-5 mb-5">
        <h1 class="card-title">SOROTAN TUJUAN</h1>
        <hr>
        <div class="row mb-5">
            <div class="col-md-12">
                <div class="row">
                    <?php
                    require 'Admin/koneksi.php';
                    $query = "SELECT * FROM tbl_liburan";
                    $sql = mysqli_query($koneksi, $query);
                    for ($i = 1; $i <= 8; $i++) {
                        $data = mysqli_fetch_object($sql)
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

        <h1 class="card-title">7 DESTINASI WISATA LOMBOK YANG HARUS ANDA KUNJUNGI</h1>
        <hr>
        <div class="row">
            <div class="col-md-8">
                <iframe width="100%" height="500px" src="https://www.youtube.com/embed/vLRTU7Kd-j0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <div class="col-md-4">
                <div class="card-footer text-muted">
                    <p>Keindahan alam nan eksotis yang menawarkan karakter wisata yang unik dan tentunya berkesan bagi Anda yang sudah mengunjungi pulau tersebut. Tidak hanya itu, wisata pulau Lombok juga merupakan salah satu destinasi wisata Indonesia yang telah dikenal oleh dunia internasional. Nah, bagi Anda yang sangat suka dengan surfing, Anda harus mencoba menjelajahi pantai-pantai yang ada di pulau ini, jangan heran jika Anda menemukan ombak ganas yang menguji adrenalin Anda.
                        Oke lanjut Simak 7 tempat wisata pulau Lombok yang eksotis nan menawan berikut ini menurut: </p>
                    <ul>
                        <li>Pantai kuta Lombok </li>
                        <li>Pantai senggigi</li>
                        <li>Gili terawangan</li>
                        <li>Giii kedis</li>
                        <li>Gunung rinjani</li>
                        <li>Air terjun benang kelambu</li>
                        <li>Air terjun Mangku sakti</li>
                    </ul>
                </div>

            </div>
        </div>

        <!-- <div class="row">
            <div class="card mb-3">
                <img src="Admin/Image/IMG_0366.JPG" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
            </div>
        </div> -->
    </div>
    <?php include 'Layout_user/footer.php' ?>

</body>

</html>