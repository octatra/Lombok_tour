<?php
require './Admin/koneksi.php';
$query = "SELECT * FROM tbl_profile_perusahaan";
$sql = mysqli_query($koneksi, $query);
$data = mysqli_fetch_object($sql);

?>
<footer>
    <div class="card-body bg-dark mx-auto">
        <div class="row">
            <div class="col-md-4">
                <h5 class="card-title" style="color: white;">Telepone / WhatsApp</h5>
                <p class="card-text" style="color: white; margin-bottom: 0;"><?= $data->telepone; ?></p>
                <p class="card-text" style="color: white;"><?= $data->whatsapp; ?></p>
            </div>
            <div class="col-md-4">
                <h5 class="card-title" style="color: white;"><?= $data->nama_perusahaan; ?></h5>
                <p class="card-text" style="color: white;"><?= $data->alamat; ?></p>
            </div>
            <div class="col-md-4">
                <h5 class="card-title" style="color: white;">Email</h5>
                <p class="card-text" style="color: white;"><?= $data->email; ?></p>
            </div>

        </div>
    </div>

</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>