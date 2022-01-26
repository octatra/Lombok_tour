<?php
require './Admin/koneksi.php';
$query = "SELECT * FROM tbl_profile_perusahaan";
$sql = mysqli_query($koneksi, $query);
$data = mysqli_fetch_object($sql);

?>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <img src="./Admin/Image/<?= $data->logo; ?>" width="10%" height="10%" alt="">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="../lombok_tour/index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../lombok_tour/paket_liburan.php">Paket Liburan</a>
                </li>
            </ul>
            <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-light" type="submit">Search</button>
            </form>
        </div>
    </div>
</nav>