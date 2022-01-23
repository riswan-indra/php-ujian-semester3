<?php
require 'functions.php';
$mahasiswa = query("SELECT * FROM mhs");
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
    <h2>Daftar Mahasiswa</h2>
        <a href="tambah.php">Tambah data mahasiswa</a>
        <a href="../nilai/index.php">Insert nilai mahasiswa</a>
        <br><br>

    <table border ='1' cellpadding='10' cellspacing='0' >
        <tr>
            <th>No.Urut</th>
            <th>Aksi</th>
            <th>Nim</th>
            <th>Nama</th>
            <th>Jurusan</th>
            <th>Alamat</th>
            <th>Semester</th>
        </tr>
        <?php $i = 1 ; ?>
        <?php foreach ($mahasiswa as $row) :?>
        <tr>
            <td><?= $i ?></td>
            <td>
                <a href="ubah.php?id=<?= $row['id']; ?>">Ubah</a> |
                <a href="hapus.php?id=<?= $row['id']; ?>">Hapus</a>  |
            </td>
            <td><?= $row['nim']; ?></td>
            <td>
                <a href="../nilai/index.php">
                    <?= $row['nama']; ?>
                </a>
            </td>
            <td><?= $row['jurusan']; ?></td>
            <td><?= $row['alamat']; ?></td>
            <td><?= $row['semester']; ?></td>
        </tr>
        <?php $i++ ?>
        <?php endforeach ; ?>
    </table>
</body>
</html>