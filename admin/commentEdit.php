<?php

include '../tools/connection.php';

if (isset($_POST['update'])) {

    $commentId = $_POST['commentId'];
    $commentKode = $_POST['commentKode'];
    $commentNama = $_POST['commentNama'];
    $commentEmail = $_POST['commentEmail'];
    $commentKomentar = $_POST['commentKomentar'];
    $commentTanggal = $_POST['commentTanggal'];

    $query = $conn->query("UPDATE tb_comment SET comment_id = '$commentId', comment_kode = '$commentKode', comment_nama = '$commentNama', comment_email = '$commentEmail', comment_komentar = '$commentKomentar', comment_tanggal = '$commentTanggal' WHERE comment_id = '$commentId'");

    if ($query == True) {
        echo "<script>
                alert('Data Berhasil Disimpan');
                window.location='admin.php'
                </script>";
    } else {
        die('MySQL error : ' . mysqli_errno($conn));
    }
}
