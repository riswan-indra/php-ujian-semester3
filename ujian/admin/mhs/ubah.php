<?php 
require 'functions.php';

$id = $_GET['id'];
$mhs = query ("SELECT * FROM mhs WHERE id = '$id'")[0];
// var_dump($mhs);
if(isset($_POST["submit"]) ) {
    if(ubah($_POST) > 0) {
        echo "
        <script>
        alert('data berhasil diubah');
        document.location.href = 'index.php';
        </script>
        ";
    }else {
        echo mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah Data Mahasiswa</title>
</head>
<body>
    <h2>Ubah data mahasiswa</h2>
    <form action="" method="post">
        <input type="hidden" name="id" id="id" value="<?= $mhs['id']; ?>">
        <ul>           
             <li>
                <label for="nim">NIM :</label>
                <input type="text" name="nim" id="nim" required value="<?= $mhs['nim']; ?>">
             </li>
             <li>
                <label for="nama">Nama :</label>
                <input type="text" name="nama" id="nama"required value="<?= $mhs['nama']; ?>">
             </li>
             <li>
                <label for="jurusan">Jurusan :</label>
                <input type="text" name="jurusan" id="jurusan"required value="<?= $mhs['jurusan']; ?>" >
             </li>
             <li>
                <label for="alamat">Alamat :</label>
                <input type="text" name="alamat" id="alamat"required value="<?= $mhs['alamat']; ?>">
             </li>
             <li>
                <label for="semester">Semester :</label>
                <input type="text" name="semester" id="semester"required value="<?= $mhs['semester']; ?>">
             </li>
             <li>
                 <button type='submit' name='submit'>Ubah Data</button>
             </li>
        </ul>
    </form>
</body>
</html>