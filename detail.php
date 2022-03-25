<?php

include('util/connection.php');
$statement = pg_query($connection, "SELECT * FROM tb_mahasiswa WHERE id=".$_GET['id']);
while ($row = pg_fetch_array($statement)) {
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
                <h3 class="text-center"><b>Detail Mahasiswa</b></h3>
            </div>
            <div class="card mt-5">
                <form>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="nim">NIM</label>
                            <input type="number" class="form-control" id="nim" name="nim" value="<?php echo $nim; ?>" disabled>
                        </div>
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $nama; ?>" disabled>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <?php include('util/js.php') ?>

    </body>
</html>