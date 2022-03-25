<?php

include('../util/connection.php');

if (isset($_POST['submit'])) {
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $statement = pg_query($connection, "INSERT INTO tb_mahasiswa(nim, nama) VALUES ('$nim', '$nama')");
    if ($statement) {
        $_SESSION['message'] = '<div class="alert alert-success" role="alert">Berhasil Menambahkan Data</div>';
        header("location:../index.php");
    }
    else {
        $_SESSION['message'] = '<div class="alert alert-danger" role="alert">Gagal Menambahkan Data</div>';
        header("location:../index.php");       
    }
}

?>