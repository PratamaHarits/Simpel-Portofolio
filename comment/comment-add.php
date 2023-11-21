<?php

// koneksi database
include '../tools/connection.php';
if (isset($_POST['save'])) {
    $commentKode = htmlspecialchars($_POST['commentKode']);
    $commentNama = htmlspecialchars($_POST['commentNama']);
    $commentEmail = htmlspecialchars($_POST['commentEmail']);
    $commentKomentar = htmlspecialchars($_POST['commentKomentar']);
    $commentTanggal = htmlspecialchars($_POST['commentTanggal']);

    $query = $conn->query("INSERT INTO tb_comment(comment_kode,comment_nama,comment_email,comment_komentar,comment_tanggal)VALUES('$commentKode','$commentNama','$commentEmail','$commentKomentar','$commentTanggal')");

    if ($query == True) {
        echo "<script>
                alert('Data Berhasil Disimpan');
                window.location='../index.php';
                </script>";
    } else {
        die('MySQL error : ' . mysqli_errno($conn));
    }
}
