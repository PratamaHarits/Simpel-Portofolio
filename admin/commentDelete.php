<?php

include '../tools/connection.php';

$commentId = $_GET['id'];
$query = $conn->query("DELETE FROM tb_comment WHERE comment_id='$commentId'");
if ($query == True) {
    echo "<script>
        alert('Data Berhasil Dihapus');
        window.location='admin.php'
       </script>";
} else {
    die('MySQL error : ' . mysqli_errno($conn));
}
