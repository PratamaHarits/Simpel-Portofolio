<?php
// koneksi database
include '../tools/connection.php';
// header
include '../blade/header.php';
?>

<style>
    /* kotak projek */
    .col-lg-7 {
        border: 1px solid #75e653;
        padding: 10px;
    }

    /* kotak komentar */
    .col-lg-4 {
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
    <div class="row">

        <!-- PROJECT -->
        <div class="col-lg-7">
            <h5 class="text-center fw-bold">PROJEK</h5>
            <br>
            <!-- projek-mfep -->
            <div class="row">
                <div class="col-lg-3 d-flex align-items-center justify-content-center">
                    <img src="../img/mfep.png" class="img-fluid rounded" alt="...">
                </div>
                <div class="col-lg-9">
                    <p class="text-center fw-bold"><a href="../project/mfep.php">SPK Metode MFEP</a></p>
                    <p style="text-align: justify;">Program Sistem Pendukung Keputusan Menggunakan Metode Multifactor Evaluation Process (MFEP).
                </div>
            </div>
            <br>
            <!-- projek-saw -->
            <div class="row">
                <div class="col-lg-3 d-flex align-items-center justify-content-center">
                    <img src="../img/saw.PNG" class="img-fluid rounded" alt="...">
                </div>
                <div class="col-lg-9">
                    <p class="text-center fw-bold"><a href="../project/saw.php">SPK Metode SAW</a></p>
                    <p style="text-align: justify;">Program Sistem Pendukung Keputusan Menggunakan Metode Simple Additive Weighting (SAW) .
                </div>
            </div>
            <br>
            <!-- projek-smart -->
            <div class="row">
                <div class="col-lg-3 d-flex align-items-center justify-content-center">
                    <img src="../img/smart.PNG" class="img-fluid rounded" alt="...">
                </div>
                <div class="col-lg-9">
                    <p class="text-center fw-bold"><a href="../project/smart.php">SPK Metode SMART</a></p>
                    <p style="text-align: justify;">Program Sistem Pendukung Keputusan Menggunakan Metode Simple Multi Attribute Rating Technique (SMART).
                </div>
            </div>
            <br>
            <!-- projek-wp -->
            <div class="row">
                <div class="col-lg-3 d-flex align-items-center justify-content-center">
                    <img src="../img/wp.PNG" class="img-fluid rounded" alt="...">
                </div>
                <div class="col-lg-9">
                    <p class="text-center fw-bold"><a href="../project/wp.php">SPK Metode WP</a></p>
                    <p style="text-align: justify;">Program Sistem Pendukung Keputusan Menggunakan Metode Weighted Product (WP).
                </div>
            </div>
            <br>
            <!-- projek-maut -->
            <div class="row">
                <div class="col-lg-3 d-flex align-items-center justify-content-center">
                    <img src="../img/maut.PNG" class="img-fluid rounded" alt="...">
                </div>
                <div class="col-lg-9">
                    <p class="text-center fw-bold"><a href="../project/maut.php">SPK Metode MAUT</a></p>
                    <p style="text-align: justify;">Program Sistem Pendukung Keputusan Menggunakan Metode Multi-Attribute Utility Theory (MAUT).
                </div>
            </div>
            <br>
        </div>

        <!-- COMMENT -->
        <div class="col-lg-1"></div>
        <div class="col-lg-4">
            <h5 class="text-center fw-bold">Komentar dan Masukan</h5><br>
            <!-- button trigger modal tambah komentar -->
            <div class="d-grid gap-2 mb-5">
                <button type="button" class="btn btn-outline-success" data-bs-toggle="modal" data-bs-target="#modalAdd">
                    Tambahkan Komentar Atau Masukan
                </button>
            </div>
            <?php
            $data = $conn->query("SELECT * FROM tb_comment");
            while ($comment = $data->fetch_assoc()) { ?>
                <p class="komentar"><?= $comment['comment_nama'] ?> : <br> <span style="opacity: 0">12345</span> -> <span class="text-capitalize" style="text-align: justify;"><?= $comment['comment_komentar'] ?></span></p>
            <?php } ?>
        </div>
    </div>
    <br><br>
</div>

<!-- MODAL COMMENT -->
<div class="modal fade" id="modalAdd" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Masukan Komentar Atau Masukan</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Form disini -->
                <form method="post" action="comment/comment-add.php">
                    <div class="row mb-3">

                        <!-- buat kode comment -->
                        <?php
                        $data = $conn->query("SELECT * FROM tb_comment ORDER BY comment_id DESC LIMIT 1");
                        $total_row = mysqli_num_rows($data);
                        if ($total_row == 0) { ?>
                            <input type="hidden" class="form-control" id="commentKode" name="commentKode" value="<?= 'C001' ?>" required>
                        <?php } ?>

                        <?php while ($comment = $data->fetch_assoc()) { ?>
                            <?php
                            $row_terakhir = $comment['comment_id'];
                            if ($row_terakhir < 9) { ?>
                                <input type="hidden" class="form-control" id="commentKode" name="commentKode" value="<?= 'C00' . ((int)$comment['comment_id'] + 1); ?>" required>
                            <?php } elseif ($row_terakhir >= 9) { ?>
                                <input type="hidden" class="form-control" id="commentKode" name="commentKode" value="<?= 'C0' . ((int)$comment['comment_id'] + 1); ?>" required>
                        <?php }
                        } ?>

                        <!-- tanggal -->
                        <input type="hidden" class="form-control" id="commentTanggal" name="commentTanggal" value="<?= date('Y-m-d'); ?>">

                        <div class="row mb-3">
                            <label for="commentNama" class="col-sm-2 col-form-label">Nama</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="commentNama" name="commentNama" required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="commentEmail" class="col-sm-2 col-form-label">E-mail <span style="color: red;">*</span></label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="commentEmail" name="commentEmail" placeholder="E-mail anda TIDAK akan di Publish..." required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="commentKomentar" class="col-sm-2 col-form-label">Komentar</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" id="commentKomentar" name="commentKomentar"></textarea>
                            </div>
                        </div>

                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                            <button type="submit" class="btn btn-outline-primary" name="save">Save</button>
                        </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- footer -->
<?php include '../blade/footer.php' ?>