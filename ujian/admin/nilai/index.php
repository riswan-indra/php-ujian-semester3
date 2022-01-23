<?php 
require'../mhs/functions.php';
$mahasiswa = query("SELECT * FROM mhs");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nilai Mahasiswa</title>
</head>
<body>
    <h2>Daftar nama Mahasiswa</h2>
    <a href="l_nilai.php">Lihat data nilai mahasiswa</a>
    <table border='1' cellspacing='0' cellpadding='10'>
        <tr>
            <th>No.Urut</th>
            <th>Nama</th>
        </tr>
        <?php $i = 1 ; ?>
        <?php foreach ($mahasiswa as $row) :?>
        <tr>
            <td><?= $i ?></td>
            <td>
                <a href="nilai.php?nama=<?= $row['nama']; ?>">
                    <?= $row['nama']; ?>
                </a>
            </td>
        </tr>
        <?php $i++ ?>
        <?php endforeach ; ?>
    </table>
</body>
</html>