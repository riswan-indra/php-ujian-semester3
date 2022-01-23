<?php 
require 'functions.php';

$id = $_GET['id'];
$dsn = query ("SELECT * FROM dsn WHERE id = '$id'")[0];
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
        <input type="hidden" name="id" id="id" value="<?= $dsn['id']; ?>">
        <ul>           
             <li>
                <label for="nidn">NIDN :</label>
                <input type="text" name="nidn" id="nidn" required value="<?= $dsn['nidn']; ?>">
             </li>
             <li>
                <label for="nama">Nama :</label>
                <input type="text" name="nama" id="nama"required value="<?= $dsn['nama']; ?>">
             </li>
             <li>
                <label for="alamat">Alamat :</label>
                <input type="text" name="alamat" id="alamat"required value="<?= $dsn['alamat']; ?>" >
             </li>
             <li>
                <label for="email">Email :</label>
                <input type="text" name="email" id="email"required value="<?= $dsn['email']; ?>">
             </li>
             
             <li>
                 <button type='submit' name='submit'>Ubah Data</button>
             </li>
        </ul>
    </form>
</body>
</html>