<?php
// header
include '../blade/header.php';
?>

<style>
    body {
        background-image: url(../img/background1.png);
    }

    .row.main-content {
        border: 1px solid #75e653;
        padding: 10px;
    }
</style>

<div class="container">

    <?php
    // bio
    include '../blade/bio.php';
    ?>

    <!-- MAIN CONTENT -->
    <div class="row main-content">
        <div class="col-lg-1"></div>
        <div class="col-lg-10">
            <h6 class="text-center fw-bold text-uppercase" style="margin-top: 10px;">Sistem Pendukung Keputusan Metode Weighted Product (WP)</h6><br>
            <p style="text-align: justify;">Sistem Pendukung Keputusan Metode Weighted Product (WP) merupakan salah satu metode pengambilan keputusan yang cukup banyak digunakan. Metode WP menggunakan perkalian untuk menghubungkan rating atribut, di mana rating setiap atribut dipangkatkan terlebih dahulu dengan bobot atribut yang bersangkutan. Pada projek ini metode WP diuji menggunakan studi kasus kenaikan jabatan pegawai.</p>

            <p class="text-capitalize">1. modal tambah data</p>
            <div class="text-center"><img src="../img/wp/01.PNG" class="img-fluid" alt="..."></div>
            <br>
            <p class="text-capitalize">2. tampilan hasil perhitungan</p>
            <div class="text-center"><img src="../img/wp/02.PNG" class="img-fluid" alt="..."></div>
            <br>
            <p class="text-capitalize">3. tampilan hasil perhitungan (Lanjutan)</p>
            <div class="text-center"><img src="../img/wp/03.PNG" class="img-fluid" alt="..."></div>
            <br>
            <p class="text-capitalize">4. tampilan hasil perhitungan (Lanjutan)</span></p>
            <div class="text-center"><img src="../img/wp/04.PNG" class="img-fluid" alt="..."></div>
        </div>
        <div class="col-lg-1"></div>
    </div>

</div>
<br><br>

<?php
// icon home
include '../blade/icon-home.php';
?>

<!-- footer -->
<?php include '../blade/footer.php' ?>