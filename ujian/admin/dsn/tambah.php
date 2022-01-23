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
    <title>Tambah Data Dosen</title>
</head>
<body>
    <h2>Tambah data dosen</h2>
    <form action="" method="post">
        <ul>           
             <li>
                <label for="nidn">NIDN :</label>
                <input type="text" name="nidn" id="nidn"required>
             </li>
             <li>
                <label for="nama">Nama :</label>
                <input type="text" name="nama" id="nama"required>
             </li>
             <li>
                <label for="alamat">Alamat :</label>
                <input type="text" name="alamat" id="alamat"required>
             </li>
             <li>
                <label for="email">Email :</label>
                <input type="text" name="email" id="email"required>
             </li>
             <li>
                 <button type='submit' name='submit'>Tambah Data</button>
             </li>
        </ul>
    </form>
</body>
</html>