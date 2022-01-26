<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
        <?php
        require './Admin/koneksi.php';
        $query = "SELECT * FROM tbl_slide";
        $sql = mysqli_query($koneksi, $query);
        $data1 = mysqli_fetch_object($sql);
        ?>
        <div class="carousel-item active">
            <img src="Admin/Image/<?= $data1->image; ?>" class="d-block w-100" alt="..." style="height: 60vh;">
        </div>
        <?php
        require './Admin/koneksi.php';
        $query = "SELECT * FROM tbl_slide";
        $sql = mysqli_query($koneksi, $query);
        while ($data = mysqli_fetch_object($sql)) {
        ?>
            <div class="carousel-item">
                <img src="Admin/Image/<?= $data->image; ?>" class="d-block w-100" alt="..." style="height: 60vh;">
            </div>
        <?php
        }
        ?>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>