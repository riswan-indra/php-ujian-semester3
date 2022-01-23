<?php
require 'functions.php';
$dosen = query("SELECT * FROM dsn");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
</head>
<body>
    <h2>Daftar Dosen</h2>
        <a href="tambah.php">Tambah data dosen</a>
        <br><br>

    <table border ='1' cellpadding='10' cellspacing='0' >
        <tr>
            <th>No.Urut</th>
            <th>Aksi</th>
            <th>NIDN</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Email</th>
        </tr>
        <?php $i = 1 ; ?>
        <?php foreach ($dosen as $row) :?>
        <tr>
            <td><?= $i ?></td>
            <td>
                <a href="ubah.php?id=<?= $row['id']; ?>">Ubah</a> |
                <a href="hapus.php?id=<?= $row['id']; ?>">Hapus</a> 
            </td>
            <td><?= $row['nidn']; ?></td>
            <td><?= $row['nama']; ?></td>
            <td><?= $row['alamat']; ?></td>
            <td><?= $row['email']; ?></td>
        </tr>
        <?php $i++ ?>
        <?php endforeach ; ?>
    </table>
</body>
</html>