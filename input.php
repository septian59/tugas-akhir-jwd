<?php
require 'functions.php';

if (isset($_POST['submit'])) {



    if (tambah($_POST) > 0) {
        echo    "<script>
                alert('data berhasil ditambahkan');
                document.location.href = 'index.php';
                </script>";
    } else {
        echo  "<script>
        alert('data gagal ditambahkan');
        </script>";
    }
}

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
        <h1 class="my-5 text-center">Input Certificate</h1>

        <form action="input.php" method="POST">
            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama" required>
            </div>

            <div class="form-check">
                <input class="form-check-input" type="radio" name="jenis" id="radio" value="Peserta" required>
                <label class="form-check-label" for="radio">
                    Peserta
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="jenis" id="radio2" value="Pangajar" required>
                <label class="form-check-label" for="radio2">
                    Pengajar
                </label>
            </div>


            <button type="submit" name="submit" class="btn btn-primary my-3">Tambah</button>
        </form>

    </div>




    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>

</html>