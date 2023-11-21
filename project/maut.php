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
            <h6 class="text-center fw-bold text-uppercase" style="margin-top: 10px;">Sistem Pendukung Keputusan Metode Multi-Attribute Utility Theory (MAUT)</h6><br>
            <p style="text-align: justify;">Sistem Pendukung Keputusan Metode Multi-Attribute Utility Theory (MAUT) merupakan suatu metode perbandingan kuantitatif yang biasanya mengkombinasikan pengukuran atas biaya resiko dan keuntungan yang berbeda. Setiap kriteria yang ada memiliki beberapa alternatif yang mampu memberikan solusi. Pada projek ini metode MAUT diuji menggunakan studi kasus rekomendasi kualitas getah terbaik.</p>

            <p class="text-capitalize">1. modal tambah data</p>
            <div class="text-center"><img src="../img/maut/01.PNG" class="img-fluid" alt="..."></div>
            <br>
            <p class="text-capitalize">2. tampilan hasil perhitungan</p>
            <div class="text-center"><img src="../img/maut/02.PNG" class="img-fluid" alt="..."></div>
            <br>
            <p class="text-capitalize">3. tampilan hasil perhitungan (Lanjutan)</p>
            <div class="text-center"><img src="../img/maut/03.PNG" class="img-fluid" alt="..."></div>
            <br>
            <p class="text-capitalize">4. tampilan hasil perhitungan (Lanjutan)</span></p>
            <div class="text-center"><img src="../img/maut/04.PNG" class="img-fluid" alt="..."></div>
            <br>
            <p class="text-capitalize">5. tampilan hasil perhitungan (Lanjutan)</span></p>
            <div class="text-center"><img src="../img/maut/05.PNG" class="img-fluid" alt="..."></div>
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