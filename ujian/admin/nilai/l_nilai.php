<?php
require '../mhs/functions.php';
$mahasiswa = query("SELECT * FROM nilai");
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
    <h2>Daftar Nilai Mahasiswa</h2>

    <table border ='1' cellpadding='10' cellspacing='0' >
        <tr>
            <th>No.Urut</th>
            <th>Mata kuliah</th>
            <th>Nim</th>
            <th>Nama</th>
            <th>Jurusan</th>
            <th>Alamat</th>
            <th>Semester</th>
            <th>KD Nilai</th>
            <th>Quiz</th>
            <th>Tugas</th>
            <th>UTS</th>
            <th>UAS</th>
            <th>Rata Rata</th>
            <th>N_Huruf</th>
            <th>Keterangan</th>
        </tr>
        <?php $i = 1 ; ?>
        <?php foreach ($mahasiswa as $row) :?>
        <tr>
            <td><?= $i ?></td>
            <td>
                <a href="mk.php?nama=<?= $row['nama']; ?>">Mata kuliah</a>
               
            </td>
            <td><?= $row['nim']; ?></td>
            <td>
                    <?= $row['nama']; ?>
            </td>
            <td><?= $row['jurusan']; ?></td>
            <td><?= $row['alamat']; ?></td>
            <td><?= $row['semester']; ?></td>
            <td><?= $row['kd_nilai']; ?></td>
            <td><?= $row['quiz']; ?></td>
            <td><?= $row['tugas']; ?></td>
            <td><?= $row['uts']; ?></td>
            <td><?= $row['uas']; ?></td>
            <td><?= $row['rata_rata']; ?></td>
            <td><?= $row['n_huruf']; ?></td>
            <td><?= $row['keterangan']; ?></td>
        </tr>
        <?php $i++ ?>
        <?php endforeach ; ?>
    </table>
</body>
</html>