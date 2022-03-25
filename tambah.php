<?php 

include('util/connection.php'); 

?>

<!DOCTYPE html>
<html>
    <head>
        <?php include('util/head.php'); ?>
    </head>

    <body>
        <?php include('util/navbar.php'); ?>

        <div class="container" style="margin-top: 100px; margin-bottom: 100px;">
            <div class="pt-5">
                <h3 class="text-center"><b>Tambah Mahasiswa</b></h3>
                <?php if(!empty($_SESSION['message'])){
                    echo $_SESSION['message'];
                    $_SESSION['message'] = null;
                } ?>
            </div>
            <div class="card mt-5">
                <form action="process/tambah_proses.php" method="POST">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="nim">NIM</label>
                            <input type="number" class="form-control" id="nim" name="nim" placeholder="Masukan NIM..." required>
                        </div>
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukan Nama..." required>
                        </div>  
                    <div class="card-footer text-right">
                        <button class="btn btn-danger mr-3" type="button" onclick="history.back()">Batal</button>
                        <input type="submit" name="submit" value="Simpan" onclick="return confirm('Apakah anda yakin?')" class="btn btn-success">
                    </div>
                </form>
            </div>
        </div>

        <?php include('util/js.php'); ?>

    </body>
</html>