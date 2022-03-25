<?php

include('../util/connection.php');

if (isset($_POST['nim']) and !empty($_POST['nim'])) {
    $id = $_POST['id'];
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $sql = "UPDATE tb_mahasiswa SET nim='$nim', nama='$nama' WHERE id='$id'";
    $result = pg_affected_rows(pg_query($sql));
    if($result == 1) {
        echo '<script type="text/javascript">';
        echo 'alert("Perubahan data telah tersimpan");';
        echo 'window.location.href="../index.php";';
        echo "</script>";
    }
    else {
        $_SESSION['message'] = '<div class="alert alert-danger" role="alert">Gagal Mengubah Data</div>';
        header("location:../ubah.php?id=$id");
    }
}

?>