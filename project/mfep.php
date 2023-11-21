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
            <h6 class="text-center fw-bold text-uppercase" style="margin-top: 10px;">Sistem Pendukung Keputusan Metode Multifactor Evaluation Process (MFEP)</h6><br>
            <p style="text-align: justify;">Sistem Pendukung Keputusan Metode Multifactor Evaluation Process (MFEP) merupakan metode pengambilan keputusan yang tepat ketika terdapat sejumlah faktor dalam pengambilan keputusan. Pada metode MFEP pembuat keputusan memberikan bobot dari setiap faktor. Pada projek ini metode MFEP diuji menggunakan studi kasus rekomendasi penerima bantuan UMKM.</p>

            <p class="text-capitalize">1. halaman login</p>
            <div class="text-center"><img src="../img/mfep/01.PNG" class="img-fluid" alt="..."></div>
            <br>
            <p class="text-capitalize">2. modal tambah data</p>
            <div class="text-center"><img src="../img/mfep/02.PNG" class="img-fluid" alt="..."></div>
            <br>
            <p class="text-capitalize">3. tampilan hasil perhitungan</p>
            <div class="text-center"><img src="../img/mfep/03.PNG" class="img-fluid" alt="..."></div>
            <br>
            <p class="text-capitalize">4. fitur cetak <span>PDF</span></p>
            <div class="text-center"><img src="../img/mfep/04.PNG" class="img-fluid" alt="..."></div>
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