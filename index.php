<!DOCTYPE html>   
<html>
<head>
    <title>PENDAFTARAN DIKLAT</title>
</head>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<body>
    <header>
        <p align="center"> PENDAFTARAN PESERTA DIKLAT BARU</p>
    </header>

    <p align="center">Menu</p>
    <nav>
        <header>

            <p align="center"><a href="tambah-peserta.php">Daftar Baru</a></p>
            <p align="center"><a href="list-diklat.php">Pendaftar</a></p>
        </header>
    </nav>
<?php if(isset($_GET['status'])): ?>
    <p>
        <?php
            if($_GET['status'] == 'sukses'){
                echo "Pendaftaran peserta diklat baru berhasil!";
            } else {
                echo "Pendaftaran gagal!";
            }
        ?>
    </p>
<?php endif; ?>
    </body>
</html>