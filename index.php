<?php 

include('util/connection.php'); 
$statement = pg_query($connection, "SELECT * FROM tb_mahasiswa ORDER BY id DESC");

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include('util/head.php') ?>
    </head>

    <body>
        <?php include('util/navbar.php'); ?>

        <div class="container" style="margin-top: 100px; margin-bottom: 100px;">
                <div class="pt-5">
                    <h3 class="text-center"><b>Daftar Mahasiswa</b></h3>
                    <?php if(!empty($_SESSION['message'])){
                        echo $_SESSION['message'];
                        $_SESSION['message'] = null;
                    } ?>
                </div>
                <div class="card-mt-5">
                    <div class="card-header">
                        <a href="tambah.php" class="btn btn-primary">Tambah Mahasiswa</a>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr class="text-center">
                                    <td>No</td>
                                    <td>NIM</td>
                                    <td>Nama</td>
                                    <td>Aksi</td>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1; while($row = pg_fetch_array($statement)): ?>
                                    <tr>
                                        <td class="text-center"><?= $no++; ?></td>
                                        <td><?= $row['nim']; ?></td>
                                        <td><?= $row['nama']; ?></td>
                                        <td class="text-center">
                                            <a href="detail.php?id=<?= $row['id']; ?>" class="btn btn-secondary">Detail</a>
                                            <a href="ubah.php?id=<?= $row['id']; ?>" class="btn btn-primary ml-3 mr-3">Ubah</a>
                                            <a href="./process/hapus_proses.php?id=<?= $row['id']; ?>" class="btn btn-danger" onclick="return confirm('Apakah anda yakin?')">Hapus</a>
                                        </td>
                                    </tr>
                                <?php endwhile; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        <?php include('util/js.php') ?>
        
    </body>
</html>