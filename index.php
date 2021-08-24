<?php

require 'functions.php';

//ambil data dari tabel user
$user = query("SELECT * FROM user");

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hehe</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>

    <div class="container">
        <h1 class="my-5 text-center">Certificate Generator</h1>

        <a class="btn btn-primary" href="input.php">Tambah</a>
        <br><br>
        <table class="table">
            <thead class="thead-dark">
                <tr>

                    <th scope="col">No</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Jenis</th>
                    <th scope="col">Action</th>
                    <th scope="col">Cetak</th>
                    <i></i>



                </tr>
            </thead>
            <tbody>
                <?php $i = 1; ?>
                <?php foreach ($user as $row) : ?>
                    <tr>

                        <td><?= $i ?></td>
                        <td><?= $row['nama']; ?></td>
                        <td><?= $row['jenis']; ?></td>
                        <td><a class="btn btn-warning" href="ubah.php?id=<?= $row['id_user']; ?>">Edit</a> <a class="btn btn-danger" href="hapus.php?id=<?= $row['id_user']; ?>" onclick="return confirm('yakin?')">Hapus</a></td>
                        <td><a class="btn btn-success" href="dompdf.php?id=<?= $row['id_user']; ?>"><i class="fas fa-print"></i></a></td>
                    </tr>
                    <tr>
                        <?php $i++ ?>
                    <?php endforeach; ?>
            </tbody>
        </table>

        <span class="text-danger font-weight-bold">Proses download sertifikat agak lama, Mohon bersabar !!</span>

    </div>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>

</html>