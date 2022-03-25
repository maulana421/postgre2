<?php

include('util/connection.php');
$statement = pg_query($connection, "SELECT * FROM tb_mahasiswa WHERE id=".$_GET['id']);
while ($row = pg_fetch_array($statement)) {
    $id = $row['id'];
    $nim = $row['nim'];
    $nama = $row['nama'];
}

?>

<!DOCTYPE html>
<html>
    <head>
        <?php include('util/head.php') ?>
    </head>

    <body>
        <?php include('util/navbar.php') ?>
        
        <div class="container" style="margin-top: 100px; margin-bottom: 100px;">
            <div class="pt-5">
                <h3 class="text-center"><b>Ubah Data Mahasiswa</b></h3>
                <?php if(!empty($_SESSION['message'])){
                    echo $_SESSION['message'];
                    $_SESSION['message'] = null;
                } ?>
            </div>
            <div class="card mt-5">
                <form action="process/ubah_proses.php" method="POST">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="nim">NIM</label>
                            <input type="hidden" class="form-control" id="id" name="id" value="<?php echo $id; ?>">
                            <input type="number" class="form-control" id="nim" name="nim" value="<?php echo $nim; ?>" required>
                        </div>
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $nama; ?>" required>
                        </div>
                    </div>
                    <div class="card-footer text-right">
                        <button class="btn btn-danger mr-3" type="button" onclick="history.back()">Batal</button>
                        <input type="submit" name="submit" class="btn btn-success" value="Simpan" onclick="return confirm('Apakah Anda Yakin?')">
                    </div>
                </form>
            </div>
        </div>

        <?php include('util/js.php') ?>

    </body>
</html>