<?php
//login
session_start();

if (!isset($_SESSION["login_admin"])) {
    header("location: ../login/adminLogin.php");
    exit();
}

// koneksi
include '../tools/connection.php';
// header
include '../blade/header.php';
?>

<style>
    /* kotak projek */
    .col-lg-10.kotak {
        border: 1px solid white;
        padding: 10px;
    }
</style>

<div class="container">

    <?php
    // bio
    include '../blade/bio.php';
    ?>

    <div class="row">
        <div class="col-lg-1"></div>
        <div class="col-lg-10 kotak">
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <a href="../login/adminLogout.php" class="btn btn-danger" role="button">Log-Out</a>
            </div>
            <p class="text-center fw-bold">Data Komentar atau Masukan</p>
            <table class="table table-secondary">
                <thead>
                    <tr">
                        <th>No</th>
                        <th>Kode</th>
                        <th>Nama</th>
                        <th>E-mail</th>
                        <th>Komentar</th>
                        <th>Tanggal</th>
                        <th>Aksi</th>
                        </tr>
                </thead>
                <tbody>
                    <?php
                    $data = $conn->query("SELECT * FROM tb_comment");
                    $no = 1;
                    while ($comment = $data->fetch_assoc()) { ?>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><?= $comment['comment_kode'] ?></td>
                            <td><?= $comment['comment_nama'] ?></td>
                            <td><?= $comment['comment_email'] ?></td>
                            <td><?= $comment['comment_komentar'] ?></td>
                            <td><?= $comment['comment_tanggal'] ?></td>
                            <td><a href="" class="btn btn-outline-warning" data-bs-toggle="modal" data-bs-target="#modalEdit<?= $comment['comment_id'] ?>">Edit</a> <a href="commentDelete.php?id=<?= $comment['comment_id']; ?>" class="btn btn-outline-danger" onclick=" return confirm('Hapus data ini ?')">Delete</a></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
        <div class="col-lg-1"></div>
    </div>
</div>

<!-- Modal Edit -->
<?php
$data = $conn->query("SELECT * FROM tb_comment ORDER by comment_id");
while ($comment = mysqli_fetch_array($data)) { ?>
    <div class="modal fade" id="modalEdit<?= $comment['comment_id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Komentar atau Masukan</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- Form disini -->
                    <form method="post" action="commentEdit.php">
                        <!-- input id -->
                        <input type="hidden" class="form-control" id="commentId" name="commentId" value="<?= $comment['comment_id'] ?>">
                        <!-- input kode -->
                        <input type="hidden" class="form-control" id="commentKode" name="commentKode" value="<?= $comment['comment_kode'] ?>">
                        <!-- input tanggal -->
                        <input type="hidden" class="form-control" id="commentTanggal" name="commentTanggal" required value="<?= $comment['comment_tanggal'] ?>">

                        <div class="row mb-3">
                            <label for="commentNama" class="col-sm-2 col-form-label">Nama</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="commentNama" name="commentNama" required value="<?= $comment['comment_nama'] ?>">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="commentEmail" class="col-sm-2 col-form-label">E-mail</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="commentEmail" name="commentEmail" required value="<?= $comment['comment_email'] ?>">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="commentKomentar" class="col-sm-2 col-form-label">Komentar</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" id="commentKomentar" name="commentKomentar" required><?= $comment['comment_komentar'] ?></textarea>
                            </div>
                        </div>
                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                            <button type="submit" class="btn btn-outline-warning" name="update">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php } ?>

<?php include '../blade/footer.php' ?>