<?php

include('../util/connection.php');

$sql = "DELETE FROM tb_mahasiswa WHERE id='".$_GET['id'] ."'";
$result = pg_affected_rows(pg_query($sql));
if ($result == 1) {
    echo '<script type="text/javascript">';
    echo 'alert("Data telah terhapus");';
    echo 'window.location.href="../index.php";';
    echo "</script>";
}
else {
    $_SESSION['message'] = '<div class="alert alert-danger" role="alert">Gagal Menambahkan Data</div>';
    header("location:../index.php");  
}

?>