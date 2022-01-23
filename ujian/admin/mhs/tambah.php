<?php 
require 'functions.php';
if(isset($_POST["submit"]) ) {
    if(tambah($_POST) > 0) {
        echo "
        <script>
        alert('data berhasil ditambahkan');
        document.location.href = 'index.php';
        </script>
        ";
    }else {
        echo "
        <script>
        alert('data gagal ditambahkan');
        document.location.href = 'index.php';
        </script>
        ";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Mahasiswa</title>
</head>
<body>
    <h2>Tambah data mahasiswa</h2>
    <form action="" method="post">
        <ul>           
             <li>
                <label for="nim">NIM :</label>
                <input type="text" name="nim" id="nim" required>
             </li>
             <li>
                <label for="nama">Nama :</label>
                <input type="text" name="nama" id="nama"required>
             </li>
             <li>
                <label for="jurusan">Jurusan :</label>
                <input type="text" name="jurusan" id="jurusan"required>
             </li>
             <li>
                <label for="alamat">Alamat :</label>
                <input type="text" name="alamat" id="alamat"required>
             </li>
             <li>
                <label for="semester">Semester :</label>
                <input type="text" name="semester" id="semester"required>
             </li>
             <li>
                 <button type='submit' name='submit'>Tambah Data</button>
             </li>
        </ul>
    </form>
</body>
</html>